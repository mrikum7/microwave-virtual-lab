<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("experiment");


$id=str_prepare($_GET['experiment_id']);

NComponentManager::preload("Grid1");
	$gr_id = 'experiment';
	$fields = array (		
		'question_id'=> array ('expr'=>'question_id'),
		'experiment_id'=> array ('expr'=>'e.experiment_id'),
		'question_title'=> array ('expr'=>'question_title'),
		'add_date'=>array('expr'=>'e.add_date')		
	);
	$default_order_by = 'question_id';		
	$default_order_sort = 'desc';
	$grid = new grid ($gr_id, $fields);
//	$grid->ResetAllFilters();
	$grid->mFrom=" experiment_self_eval_master e, experiment_master l";
	$grid->mWhere=" e.experiment_id = l.experiment_id AND l.experiment_id=".$id;
	$grid->mOrderBy = $default_order_by;
	$grid->mOrderSort = $default_order_sort;
	$grid->mPortion=10;
	//$grid->mPortion=1;
	$grid->InitGrid();
	$question=$grid->GetGrid();
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
	NTemplate::assign('experiment_id', $id);

NTemplate::assign("question",$question);
NTemplate::display('admin_manage_self_eval.tpl');

?>