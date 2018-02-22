<?php
	require_once('../includes/startup.php');
	require_once('authenticate.php');
	loadEntity('procedure');
	$id=$_REQUEST['id'];
	$e_id = procedure::delete($id);    
	header('location:admin_manage_procedure.php?experiment_id='.$e_id);
	setMsg('Procedure deleted successfully!');
	exit();

?>
