<?php
require_once("includes/startup.php");
NTemplate::assign('spry','yes');

loadEntity('tab_feedback');

$data['experiment_id']=str_prepare($_POST['experiment_id']);
$data['student_name']=str_prepare($_POST['student_name']);
$data['department']=str_prepare($_POST['department']);
$data['lab_name']=str_prepare($_POST['lab_name']);
$data['lab_type']=str_prepare($_POST['lab_type']);
$data['online_performance']=str_prepare($_POST['online_performance']);
$data['interaction_control']=str_prepare($_POST['interaction_control']);
$data['degree_simulation']=str_prepare($_POST['degree_simulation']);
$data['measurement_analysis']=str_prepare($_POST['measurement_analysis']);
$data['helpful_manual']=str_prepare($_POST['helpful_manual']);
$data['consistency_links']=str_prepare($_POST['consistency_links']);
$data['interpretable_results']=str_prepare($_POST['interpretable_results']);
$data['clear_understanding']=str_prepare($_POST['clear_understanding']);
$data['experiment_helpful']=str_prepare($_POST['experiment_helpful']);
$data['problem_experienced']=str_prepare($_POST['problem_experienced']);
$data['tell_anything']=str_prepare($_POST['tell_anything']);
$data['feel_confident']=str_prepare($_POST['feel_confident']);
$data['experiment_motivating']=str_prepare($_POST['experiment_motivating']);
$data['go_through_manual']=str_prepare($_POST['go_through_manual']);
$data['feel_actual_lab']=str_prepare($_POST['feel_actual_lab']);
$data['feel_absence_of_instructor']=str_prepare($_POST['feel_absence_of_instructor']);
$data['run_experiments_smoothly']=str_prepare($_POST['run_experiments_smoothly']);
$data['measure_analyse_data']=str_prepare($_POST['measure_analyse_data']);
$data['follow_steps']=str_prepare($_POST['follow_steps']);
$data['result_comparison']=str_prepare($_POST['result_comparison']);
$data['is_challenging']=str_prepare($_POST['is_challenging']);
$data['three_problems']=str_prepare($_POST['three_problems']);
$data['three_interesting_things']=str_prepare($_POST['three_intereting_things']);
$data['scope_of_innovative_research']=str_prepare($_POST['scope_of_innovative_research']);
$data['feedback_date']=date('Y-m-d H:i:s');
$data['is_active']=1;


tabfeed::insert($data);
/*print "<pre>";
print_r($data);
exit();*/

header('location:tab.php');
exit();
?>