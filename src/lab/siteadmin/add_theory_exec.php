<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("experiment");
loadEntity("theory");
$id=str_prepare($_GET['experiment_id']);
$data['experiment_id']=str_prepare($_POST['experiment_id']);
$data['theory_title']=str_prepare($_POST['theory_title']);
$data['theory_description']=str_prepare($_POST['theory_description']);
$data['sort_order']=str_prepare($_POST['sort_order']);
$data['add_date']=date('Y-m-d H:i:s');

/*print "<pre>";
print_r($data);
exit();*/
theory::insert($data);

header('location:admin_manage_theory.php?experiment_id='.$data['experiment_id']);
setMsg('Theory Added successfully!');
exit();
?>