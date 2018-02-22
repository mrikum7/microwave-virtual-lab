<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
$id=$_REQUEST['id'];
loadEntity("tab_feedback");

$data = tabfeed::getARow($id);
NTemplate::assign('data',$data);
NTemplate::assign('id',$id);
NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::display('update_experiment_feedback.tpl');
?>
