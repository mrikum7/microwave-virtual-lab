<?php
require_once("includes/startup.php");
loadEntity("content");
loadEntity("scroller");
loadEntity("news");
NTemplate::assign("page_name","index");



$arr=array();
$arr = content::getIndex1();
NTemplate::assign("arr",$arr);

$news=news::getNews();
NTemplate::assign("news",$news);


$newsletter=content::getNewsletter();
NTemplate::assign("newsletter",$newsletter);

$blog=content::getBlog();
NTemplate::assign("blog",$blog);

$img=scroller::getImg();
NTemplate::assign("img",$img);

/*print "<pre>";
print_r($news);
exit();*/

NTemplate::display('index_home.tpl');

?>
