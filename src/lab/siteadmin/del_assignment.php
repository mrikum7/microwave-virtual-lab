<?php
	require_once('../includes/startup.php');
	require_once('authenticate.php');
	loadEntity('assignment');
	$id=$_REQUEST['id'];
	$e_id=assignment::delete($id);    
	header('location:admin_manage_assignment.php?experiment_id='.$e_id);
	setMsg('Experiment deleted successfully!');
	exit();

?>
