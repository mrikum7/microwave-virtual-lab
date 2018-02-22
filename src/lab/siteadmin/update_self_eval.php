<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
$id=$_REQUEST['id'];
loadEntity("eval_question");
loadEntity("experiment");


$sql="SELECT * from experiment_master";
$arr = NDatabase::getAllAssoc($sql);
NTemplate::assign("locations",$arr);



$data = question::getARow($id);
NTemplate::assign('data',$data);
NTemplate::assign('id',$id);

NTemplate::display('update_self_eval.tpl');
?>
