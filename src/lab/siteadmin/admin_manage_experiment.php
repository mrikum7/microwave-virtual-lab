<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("experiments_category");
loadEntity("experiment");

$sql="SELECT * from experiment_categories_master ";
$arr = NDatabase::getAllAssoc($sql);
NTemplate::assign("locations",$arr);

NComponentManager::preload("Grid1");
	$gr_id = 'experiment';
	$fields = array (		
		'experiment_id'=> array ('expr'=>'experiment_id'),
		
		'experiment_name'=> array ('expr'=>'experiment_name'),
		'experiment_title'=> array ('expr'=>'experiment_title')	
	);
	$default_order_by = 'experiment_id';		
	$default_order_sort = 'desc';
	$grid = new grid ($gr_id, $fields);
//	$grid->ResetAllFilters();
	$grid->mFrom=" experiment_master ";
	//$grid->mWhere=" ";
	$grid->mOrderBy = $default_order_by;
	$grid->mOrderSort = $default_order_sort;
	$grid->mPortion=10;
	//$grid->mPortion=1;
	$grid->InitGrid();
	$experiment=$grid->GetGrid();
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

NTemplate::assign("experiment",$experiment);
NTemplate::assign("IS_EDITOR",true);
 NTemplate::assign("page_name","admin_manage_experiment");
 NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::display('admin_manage_experiment.tpl');

?>