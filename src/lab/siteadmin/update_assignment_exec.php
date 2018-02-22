<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("assignment");
$id=$_REQUEST['assignment_id'];

$data['experiment_id']=str_prepare($_POST['experiment_id']);
$data['assignment_title']=str_prepare($_POST['assignment_title']);
$data['sort_order']=$_POST['sort_order'];
$data['is_active']=str_prepare($_POST['is_active']);
$err = false;
if(isset($_FILES['assignment_img']['name']) && $_FILES['assignment_img']['name']!="")
{   
		$file_ext = trim(strtolower(strrchr($_FILES['assignment_img']['name'],'.')));
		switch($file_ext)
			{
				
				case '.png':
				case '.jpeg':
				case '.jpg':
				case '.gif':
					break;
				default:
					$msg[]='Only JPG, JPEG, PNG and GIF files can be uploaded!';
					$err=true;
			}
 			
	  if($err)
	    {
		setMsg($msg);		
		header("location:admin_manage_assignment.php");
		exit();
	   	}

		$_FILES['assignment_img']['name']=str_replace(" ","_",$_FILES['assignment_img']['name']);
	    $filename1=time()."_".$_FILES['assignment_img']['name'];
		$file_path=UPLOADS_ASSIGNMENT_DIR.$filename1;
		
		
	if(!move_uploaded_file($_FILES['assignment_img']['tmp_name'],$file_path))
	{
		$err=true;
		$msg='Error uploading file!';
	}
else
	{
	
		  @unlink(UPLOADS_ASSIGNMENT_DIR.$_POST['assignment_old_img']);
		
		 $data['assignment_img']=$filename1;
		/* print "<pre>";
		 print_r($_POST);
		exit();*/
	}
}

/*print "<pre>";
print_r($data);
exit();*/
assignment::update($data,$id);

header('location:admin_manage_assignment.php');
setMsg('Assignment Added successfully!');
exit();
?>


