<?php 
set_time_limit(0);
require("includes/startup.php");
loadEntity("experiment");
$experiment_id = $_GET['experiment_id'];
$experiment = experiment::getARow($experiment_id);
$file_path=UPLOADS_MANUAL_DIR.$experiment['experiment_manual'];

if(isset($experiment['experiment_manual']) && file_exists($file_path))
{
	$file_ext = trim(strtolower(strrchr($experiment['experiment_manual'],'.')));
	if($file_ext == ".pdf")
	{
		$ctype="application/pdf"; 	
	}
	else 
	{

		$ctype="application/octet-stream";
	}
	
	
//	@ob_end_clean();
	header('Pragma: public');
	header('Expires: 0');
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
	header("Cache-Control: private",false); // required for certain browsers 
	header('Content-Type: '.$ctype); 	
	header("Content-Disposition: attachment; filename=\"".basename($file_path)."\"");
	header("Content-Transfer-Encoding: binary");
	header("Content-Length: ".filesize($file_path));
	readfile($file_path);
	exit();
}
else
{
	die("File not found!");
}
?>