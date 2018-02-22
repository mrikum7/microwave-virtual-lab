<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("eval_question");
$id=$_REQUEST['question_id'];

$data['experiment_id']=str_prepare($_POST['experiment_id']);
$data['question_title']=str_prepare($_POST['question_title']);
$data['answer1']=str_prepare($_POST['answer1']);
$data['answer2']=$_POST['answer2'];
$data['answer3']=$_POST['answer3'];
$data['answer4']=str_prepare($_POST['answer4']);
$data['correct_answer']=$_POST['correct_answer'];
$data['is_active']=str_prepare($_POST['is_active']);

/*print "<pre>";
print_r($data);
exit();*/
question::update($data,$id);

header('location:admin_manage_self_eval.php?experiment_id='.$data['experiment_id']);
exit();
?>


