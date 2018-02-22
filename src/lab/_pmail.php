<?php
require_once("includes/startup.php");
require_once(INCLUDES_DIR.'parser.php');
require_once(LIB_DIR.'mail-wrapper.php');
$sql="select * from user_master where user_id>1 order by user_id";
$result=NDatabase::getAllAssoc($sql);
foreach($result as $arr)
{

  $emailMsg=parse_template(file_get_contents(MAIL_TEMPLATES_DIR.'mailUserPassword.php'),
													   array('FNAME'=>$arr['user_firstname'],
																'Uname'=>$arr['user_name'],
																'NewPassword'=>$arr['user_password'],
															    'APP_URL'=>APP_URL,
																'App_Name'=>APP_NAME));
	
	sendmail($emailMsg,'navraj@websupplements.net','Virtual Labs Administrator',$arr['user_email'],'New Password for Sakshat Virtual Labs');
}

	
print "Done";

?>
