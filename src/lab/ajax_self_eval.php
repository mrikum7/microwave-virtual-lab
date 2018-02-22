<?php 
require_once("includes/startup.php");
$arr=$_SESSION['question'];

$quest_id = array_pop($arr);

$arr1 = array();
$arr1['question'] = "This is question";
$arr1['ans1'] = "This is ans1";
$arr1['ans2'] = "This is ans2";
$arr1['ans3'] = "This is ans3";
$arr1['ans4'] = "This is ans4";

echo json_encode($arr1);
?>