<?php
require_once("../includes/startup.php");
loadEntity('content');
$id=$_REQUEST['content_id'];

$data['content_title']=str_prepare($_POST['content_title']);
$data['content_description']=$_POST['content_description'];
/*print "<pre>";
print_r($data);
exit();*/
content::update($data,$id);
header('location:test.php');
getMsgSmarty('Profile edited');
exit();
?>