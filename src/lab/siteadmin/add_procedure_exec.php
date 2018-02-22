<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("experiment");
loadEntity("procedure");
$id=str_prepare($_GET['experiment_id']);
$data['experiment_id']=str_prepare($_POST['experiment_id']);
$data['procedure_title']=str_prepare($_POST['procedure_title']);
$data['procedure_description']=str_prepare($_POST['procedure_description']);
$data['sort_order']=str_prepare($_POST['sort_order']);
$data['add_date']=date('Y-m-d H:i:s');

/*print "<pre>";
print_r($data);
exit();*/
procedure::insert($data);

header('location:admin_manage_procedure.php?experiment_id='.$data['experiment_id']);
setMsg('Procedure Added successfully!');
exit();
?>