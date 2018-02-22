<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
$id=$_REQUEST['id'];
loadEntity("experiments_category");

$data = category::getARow($id);
NTemplate::assign('data',$data);
NTemplate::assign('id',$id);
NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::display('update_category.tpl');
?>
