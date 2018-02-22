<?php
/**
 * NTemplate is an abstract template engine.
 * This component can be used for following template routines:
 *   - assign a value to a template parameter
 *   - display a template page
 * 
 * @access public
 * @name NTemplate
 * @package NTemplate
 * @version 1.3
 * 
 * Examples:
 * NComponentManager::load("NTemplate", "NSmarty"); // Load template component
 * NTemplate::assign("title", "My Title");          // Assign variable
 * NTemplate::display("index.tpl");                 // Output template page
 */
class NTemplate {
   /**
    * Template engine name
    * @access private
    * @var string
    */
    var $_engine;

   /**
    * Constructor
    * @access public
    * @param string $engine Template engine name
    * @global object NTemplate
    */
    function NTemplate($engine = null) {
        global $NTemplate;
        if (!isset($NTemplate)) $NTemplate = $this;
        $this->setEngine($engine);
    }

   /**
    * Create NTemplate instance
    * @access public
    * @return object NTemplate
    */
    function create() {
        return new NTemplate();
    }

   /**
    * Set template engine
    * @access public
    * @param string $engine The template engine name
    * @global object NTemplate
    */
    function setEngine($engine = null) {
        global $NTemplate;
        if (!isset($NTemplate)) NTemplate::create();
        $NTemplate->_engine = $engine;
        if ($engine == "NSmarty") NComponentManager::load("NSmarty");
    }

    /**
     * Assign values to template variables
     * @access public
     * @param string $aKey The variable's name
     * @param string $aValue The variable's value
     */
    function assign($aKey, $aValue) {
        global $NTemplate;
        if (!isset($NTemplate)) NTemplate::create();
        if ($NTemplate->_engine == "NSmarty") NSmarty::assign($aKey, $aValue);
    }

    /**
     * Display a template (like Smarty)
     * @access public
     * @param string $aTemplateName The template's name
     */
    function display($aTemplateName) {
        global $NTemplate;
        if (!isset($NTemplate)) NTemplate::create();

       /* if (NConfig::get("http_nocache", "Global")) {
            header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
            header("Last-Modified: " . gmdate('D, d M Y H:i:s') . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
        }
		*/
        if ($NTemplate->_engine == "NSmarty") NSmarty::display($aTemplateName);
    }
    
    function fetch ($aTemplateName) {
        global $NTemplate;
        if (!isset($NTemplate)) NTemplate::create();

        if ($NTemplate->_engine == "NSmarty") return NSmarty::fetch ($aTemplateName);
    }
}
?>