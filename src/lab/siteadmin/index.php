<?php
require_once("../includes/startup.php");
require_once("authenticate.php");

NTemplate::assign("page_name","index");
NTemplate::display('admin_index.tpl');

?>
