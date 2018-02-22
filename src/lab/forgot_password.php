<?php 
require("includes/startup.php");
require_once(INCLUDES_DIR.'parser.php');
require_once(LIB_DIR.'mail-wrapper.php');

if (isset($_POST['frmSubmit'])=='Get New Password')
{
	$user_name = str_prepare($_POST['user_name']);
    $sql=" SELECT user_id,user_name,user_email,user_firstname,user_lastname from user_master where user_name='".$user_name."'";
	$user = NDatabase::getARow($sql);
	$count=NDatabase::getNumRows();
	if($count == 0) 
	{
			setMsg('No active account found with the given email!');
			header('location:forgot_password.php');
			exit();
	}
	else
	{
	  NTemplate::assign("user_id",$user['user_id']);
	  $password=generate_password();
	  $sql="UPDATE user_master set user_password='".md5($password)."' where user_id=".$user['user_id'];
	  $user1 = NDatabase::getOne($sql);
	  $emailMsg=parse_template(file_get_contents(MAIL_TEMPLATES_DIR.'mailForgotPassword.php'),
													   array('FNAME'=>$user['user_firstname'],
																'LNAME'=>$user['user_lastname'],
																'EMail'=>$user['user_email'],
																'NewPassword'=>$password,
															    'APP_URL'=>APP_URL,
																'App_Name'=>APP_NAME));

			sendmail($emailMsg,$AppSettings['adminEmail'],'Administrator',$user['user_email'],'New Password Generated ');
            setMsg('Details about your account sent to the given email!');
/*          staff_log('Forgot Password - New password generated for '.$user['first_name']." ".$user['last_name']);
			setMsg('New password for this account is send to given email address!');*/
			header('location: forgot_password.php');
			exit();
	}
}
NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::display('forgot_password.tpl');
?>
