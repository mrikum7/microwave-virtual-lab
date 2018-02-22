<?php
require_once("includes/startup.php");
require_once("authenticate_login.php");
loadEntity("contributors");
NTemplate::assign("page_name","contributors");
$arr=array();
$arr =  contributors::getContributor();
NTemplate::assign("arr",$arr);
NTemplate::display('contributors.tpl');

?>