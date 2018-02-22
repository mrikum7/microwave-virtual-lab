<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("experiments_category");
$id= $_REQUEST['id'];

$data['category_name']=str_prepare($_POST['category_name']);
$data['category_column']=str_prepare($_POST['category_column']);
$data['category_sort_order']=str_prepare($_POST['category_sort_order']);
$data['add_date']=date('Y-m-d H:i:s');
$data['is_active']=str_prepare($_POST['is_active']);;
/*print"<PRE>";
print_r($data);
exit();*/
category::update($data,$id);
header('location:admin_manage_experiment_categories.php');
setMsg('Category Edited successfully!');
exit();
?>
