<?php
require_once("includes/startup.php");
require_once(INCLUDES_DIR.'parser.php');
require_once(LIB_DIR.'mail-wrapper.php');
NTemplate::assign('spry','yes');
loadEntity('user');

$data['user_firstname']=str_prepare($_POST['user_firstname']);
$data['user_lastname']=str_prepare($_POST['user_lastname']);
$data['user_institution_name']=str_prepare($_POST['user_institution_name']);
$data['user_institution_url']=str_prepare($_POST['user_institution_url']);
$data['user_institution_rollno']=str_prepare($_POST['user_institution_rollno']);
$data['user_disipline']=str_prepare($_POST['user_disipline']);
$data['user_qualification']=str_prepare($_POST['user_qualification']);
$data['user_email']=str_prepare($_POST['user_email']);
$data['user_name']=str_prepare($_POST['user_email']);
$data['user_password']=md5($_POST['user_password']);
$data['user_address1']=str_prepare($_POST['user_address1']);
$data['user_address2']=str_prepare($_POST['user_address2']);
$data['city']=str_prepare($_POST['city']);
$data['state']=str_prepare($_POST['state']);
$data['Zip_Code']=str_prepare($_POST['Zip_Code']);
$data['country']=str_prepare($_POST['country']);
$data['phone_std_code']=str_prepare($_POST['phone_std_code']);
$data['phone_number']=str_prepare($_POST['phone_number']);
$data['mentor_name']=str_prepare($_POST['mentor_name']);
$data['mentor_email']=str_prepare($_POST['mentor_email']);
$data['user_type']=str_prepare($_POST['user_type']);
$data['reg_date']=date('Y-m-d H:i:s');


if(!user::hasUser($data['user_email']))
{
user::insert($data);
$emailMsg=parse_template(file_get_contents(MAIL_TEMPLATES_DIR.'mailUserReg.php'),
													   array('FNAME'=>$data['user_firstname'],
																'LNAME'=>$data['user_lastname'],
																'EMail'=> $data['user_email'],
																'NewPassword'=>$_POST['user_password'],
															    'APP_URL'=>APP_URL,
																'App_Name'=>APP_NAME));

			sendmail($emailMsg,$AppSettings['adminEmail'],'Administrator',$data['user_email'],'New Password Generated ');
            setMsg('Details about your account sent to the given email!');

header('location:login.php');
setMsg('You have successfully signed up. Please Login !');
exit();
}
else
{
header('location:login.php');
setMsg('User already have active acount on this email address. Please Login !');
exit();
}
?>
