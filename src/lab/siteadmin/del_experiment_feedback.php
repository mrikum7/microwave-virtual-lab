<?php
	require_once('../includes/startup.php');
	require_once('authenticate.php');
	loadEntity("tab_feedback");
	$id=$_REQUEST['id'];
	
	tabfeed::delete($id);    
	header('location:admin_manage_experiment_feedback.php');
	setMsg('Feedback deleted successfully!');
	exit();

?>
