<?php
require_once("includes/startup.php");
loadEntity('teacher_subject');

$data['user_id']=$_SESSION[SESSION_PREFIX.'user_id'];
$subjects=$_POST['subject_id'];
$data['add_date']=date('Y:m:d H:m:s');
$data['is_active']=1;


foreach($subjects as $data['subject_id'])
{
	teacher_subject::insert($data);
}
header('location:teacher_subject_master.php');
getMsgSmarty('Subjects added');
exit();
?>