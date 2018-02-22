<?php
require("includes/startup.php");
loadEntity('eval_question');
loadEntity('user_eval');
$e_id=$_POST['e_id'];
$arr=array();
$arr = $_POST;
$keys=array_keys($arr);
$counter=0;
foreach($keys as $item)
{
	$ans = explode("_",$item);
	if(question::checkAnswer($ans[1],$_POST[$item]))
	{
		$counter++;
	}
}

$arr['experiment_id'] = $e_id;
$arr['score'] = $counter;
$arr['user_id'] = $_SESSION[SESSION_PREFIX.'user_id'];
user_eval::insert($arr);
$_SESSION[SESSION_PREFIX.'score']=$arr['score'];
header('location:self_eval_score.php?e_id='.$e_id);


?>