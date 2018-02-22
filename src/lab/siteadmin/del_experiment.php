<?php
	require_once('../includes/startup.php');
	require_once('authenticate.php');
	loadEntity('experiment');
	$id=$_REQUEST['id'];
	$experiment_img = experiment::getOne($id);
	@unlink(UPLOADS_EXPERIMENTS_DIR.$experiment_img);
	experiment::delete($id);    
	
/*	print "<pre>";
	print_r($_POST);
	exit();*/
	header('location:admin_manage_experiment.php?experiment_id='.$id);
	setMsg('Experiment deleted successfully!');
	exit();

?>
