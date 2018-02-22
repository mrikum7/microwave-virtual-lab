<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
require_once("../includes/true_thumbnail.php");
loadEntity("subjects");
$id=$_REQUEST['id'];
$data['subject_name']=str_prepare($_POST['name']);
$data['subject_desc']=str_prepare($_POST['desc']);

if(isset($_FILES['sub_img']['name']) && $_FILES['sub_img']['name']!="")
 {
/*
$file_ext = trim(strtolower(strrchr($_FILES['sub_img']['name'],'.')));
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
		header("location:manage_clients.php");
		exit();
		
	}
	*/
	$_FILES['sub_img']['name']=str_replace(" ","_",$_FILES['sub_img']['name']);
	$filename1=time()."_".$_FILES['sub_img']['name'];
    $data['subject_thumbnail']=$filename1;
    $file_path=UPLOADS_SUBJECT_DIR.$filename1;
	
	$status = createThumbnail($_FILES['sub_img']['tmp_name'],100,100,$file_path,90);
	
    @unlink(UPLOADS_SUBJECT_DIR.$_POST['old_sub_img']);
    if(!$status[0])
	{
		$err=true;
		print "Error uploading file!";
	}

}
$data['add_date']=date('Y-m-d H:i:s');
$data['is_active']=str_prepare($_POST['is_active']);
/*print"<PRE>";
print_r($data);*/
subject::update($data,$id);
header('location:admin_manage_subjects.php');
setMsg('Subject Edited successfully!');
exit();
?>
