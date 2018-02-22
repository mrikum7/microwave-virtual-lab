<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
$id=$_REQUEST['id'];


/*print "<PRE>";
	print_r($id);
	exit();*/

loadEntity("equipment");
loadEntity("equipment_img");

$data = equipment::getARow($id);
NTemplate::assign('data',$data);

$arr = equipment_img::getAll($id);
NTemplate::assign('arr',$arr);
NTemplate::assign("IS_EDITOR",true);
NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::display('update_equipment.tpl');
?>
