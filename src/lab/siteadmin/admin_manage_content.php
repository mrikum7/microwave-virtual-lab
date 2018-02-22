<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("content");

//$contents = content::getAll();
//NTemplate::assign('contents',$contents);



NComponentManager::preload("Grid1");
	$gr_id = 'contents';
	$fields = array (
		'content_id'=> array ('expr'=>'content_id'),
		'content_page'=> array ('expr'=>'content_page'),
		'content_title'=> array ('expr'=>'content_title'),
		'content_date'=>array('expr'=>'content_date')		
	);
	$default_order_by = 'content_id';		
	$default_order_sort = 'desc';
	$grid = new grid ($gr_id, $fields);
//	$grid->ResetAllFilters();
	$grid->mFrom="content_master";
	//$grid->mWhere=" ";
	$grid->mOrderBy = $default_order_by;
	$grid->mOrderSort = $default_order_sort;
	$grid->mPortion=10;
	//$grid->mPortion=1;
	$grid->InitGrid();
	$contents=$grid->GetGrid();
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
	NTemplate::assign("page_name","admin_manage_content");
	NTemplate::assign("getMsg",getMsgSmarty('error'));
	NTemplate::assign('contents',$contents);
NTemplate::display('admin_manage_content.tpl');

?>
