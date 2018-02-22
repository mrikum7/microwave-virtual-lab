<?php
/**
 * NComponentManager is a Component engine adapter.
 * This component can be used for following template routines:
 *   - load a component
 *   - load all components
 * 
 * @access public
 * @name NComponentManager
 * @package NComponentManager
 * @version 1.2
 */
class NComponentManager {
   /**
    * Loaded components
    * @access public
    * @var array
    */
    var $_components;

   /**
    * Constructor
    * @access public
    * @param mixed $property The component property
    * @global object NComponentManager
    */
    function NComponentManager($property = null) {
        global $NComponentManager;
        if (!isset($NComponentManager)) {
            $NComponentManager = $this;
            $NComponentManager->_components->NComponentManager = & $NComponentManager;
        }
    }

   /**
    * Create NComponentManager instance and check dependences
    * @access public
    * @global object $ncomponentmanager
    */
    function create() {
        return new NComponentManager();
    }

    /**
     * Load component
     * @access public
     * @param string $component The coponent name
     * @param mixed $property The component property
     */
    function load($component, $property = null) {
        global $NComponentManager;
        if (!isset($NComponentManager)) NComponentManager::create();

        if (!isset($NComponentManager->_components->$component)) {
            include_once __COMPONENTS_PATH."$component/$component.php";
            $NComponentManager->_components->$component =  new $component($property);
        }
    }

    /**
     * include component class
     * @access public
     * @param string $component The coponent name
     */
    function preload($component)
    {
        global $NComponentManager;
        if (!isset($NComponentManager)) NComponentManager::create();
        
        include_once dirname(__FILE__)."/../$component/$component.php";
    }

	/**
	 * Load all components
	 * @access public
	 */
	function loadall() {
        global $NComponentManager;
        if (!isset($NComponentManager)) NComponentManager::create();

    	$path = dirname(__FILE__) . "/../";
	    $d = dir($path);
    	while (false !== ($entry = $d->read()))
        	if ($entry != "." && $entry != ".." && is_dir("$path/$entry"))
                $NComponentManager->load($entry);
    	$d->close();
	}

	/**
	 * Get loaded components
	 * @access public
	 */
    function getComponents() {
        global $NComponentManager;
        if (!isset($NComponentManager)) NComponentManager::create();

        return $NComponentManager->_components;
    }
}
?>