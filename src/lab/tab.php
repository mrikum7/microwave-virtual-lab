<?php
require_once("includes/startup.php");
require_once("authenticate_login.php");
NTemplate::assign('spry','yes');
loadEntity("theory");
loadEntity("procedure");
loadEntity("assignment");
loadEntity("reference");
loadEntity("experiment");

$id=$_REQUEST['id'];

$arr=array();
$arr = theory::getThoery($id);
NTemplate::assign("arr",$arr);

$ars = procedure::getProcedure($id);
NTemplate::assign("ars",$ars);

$ary = assignment::getAssignment($id);
NTemplate::assign("ary",$ary);
NTemplate::assign("experiment_id",$id);

NTemplate::assign("experiment_name",experiment::getExperimentName($id));
NTemplate::assign("experiment_simulator",experiment::getExperimentSimulator($id));


$ref = reference::getReference($id);
NTemplate::assign("ref",$ref);



$video = experiment::getExperimentVideo($id);
NTemplate::assign("video",$video);


/*print "<pre>";
print_r($video);
exit();*/

NTemplate::display('tab.tpl');

?>