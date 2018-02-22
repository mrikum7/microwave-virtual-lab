<?php
include_once("includes/startup.php");
/* RECEIVE VALUE */
$validateValue=$_POST['validateValue'];
$validateId=$_POST['validateId'];
$validateError=$_POST['validateError'];

 $query = "select count(user_name) as count from user_master where user_name='".$validateValue."'";
	$count = NDatabase::getOne($query);
	
	
	/* RETURN VALUE */
	$arrayToJs = array();
	$arrayToJs[0] = $validateId;
	$arrayToJs[1] = $validateError;

if($count == 0){		// validate??
	$arrayToJs[2] = "true";			// RETURN TRUE
	echo '{"jsonValidateReturn":'.json_encode($arrayToJs).'}';			// RETURN ARRAY WITH success
}else{
	for($x=0;$x<1000000;$x++){
		if($x == 990000){
			$arrayToJs[2] = "false";
			echo '{"jsonValidateReturn":'.json_encode($arrayToJs).'}';		// RETURN ARRAY WITH ERROR
		}
	}
	
}

?>