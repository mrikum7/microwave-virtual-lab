<?php
require_once("includes/startup.php");

if(isset($_GET['ref']) && $_GET['ref']!="")
{
	NTemplate::assign("page_ref",$_GET['ref']);
}
else
{
	NTemplate::assign("page_ref",APP_FOL."profile.php");
}
NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::display('login.tpl');

?>