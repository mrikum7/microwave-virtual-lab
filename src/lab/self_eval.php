<?php
require_once("includes/startup.php");
loadEntity("eval_question");
$e_id=$_GET['experiment_id'];
if(isset($_GET['experiment_id']) && $_GET['experiment_id'] !='')
{
$_SESSION['question']=array();
$key1 = question::getCol($e_id);
if(count($key1))
{
	$arr = array_rand($key1,5);
foreach($arr as $a)
{
	$_SESSION['question'][] = $key1[$a];
}
}
/*
print"<PRE>";
print_r($key1);
print_r($arr);
print_r($_SESSION);
*/

$current_question = array();
foreach($_SESSION['question'] as $id)
{
$current_question[] = question::getARow($id);
}

NTemplate::assign("e_id",$e_id);
}
NTemplate::assign("current_question",$current_question);

//print_r($current_question);
NTemplate::display('self_eval.tpl');

?>