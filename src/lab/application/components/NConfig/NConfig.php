<?php
/**
 * NConfig is an abstract configuration file engine.
 * This component can be used for following template routines:
 *   - get configuration parameter from a config file
 *   - get all configuration parameters names from a config file by section
 * 
 * @access public
 * @name NConfig
 * @package NConfig
 * @version 1.4
 *
 * Example:
 * NComponentManager::load("NConfig", "NSmarty"); // Load configuration component
 * $dbtype = NConfig::get("dbtype", "Database");  // Get configuration datum
 */
class NConfig {
   /**
    * Configuration file engine name
    * @access public
    * @var string
    */
    var $_engine = null;

   /**
    * Constructor
    * @access public
    * @param string $engine Configuration engine name
    * @global object NConfig
    */
    function NConfig($engine = null) {
        global $NConfig;
        if (!isset($NConfig)) $NConfig = $this;
        $this->setEngine($engine);
    }

   /**
    * Create NConfig instance
    * @access public
    * @return object NConfig
    */
    function create() {
        return new NConfig();
    }

   /**
    * Set template engine
    * @access public
    * @param string $engine The template engine name
    * @global object NTemplate
    */
    function setEngine($engine = null) {
        global $NConfig;
        if (!isset($NConfig)) NConfig::create();
        $NConfig->_engine = $engine;
        if ($engine == "NSmarty") NComponentManager::load("NSmarty");
    }

    /**
     * Get config parameter
     * @access public
     * @param string $aKey The config's key
     * @param string $aSection The config's section
     * @param string $aFile The config's file name
     */
   /* function get($aKey, $aSection = null, $aFile = "application.conf", $default = null) {
        global $NConfig;
        if (!isset($NConfig)) NConfig::create();
        $res = null;
        if ($NConfig->_engine == "NSmarty") $res = NSmarty::config_get($aKey, $aSection, $aFile);
        return $res ? $res : $default;
    }
*/
    /**
     * Get all config parameters names
     * @access public
     * @param string $aKey The config's key
     * @param string $aSection The config's section
     * @param string $aFile The config's file name
     */
   /* function getAllNames($aSection = null, $aFile = "application.conf") {
        global $NConfig;
        if (!isset($NConfig)) NConfig::create();
        $res = null;
        if ($NConfig->_engine == "NSmarty") $res = NSmarty::config_getAllNames($aSection, $aFile);
        return $res;
    }*/
}
?>
