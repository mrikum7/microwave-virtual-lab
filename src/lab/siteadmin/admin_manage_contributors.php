<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("contributors");


NComponentManager::preload("Grid1");
	$gr_id = 'contributors';
	$fields = array (
		'contributor_id'=> array ('expr'=>'contributor_id'),
		'contributor_name'=> array ('expr'=>'contributor_name'),
		'contributor_title'=> array ('expr'=>'contributor_title'),
		'add_date'=>array('expr'=>'add_date')		
	);
	$default_order_by = 'contributor_id';		
	$default_order_sort = 'desc';
	$grid = new grid ($gr_id, $fields);
//	$grid->ResetAllFilters();
	$grid->mFrom="contributors_master";
	//$grid->mWhere=" ";
	$grid->mOrderBy = $default_order_by;
	$grid->mOrderSort = $default_order_sort;
	$grid->mPortion=10;
	//$grid->mPortion=1;
	$grid->InitGrid();
	$contributors=$grid->GetGrid();
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
	NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::assign("contributors",$contributors);
 NTemplate::assign("page_name","admin_manage_contributors");
NTemplate::display('admin_manage_contributors.tpl');

?>
