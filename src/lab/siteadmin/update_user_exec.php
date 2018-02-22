<?php
    require_once("../includes/startup.php");
	require_once('authenticate.php');
	loadEntity('user');
	$id=$_POST['id'];
	$userdetail['is_active']=$_POST['is_active'];
    user::update($userdetail,$id);
    header('location:index.php');
    setMsg('User edited');
    exit();
?>
