<?php
/**
 * NDatabase is an abstract database engine.
 * This component can be used for following template routines:
 *   - run SQL queries
 *   - return different formats of SQL results
 * 
 * @access public
 * @name NDatabase
 * @package NDatabase
 * @version 1.4
 * 
 * Examples:
 * NComponentManager::load("NDatabase", "NPear");  // Load database component
 * echo NDatabase::getOne("SELECT VERSION()");     // Get MySQL version
 */
define('ND_FETCH_ROW_NUM',   -1);
define('ND_FETCH_ROW_ASSOC', -2);
define('ND_FETCH_ASSOC',     -3);
define('ND_FETCH_COL_NUM',   -4);
define('ND_FETCH_ALL_NUM',   -5);
define('ND_FETCH_ALL_ASSOC', -6);
 
class NDatabase {
   /**
    * Configuration file engine name
    * @access public
    * @var string
    */
    var $_engine;

   /**
    * Constructor
    * @access public
    * @param string $engine Configuration engine name
    * @global object NDatabase
    */
    function NDatabase($engine = null) {
        global $NDatabase;
        if (!isset($NDatabase)) $NDatabase = $this;
        $this->setEngine($engine);
    }

   /**
    * Create NDatabase instance
    * @access public
    * @return object NDatabase
    */
    function create() {
        return new NDatabase();
    }

   /**
    * Set template engine
    * @access public
    * @param string $engine The template engine name
    * @global object NTemplate
    */
    function setEngine($engine = null) {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::create();
        $NDatabase->_engine = $engine;
       NComponentManager::load("NADOdb");
    }
   
   /**
    * Get template engine
    * @access public
    * @global object NTemplate
    */
    function getEngine()
    {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::create();
        return $NDatabase->_engine;
        
    }
  
    /**
     * Initialize database
     * @return string DSN
     */
    function init() {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::create();

        NADOdb::db_init();
    }

    /**
     * Check result of queries
     * @access private
     * @global object DB Error
     * @param object $res The database operation result
     */
    function _checkDBResult(&$res) {
        global $dberr;
        if (DB::isError($res)) {
            $dberr = $res;
            $res = null;
        } else {
            $dberr = null;
        }
    }

    /**
     * Reset DB Manager error state
     * @global object DB Error
     * @access public
     */
    function resetDB() {
        global $dberr;
        $dberr = null;
    }

    /**
     * Get result from the query
     * @access public
     * @global object DB class
     * @global object DB Error
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function query($query, $param = null) {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();
        $res = null;
        
		if ($param != null)
		   $res = NADOdb::query($query, $param);
		else 
		   $res = NADOdb::query($query);   
        
        return $res;
    }
	
	function AutoExecute($table, $fields_values, $mode = 'INSERT', $where = FALSE, $forceUpdate=true, $magicq=false)  {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();
        $res = null;
        
		$res = NADOdb::nAutoExecute($table, $fields_values, $mode, $where, $forceUpdate, $magicq);   
        
        return $res;
    }
	
	function Insert_ID($table='',$column='')
	{
		global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();
        $res = null;
		
        $status=NADOdb::Insert_ID($table,$column);
        //# Closes the recordset, cleaning all memory and resources associated with the recordset.
        return $status;
	}

    /**
     * Get result from the query [one]
     * @access public
     * @global object DB class
     * @global object DB Error
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function getOne($query, $param = null) {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();
        
        $res = null;
        
		if ($param != null)
		   $res = NADOdb::getOne($query, $param);
		else 
		   $res = NADOdb::getOne($query);   
        
        return $res;
    }

    /**
     * Get result from the query [row]
     * @access public
     * @global object DB class
     * @global object DB Error
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function getRow($query, $param = null) {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();
        
        $res = null;
        
		if ($param != null)
		   $res = NADOdb::getRow($query, $param);
		else 
		   $res = NADOdb::getRow($query);   
        
        return $res;
    }

    /**
     * Get result from the query [row]
     * @access public
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function getFRow($query, $param = null) {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();
        
        $res = null;
		if ($param != null)
		   $res = NADOdb::getFRow($query, $param);
		else 
		   $res = NADOdb::getFRow($query);   
        
        return $res;
    }

    /**
     * Get result from the query [row]
     * @access public
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function getARow($query, $param = null) {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();
        
        $res = null;

		if ($param != null)
		{
		   $res = NADOdb::getARow($query, $param);
		}   
		else 
		{
		   $res = NADOdb::getARow($query);
		}     

        return $res;
    }

    /**
     * Get result from the query [col]
     * @access public
     * @global object DB class
     * @global object DB Error
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function getCol($query, $param = null) {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();
        
        $res = null;

		if ($param != null)
		   $res = NADOdb::getCol($query, $param);
		else 
		   $res = NADOdb::getCol($query);   

        return $res;
    }

    /**
     * Get result from the query [assoc]
     * @access public
     * @global object DB class
     * @global object DB Error
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function getAssoc($query, $param = null) {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();
        
        $res = null;

		if ($param != null)
		   $res = NADOdb::getAssoc($query, $param);
		else 
		   $res = NADOdb::getAssoc($query);   

        return $res;
    }

    /**
     * Get result from the query [all]
     * @access public
     * @global object DB class
     * @global object DB Error
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function getAll($query, $param = null) {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();
        
        $res = null;

		if ($param != null)
		   $res = NADOdb::getAll($query, $param);
		else 
		   $res = NADOdb::getAll($query);   

        return $res;
    }

    /**
     * Get result from the query [all]
     * @access public
     * @global object DB class
     * @global object DB Error
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function getAllAssoc($query, $param = null) {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();
        
        $res = null;
		if ($param != null)
		   $res = NADOdb::getAllAssoc($query, $param);
		else 
		   $res = NADOdb::getAllAssoc($query);   

        return $res;
    }
    
    /**
     * Return number of rows
     */
     function getNumRows()
     {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();

        $res = null;
        $res = NADOdb::getNumRows();   

        return $res;
     }
     
    /**
     * Regexp advanced search
     */
     function RegexpSelect($sql, $regexp, $regfield, $fetch_mode)  
     {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();
        $sql .= " where `$regfield` regexp '$regexp'>0";
        
        $res = null;
        switch ($fetch_mode) {
            case ND_FETCH_ROW_NUM :
                 $res = $NDatabase->getRow($sql);
                 break;
            case ND_FETCH_ROW_ASSOC :
                 $res = $NDatabase->getARow($sql);
                 break;
            case ND_FETCH_ASSOC :
                $res = $NDatabase->getAssoc($sql);
                break;
            case ND_FETCH_COL_NUM :
                $res = $NDatabase->getCol($sql);
                break;
            case ND_FETCH_ALL_NUM :
                $res = $NDatabase->getAll($sql);
                break;
            case ND_FETCH_ALL_ASSOC :
                $res = $NDatabase->getAllAssoc($sql);
                break;
        }
        
        return $res;
        //select project_id from project where plain_text regexp 'Bid'>0
        //select project_id from project where plain_text like '%Bid%'
        
     }
     /* Only ADOdb functions  */
    
     /**
     * Get result from the query [col]
     * @access public
     * @global object DB class
     * @global object DB Error
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function CacheGetCol($secs2cache, $query = null, $param = null)
    {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();
        
        if (!is_numeric($secs2cache))
        {
            $param = $query;
            $query = $secs2cache;
            $secs2cache = -1;
        }
        
        $res = null;
        if ($NDatabase->_engine == "NPear") $res = NPear::getCol($query, $param);
        elseif ($NDatabase->_engine == "NADOdb")
        {
            if ($param != null)
               $res = NADOdb::CacheGetCol($secs2cache, $query, $param);
            else 
               $res = NADOdb::CacheGetCol($secs2cache, $query);   
        }
        return $res;
    }
    
    /**
     * Get result from the query [one]
     * @access public
     * @global object DB class
     * @global object DB Error
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function CacheGetOne($secs2cache, $query = null, $param = null)
    {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();
        
        if (!is_numeric($secs2cache))
        {
            $param = $query;
            $query = $secs2cache;
            $secs2cache = -1;
        }

        $res = null;
            
		if ($param != null)
		   $res = NADOdb::CacheGetOne($secs2cache, $query, $param);
		else 
		   $res = NADOdb::CacheGetOne($secs2cache, $query);   

        return $res;
    }

    /**
     * Get result from the query [row]
     * @access public
     * @global object DB class
     * @global object DB Error
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function CacheGetRow($secs2cache, $query = null, $param = null)
    {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();
        
        if (!is_numeric($secs2cache))
        {
            $param = $query;
            $query = $secs2cache;
            $secs2cache = -1;
        }
        
        $res = null;
		if ($param != null)
		   $res = NADOdb::CacheGetRow($secs2cache, $query, $param);
		else 
		   $res = NADOdb::CacheGetRow($secs2cache, $query);   

        return $res;
    }

    /**
     * Get result from the query [row]
     * @access public
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function CacheGetFRow($secs2cache, $query = null, $param = null)
    {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();
        
        if (!is_numeric($secs2cache))
        {
            $param = $query;
            $query = $secs2cache;
            $secs2cache = -1;
        }

        $res = null;
		if ($param != null)
		   $res = NADOdb::CacheGetFRow($secs2cache, $query, $param);
		else 
		   $res = NADOdb::CacheGetFRow($secs2cache, $query);   

        return $res;
    }

    /**
     * Get result from the query [row]
     * @access public
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function CacheGetARow($secs2cache, $query = null, $param = null)
    {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();
        
        if (!is_numeric($secs2cache))
        {
            $param = $query;
            $query = $secs2cache;
            $secs2cache = -1;
        }

        $res = null;
            
		if ($param != null)
		   $res = NADOdb::CacheGetARow($secs2cache, $query, $param);
		else 
		   $res = NADOdb::CacheGetARow($secs2cache, $query);   

        return $res;
    }

    /**
     * Get result from the query [assoc]
     * @access public
     * @global object DB class
     * @global object DB Error
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function CacheGetAssoc($secs2cache, $query = null, $param = null)
    {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();
        
        if (!is_numeric($secs2cache))
        {
            $param = $query;
            $query = $secs2cache;
            $secs2cache = -1;
        }

        $res = null;
		if ($param != null)
		   $res = NADOdb::CacheGetAssoc($secs2cache, $query, $param);
		else 
		   $res = NADOdb::CacheGetAssoc($secs2cache, $query);   

        return $res;
    }

    /**
     * Get result from the query [all]
     * @access public
     * @global object DB class
     * @global object DB Error
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function CacheGetAll($secs2cache, $query = null, $param = null)
    {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();
        
        if (!is_numeric($secs2cache))
        {
            $param = $query;
            $query = $secs2cache;
            $secs2cache = -1;
        }

        $res = null;
		if ($param != null)
		   $res = NADOdb::CacheGetAll($secs2cache, $query, $param);
		else 
		   $res = NADOdb::CacheGetAll($secs2cache, $query);   

        return $res;
    }

    /**
     * Get result from the query [all]
     * @access public
     * @global object DB class
     * @global object DB Error
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function CacheGetAllAssoc($secs2cache, $query = null, $param = null)
    {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();
        
        if (!is_numeric($secs2cache))
        {
            $param = $query;
            $query = $secs2cache;
            $secs2cache = -1;
        }

        $res = null;
		if ($param != null)
		   $res = NADOdb::CacheGetAllAssoc($secs2cache, $query, $param);
		else 
		   $res = NADOdb::CacheGetAllAssoc($secs2cache, $query);   

        return $res;
    }
    
    /**
     * Flush (delete) any cached recordsets for the SQL statement $sql in $ADODB_CACHE_DIR.
     * If no parameter is passed in, then all adodb_*.cache files are deleted.
     * @access public
     * @global object ADOdb class
     * @param string $query The SQL query
     * @param array $param Query's parameters
     */
    function CacheFlush($query=false, $param=false)
    {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();
        
		if ($param != false)
		   NADOdb::CacheFlush($query, $param);
		else
		   NADOdb::CacheFlush();

    }
//------------------------ Experimetal functions --------------------------------------------
    function CountRecords($query, $param=false)  
    {
        global $NDatabase;
        if (!isset($NDatabase)) NDatabase::init();
        return NADOdb::_GetCount($query, $param);
             
    }
     
}
?>
