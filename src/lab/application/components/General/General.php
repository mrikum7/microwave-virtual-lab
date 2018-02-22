<?
/**
 * $Id: General.php,v 1.2 2005/10/26 14:54:42 scratch Exp $
 * file General.php.php
 * class General contains same common functions
 * @access public
 * @package system
 * @version 1.0
 */
 
class General
{

    /**
     * function returns current categories structure
     * @access public
     * @param int $m_number - number of month (1 ... 12)
     * @return string name of month
     */
    function MonthName($m_number)
    {
    	$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October',
    					'November', 'December');
    	return $months[$m_number - 1];
    }
    
    /**
     * function redirect with javascript function
     * @access public
     * @param string $location
     * @return void
     */
    function JsRedirect($location)
    {
    	print"<script language=\"JavaScript\">
    	location='$location';
    	</script>";
    }
    
    /**
     * function redirect with php "header" function
     * @access public
     * @param string $location
     * @return void
     */
    function Redirect($location, $flag=1)
    {
        #session_processing
    	if (isset($_SESSION) && $flag)
    	{
    		$url_parts = parse_url($location);
    		parse_str($url_parts['query'], $gets);
    		$gets[session_name()] = session_id();
    		$location =  $url_parts['path']."?".General::Arr2Url($gets);
    		session_write_close();
    	}
        @header("location: ".$location);
        exit;
    }
    
    /**
     * function parse url 
     * @access public
     * @param object $obj
     * @return string of parameters in the url format
     */
    function Arr2Url($obj, $v_name = false){
    	if (sizeof($obj) == 0){
    		return "";
    	}
    	$ret = array();
    	foreach ($obj as $key => $value){
    		$c_name = ($v_name) ? $v_name.'['.$key.']' : $key;
    		if (is_array($value) || is_object($value)){
    			$ret[] = Arr2Url($value, $c_name);
    		}
    		elseif (is_scalar($value)){
    			$ret[] = $c_name."=".urlencode(strval($value));
    		}
    	}
    	return join("&", $ret);
    }
    
     
    /**
     * generate secret key
     * @param string $str
     * @access public
     * @return string $value - md5 hash
     */
    function GetKey($str, $length=null)
    {
        $key = strlen($str);
        $key = md5($key.substr($str, 0, 1).$key.$str);
        if (!$length)
            return $key;
        else
            return substr ($key, 0, $length);
    }
    
    function checkEmailFormat($email)
    {
        $email_regexp = "^([-!#\$%&'*+./0-9=?A-Z^_`a-z{|}~])+@([-!#\$%&'*+/0-9=?A-Z^_`a-z{|}~]+\\.)+[a-zA-Z]{2,4}\$";
        if (!eregi($email_regexp, $email)) return 0;
        else return 1;
    }
    
    
};
?>