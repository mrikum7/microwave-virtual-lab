<?php
require_once("../includes/startup.php");
require_once("authenticate.php");


NComponentManager::preload("Grid1");
	$gr_id = 'subjects';
	$fields = array (
		'subject_id'=> array ('expr'=>'subject_id'),
		'subject_name'=> array ('expr'=>'subject_name'),
		'add_date'=> array ('expr'=>'add_date'),
		'is_active'=> array ('expr'=>'is_active')				
	);
	$default_order_by = ' subject_id ';		
	$default_order_sort = 'desc';
	$grid = new grid ($gr_id, $fields);
//	$grid->ResetAllFilters();
	$grid->mFrom="subject_master";
	//$grid->mWhere=" ";
	$grid->mOrderBy = $default_order_by;
	$grid->mOrderSort = $default_order_sort;
	$grid->mPortion=10;
	//$grid->mPortion=1;
	$grid->InitGrid();
	$subjects=$grid->GetGrid();
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
	NTemplate::assign('subjects',$subjects);
	 NTemplate::assign("page_name","admin_manage_subjects");
	 NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::display('admin_manage_subjects.tpl');

?>
