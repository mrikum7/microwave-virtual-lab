<?php
require_once("includes/startup.php");
loadEntity("eval_question");
$e_id = $_GET['e_id'];

NTemplate::assign("e_id",$e_id);
NTemplate::assign("score",$_SESSION[SESSION_PREFIX.'score']);
NTemplate::display('self_eval_score.tpl');

?>