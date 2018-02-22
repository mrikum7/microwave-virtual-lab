<?php
	require_once('../includes/startup.php');
	require_once('authenticate.php');
	loadEntity('user');
	$id=$_REQUEST['id'];
	user::delete($id);    
	header('location:admin_manage_students.php');
	setMsg('Student deleted successfully!');
	exit();

?>
