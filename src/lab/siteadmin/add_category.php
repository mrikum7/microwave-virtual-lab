<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("experiments_category");

$data['category_name']=str_prepare($_POST['category_name']);
$data['category_column']=str_prepare($_POST['category_column']);
$data['category_sort_order']=str_prepare($_POST['category_sort_order']);
$data['add_date']=date('Y-m-d H:i:s');
$data['is_active']=1;
/*print"<PRE>";
print_r($data);
exit();*/
category::insert($data);
header('location:admin_manage_experiment_categories.php');
setMsg('Category Added Sucessfully');
exit();
?>
