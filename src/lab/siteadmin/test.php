<?php
require_once("../includes/startup.php");
loadEntity('content');

$arr =  content::getAbout();
NTemplate::assign("arr",$arr);
NTemplate::display('test.tpl');
?>