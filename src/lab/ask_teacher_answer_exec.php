<?php
require_once("includes/startup.php");
loadEntity('query');

$data['user_id']=$_SESSION[SESSION_PREFIX.'user_id'];
$data['subject_id']=str_prepare($_POST['subject_id']);
$data['question']=str_prepare($_POST['question']);
$data['question_date']=date('Y:m:d H:m:s');
$data['is_active']=1;


/*print "<pre>";
print_r($data);
exit();
*/

query::insert($data);
header('location:ask_student_question.php');
getMsgSmarty('Question Added');
exit();
?>