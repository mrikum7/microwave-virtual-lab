<?php
	ob_start('ob_gzhandler');
	
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	header('Content-Type: text/html; charset=UTF-8'); // Standard
	
	require_once('config_file.php');
	
	
	define('APP_URL',SERVER_URL.APP_FOL);
	define('SERVER_DOC_ROOT',$_SERVER['DOCUMENT_ROOT']);
	define('APP_DIR',SERVER_DOC_ROOT.APP_FOL);
	
	define('IMAGES',APP_URL.'images');
	define('CSS',APP_URL.'css');
	
	define('INCLUDES_DIR',APP_DIR.'includes/');
	define('APPLICATION_COMP_DIR',APP_DIR.'application/');
	define('ENTITY_DIR',APPLICATION_COMP_DIR.'entities/');
	define('__COMPONENTS_PATH', APPLICATION_COMP_DIR.'components/');
	define('LIB_DIR',APP_DIR.'lib/');
	define('REL_LIB_DIR',APP_FOL.'lib/');
	define('DOWNLOADS_DIR',APP_DIR.'downloads/');
	define('UPLOADS_EXCEL_REPORTS_DIR',APP_DIR.'uploads/excel_reports/');
	define('UPLOADS_EXCEL_REPORTS_URL',APP_URL.'uploads/excel_reports/');
//	define('SMARTY_DIR',APPLICATION_DIR.'smarty/');
	define('UPLOADS_USER_ATTACHMENT_DIR',APP_DIR.'uploads/images/');
	
	
	define('MAIL_TEMPLATES_DIR',APP_DIR.'templates_mails/');
	define('GRID_NUM_ROWS',20);
	
	require_once(INCLUDES_DIR.'functions.php');
	
	require_once __COMPONENTS_PATH."NComponentManager/NComponentManager.php";
	
	NComponentManager::load("NConfig",   "NSmarty");
	NComponentManager::load("NTemplate", "NSmarty");
	NComponentManager::load("NDatabase", "NADOdb");
	NComponentManager::load("General");
	loadEntity('General');
	session_name(SESSION_PREFIX);
	session_start();
	NComponentManager::load("NSession");

/*	include_once(LIB_DIR.'adodb/adodb.inc.php');
	$conn = &ADONewConnection('mysql');
	$ADODB_COUNTRECS = false;
	$conn_status=$conn->Connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
	if(!$conn_status) {
		die("FATAL Error!<br>Database connection failed");
	}
*/	
	if (!function_exists('session_start')) {
		die("FATAL Error!<br>Sessions not supported on this server");
	}
	if (PHP_VERSION < 4) {
		die("FATAL Error!<br>At least PHP 4 is required");
	} 
	
/*	// SMARTY
	require(SMARTY_DIR.'Smarty.class.php');
	$smarty = new Smarty;
	//$smarty->force_compile = true;
	$smarty->debugging = true;
	$smarty->caching = true;
	$smarty->cache_lifetime = 120;
*/	
	
	include_once(INCLUDES_DIR.'html-functions.php');

	$AppSettings=fetchDbConfig('config');

	define('MAGIC_QUOTES',get_magic_quotes_gpc());
	define('SEO_LINKS',true);
	define('DEBUG',false);
	define('DEMO',false);
	//**************** System Variable *************************
	$pg=isset($_REQUEST['page'])?$_REQUEST['page']:0;
	if(isset($_SESSION['previous_page']) && $_SESSION['previous_page']!="")
	{
		NTemplate::assign("previous_page",$_SESSION['previous_page']);
	}
	else
	{
		NTemplate::assign("previous_page",APP_URL);
	}
	
loadEntity("leftNews");
loadEntity("tickers");

$news =  leftNews::getNewsTitle();
NTemplate::assign("news",$news);

$ticker =  tickers::getToptickers();
NTemplate::assign("ticker",$ticker);
NTemplate::assign("is_login",GeneralEntity::is_login());
NTemplate::assign("APP_DIR",APP_DIR);
NTemplate::assign("APP_URL",APP_URL);
NTemplate::assign("INTERVAL",6);
?>