<?php
	ob_start('ob_gzhandler');
	
	error_reporting(E_ALL^E_WARNING);
	ini_set('display_errors', 1);
	header('Content-Type: text/html; charset=UTF-8'); // Standard
	
	require_once('config_file.php');
	
	
	define('APP_URL',SERVER_URL.APP_FOL);
	#define('APP_URL','./');
	define('SERVER_DOC_ROOT',$_SERVER['DOCUMENT_ROOT']);
	define('APP_DIR',SERVER_DOC_ROOT.APP_FOL);
	#define('APP_DIR','./');
	
	define('IMAGES',APP_URL.'images');
	define('CSS',APP_URL.'css');
	
	define('INCLUDES_DIR',APP_DIR.'/includes/');
	define('APPLICATION_COMP_DIR',APP_DIR.'application/');
	define('ENTITY_DIR',APPLICATION_COMP_DIR.'entities/');
	define('__COMPONENTS_PATH', APPLICATION_COMP_DIR.'components/');
	define('LIB_DIR',APP_DIR.'lib/');
	define('REL_LIB_DIR',APP_FOL.'lib/');
	define('DOWNLOADS_DIR',APP_DIR.'downloads/');
	define('UPLOADS_EXCEL_REPORTS_DIR',APP_DIR.'uploads/excel_reports/');
	define('UPLOADS_EXCEL_REPORTS_URL',APP_URL.'uploads/excel_reports/');
	define('MAGPIE_DIR',LIB_DIR.'magpierss/');
	define('BLOG_FEED_URL','http://websupplements.net/projects/wordpress/feed/');
	define('BLOG_FEED1_URL','http://timesofindia.indiatimes.com/rssfeeds/5880659.cms');

	define('UPLOADS_SUBJECT_DIR',APP_DIR.'uploads/subjects/');
	define('UPLOADS_SUBJECT_URL',APP_URL.'uploads/subjects/');

    define('UPLOADS_CONTRIBUTORS_DIR',APP_DIR.'uploads/contributors/');
	define('UPLOADS_CONTRIBUTORS_URL',APP_URL.'uploads/contributors/');
	
	define('UPLOADS_ASSIGNMENT_DIR',APP_DIR.'uploads/assignment/');
	define('UPLOADS_ASSIGNMENT_URL',APP_URL.'uploads/assignment/');
	
	define('UPLOADS_PROMO_SPACES_DIR','./uploads/promo_spaces/');
	define('UPLOADS_PROMO_SPACES_URL','./uploads/promo_spaces/');
	
	define('UPLOADS_EQUIPMENTS_URL',APP_URL.'uploads/equipments/');
	define('UPLOADS_EQUIPMENTS_DIR',APP_DIR.'uploads/equipments/');
	
	define('UPLOADS_EXPERIMENTS_URL',APP_URL.'uploads/experiments/');
	define('UPLOADS_EXPERIMENTS_DIR',APP_DIR.'uploads/experiments/');
	
	define('UPLOADS_SIMULATORS_FLASH_URL',APP_URL.'uploads/simulators_flash/');
	define('UPLOADS_SIMULATORS_FLASH_DIR',APP_DIR.'uploads/simulators_flash/');
	
	define('UPLOADS_USER_ATTACHMENT_DIR',APP_DIR.'uploads/images/');
	define('UPLOADS_USER_ATTACHMENT_URL',APP_URL.'uploads/images/');
	
	define('UPLOADS_MANUAL_DIR',APP_DIR.'uploads/manual/');
	define('UPLOADS_MANUAL_URL',APP_URL.'uploads/manual/');
	
	define('UPLOADS_TINY_IMAGES_DIR',APP_DIR.'uploads/tiny_images/');
	define('UPLOADS_TINY_IMAGES_URL',APP_URL.'uploads/tiny_images/');
	
	define('UPLOADS_NEWSEVENT_URL',APP_URL.'uploads/newsevent/');
	define('UPLOADS_PROMO_DIR',APP_DIR.'uploads/promo/');
	define('UPLOADS_PROMO_URL',APP_URL.'uploads/promo/');
	define('UPLOADS_BLOG_DIR',APP_DIR.'uploads/blogs/');
	define('UPLOADS_BLOG_URL',APP_URL.'uploads/blogs/');
	define('UPLOADS_SUBJECTS_DIR',APP_DIR.'uploads/subjects/');
	define('UPLOADS_SUBJECTS_URL',APP_URL.'uploads/subjects/');

	
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


	if (!function_exists('session_start')) {
		die("FATAL Error!<br>Sessions not supported on this server");
	}
	if (PHP_VERSION < 4) {
		die("FATAL Error!<br>At least PHP 4 is required");
	} 
	
	
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
	
NTemplate::assign("is_login",GeneralEntity::is_login());
NTemplate::assign("APP_DIR",APP_DIR);
NTemplate::assign("APP_URL",APP_URL);



?>
