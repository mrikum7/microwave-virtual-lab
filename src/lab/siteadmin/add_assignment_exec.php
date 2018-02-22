<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("experiment");
loadEntity("assignment");

$data['experiment_id']=str_prepare($_POST['experiment_id']);
$data['assignment_title']=str_prepare($_POST['assignment_title']);
$data['sort_order']=str_prepare($_POST['sort_order']);
$data['add_date']=date('Y-m-d H:i:s');

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
	$data['assignment_img']=$filename1;

	
	$file_path=UPLOADS_ASSIGNMENT_DIR.$filename1;
	
	if(!move_uploaded_file($_FILES['assignment_img']['tmp_name'],$file_path))
	{
		$err=true;
		$msg='Error uploading file!';
	}
	else
	{
		$msg = 'Uploaded';
	}
}	


print "<pre>";
print_r($data);
exit();
assignment::insert($data);

header('location:admin_manage_assignment.php');
setMsg('Assignment Added successfully!');
exit();
?>