<?php
require_once("includes/startup.php");
//require_once('authenticate.php');
loadEntity('user');
 
$sql="SELECT * from subject_master ";
$arr = NDatabase::getAllAssoc($sql);
NTemplate::assign("locations",$arr);

$exper = user::getExperimentCount($_SESSION[SESSION_PREFIX.'user_id']); 
NTemplate::assign("experiments",$exper);

$assignment = user::getAssignmentCount($_SESSION[SESSION_PREFIX.'user_id']); 
NTemplate::assign("assignment",$assignment);

$eval = user::getEvaluationData($_SESSION[SESSION_PREFIX.'user_id']); 
NTemplate::assign("evaluation",$eval);

 

 NTemplate::display('ask_student_question.tpl');

?>