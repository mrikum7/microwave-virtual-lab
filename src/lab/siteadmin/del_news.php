<?php
	require_once('../includes/startup.php');
	require_once('authenticate.php');
	loadEntity('news');
	$id=$_REQUEST['id'];
	news::delete($id);    
	header('location:admin_manage_news.php');
	setMsg('News deleted successfully!');
	exit();

?>
