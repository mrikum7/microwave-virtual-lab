<?php


if(!isset($_SESSION[SESSION_PREFIX.'admin_id']) || $_SESSION[SESSION_PREFIX.'admin_id']=="" || $_SESSION[SESSION_PREFIX.'user_type'] != 'Admin' )
{
	setMsg('You need to login!');
	header("location: login.php");
	exit();
}
else
{ 
$admin_id = $_SESSION[SESSION_PREFIX.'admin_id'];
NTemplate::assign("today",date('Y-m-d'));
//NTemplate::assign("emp_name",$_SESSION[SESSION_PREFIX.'employee_name']);
}
	
?>