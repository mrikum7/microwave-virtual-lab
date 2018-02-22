<?php
	require_once('../includes/startup.php');
	require_once('authenticate.php');
	loadEntity('reference');
	$id=$_REQUEST['id'];
	$e_id=reference::delete($id);    
	header('location:admin_manage_reference.php?experiment_id='.$e_id);
	setMsg('Reference deleted successfully!');
	exit();

?>
