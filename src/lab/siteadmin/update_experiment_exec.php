<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
require_once("../includes/true_thumbnail.php");
loadEntity("experiment");
$id=$_REQUEST['experiment_id'];

$data['category_id']=str_prepare($_POST['category_id']);
$data['experiment_name']=str_prepare($_POST['experiment_name']);
$data['experiment_title']=str_prepare($_POST['experiment_title']);
$data['sort_order']=$_POST['sort_order'];
$data['experiment_description']=$_POST['experiment_description'];
$data['experiment_video']=$_POST['experiment_video'];
$data['is_active']=str_prepare($_POST['is_active']);
if(isset($_POST['is_featured']))
$data['is_featured']=str_prepare($_POST['is_featured']);

$err=false;
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
	   	}
*/
		$_FILES['experiment_img']['name']=str_replace(" ","_",$_FILES['experiment_img']['name']);
	    $filename1=time()."_".$_FILES['experiment_img']['name'];
		$file_path=UPLOADS_EXPERIMENTS_DIR.$filename1;
		$status = createThumbnail($_FILES['experiment_img']['tmp_name'],427,233,$file_path,90);
		
	if(!$status[0])
	{
		$err=true;
		$msg='Error uploading file!';
	}
else
	{
		@unlink(UPLOADS_EXPERIMENTS_DIR.$_POST['experiment_old_img']);
		$data['experiment_img']=$filename1;
	}
}


if(isset($_FILES['simulator_flash']['name']) && $_FILES['simulator_flash']['name']!="")
{   
		$file_ext = trim(strtolower(strrchr($_FILES['simulator_flash']['name'],'.')));
	/*	switch($file_ext)
			{
				
				case '.swf':			
			case '.fla':		
				break;
			default:
				$msg[]='Only swf, Fla files can be uploaded!';
				$err=true;
			}
 		
	  if($err)
	    {
		setMsg($msg);		
		header("location:admin_manage_experiment.php");
		exit();
	   	}
*/	
		$_FILES['simulator_flash']['name']=str_replace(" ","_",$_FILES['simulator_flash']['name']);
	    $filename1=time()."_".$_FILES['simulator_flash']['name'];
		$file_path=UPLOADS_SIMULATORS_FLASH_DIR.$filename1;		
		
		
	if(!move_uploaded_file($_FILES['simulator_flash']['tmp_name'],$file_path))
	{
		$err=true;
		$msg='Error uploading file!';
	}
else
	{
		@unlink(UPLOADS_SIMULATOR_FLASH_DIR.$_POST['simulator_old_flash']);
		$data['simulator_flash']=$filename1;
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
			$msg[]='Only PDF files can be uploaded!';
				$err=true;
			}
 		
	  if($err)
	    {
		setMsg($msg);		
		header("location:admin_manage_experiment.php");
		exit();
	   	}

		$_FILES['experiment_manual']['name']=str_replace(" ","_",$_FILES['experiment_manual']['name']);
	    $filename1=time()."_".$_FILES['experiment_manual']['name'];
		$file_path=UPLOADS_MANUAL_DIR.$filename1;		
		
	if(!move_uploaded_file($_FILES['experiment_manual']['tmp_name'],$file_path))
	{
		$err=true;
		$msg='Error uploading file!';
	}
else
	{
		@unlink(UPLOADS_MANUAL_DIR.$_POST['old_experiment_manual']);
		$data['experiment_manual']=$filename1;
	}
}


/*print "<pre>";
print_r($data);
exit();*/
experiment::update($data,$id);

header('location:admin_manage_experiment.php');
setMsg('Experiment Edited sucessfully');
exit();
?>