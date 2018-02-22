<?php 
require_once("includes/startup.php");
loadEntity("user");
$isValidate  = TRUE; 

if (!isset($_POST['user_name']) || $_POST['user_name']=='')
{
	$arrayError[0][0] = "#user_name";			// FIELDID 
	$arrayError[0][1] = "Username is required"; 	// TEXT ERROR	
	$arrayError[0][2] = "error";			// BOX COLOR
	$isValidate  = FALSE; 
}

if (!isset($_POST['user_password']) || $_POST['user_password']=='')
{
	$arrayError[1][0] = "#user_password";			// FIELDID 
	$arrayError[1][1] = "Password is required"; 	// TEXT ERROR	
	$arrayError[1][2] = "error";			// BOX COLOR
	$isValidate  = FALSE; 
}


if ($isValidate )
{	
	$user_name = $_POST['user_name'];
	$user_password = $_POST['user_password'];
	$userInfo = user::checkUserLogin($user_name,$user_password);
	if($userInfo['user_id'])
	{	
	$isValidate  = TRUE; 
	$message = "Login Succesfully!"; 
	$_SESSION[SESSION_PREFIX.'user_id'] = $userInfo['user_id'];
	$_SESSION[SESSION_PREFIX.'user_type'] = $userInfo['user_type'];
	}
	else
	{
	   	$isValidate  = FALSE; 
		$arrayError[0][0] = "#user_name";	// FIELDID 
		$arrayError[0][1] = "Login failed"; 	// TEXT ERROR	
		$arrayError[0][2] = "error";			// BOX COLOR
	}
}

if($isValidate ){
	echo "true";
}else{
	echo '{"jsonValidateReturn":'.json_encode($arrayError).'}';		// RETURN ARRAY WITH ERROR
}
?>