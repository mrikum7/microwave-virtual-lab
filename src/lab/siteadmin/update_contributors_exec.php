<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
require_once("../includes/true_thumbnail.php");
loadEntity('contributors');
$id=$_REQUEST['contributor_id'];

$data['contributor_name']=str_prepare($_POST['contributor_name']);
$data['contributor_title']=str_prepare($_POST['contributor_title']);
$data['sort_order']=$_POST['sort_order'];
$data['contributor_description']=$_POST['contributor_description'];
$data['is_active']=str_prepare($_POST['is_active']);

/*print "<pre>";
print_r($data);
exit();*/

if(isset($_FILES['contributor_img']['name']) && $_FILES['contributor_img']['name']!="")
{   
/*		$file_ext = trim(strtolower(strrchr($_FILES['contributor_img']['name'],'.')));
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
		$file_path=UPLOADS_CONTRIBUTORS_DIR.$filename1;
		
		
	$file_path=UPLOADS_CONTRIBUTORS_DIR.$filename1;
	$status = createThumbnail($_FILES['contributor_img']['tmp_name'],100,100,$file_path,90);
	
	if(!$status[0])
	{
		$err=true;
		$msg='Error uploading file!';
	}
	else
	{
		@unlink(UPLOADS_CONTRIBUTORS_DIR.$_POST['contributor_old_img']);
		$data['contributor_img']=$filename1;
		$msg = 'Uploaded';
	}
}


contributors::update($data,$id);
header('location:admin_manage_contributors.php');
setMsg('contributor edited Sucessfully');
exit();
?>