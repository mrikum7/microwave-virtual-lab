<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("faq");


$contents = faq::getSub();
NTemplate::assign('sub',$contents);
/*print "<PRE>";
print_r($contents);*/

NComponentManager::preload("Grid1");
	$gr_id = 'contents';
	$fields = array (
		'faq_id'=> array ('expr'=>'faq_id'),
		'faq_question'=> array ('expr'=>'faq_question'),
		'subject_name'=> array ('expr'=>'subject_name'),
		'add_date'=> array ('expr'=>'fm.add_date'),
		'is_active'=>array('expr'=>'fm.is_active')		
	);
	$default_order_by = 'faq_id';		
	$default_order_sort = 'desc';
	$grid = new grid ($gr_id, $fields);
//	$grid->ResetAllFilters();
	$grid->mFrom="faq_master fm, subject_master sm";
	$grid->mWhere="fm.subject_id = sm.subject_id ";
	$grid->mOrderBy = $default_order_by;
	$grid->mOrderSort = $default_order_sort;
	$grid->mPortion=10;
	//$grid->mPortion=1;
	$grid->InitGrid();
	$contents=$grid->GetGrid();
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
	NTemplate::assign('contents',$contents);
NTemplate::assign("page_name","admin_manage_faq");
NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::display('admin_manage_faq.tpl');

?>
