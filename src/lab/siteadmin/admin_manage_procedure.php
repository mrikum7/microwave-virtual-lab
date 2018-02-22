<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("procedure");
loadEntity("experiment");

$id=str_prepare($_GET['experiment_id']);

NComponentManager::preload("Grid1");
	$gr_id = 'experiment';
	$fields = array (		
		'procedure_id'=> array ('expr'=>'procedure_id'),
		'experiment_id'=> array ('expr'=>'e.experiment_id'),
		'procedure_title'=> array ('expr'=>'procedure_title'),
		'add_date'=>array('expr'=>'e.add_date')		
	);
	$default_order_by = 'procedure_id';		
	$default_order_sort = 'desc';
	$grid = new grid ($gr_id, $fields);
//	$grid->ResetAllFilters();
	$grid->mFrom=" experiment_procedure_master e, experiment_master l";
	$grid->mWhere=" e.experiment_id = l.experiment_id AND l.experiment_id=".$id;
	$grid->mOrderBy = $default_order_by;
	$grid->mOrderSort = $default_order_sort;
	$grid->mPortion=10;
	//$grid->mPortion=1;
	$grid->InitGrid();
	$procedure=$grid->GetGrid();
	//print "<pre>";
	//print_r($procedure);
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
	NTemplate::assign("IS_EDITOR",true);
	NTemplate::assign('experiment_id', $id);
NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::assign("procedure",$procedure);
NTemplate::display('admin_manage_procedure.tpl');

?>