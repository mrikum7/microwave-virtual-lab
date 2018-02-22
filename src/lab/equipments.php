<?php
require_once("includes/startup.php");
require_once("authenticate_login.php");

loadEntity("equipment");
loadEntity("equipment_img");
NTemplate::assign("page_name","equipments");

$arr=array();
$arr = equipment::getEquipment();
NTemplate::assign("arr",$arr);
//print "<pre>";
//print_r($arr);
NTemplate::display('equipments.tpl');

?>