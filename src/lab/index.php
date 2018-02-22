<?php
require_once("includes/startup.php");
require_once('lib/magpierss/rss_fetch.inc');

$url = BLOG_FEED_URL;

loadEntity("content");
loadEntity("scroller");
loadEntity("news");
loadEntity("experiment");


$arr=array();
$arr = content::getIndex();
NTemplate::assign("arr",$arr);


$ars = content::getValue();
NTemplate::assign("ars",$ars);


$news=news::getNews();
NTemplate::assign("news",$news);


$newsletter=content::getNewsletter();
NTemplate::assign("newsletter",$newsletter);

$blog=content::getBlog();
NTemplate::assign("blog",$blog);

$img=scroller::getImg();
NTemplate::assign("img",$img);

$featured_experiment = experiment::getAllFeatured();
NTemplate::assign("featured_experiment",$featured_experiment);

/*
print "<pre>";
print_r($featured_experiment);
exit();
*/
$rss = fetch_rss($url);

//echo "Site: ", $rss->channel['title'], "<br>";
$items=array();
foreach ($rss->items as $item ) {
	$tmp=array();
	$tmp['title'] = $item['title'];
	$tmp['link'] = $item['link'];
	$tmp['date'] = $item['pubdate'];
	$tmp['description'] = $item['description'];
	
	$items[]=$tmp;
}
//print_r($items);
NTemplate::assign("page_name","index");
NTemplate::assign('items',$items);
NTemplate::display('index.tpl');

?>
