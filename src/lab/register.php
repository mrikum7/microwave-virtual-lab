<?php
require_once("includes/startup.php");
NTemplate::assign('spry','yes');
NTemplate::assign("page_name","register");
NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::display('register.tpl');

?>