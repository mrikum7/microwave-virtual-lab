<?php
require_once("../includes/startup.php");
require_once('authenticate.php');
	loadEntity('content');
	$id=$_POST['id'];

	$userdetail['content_title']=str_prepare($_POST['title']);
	$userdetail['content_description']=str_prepare($_POST['desc']);
	
	content::update($userdetail,$id);
    header('location:admin_manage_content.php');
   setMsg('Content edited');
    exit();
?>
