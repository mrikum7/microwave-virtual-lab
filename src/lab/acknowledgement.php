<?php
require_once("includes/startup.php");
loadEntity("content");
NTemplate::assign("page_name","acknowledgement");
$arr=array();
$arr =  content::getAcknowledgement();
/*print "<pre>";
print_r($arr);
exit();
*/
NTemplate::assign("arr",$arr);



NTemplate::display('acknowledgement.tpl');

?>
