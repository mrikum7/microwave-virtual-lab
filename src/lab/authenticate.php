<?php
$admin_id = $_SESSION[SESSION_PREFIX.'user_id'];

if(!isset($_SESSION[SESSION_PREFIX.'user_id']) || $_SESSION[SESSION_PREFIX.'user_id']=="" )
{
	setMsg('You need to login!');
	header("location: login.php");
	exit();
}
else
{ 

NTemplate::assign("today",date('Y-m-d'));
//NTemplate::assign("emp_name",$_SESSION[SESSION_PREFIX.'employee_name']);
}
	
?>