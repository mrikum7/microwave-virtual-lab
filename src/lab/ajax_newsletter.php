<?php 
require_once("includes/startup.php");
loadEntity("newsletter");

$isValidate  = TRUE; 
if (!isset($_POST['email']) || $_POST['email']=='')
{
	$arrayError[0][0] = "#email";			// FIELDID 
	$arrayError[0][1] = "email is required"; 	// TEXT ERROR	
	$arrayError[0][2] = "error";			// BOX COLOR
	$isValidate  = FALSE; 
}

if ($isValidate )
{	
	
	$newsletter['email'] = str_prepare($_POST['email']);
	$newsletter['newsletter_date'] = date('Y-m-d H:i:s');
	$newsletter['is_active'] = 1;
	$message = "Data Enter Succesfully!"; 
	if(newsletter::insert($newsletter))
	{	
	
	$isValidate = TRUE; 
	$message = "Newsletter subscribed succesfully!"; 
	}
	else
	{
	   	$isValidate  = FALSE; 
		$arrayError[0][0] = "#newsletter_message";	// FIELDID 
		$arrayError[0][1] = "Data entry failed"; 	// TEXT ERROR	
		$arrayError[0][2] = "error";			// BOX COLOR
	}
}

if($isValidate ){
	echo "true";
}else{
	echo '{"jsonValidateReturn":'.json_encode($arrayError).'}';		// RETURN ARRAY WITH ERROR
}
?>