<?php
require_once("../includes/startup.php");
require_once("authenticate.php");


NComponentManager::preload("Grid1");
	$gr_id = 'scroller';
	$fields = array (
		'scroller_id'=> array ('expr'=>'scroller_id'),
		'image_name'=> array ('expr'=>'image_name'),
		'added_on'=> array ('expr'=>'added_on'),
		'is_active'=> array ('expr'=>'is_active')				
	);
	$default_order_by = ' scroller_id ';		
	$default_order_sort = 'desc';
	$grid = new grid ($gr_id, $fields);
//	$grid->ResetAllFilters();
	$grid->mFrom="promo_scroller";
	//$grid->mWhere=" ";
	$grid->mOrderBy = $default_order_by;
	$grid->mOrderSort = $default_order_sort;
	$grid->mPortion=10;
	//$grid->mPortion=1;
	$grid->InitGrid();
	$scroller=$grid->GetGrid();
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
	NTemplate::assign('scroller',$scroller);
	NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::assign("page_name","admin_manage_img");
NTemplate::display('admin_manage_img.tpl');

?>
