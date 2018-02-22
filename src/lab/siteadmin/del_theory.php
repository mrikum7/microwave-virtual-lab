<?php
	require_once('../includes/startup.php');
	require_once('authenticate.php');
	loadEntity('theory');
	$id=$_REQUEST['id'];
	$e_id = theory::delete($id);    
	header('location:admin_manage_theory.php?experiment_id='.$e_id);
	setMsg('Theory deleted successfully!');
	exit();

?>
