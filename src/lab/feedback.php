<?php
require_once("includes/startup.php");
NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::assign("page_name","feedback");
NTemplate::display('feedback.tpl');

?>