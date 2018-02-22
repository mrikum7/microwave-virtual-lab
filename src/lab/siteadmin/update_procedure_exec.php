<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("procedure");
$id=$_REQUEST['procedure_id'];

$data['experiment_id']=str_prepare($_POST['experiment_id']);
$data['procedure_title']=str_prepare($_POST['procedure_title']);
$data['sort_order']=$_POST['sort_order'];
$data['procedure_description']=$_POST['procedure_description'];
$data['is_active']=str_prepare($_POST['is_active']);

/*print "<pre>";
print_r($data);
exit();*/
procedure::update($data,$id);

header('location:admin_manage_procedure.php?experiment_id='.$data['experiment_id']);
setMsg('Procedure Edited successfully!');
exit();
?>


