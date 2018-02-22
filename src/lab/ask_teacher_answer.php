<?php
require_once("includes/startup.php");
//require_once('authenticate.php');
loadEntity('user');
loadEntity('answer');
 
$sql="SELECT * from subject_master ";
$arr = NDatabase::getAllAssoc($sql);
NTemplate::assign("locations",$arr);

$exper = user::getExperimentCount($_SESSION[SESSION_PREFIX.'user_id']); 
NTemplate::assign("experiments",$exper);

$assignment = user::getAssignmentCount($_SESSION[SESSION_PREFIX.'user_id']); 
NTemplate::assign("assignment",$assignment);

$eval = user::getEvaluationData($_SESSION[SESSION_PREFIX.'user_id']); 
NTemplate::assign("evaluation",$eval);

 
 NComponentManager::preload("Grid1");
	$gr_id = 'answer';
	$fields = array (
		'question_id'=> array ('expr'=>'question_id'),
//		'user_id'=> array ('expr'=>'user_id'),
		'subject_id'=> array ('expr'=>'sm.subject_id'),
		'question'=> array ('expr'=>'question'),
		'user_name'=> array ('expr'=>'user_name'),
		'subject_name'=> array ('expr'=>'subject_name'),
		'question_date'=>array('expr'=>'question_date')		
	);
	$default_order_by = 'question_id';		
	$default_order_sort = 'desc';
	$grid = new grid ($gr_id, $fields);
//	$grid->ResetAllFilters();
//	$grid->mFrom="student_question_master";
	$grid->mFrom=" subject_master sm, student_question_master sqm, user_master um, teacher_subject_master tsm ";
	$grid->mWhere=" sm.subject_id = sqm.subject_id AND sqm.user_id = um.user_id AND tsm.subject_id=sm.subject_id AND tsm.user_id=".$_SESSION[SESSION_PREFIX.'user_id'];

	$grid->mOrderBy = $default_order_by;
	$grid->mOrderSort = $default_order_sort;
	$grid->mPortion=10;
	//$grid->mPortion=1;
	$grid->InitGrid();
	$answer=$grid->GetGrid();
/*print "<pre>";
	print_r($answer);*/
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
	NTemplate::assign('answer',$answer);
 NTemplate::display('ask_teacher_answer.tpl');

?>