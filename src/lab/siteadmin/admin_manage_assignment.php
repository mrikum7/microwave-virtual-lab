<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("assignment");
loadEntity("experiment");



NComponentManager::preload("Grid1");
	$gr_id = 'experiment';
	$fields = array (		
		'assignment_id'=> array ('expr'=>'assignment_id'),
		'experiment_id'=> array ('expr'=>'e.experiment_id'),
		'assignment_title'=> array ('expr'=>'assignment_title'),
		'add_date'=>array('expr'=>'e.add_date')		
	);
	$default_order_by = 'assignment_id';		
	$default_order_sort = 'desc';
	$grid = new grid ($gr_id, $fields);
//	$grid->ResetAllFilters();
	$grid->mFrom=" experiment_assignment_master e inner JOIN experiment_master l ON e.experiment_id = l.experiment_id";
	//$grid->mWhere=" ";
	$grid->mOrderBy = $default_order_by;
	$grid->mOrderSort = $default_order_sort;
	$grid->mPortion=10;
	//$grid->mPortion=1;
	$grid->InitGrid();
	$assignment=$grid->GetGrid();
	//print "<pre>";
	//print_r($assignment);
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
NTemplate::assign("assignment",$assignment);
NTemplate::display('admin_manage_assignment.tpl');

?>