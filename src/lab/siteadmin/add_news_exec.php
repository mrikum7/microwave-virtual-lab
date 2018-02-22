<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity('news');


$data['news_title']=str_prepare($_POST['news_title']);
$data['sort_order']=$_POST['sort_order'];
$data['news_description']=$_POST['news_description'];
$data['news_date']=date('Y-m-d H:i:s');


/*print "<pre>";
print_r($data);
exit();*/
news::insert($data);
setMsg('News Added successfully!');
header('location:admin_manage_news.php');
exit();
?>