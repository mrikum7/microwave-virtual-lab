<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("scroller");

$data['sort_order']=str_prepare($_POST['order']);
if(isset($_FILES['sub_img']['name']) && $_FILES['sub_img']['name']!="")
 {
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
	$_FILES['sub_img']['name']=str_replace(" ","_",$_FILES['sub_img']['name']);
	$filename1=time()."_".$_FILES['sub_img']['name'];
    $data['image_name']=$filename1;
    $file_path=UPLOADS_PROMO_SPACES_DIR.$filename1;
    if(!move_uploaded_file($_FILES['sub_img']['tmp_name'],$file_path))
	{
		$err=true;
		print "Error uploading file!";
	}

}
else
{
header('location:admin_manage_img.php');
exit();	
}
$data['added_on']=date('Y:m:d h:m:s');
$data['is_active']=1;
scroller::insert($data);
header('location:admin_manage_img.php');
setMsg('Image Added successfully!');
exit();
?>
