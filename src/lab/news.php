<?php
require_once("includes/startup.php");
require_once("authenticate_login.php");
loadEntity("news");
NTemplate::assign("page_name","news");
$arr=array();
$news=news::getNews();
NTemplate::assign("news",$news);
NTemplate::display('news.tpl');

?>