<?php
/**
 * NADOdb is a ADOdb adapter.
 * This component can be used for following template routines:
 *   - work with databases via ADOdb engine
 * 
 * @access public
 * @name NADOdb
 * @package NADOdb
 * @version 1.0
 */

if (!defined('ADODB_ERROR_HANDLER_TYPE')) define('ADODB_ERROR_HANDLER_TYPE',E_USER_ERROR); 
if (!defined('ADODB_ERROR_HANDLER')) define('ADODB_ERROR_HANDLER','ADODB_Error_Handler');

class NADOdb {
   /**
    * Constructor
    * @access public
    * @param mixed $property The component property
    * @global object NADOdb
    */
    function NADOdb($property = null)
    {
        global $NADOdb;
        if (!isset($NADOdb)) $NADOdb = $this;
    }

   /**
    * Create NADOdb instance
    * @access public
    * @return object NADOdb
    */
    function create()
    {
        return new NADOdb();
    }

    /**
     * Init ADOdb
     * @access public
     * @global object DB class
     */
    function db_init()
    {
        global $NADOdb, $ADOdb;
        if (!isset($PearDb))
        {
            if (!class_exists('ADOConnection'))
            {
                $inidir = ini_get("include_path");

				if (!defined("PATH_SEPARATOR"))
					define("PATH_SEPARATOR", substr(php_uname(), 0, 3) == 'Win' ? ';' : ':');
				ini_set("include_path", dirname(__FILE__) . "/adodb" . PATH_SEPARATOR . $inidir); 

                require_once "adodb.inc.php";
            }
            
            NComponentManager::load("NConfig",   "NSmarty");
            
            $dbtype   = DB_TYPE;//@rawurlencode(NConfig::get("dbtype",   "Database"));
            $dbname   = DB_DATABASE;//@rawurlencode(NConfig::get("dbname",   "Database"));
            $host     = DB_HOST;//@rawurlencode(NConfig::get("host",     "Database"));
            $user     = DB_USER;//@rawurlencode(NConfig::get("user",     "Database"));
            $password = DB_PASSWORD;//@rawurlencode(NConfig::get("password", "Database"));
            $conntype = CONNECTION_TYPE;//@rawurlencode(NConfig::get("conntype", "Database"));
            $host = $host ? "$host/" : "";
            if (empty($conntype)) $conntype='persist'; 
            $dsn = "$dbtype://$user:$password@$host$dbname?$conntype";
            $ADOdb = ADONewConnection($dsn);
            // cache 1 hour
            $ADOdb->cacheSecs = 60*20;# 2 min
            $ADODB_CACHE_DIR = APPLICATION_COMP_DIR.'/cache'; 
            //#Debug mode
            //$ADOdb->debug = true;
        }
    }
     /**
     * Get result from the query
     * @access public
     * @global object ADOdb class
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return mixed Query result
     */
    function query($query, $param = false) 
    {
        global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
        
        if (false ===  $param)
        {
           
            $rs = $ADOdb->Execute($query);
        }    
        else
        {
            $rs = $ADOdb->Prepare($query);
            $rs = $ADOdb->Execute($rs, $param);
        }        
        return $rs;
    }
    /**
     * Get result from the query [one]
     * @access public
     * @global object ADOdb class
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function getOne($query, $param = false)
    {
        global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
        global $ADODB_COUNTRECS;
        $crecs = $ADODB_COUNTRECS;
        $ADODB_COUNTRECS = false;
        $res = false;
        $rs = NADOdb::query($query, $param);
        if ($rs)
        {  
            if (!$rs->EOF) $res = reset($rs->fields);
            $rs->Close();
        }
        $ADODB_COUNTRECS = $crecs;
        return $res;
        
    }
    
    /**
     * Get result from the query [row]
     * @access public
     * @global object ADOdb class
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function getRow($query, $param = false)
    {
        global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
        $ADOdb->SetFetchMode(ADODB_FETCH_NUM);
        $rs = NADOdb::query($query, $param);
        $res = $rs->fields;
        //# Closes the recordset, cleaning all memory and resources associated with the recordset.
        $rs->Close();
        return $res;
    }
    
    /**
     * Get result from the query [row]
     * @access public
     * @global object ADOdb class
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function getFRow($query, $param = false, $toUpper=false)
    {
        global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
        $rs = NADOdb::query($query, $param);
        $res = $rs->FetchObject($toUpper);
        //# Closes the recordset, cleaning all memory and resources associated with the recordset.
        $rs->Close();
        return $res;
    }
    
    /**
     * Get result from the query [row like assoc array]
     * @access public
     * @global object ADOdb class
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function getARow($query, $param = null, $toUpper=false)
    {
        global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
        $rs = NADOdb::query($query, $param);
        $res = $rs->GetRowAssoc($toUpper);
        //# Closes the recordset, cleaning all memory and resources associated with the recordset.
        $rs->Close();
        return $res;
    }
    
    /**
     * Get result from the query [col]
     * @access public
     * @global object ADOdb class
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function getCol($query, $param = false, $trim=false)
    {
        global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
   
        $rv = false;
        $rs = NADOdb::query($query, $param);
        if ($rs)
        {
            $rv = array();
            if ($trim)
            {
                while (!$rs->EOF)
                {
                    $rv[] = trim(reset($rs->fields));
                    $rs->MoveNext();
                }
            } 
            else
            {
                while (!$rs->EOF)
                {
                    $rv[] = reset($rs->fields);
                    $rs->MoveNext();
                }
            }
            $rs->Close();
        }
        return $rv;
    }

    /**
     * Get result from the query [assoc]
     * @access public
     * @global object ADOdb class
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function getAssoc($query, $param = null)
    {
        global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
        $rs = NADOdb::query($query, $param);
        $res = $rs->GetAssoc();
        //# Closes the recordset, cleaning all memory and resources associated with the recordset.
        $rs->Close();
        return $res;
    }
	
	function nAutoExecute($table, $fields_values, $mode = 'INSERT', $where = FALSE, $forceUpdate=true, $magicq=false) 
	{
		global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
        $status=$ADOdb->AutoExecute($table, $fields_values, $mode, $where, $forceUpdate, $magicq);
        //# Closes the recordset, cleaning all memory and resources associated with the recordset.
        return $status;
	}
	
	
	function Insert_ID($table='',$column='')
	{
		global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
		
        $status=$ADOdb->Insert_ID($table,$column);
        //# Closes the recordset, cleaning all memory and resources associated with the recordset.
        return $status;
	}
    /**
     * Get result from the query [all]
     * @access public
     * @global object ADOdb class
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function getAll($query, $param = false)
    {
        global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
        $ADOdb->SetFetchMode(ADODB_FETCH_NUM);
        $rs = NADOdb::query($query, $param);
        $res = $rs->GetArray();
        //# Closes the recordset, cleaning all memory and resources associated with the recordset.
        $rs->Close();
        return $res;
    }

    /**
     * Get result from the query [all]
     * @access public
     * @global object ADOdb class
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function getAllAssoc($query, $param = null)
    {
        global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
        $ADOdb->SetFetchMode(ADODB_FETCH_ASSOC);
        $rs = NADOdb::query($query, $param);
        $res = $rs->GetArray();
        //# Closes the recordset, cleaning all memory and resources associated with the recordset.
        $rs->Close();
        return $res;
    }
    
    /**
     * Return number of rows
     * @access public
     * @global object ADOdb class
     * @global object ADORecordSet class
     */
    function getNumRows()
    {
        global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
        if (isset($rs))
           return $rs->RecordCount();
        else return -1;
    }
    
    /**
     * @access private
     */
    function _GetCount($query, $param = false)
    {
        global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
        global $ADODB_INCLUDED_LIB;
        if (empty($ADODB_INCLUDED_LIB))  include_once dirname(__FILE__)."/adodb/adodb-lib.inc.php";
        
        return _adodb_getcount($ADOdb, $query, $param);
    }   
    
    /**
     * Execute sql query. Use only with SELECT statements.
     * The recordset is cached for $secs2cache seconds in the 
     * $ADODB_CACHE_DIR directory, and $param only accepts 1-dimensional arrays.
     * @access private
     * @global object ADOdb class
     * @global object ADORecordSet class
     */
    function _CacheQuery($query, $param = false) 
    {
        global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
        
        if (false ===  $param)
        {
           
            $rs = $ADOdb->CacheExecute($query);
        }    
        else
        {
            $rs = $ADOdb->Prepare($query);
            $rs = $ADOdb->CacheExecute($rs, $param);
        }        
        return $rs;
    }
    
    /**
     * Get result from the query [col]
     * @access public
     * @global object ADOdb class
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function CacheGetCol($secs2cache, $query = false, $param = false, $trim=false)
    {
        global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
        if (!is_numeric($secs2cache))
        {
            $param = $query;
            $query = $secs2cache;
            $secs2cache = $ADOdb->cacheSecs;
        }
        if (-1 == $secs2cache)
            $secs2cache = $ADOdb->cacheSecs;
        $tmp = $ADOdb->cacheSecs;
        $ADOdb->cacheSecs = $secs2cache;
        
        $rv = false;
        $rs = NADOdb::_CacheQuery($query, $param);
        if ($rs)
        {
            $rv = array();
            if ($trim)
            {
                while (!$rs->EOF)
                {
                    $rv[] = trim(reset($rs->fields));
                    $rs->MoveNext();
                }
            } 
            else
            {
                while (!$rs->EOF)
                {
                    $rv[] = reset($rs->fields);
                    $rs->MoveNext();
                }
            }
            $rs->Close();
        }
        
        $ADOdb->cacheSecs = $tmp;
        return $rv;
    }
    
     /**
     * Get result from the query [one]
     * @access public
     * @global object ADOdb class
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function CacheGetOne($secs2cache, $query = false, $param = false)
    {
        global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
        global $ADODB_COUNTRECS;
        $crecs = $ADODB_COUNTRECS;
        $ADODB_COUNTRECS = false;
        $res = false;
        if (!is_numeric($secs2cache))
        {
            $param = $query;
            $query = $secs2cache;
            $secs2cache = $ADOdb->cacheSecs;
        }
        if (-1 == $secs2cache)
            $secs2cache = $ADOdb->cacheSecs;
            
        $tmp = $ADOdb->cacheSecs;
        $ADOdb->cacheSecs = $secs2cache; 
        
        $rs = NADOdb::_CacheQuery($query, $param);
        if ($rs)
        {  
            if (!$rs->EOF) $res = reset($rs->fields);
            $rs->Close();
        }
        $ADODB_COUNTRECS = $crecs;
        $ADOdb->cacheSecs = $tmp;
        return $res;
        
    }
    
    /**
     * Get result from the query [row]
     * @access public
     * @global object ADOdb class
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function CacheGetRow($secs2cache, $query=false, $param = false)
    {
        global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
         
        if (!is_numeric($secs2cache))
        {
            $param = $query;
            $query = $secs2cache;
            $secs2cache = $ADOdb->cacheSecs;
        }
        if (-1 == $secs2cache)
            $secs2cache = $ADOdb->cacheSecs;
        $tmp = $ADOdb->cacheSecs;
        $ADOdb->cacheSecs = $secs2cache; 
        
        $ADOdb->SetFetchMode(ADODB_FETCH_NUM);
        $rs = NADOdb::_CacheQuery($query, $param);
        $res = $rs->fields;
        //# Closes the recordset, cleaning all memory and resources associated with the recordset.
        $rs->Close();
        $ADOdb->cacheSecs = $tmp;
        return $res;
    }
    
    /**
     * Get result from the query [row]
     * @access public
     * @global object ADOdb class
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function CacheGetFRow($secs2cache, $query=false, $param = false, $toUpper=false)
    {
        global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
        
        if (!is_numeric($secs2cache))
        {
            $param = $query;
            $query = $secs2cache;
            $secs2cache = $ADOdb->cacheSecs;
        }
        if (-1 == $secs2cache)
            $secs2cache = $ADOdb->cacheSecs;
        $tmp = $ADOdb->cacheSecs;
        $ADOdb->cacheSecs = $secs2cache;
        
        $rs = NADOdb::_CacheQuery($query, $param);
        $res = $rs->FetchObject($toUpper);
        //# Closes the recordset, cleaning all memory and resources associated with the recordset.
        $rs->Close();
        
        $ADOdb->cacheSecs = $tmp;
        return $res;
    }
    
    /**
     * Get result from the query [row like assoc array]
     * @access public
     * @global object ADOdb class
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function CacheGetARow($secs2cache, $query=false, $param = null, $toUpper=false)
    {
        global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
        if (!is_numeric($secs2cache))
        {
            $param = $query;
            $query = $secs2cache;
            $secs2cache = $ADOdb->cacheSecs;
        }
        if (-1 == $secs2cache)
            $secs2cache = $ADOdb->cacheSecs;
        $tmp = $ADOdb->cacheSecs;
        $ADOdb->cacheSecs = $secs2cache;
        
        $rs = NADOdb::_CacheQuery($query, $param);
        $res = $rs->GetRowAssoc($toUpper);
        //# Closes the recordset, cleaning all memory and resources associated with the recordset.
        $rs->Close();
        $ADOdb->cacheSecs = $tmp;
        return $res;
    }
    
    /**
     * Get result from the query [assoc]
     * @access public
     * @global object ADOdb class
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function CacheGetAssoc($secs2cache, $query=false, $param = null)
    {
        global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
        if (!is_numeric($secs2cache))
        {
            $param = $query;
            $query = $secs2cache;
            $secs2cache = $ADOdb->cacheSecs;
        }
        if (-1 == $secs2cache)
            $secs2cache = $ADOdb->cacheSecs;
        $tmp = $ADOdb->cacheSecs;
        $ADOdb->cacheSecs = $secs2cache;
        
        $rs = NADOdb::_CacheQuery($query, $param);
        $res = $rs->GetAssoc();
        //# Closes the recordset, cleaning all memory and resources associated with the recordset.
        $rs->Close();
        $ADOdb->cacheSecs = $tmp;
        return $res;
    }

    /**
     * Get result from the query [all]
     * @access public
     * @global object ADOdb class
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function CacheGetAll($secs2cache, $query=false, $param = false)
    {
        global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
        $ADOdb->SetFetchMode(ADODB_FETCH_NUM);
        if (!is_numeric($secs2cache))
        {
            $param = $query;
            $query = $secs2cache;
            $secs2cache = $ADOdb->cacheSecs;
        }
        if (-1 == $secs2cache)
            $secs2cache = $ADOdb->cacheSecs;
        $tmp = $ADOdb->cacheSecs;
        $ADOdb->cacheSecs = $secs2cache;
        
        $rs = NADOdb::_CacheQuery($query, $param);
        $res = $rs->GetArray();
        //# Closes the recordset, cleaning all memory and resources associated with the recordset.
        $rs->Close();
        $ADOdb->cacheSecs = $tmp;
        return $res;
    }

    /**
     * Get result from the query [all]
     * @access public
     * @global object ADOdb class
     * @param string $query The SQL query
     * @param array $param Query's parameters
     * @return void Query result
     */
    function CacheGetAllAssoc($secs2cache, $query=false, $param = null)
    {
        global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
        $ADOdb->SetFetchMode(ADODB_FETCH_ASSOC);
        if (!is_numeric($secs2cache))
        {
            $param = $query;
            $query = $secs2cache;
            $secs2cache = $ADOdb->cacheSecs;
        }
        if (-1 == $secs2cache)
            $secs2cache = $ADOdb->cacheSecs;
        $tmp = $ADOdb->cacheSecs;
        $ADOdb->cacheSecs = $secs2cache;
        
        $rs = NADOdb::_CacheQuery($query, $param);
        $res = $rs->GetArray();
        //# Closes the recordset, cleaning all memory and resources associated with the recordset.
        $rs->Close();
        $ADOdb->cacheSecs = $tmp;
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
        global $ADOdb, $rs;
        if (!isset($ADOdb)) NADOdb::db_init();
        $ADOdb->CacheFlush($query, $param);
    }
    
    
}

/**
* Default Error Handler. This will be called with the following params
*
* @param $dbms      the RDBMS you are connecting to
* @param $fn        the name of the calling function (in uppercase)
* @param $errno     the native error number from the database
* @param $errmsg    the native error msg from the database
* @param $p1        $fn specific parameter - see below
* @param $p2        $fn specific parameter - see below
* @param $thisConn  $current connection object - can be false if no connection object created
*/
function ADODB_Error_Handler($dbms, $fn, $errno, $errmsg, $p1, $p2, &$thisConnection)
{
    if (error_reporting() == 0) return; // obey @ protocol
    switch($fn) {
    case 'EXECUTE':
        $sql = $p1;
        $inputparams = $p2;

        $s = "$dbms error: [$errno: $errmsg] in $fn(\"$sql\")\n";
        break;

    case 'PCONNECT':
    case 'CONNECT':
        $host = $p1;
        $database = $p2;

        $s = "$dbms error: [$errno: $errmsg] in $fn($host, '****', '****', $database)\n";
        break;
    default:
        $s = "$dbms error: [$errno: $errmsg] in $fn($p1, $p2)\n";
        break;
    }
    /*
    * Log connection error somewhere
    *   0 message is sent to PHP's system logger, using the Operating System's system
    *       logging mechanism or a file, depending on what the error_log configuration
    *       directive is set to.
    *   1 message is sent by email to the address in the destination parameter.
    *       This is the only message type where the fourth parameter, extra_headers is used.
    *       This message type uses the same internal function as mail() does.
    *   2 message is sent through the PHP debugging connection.
    *       This option is only available if remote debugging has been enabled.
    *       In this case, the destination parameter specifies the host name or IP address
    *       and optionally, port number, of the socket receiving the debug information.
    *   3 message is appended to the file destination
    */
    if (defined('ADODB_ERROR_LOG_TYPE')) {
        $t = date('Y-m-d H:i:s');
        if (defined('ADODB_ERROR_LOG_DEST'))
            error_log("($t) $s", ADODB_ERROR_LOG_TYPE, ADODB_ERROR_LOG_DEST);
        else
            error_log("($t) $s", ADODB_ERROR_LOG_TYPE);
    }


    #print "<p>$s</p>";
    trigger_error($s,ADODB_ERROR_HANDLER_TYPE); 
}

?>