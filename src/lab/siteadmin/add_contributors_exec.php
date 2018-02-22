<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
require_once("../includes/true_thumbnail.php");
loadEntity('contributors');


$data['contributor_name']=str_prepare($_POST['contributor_name']);
$data['contributor_title']=str_prepare($_POST['contributor_title']);
$data['sort_order']=$_POST['sort_order'];
$data['contributor_description']=$_POST['contributor_description'];
$data['add_date']=date('Y-m-d H:i:s');

if(isset($_FILES['contributor_img']['name']) && $_FILES['contributor_img']['name']!="")
{
		
/*		
		$file_ext = trim(strtolower(strrchr($_FILES['contributor_img']['name'],'.')));
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
		header("location:admin_manage_contributors.php");
		exit();
		
	}
*/	
	$_FILES['contributor_img']['name']=str_replace(" ","_",$_FILES['contributor_img']['name']);
	$filename1=time()."_".$_FILES['contributor_img']['name'];
	$data['contributor_img']=$filename1;
	
	$file_path=UPLOADS_CONTRIBUTORS_DIR.$filename1;
	$status = createThumbnail($_FILES['contributor_img']['tmp_name'],100,100,$file_path,90);
	
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
/*print "<pre>";
print_r($data);
exit();*/
contributors::insert($data);

header('location:admin_manage_contributors.php');
 setMsg('Contributors Added Sucessfully');
exit();
?>