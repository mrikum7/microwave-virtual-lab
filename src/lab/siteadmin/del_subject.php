<?php
	require_once('../includes/startup.php');
	require_once('authenticate.php');
	loadEntity('subjects');
	$id=$_REQUEST['id'];
	subject::delete($id);    
	header('location:admin_manage_subjects.php');
	setMsg('Subject deleted successfully!');
	exit();

?>
