<?php

if(!isset($_SESSION[SESSION_PREFIX.'user_id']) || $_SESSION[SESSION_PREFIX.'user_id']=="" )
{
	setMsg('You need to login!');
	header("location: login.php?ref=".$_SERVER['REQUEST_URI']);
	exit();
}
else
{ 
	$user_id = $_SESSION[SESSION_PREFIX.'user_id'];
	NTemplate::assign("today",date('Y-m-d'));
//NTemplate::assign("emp_name",$_SESSION[SESSION_PREFIX.'employee_name']);
}
	
?>