<?php
/**
 * NSmarty is a Smarty template engine adapter.
 * This component can be used for following template routines:
 *   - get a configuration parameter
 *   - assign a value to a template parameter
 *   - display a template page
 * 
 * @access public
 * @name NSmarty
 * @package NSmarty
 * @version 1.3
 */
class NSmarty {
   /**
    * Constructor
    * @access public
    * @param mixed $property The component property
    * @global object NSmarty
    */
    function NSmarty($property = null) {
        global $NSmarty;
        if (!isset($NSmarty)) $NSmarty = $this;
    }

   /**
    * Create NSmarty instance
    * @access public
    * @return object NSmarty
    */
    function create() {
        return new NSmarty();
    }

    /**
     * Load Smarty
     * @access public
     * @global object $Smarty
     */
    function init() {
        global $Smarty;
        if (!isset($Smarty)) {
            require_once dirname(__FILE__) . "/smarty/Smarty.class.php";
    		$Smarty = new Smarty();
	    	$Smarty->config_dir   = APPLICATION_COMP_DIR . 'configs';
            $Smarty->template_dir = APPLICATION_COMP_DIR . 'templates';
            $Smarty->compile_dir  = APPLICATION_COMP_DIR . 'templates_c';
        }
    }

    /**
     * Get config parameter
     * @access public
     * @global object $SmartyConf Smarty Config file class
     * @param string $aKey The config's key
     * @param string $aSection The config's section
     * @param string $aFile The config's file name
     * @return string Get parameter value
     */
   /* function config_get($aKey, $aSection = null, $aFile = "application.conf") {
	    global $SmartyConf;
    	if (!isset($SmartyConf)) {
	    	include_once dirname(__FILE__) . "/smarty/Config_File.class.php";
		    $SmartyConf = new Config_File(dirname(__FILE__) . "/../..");
    	}
	    return $SmartyConf->get($aFile, $aSection, $aKey);
    }
*/
    /**
     * Get all config parameter
     * @access public
     * @global object $SmartyConf Smarty Config file class
     * @param string $aSection The config's section
     * @param string $aFile The config's file name
     * @return array Get all parameters names by section
     */
    function config_getAllNames($aSection = null, $aFile = "application.conf") {
	    global $SmartyConf;
        $dir = dirname(__FILE__) . "/../..";
    	if (!isset($SmartyConf)) {
	    	include_once dirname(__FILE__) . "/smarty/Config_File.class.php";
		    $SmartyConf = new Config_File($dir);
    	}
        $SmartyConf->load_file($aFile);
	    return $SmartyConf->get_var_names($dir . DIRECTORY_SEPARATOR . $aFile, $aSection);
    }

    /**
     * Assign values to template variables
     * @access public
     * @param string $aVar The variable's name
     * @param string $aValue The variable's value
     */
    function assign($aVar, $aValue) {
        global $Smarty;
        if (!isset($Smarty)) NSmarty::init();
        $Smarty->assign($aVar, $aValue);
    }

    /**
     * Display a template
     * @access public
     * @param string $aTemplateName The template's name
     */
    function display($aTemplateName) {
        global $Smarty;
        if (!isset($Smarty)) NSmarty::init();
        $Smarty->display($aTemplateName);
    }
    
    function fetch($aTemplateName)
     {
        global $Smarty;
        if (!isset($Smarty)) NSmarty::init();
        return $Smarty->fetch ($aTemplateName);
    }
    
    function debug($flag = true)
    {
        global $Smarty;
        if (!isset($Smarty)) NSmarty::init();
        $Smarty->debugging = $flag;
    }
}
?>
