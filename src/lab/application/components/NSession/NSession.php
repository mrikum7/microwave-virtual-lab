<?php

/**
 * NSession is an abstract session engine.
 * This component can be used for following session routines:
 *   - get a session parameter
 *   - set a session parameter
 *   - remove a session parameter
 *   - remove all session parameters
 *   - destroy the session
 * 
 * @access public
 * @name NSession
 * @package NSession
 * @version 1.0
 * 
 * Examples:
 * NComponentManager::load("NSession"); // Load session component
 * NSession::set("a", 10);              // Set session key
 * $a = NSession::get("a");             // Get session key
 * NSession::remove("a");               // Remove session key
 * NSession::removeall();               // Remove all session keys
 * NSession::destroy();                 // Destroy the session
 */
class NSession {
    /**
     * Get Session parameter
     * @access public
     * @param string $aKey The HTTP key
     * @return mixed Session parameter
     */
	
	 
/*--------------Db session functions end --------------------*/



    function get($aKey) {
        if (!session_id()) session_start();
		return array_key_exists($aKey,  $_SESSION) ? $_SESSION[$aKey] : null;
    }
   
    /**
     * Set Session parameter
     * @access public
     * @param string $aKey The Session key
     * @param string $aValue The Session value
     */
	 

    function set($aKey, $aValue) {
        if (!session_id()) session_start();
        if ($aValue != null) $_SESSION[$aKey] = $aValue;
        else NSession::remove($_SESSION[$aKey]);
    }

    /**
     * UnSet Session parameter
     * @access public
     * @param string $aKey The Session key
     */
    function remove($aKey) {
        if (!session_id()) session_start();
        unset($_SESSION[$aKey]);
    }

    /**
     * UnSet all Session parameters
     * @access public
     */
    function removeall() {
        if (!session_id()) session_start();
        $_SESSION = array();
    }

    /**
     * Destroy the session
     * @access public
     */
    function destroy() {
        if (!session_id()) session_start();
        session_destroy();
    }
	
	function isAdminLogged(){

		if(self::get('admin_logged')!="logged"){
			GeneralEntity::redirect('login.php');
		}
	}

}
?>
