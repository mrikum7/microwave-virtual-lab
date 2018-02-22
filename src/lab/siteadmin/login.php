<?php
require_once("../includes/startup.php");
NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::display('admin_login.tpl');

?>
