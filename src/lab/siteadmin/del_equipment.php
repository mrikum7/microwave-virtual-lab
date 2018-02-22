<?php
	require_once('../includes/startup.php');
	require_once('authenticate.php');
loadEntity("equipment");
loadEntity("equipment_img");

	$id=$_REQUEST['id'];
	$arr = equipment_img::getAll($id);
	//print"<PRE>";
	//print_r($arr);
foreach($arr as $item)
{		
	$img_name = equipment_img::getOne($item['equipment_image_id']);
    @unlink(UPLOADS_EQUIPMENTS_DIR.$img_name);
	equipment_img::delete($item['equipment_image_id']); 
}
    equipment::delete($id);    
	header('location:admin_manage_equipments.php');
	setMsg('Equipment deleted successfully!');
	exit();

?>
