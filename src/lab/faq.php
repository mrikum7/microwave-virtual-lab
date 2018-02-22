<?php
require_once("includes/startup.php");
NTemplate::assign("page_name","faq");
loadEntity("faq");

$arr=array();
$arr = faq::getFaq();
NTemplate::assign("arr",$arr);


NTemplate::display('faq.tpl');

?>