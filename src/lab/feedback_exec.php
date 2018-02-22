<?php
require_once("includes/startup.php");
NTemplate::assign('spry','yes');
loadEntity('feedback');

$data['first_name']=str_prepare($_POST['first_name']);
$data['last_name']=str_prepare($_POST['last_name']);
$data['virtual_lab_name']=str_prepare($_POST['virtual_lab_name']);
$data['remote_lab_location']=str_prepare($_POST['remote_lab_location']);
$data['email']=str_prepare($_POST['email']);

$data['virtual_lab_type']=implode(",",$_POST['virtual_lab_type']);

$data['technical_objective_defined']=str_prepare($_POST['technical_objective_defined']);
$data['technical_easily_understood']=str_prepare($_POST['technical_easily_understood']);
$data['technical_easily_understood']=str_prepare($_POST['technical_easily_understood']);
$data['technical_sufficient_background']=str_prepare($_POST['technical_sufficient_background']);
$data['technical_helpful_manual']=str_prepare($_POST['technical_helpful_manual']);
$data['technical_diagrams_easy']=str_prepare($_POST['technical_diagrams_easy']);
$data['technical_experiment_useful']=str_prepare($_POST['technical_experiment_useful']);
$data['technical_experiment_appropriate']=str_prepare($_POST['technical_experiment_appropriate']);
$data['interface_user_friendly']=str_prepare($_POST['interface_user_friendly']);
$data['interface_ease_navigation']=str_prepare($_POST['interface_ease_navigation']);
$data['interface_remote_feel']=str_prepare($_POST['interface_remote_feel']);
$data['interface_attractive']=str_prepare($_POST['interface_attractive']);
$data['comments']=str_prepare($_POST['comments']);
$data['feedback_date']=date('Y-m-d H:i:s');
feedback::insert($data);
/*print "<pre>";
print_r($data);
exit();
$emailMsg=parse_template(file_get_contents(MAIL_TEMPLATES_DIR.'mailUserReg.php'),
													   array('FNAME'=>$data['first_name'],
																'LNAME'=>$data['last_name'],
																'EMail'=> $data['email'],
																'NewPassword'=>$password,
															    'APP_URL'=>APP_URL,
																'App_Name'=>APP_NAME));

			sendmail($emailMsg,$AppSettings['adminEmail'],'Administrator',$data['email'],'New Password Generated ');
            setMsg('Details about your account sent to the given email!');*/
setMsg('Thanks! Your feedback has been sent to the management!');
header('location:feedback.php');
exit();
?>