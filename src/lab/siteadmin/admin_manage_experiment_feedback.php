<?php
require_once("../includes/startup.php");
require_once("authenticate.php");

NComponentManager::preload("Grid1");
	$gr_id = 'exp_feedback';
	$fields = array (
		'experiment_id '=> array ('expr'=>'e.experiment_id'),			 
		'feedback_id '=> array ('expr'=>'feedback_id '),
		'student_name'=> array ('expr'=>'student_name'),
		'experiment_name'=> array ('expr'=>'experiment_name'),
		'department'=> array ('expr'=>'department'),
		'lab_name'=> array ('expr'=>'lab_name'),
		'lab_type'=> array ('expr'=>'lab_type')		
);
	$default_order_by = 'feedback_id';		
	$default_order_sort = 'desc';
	$grid = new grid ($gr_id, $fields);
//	$grid->ResetAllFilters();
	$grid->mFrom="experiment_feedback_master e inner JOIN experiment_master l ON e.experiment_id = l.experiment_id";
	//$grid->mWhere="user_type = 'Student' ";
	$grid->mOrderBy = $default_order_by;
	$grid->mOrderSort = $default_order_sort;
	$grid->mPortion=10;
	//$grid->mPortion=1;
	$grid->InitGrid();
	$feedback=$grid->GetGrid();
//	print "<pre>";
//	print_r($employees);
	$pager=$grid->GetPager();
	$last_page=$grid->last_page;
	//print $grid->GetQuery();
	//print_r($pager);
	$cur_page=$grid->mPage;
	 //echo"<pre>";
	 //print_r($user_list);
	NTemplate::assign('cur_page', $cur_page);
	NTemplate::assign('last_page', $last_page);
	NTemplate::assign('queryString', "");
	NTemplate::assign('pager', $pager);
	NTemplate::assign('feedback',$feedback);
	NTemplate::assign("page_name","admin_manage_experiment_feedback");
	NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::display('admin_manage_experiment_feedback.tpl');

?>
