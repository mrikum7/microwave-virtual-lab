<?php
/* 
* Company   : Web Supplements
* File Name   : General.php
* Date Create  : 2009-02-11
* Default Path : DOCUMENT_ROOT/
* Description  : File contains common functions for file upload, delete, download, crawlling.
* Client   : Dentsu
*/
 
class GeneralEntity{
	
	function __construct(){
		
	}
	function getAdminNumRows()
	{
		return $GRID_NUM_ROWS;
	}

	function myprep(&$res)
	{
		if (is_string($res))
		{ 	
			$res = str_replace("%","",$res);
			$res = str_replace(";","",$res);
			$res = RemoveXSS($res);
			$res = htmlentities($res);
			$res = trim($res);
			$res = stripslashes($res);
		   
			if (!$res && $res != "0") $res = null;
		}
		else
		if (is_array($res)) foreach ($res as $key => $val) GeneralEntity::myprep($res[$key]);

    return $res;
  }
  
  function http_request($key)
	{
		$res = null;
		if (isset($_GET[$key])) $res = $_GET[$key];
		if ($res == null && isset($_POST[$key])) $res = $_POST[$key];
		return GeneralEntity::myprep($res);
	}

	function getIST($date)
	{
		//$date = date("Y-m-d H:i:s", strtotime('+3 hours',strtotime($date))); 
		//$date = date("Y-m-d H:i:s", strtotime('+30 mins',strtotime($date)));
		return  $date;
	}
	
	function date_format($date,$format='d/m/y H:i:s')
	{	
		$date = strtotime($date);
		$date = date($format,$date);
		return  $date;
	}
	
	
	function query($q){
        $arr = NDatabase::getAllAssoc($q);
        return $arr;
	}

	function insert($tableName, $arr){

		$str='';
		
		foreach($arr as $key=>$val){
			$str.=$key."=?, ";
		}
		$str=trim($str);
		$str=substr($str,0,strlen($str)-1);
			
        NDatabase::query("INSERT INTO ".$tableName." SET  ".$str, $arr);
        $insid= NDatabase::getOne("SELECT LAST_INSERT_ID()");
		
		if($insid){
			return true;
		}
	}
	
	function redirect($location){
        #session_processing
        @header("location: ".$location);
        exit;
    }
	
	function doLogout(){
		session_destroy();
		session_unset();
		self::redirect("login.php");
	}
	

#
// remove the pesky slashes from magic quotes if it's turned on
#
	function clean_string($value){
		
		if(get_magic_quotes_gpc()){
			$value = stripslashes($value);
		}
		
		// escape things properly
		
		return mysql_real_escape_string($value);
		
	}
	
	function is_login()
	{
		if(isset($_SESSION[SESSION_PREFIX.'user_id']) && $_SESSION[SESSION_PREFIX.'user_id']!="")
			return "yes";
		else
			return "no";
	 }
	

}
?>