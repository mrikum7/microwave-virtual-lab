<?php
require_once("includes/startup.php");
loadEntity('query');


$data['question']=str_prepare($_POST['quest']);
$data['subject_id']=str_prepare($_POST['category_id']);
$data['description']=str_prepare($_POST['decs']);
$data['add_date']=date('Y:m:d H:m:s');
$data['status']=0;
$data['is_active']=1;

query::insert($data);
header('location:query.php');
getMsgSmarty('Question Added');
exit();
?>