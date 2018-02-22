<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
require_once("../includes/true_thumbnail.php");
loadEntity("experiment");

$data['category_id']=str_prepare($_POST['category_id']);
$data['experiment_name']=str_prepare($_POST['experiment_name']);
$data['experiment_title']=str_prepare($_POST['experiment_title']);
$data['experiment_description']=str_prepare($_POST['experiment_description']);
$data['experiment_video']=$_POST['experiment_video'];
$data['sort_order']=str_prepare($_POST['sort_order']);
$data['add_date']=date('Y-m-d H:i:s');
$data['is_featured']=str_prepare($_POST['is_featured']);


if(isset($_FILES['experiment_img']['name']) && $_FILES['experiment_img']['name']!="")
{
/*		$file_ext = trim(strtolower(strrchr($_FILES['experiment_img']['name'],'.')));
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
		header("location:admin_manage_experiment.php");
		exit();
		
	}*/
	$_FILES['experiment_img']['name']=str_replace(" ","_",$_FILES['experiment_img']['name']);
	$filename1=time()."_".$_FILES['experiment_img']['name'];
	$data['experiment_img']=$filename1;	
	$file_path=UPLOADS_EXPERIMENTS_DIR.$filename1;
	$status = createThumbnail($_FILES['experiment_img']['tmp_name'],427,233,$file_path,90);
	if(!$status[0])
	{
		$err=true;
		$msg='Error uploading file!';
	}
	else
	{
		$msg = 'Uploaded';
	}
}	

if(isset($_FILES['simulator_flash']['name']) && $_FILES['simulator_flash']['name']!="")
{
		$file_ext = trim(strtolower(strrchr($_FILES['simulator_flash']['name'],'.')));
		switch($file_ext)
		{
			
			case '.swf':			
			case '.fla':		
				break;
			default:
				break;
//			$msg[]='Only swf, Fla files can be uploaded!';
//				$err=true;
		}
	if($err)
	{
		setMsg($msg);		
		header("location:admin_manage_experiment.php");
		exit();
	}
	$_FILES['simulator_flash']['name']=str_replace(" ","_",$_FILES['simulator_flash']['name']);
	$filename1=time()."_".$_FILES['simulator_flash']['name'];
	$data['simulator_flash']=$filename1;

	
	$file_path=UPLOADS_SIMULATOR_FLASH_URL.$filename1;
	
	if(!move_uploaded_file($_FILES['simulator_flash']['tmp_name'],$file_path))
	{
		$err=true;
		$msg='Error uploading file!';
	}
	else
	{
		$msg = 'Uploaded';
	}
}	


if(isset($_FILES['experiment_manual']['name']) && $_FILES['experiment_manual']['name']!="")
{
		$file_ext = trim(strtolower(strrchr($_FILES['experiment_manual']['name'],'.')));
		switch($file_ext)
		{
			
			case '.pdf':			
				break;
			default:
				break;
//			$msg[]='Only swf, Fla files can be uploaded!';
//				$err=true;
		}
	if($err)
	{
		setMsg($msg);		
		header("location:admin_manage_experiment.php");
		exit();
	}
	$_FILES['experiment_manual']['name']=str_replace(" ","_",$_FILES['experiment_manual']['name']);
	$filename1=time()."_".$_FILES['experiment_manual']['name'];
	$data['experiment_manual']=$filename1;

	
	$file_path=UPLOADS_MANUAL_DIR.$filename1;
	
	if(!move_uploaded_file($_FILES['experiment_manual']['tmp_name'],$file_path))
	{
		$err=true;
		$msg='Error uploading file!';
	}
	else
	{
		$msg = 'Uploaded';
	}
}	




/*print "<pre>";
print_r($data);
exit();*/
experiment::insert($data);
header('location:admin_manage_experiment.php');
setMsg('Experiment Added successfully!');
exit();
?>