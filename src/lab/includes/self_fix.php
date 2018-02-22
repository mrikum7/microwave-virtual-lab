<?php
require_once("../includes/startup.php");

$sql = "select question_id,wrong_reason1,wrong_reason2,wrong_reason3,wrong_reason4,correct_answer from experiment_self_eval_master";
$field = NDatabase::getAllAssoc($sql);
foreach($field as $row)
{
	if($row['correct_answer']==1)
	{
		$sql1="UPDATE experiment_self_eval_master set wrong_reason1='Right Answer' where question_id=".$row['question_id'];
		NDatabase::query($sql1);
	}
	
	if($row['correct_answer']==2)
	{
		$sql1="UPDATE experiment_self_eval_master set wrong_reason2='Right Answer' where question_id=".$row['question_id'];
		NDatabase::query($sql1);
		
	}
	
	if($row['correct_answer']==3)
	{
		$sql1="UPDATE experiment_self_eval_master set wrong_reason3='Right Answer' where question_id=".$row['question_id'];
		NDatabase::query($sql1);
		
	}
	
	if($row['correct_answer']==4)
	{
		$sql1="UPDATE experiment_self_eval_master set wrong_reason4='Right Answer' where question_id=".$row['question_id'];
		NDatabase::query($sql1);
		
	}

}
print "Done";
?>