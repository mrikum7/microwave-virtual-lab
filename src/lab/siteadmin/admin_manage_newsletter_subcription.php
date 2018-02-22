<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("newsletter");

//$newsletters = newsletter::getAll();
//NTemplate::assign('newsletters',$newsletters);



NComponentManager::preload("Grid1");
	$gr_id = 'newsletter';
	$fields = array (
		'newsletter_subscription_id'=> array ('expr'=>'newsletter_subscription_id'),
		'email'=> array ('expr'=>'email'),
		'newsletter_date'=> array ('expr'=>'newsletter_date'),
		'is_active'=>array('expr'=>'is_active')		
	);
	$default_order_by = 'newsletter_subscription_id';		
	$default_order_sort = 'desc';
	$grid = new grid ($gr_id, $fields);
//	$grid->ResetAllFilters();
	$grid->mFrom="newsletter_subscriptions";
	//$grid->mWhere=" ";
	$grid->mOrderBy = $default_order_by;
	$grid->mOrderSort = $default_order_sort;
	$grid->mPortion=10;
	//$grid->mPortion=1;
	$grid->InitGrid();
	$newsletter=$grid->GetGrid();
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
	NTemplate::assign('newsletter',$newsletter);
NTemplate::assign("getMsg",getMsgSmarty('error'));
    NTemplate::assign("page_name","admin_manage_newsletter_subcription");
NTemplate::display('admin_manage_newsletter_subcription.tpl');

?>
