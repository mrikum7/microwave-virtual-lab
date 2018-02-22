<?php
	require_once('../includes/startup.php');
	require_once('authenticate.php');
	loadEntity('contributors');
	$id=$_REQUEST['id'];
	contributors::delete($id);    
	header('location:admin_manage_contributors.php');
	setMsg('Contributors deleted successfully!');
	exit();

?>
