<?php
require_once("includes/startup.php");
require_once('authenticate.php');
loadEntity('user');

$arr = user::getUserInfo($_SESSION[SESSION_PREFIX.'user_id']);
 
 
 NTemplate::assign("fname",$arr['user_firstname']);
 NTemplate::assign("lname",$arr['user_lastname']);
 NTemplate::assign("user_email",$arr['user_email']);
 NTemplate::assign("city",$arr['city']);
 NTemplate::assign("join_date",$arr['reg_date']);
 NTemplate::assign("user_password",$arr['user_password']);
 NTemplate::assign("user_img",$arr['user_img']);
 NTemplate::assign("user_institution_name",$arr['user_institution_name']);
 NTemplate::assign("user_institution_url",$arr['user_institution_url']);
 NTemplate::assign("user_institution_rollno",$arr['user_institution_rollno']);
 NTemplate::assign("user_disipline",$arr['user_disipline']);
 NTemplate::assign("user_qualification",$arr['user_qualification']);
 NTemplate::assign("user_address1",$arr['user_address1']); 
 NTemplate::assign("user_address2",$arr['user_address2']);
 NTemplate::assign("zip_code",$arr['zip_code']);
 NTemplate::assign("state",$arr['state']);
 NTemplate::assign("country",$arr['country']);
 NTemplate::assign("phone_number",$arr['phone_number']);
 NTemplate::assign("phone_std_code",$arr['phone_std_code']);
 NTemplate::assign("mentor_name",$arr['mentor_name']); 
 NTemplate::assign("mentor_email",$arr['mentor_email']);

$exper = user::getExperimentCount($_SESSION[SESSION_PREFIX.'user_id']); 
NTemplate::assign("experiments",$exper);

$assignment = user::getAssignmentCount($_SESSION[SESSION_PREFIX.'user_id']); 
NTemplate::assign("assignment",$assignment);

$eval = user::getEvaluationData($_SESSION[SESSION_PREFIX.'user_id']); 
NTemplate::assign("evaluation",$eval);

if(isset($arr['user_img']) && file_exists(UPLOADS_USER_ATTACHMENT_DIR.$arr['user_img']))
{ 
	NTemplate::assign("user_img",$arr['user_img']);
}
else
{ 
	NTemplate::assign("user_img","profile-img.gif");
}
 
 $date = date('Y-m-d');
 $date1=strtotime ( $date );
 $newdate = strtotime ( '+6 day' , strtotime ( $date ) ) ;
 NTemplate::assign("today_date",$date1);
 NTemplate::assign("notice_date",$newdate);
 NTemplate::display('profile.tpl');

?>