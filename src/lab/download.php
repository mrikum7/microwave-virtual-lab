<?php 
set_time_limit(0);
require("includes/startup.php");
//require_once('authenticate.php');
$file=$_GET['file'];
$file_path=UPLOADS_SIMULATORS_FLASH_URL.$file;
//header("Content-type: $type");
header("Content-Transfer-Encoding: Binary");
//header("Content-length: ".filesize($file_path));
header("Content-disposition: attachment; filename=".basename($file_path));
header('Pragma: no-cache');
header('Expires: 0');
   
readfile($file_path);
exit();
?>