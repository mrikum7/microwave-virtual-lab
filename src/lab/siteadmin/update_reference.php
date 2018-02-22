<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
$id=$_REQUEST['id'];
loadEntity("reference");
loadEntity("experiment");


$sql="SELECT * from experiment_master";
$arr = NDatabase::getAllAssoc($sql);
NTemplate::assign("locations",$arr);



$data = reference::getARow($id);
NTemplate::assign('data',$data);
NTemplate::assign('id',$id);
NTemplate::assign("getMsg",getMsgSmarty('error'));

NTemplate::display('update_reference.tpl');
?>
