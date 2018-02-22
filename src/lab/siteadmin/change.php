<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity('newsletter');
$id=$_REQUEST['id'];

$active = newsletter::getOne($id);
if($active == 1)
{
$data['is_active']=0;
}
else
{
$data['is_active']=1;	
}
newsletter::update($data,$id);
header('location:admin_manage_newsletter_subcription.php');
exit();
?>