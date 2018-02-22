<?php
require_once("includes/startup.php");
loadEntity("content");
NTemplate::assign("page_name","about_us");
$arr=array();
$arr =  content::getAbout();
/*print "<pre>";
print_r($arr);
exit();
*/
NTemplate::assign("arr",$arr);



NTemplate::display('aboutus.tpl');

?>
