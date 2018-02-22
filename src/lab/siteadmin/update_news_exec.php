<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity('news');
$id=$_REQUEST['news_id'];

$data['news_title']=str_prepare($_POST['news_title']);
$data['sort_order']=$_POST['sort_order'];
$data['news_description']=$_POST['news_description'];
$data['is_active']=str_prepare($_POST['is_active']);

/*print "<pre>";
print_r($data);
exit();*/

news::update($data,$id);
header('location:admin_manage_news.php');
setMsg('News edited successfully!');
exit();
?>