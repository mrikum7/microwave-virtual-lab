<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
$id=$_REQUEST['id'];
loadEntity("user");

$data = user::getARow($id);
NTemplate::assign('data',$data);
NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::display('update_user.tpl');
?>
