<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("news");
NComponentManager::preload("Grid1");
	$gr_id = 'news';
	$fields = array (
		'news_id'=> array ('expr'=>'news_id'),
		'news_title'=> array ('expr'=>'news_title'),
		'news_date'=>array('expr'=>'news_date')		
	);
	$default_order_by = 'news_id';		
	$default_order_sort = 'desc';
	$grid = new grid ($gr_id, $fields);
//	$grid->ResetAllFilters();
	$grid->mFrom="news_events";
	//$grid->mWhere=" ";
	$grid->mOrderBy = $default_order_by;
	$grid->mOrderSort = $default_order_sort;
	$grid->mPortion=10;
	//$grid->mPortion=1;
	$grid->InitGrid();
	$news=$grid->GetGrid();
//	print "<pre>";
//	print_r($employees);
	$pager=$grid->GetPager();
	$last_page=$grid->last_page;
//	print $grid->GetQuery();
	//print_r($pager);
	$cur_page=$grid->mPage;
	 //echo"<pre>";
	 //print_r($user_list);
	NTemplate::assign('cur_page', $cur_page);
	NTemplate::assign('last_page', $last_page);
	NTemplate::assign('queryString', "");
	NTemplate::assign('pager', $pager);
	NTemplate::assign("news",$news);
	NTemplate::assign("IS_EDITOR",true);
	NTemplate::assign("page_name","admin_manage_news");
	NTemplate::assign("getMsg",getMsgSmarty('error'));
	NTemplate::display('admin_manage_news.tpl');

?>
