<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("equipment");
loadEntity("equipment_img");

NComponentManager::preload("Grid1");
	$gr_id = 'equipment';
	$fields = array (
		'equipment_id'=> array ('expr'=>'equipment_id'),
		'equipment_title'=> array ('expr'=>'equipment_title'),
		'sort_order'=> array ('expr'=>'sort_order'),
		'add_date'=>array('expr'=>'add_date')		
	);
	$default_order_by = 'equipment_id';		
	$default_order_sort = 'desc';
	$grid = new grid ($gr_id, $fields);
//	$grid->ResetAllFilters();
	$grid->mFrom="equipment_master";
	//$grid->mWhere=" ";
	$grid->mOrderBy = $default_order_by;
	$grid->mOrderSort = $default_order_sort;
	$grid->mPortion=10;
	//$grid->mPortion=1;
	$grid->InitGrid();
	$equipment=$grid->GetGrid();
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
NTemplate::assign("IS_EDITOR",true);
NTemplate::assign("equipment",$equipment);
 NTemplate::assign("page_name","admin_manage_equipments");
 NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::display('admin_manage_equipments.tpl');

?>