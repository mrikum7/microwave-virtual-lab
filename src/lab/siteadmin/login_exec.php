<?php
require_once("../includes/startup.php");
loadEntity('user');

if(isset($_POST['username']) && $_POST['username']!='' && isset($_POST['password']) && $_POST['password']!='')
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$arr = user::checkUserLogin($username,$password,"Admin");
	if($arr['user_id']== 0 || $arr['user_id']== '') 
	{
	setMsg('Login Failed!');
	header('location:login.php');
	exit();
	}
	else
	{
		if($arr['user_type']=="Admin")
		{
			$_SESSION[SESSION_PREFIX.'admin_id']=$arr['user_id'];
			$_SESSION[SESSION_PREFIX.'user_id']=$arr['user_id'];
			$_SESSION[SESSION_PREFIX.'user_type']= 'Admin';
			$_SESSION[SESSION_PREFIX.'is_admin']= true;
		}
		else
		{
			setMsg('Login Failed!');
			header('location:login.php');
			exit();
		}
		header('location:index.php');
		exit();
	}
}

?>
