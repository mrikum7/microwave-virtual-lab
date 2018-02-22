<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("theory");
$id=$_REQUEST['theory_id'];

$data['experiment_id']=str_prepare($_POST['experiment_id']);
$data['theory_title']=str_prepare($_POST['theory_title']);
$data['sort_order']=$_POST['sort_order'];
$data['theory_description']=$_POST['theory_description'];
$data['is_active']=str_prepare($_POST['is_active']);

theory::update($data,$id);

header('location:admin_manage_theory.php?experiment_id='.$data['experiment_id']);
setMsg('Theory Edited successfully!');
exit();
?>


