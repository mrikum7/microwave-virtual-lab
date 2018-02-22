<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
$id=$_REQUEST['id'];
loadEntity("experiment");
loadEntity("experiments_category");

$sql="SELECT * from experiment_categories_master";
$arr = NDatabase::getAllAssoc($sql);
NTemplate::assign("locations",$arr);

$data = experiment::getARow($id);
NTemplate::assign('data',$data);
NTemplate::assign("IS_EDITOR",true);
NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::display('update_experiment.tpl');
?>
