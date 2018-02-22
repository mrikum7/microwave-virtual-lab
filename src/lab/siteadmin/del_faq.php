<?php
	require_once('../includes/startup.php');
	require_once('authenticate.php');
	loadEntity('faq');
	$id=$_REQUEST['id'];
	faq::delete($id);    
	header('location:admin_manage_faq.php');
	setMsg('Faq deleted successfully!');
	exit();

?>
