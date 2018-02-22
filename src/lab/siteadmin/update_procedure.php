<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
$id=$_REQUEST['id'];
loadEntity("procedure");
loadEntity("experiment");
$data = procedure::getARow($id);
NTemplate::assign('data',$data);
NTemplate::assign('id',$id);
NTemplate::assign("IS_EDITOR",true);
NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::display('update_procedure.tpl');
?>
