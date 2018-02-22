<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
require_once("../includes/true_thumbnail.php");
loadEntity("equipment");
loadEntity("equipment_img");

$data['equipment_title']=str_prepare($_POST['equipment_title']);
$data['equipment_description']=$_POST['equipment_description'];
$data['sort_order']=$_POST['sort_order'];
$data['add_date']=date('Y-m-d H:i:s');	
equipment::insert($data);



$equipment_id=NDatabase::Insert_ID();
$arr['equipment_id']=$equipment_id;
$arr['img_date']=date('Y-m-d H:i:s');

for($i=1; $i<=3; $i++)
	{
if(isset($_FILES['img_name'.$i]['name']) && $_FILES['img_name'.$i]['name']!="")
{
/*		$file_ext = trim(strtolower(strrchr($_FILES['img_name'.$i]['name'],'.')));
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
		header("location:admin_manage_equipments.php");
		exit();
		
	}*/
	$_FILES['img_name'.$i]['name']=str_replace(" ","_",$_FILES['img_name'.$i]['name']);
	$filename1=time()."_".$_FILES['img_name'.$i]['name'];
	$arr['img_name']=$filename1;

	equipment_img::insert($arr);
	$file_path=UPLOADS_EQUIPMENTS_DIR.$filename1;
	$status = createThumbnail($_FILES['img_name'.$i]['tmp_name'],224,182,$file_path,90);
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
}


header('location:admin_manage_equipments.php');
setMsg('Equipment Added Sucessfully');
exit();
?>