<?php
require_once("includes/startup.php");
//require_once('authenticate.php');
loadEntity('user');
 
$sql="SELECT * from subject_master ";
$arr = NDatabase::getAllAssoc($sql);
NTemplate::assign("locations",$arr);

 NTemplate::display('teacher_subject_master.tpl');

?>