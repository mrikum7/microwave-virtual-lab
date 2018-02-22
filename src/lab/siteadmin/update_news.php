<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
$id=$_REQUEST['id'];
loadEntity("news");
$data = news::getARow($id);
NTemplate::assign('data',$data);
NTemplate::assign("IS_EDITOR",true);
NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::display('update_news.tpl');
?>
