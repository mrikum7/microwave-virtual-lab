<?php
	require_once('../includes/startup.php');
	require_once('authenticate.php');
	loadEntity('experiments_category');
	$id=$_REQUEST['id'];
	category::delete($id);    
	header('location:admin_manage_experiment_categories.php');
	setMsg('Experiment category deleted successfully!');
	exit();

?>
