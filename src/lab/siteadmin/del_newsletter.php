<?php
	require_once('../includes/startup.php');
	require_once('authenticate.php');
	loadEntity('newsletter');
	$id=$_REQUEST['id'];
	newsletter::delete($id);    
	header('location:admin_manage_newsletter_subcription.php');
	setMsg('Newsletter deleted successfully!');
	exit();

?>
