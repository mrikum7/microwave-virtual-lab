<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("experiment");
loadEntity("reference");
$id=str_prepare($_GET['experiment_id']);
$data['experiment_id']=str_prepare($_POST['experiment_id']);
$data['reference_title']=str_prepare($_POST['reference_title']);
$data['reference_description']=str_prepare($_POST['reference_description']);
$data['sort_order']=str_prepare($_POST['sort_order']);
$data['add_date']=date('Y-m-d H:i:s');

/*print "<pre>";
print_r($data);
exit();*/
reference::insert($data);

header('location:admin_manage_reference.php?experiment_id='.$data['experiment_id']);
setMsg('Reference Added successfully!');
exit();
?>