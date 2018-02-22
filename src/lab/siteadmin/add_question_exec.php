<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("eval_question");
loadEntity("experiment");

$id=str_prepare($_GET['experiment_id']);
//$correct_answer=str_prepare($_GET['correct_answer']);
$data['experiment_id']=str_prepare($_POST['experiment_id']);
$data['question_title']=str_prepare($_POST['question_title']);
$data['answer1']=str_prepare($_POST['answer1']);
$data['answer2']=str_prepare($_POST['answer2']);
$data['answer3']=str_prepare($_POST['answer3']);
$data['answer4']=str_prepare($_POST['answer4']);

$data['wrong_reason1']=str_prepare($_POST['wrong_reason1']);
$data['wrong_reason2']=str_prepare($_POST['wrong_reason2']);
$data['wrong_reason3']=str_prepare($_POST['wrong_reason3']);
$data['wrong_reason4']=str_prepare($_POST['wrong_reason4']);



$data['correct_answer']=$_POST['correct_answer'];
$data['add_date']=date('Y-m-d H:i:s');

/*print "<pre>";
print_r($data);
exit();*/

question::insert($data);

header('location:admin_manage_self_eval.php?experiment_id='.$data['experiment_id']);
exit();
?>