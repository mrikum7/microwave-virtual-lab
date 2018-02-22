<?php
require_once("includes/startup.php");
NTemplate::assign('spry','yes');
loadEntity('user');
$id=$_SESSION[SESSION_PREFIX.'user_id'];  

$data['user_firstname']=str_prepare($_POST['fname']);
$data['user_lastname']=str_prepare($_POST['lname']);
$data['user_institution_name']=str_prepare($_POST['user_institution_name']);
$data['user_institution_url']=str_prepare($_POST['user_institution_url']);
$data['user_institution_rollno']=str_prepare($_POST['user_institution_rollno']);
$data['user_disipline']=str_prepare($_POST['user_disipline']);
$data['user_qualification']=str_prepare($_POST['user_qualification']);
$data['user_email']=str_prepare($_POST['user_email']);
//$data['user_name']=str_prepare($_POST['user_email']);
//$data['user_password']=md5($_POST['user_password']);
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

/*print "<pre>";
print_r($data);
exit();*/

user::update($data,$id);
header('location:profile.php');
exit();
?>