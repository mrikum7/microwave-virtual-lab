<?php
require_once("includes/startup.php");
loadEntity("content");
NTemplate::assign("page_name","software");
$arr=array();
$arr =  content::getSoftware();
/*print "<pre>";
print_r($arr);
exit();
*/
NTemplate::assign("arr",$arr);



NTemplate::display('software.tpl');

?>
