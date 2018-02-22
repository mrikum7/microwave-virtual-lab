<?php
	require_once('../includes/startup.php');
	require_once('authenticate.php');
	loadEntity('eval_question');
	$id=$_REQUEST['id'];
	question::delete($id);    
	header('location:admin_manage_self_eval.php');
	setMsg('Question deleted successfully!');
	exit();

?>
