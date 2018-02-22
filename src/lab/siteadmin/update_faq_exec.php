<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("faq");
$id=$_POST['id'];

$data['faq_question']=str_prepare($_POST['question']);
$data['sort_order']=str_prepare($_POST['sort_order']);
$data['subject_id']=str_prepare($_POST['subject']);
$data['faq_answer']=str_prepare($_POST['answer']);
$data['add_date']=date('Y-m-d H:i:s');
$data['is_active']=1;
/*print"<PRE>";
print_r($data);
exit();*/
faq::Update($data,$id);
header('location:admin_manage_faq.php');
setMsg('FAQ Edited successfully!');
exit();
?>
