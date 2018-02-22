<?php
	require_once('../includes/startup.php');
	require_once('authenticate.php');
    loadEntity("equipment_img");

	$id=$_REQUEST['id'];
	$img_name = equipment_img::getOne($id);
    @unlink(UPLOADS_EQUIPMENTS_DIR.$img_name);
	equipment_img::delete($id); 
	header('location:admin_manage_equipments.php');
	setMsg('Equipment Image deleted successfully!');
	exit();

?>
