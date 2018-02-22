<?php
	require_once('../includes/startup.php');
	require_once('authenticate.php');
	loadEntity('scroller');
	$id=$_REQUEST['id'];
	scroller::delete($id);    
	header('location:admin_manage_img.php');
	setMsg('Image deleted successfully!');
	exit();

?>
