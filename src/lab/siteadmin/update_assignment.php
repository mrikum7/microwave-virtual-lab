<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
$id=$_REQUEST['id'];
loadEntity("assignment");
loadEntity("experiment");


$sql="SELECT * from experiment_master";
$arr = NDatabase::getAllAssoc($sql);
NTemplate::assign("locations",$arr);
$data = assignment::getARow($id);
NTemplate::assign('data',$data);
NTemplate::assign('id',$id);

NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::display('update_assignment.tpl');
?>
