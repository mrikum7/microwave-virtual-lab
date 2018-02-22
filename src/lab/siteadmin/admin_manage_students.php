<?php
require_once("../includes/startup.php");
require_once("authenticate.php");

NComponentManager::preload("Grid1");
	$gr_id = 'students';
	$fields = array (
		'user_id'=> array ('expr'=>'user_id'),
		'user_firstname'=> array ('expr'=>'user_firstname'),
		'user_lastname'=> array ('expr'=>'user_lastname'),
		'user_institution_name'=> array ('expr'=>'user_institution_name'),
		'user_qualification'=> array ('expr'=>'user_qualification'),
		'user_email'=> array ('expr'=>'user_email'),
		'phone_number'=> array ('expr'=>'phone_number'),
		'is_active'=> array ('expr'=>'is_active'),
		'Zip_Code'=>array('expr'=>'Zip_Code')		
	);
	$default_order_by = 'user_firstname';		
	$default_order_sort = 'desc';
	$grid = new grid ($gr_id, $fields);
//	$grid->ResetAllFilters();
	$grid->mFrom="user_master";
	$grid->mWhere="user_type = 'Student' ";
	$grid->mOrderBy = $default_order_by;
	$grid->mOrderSort = $default_order_sort;
	$grid->mPortion=10;
	//$grid->mPortion=1;
	$grid->InitGrid();
	$students=$grid->GetGrid();
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
	NTemplate::assign('students',$students);
    NTemplate::assign("page_name","admin_manage_students");
	NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::display('admin_manage_students.tpl');

?>
