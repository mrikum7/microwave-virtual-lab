<?php
require_once("includes/startup.php");
//require_once("authenticate.php");
loadEntity('General');
	GeneralEntity::doLogout();
	setMsg('You have been logged out!');
	header("location: login.php");
	exit();
?>
