<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("reference");
$id=$_REQUEST['reference_id'];

$data['experiment_id']=str_prepare($_POST['experiment_id']);
$data['reference_title']=str_prepare($_POST['reference_title']);
$data['sort_order']=$_POST['sort_order'];
$data['reference_description']=$_POST['reference_description'];
$data['is_active']=str_prepare($_POST['is_active']);

/*print "<pre>";
print_r($data);
exit();*/
reference::update($data,$id);

header('location:admin_manage_reference.php?experiment_id='.$data['experiment_id']);
setMsg('Reference Edited successfully!');
exit();
?>


