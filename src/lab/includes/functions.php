<?php
	//Set Message
	function setMsg($str) {
		$_SESSION[SESSION_PREFIX.'msg']=$str;
	}
	
	//Print Message Array from session
	function getMsg($cls='') {
		$cls=trim($cls);
		if(isset($_SESSION[SESSION_PREFIX.'msg'])) {
			$tmp_msg=$_SESSION[SESSION_PREFIX.'msg'];
			unset($_SESSION[SESSION_PREFIX.'msg']);
			if(is_array($tmp_msg)) {
				if($cls=='') {
					print('<ul>');
				}else {
					print('<ul class="'.$cls.'">');					
				}
				foreach($tmp_msg as $tmp) {
					print('<li>'.$tmp.'</li>');
				}
				print "</ul>";
			}
			else {
				if($cls=='') {
					print($tmp_msg);
				} else {
					print('<span class="'.$cls.'">'.$tmp_msg.'</span>');
				}
			}
		}
	}

	//Print Message Array from session
	function getMsgSmarty($cls='') {
		$cls=trim($cls);
		$out="";
		if(isset($_SESSION[SESSION_PREFIX.'msg'])) {
			$tmp_msg=$_SESSION[SESSION_PREFIX.'msg'];
			unset($_SESSION[SESSION_PREFIX.'msg']);
			if(is_array($tmp_msg)) {
				if($cls=='') {
					$out.='<ul>';
				}else {
					$out.='<ul class="'.$cls.'">';
				}
				foreach($tmp_msg as $tmp) {
					$out.='<li>'.$tmp.'</li>';
				}
				$out.="</ul>";
			}
			else {
				if($cls=='') {
					$out.=$tmp_msg;
				} else {
					$out.='<span class="'.$cls.'">'.$tmp_msg.'</span>';
				}
			}
		}
		return $out;
	}


	//Remove XSS
function RemoveXSS($val){ 
   // remove all non-printable characters. CR(0a) and LF(0b) and TAB(9) are allowed 
   // this prevents some character re-spacing such as <java\0script> 
   // note that you have to handle splits with \n, \r, and \t later since they *are* allowed in some inputs 
   $val = preg_replace('/([\x00-\x08][\x0b-\x0c][\x0e-\x20])/', '', $val); 
   // straight replacements, the user should never need these since they're normal characters 
   // this prevents like <IMG SRC=&#X40&#X61&#X76&#X61&#X73&#X63&#X72&#X69&#X70&#X74&#X3A&#X61&#X6C&#X65&#X72&#X74&#X28&#X27&#X58&#X53&#X53&#X27&#X29> 
   $search = 'abcdefghijklmnopqrstuvwxyz'; 
   $search .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $search .= '1234567890!@#$%^&*()'; 
   $search .= '~`";:?+/={}[]-_|\'\\'; 

   for ($i = 0; $i < strlen($search); $i++) { 
      // ;? matches the ;, which is optional 
      // 0{0,7} matches any padded zeros, which are optional and go up to 8 chars 
      // &#x0040 @ search for the hex values 
      $val = preg_replace('/(&#[x|X]0{0,8}'.dechex(ord($search[$i])).';?)/i', $search[$i], $val); // with a ; 
      // &#00064 @ 0{0,7} matches '0' zero to seven times 
      $val = preg_replace('/(&#0{0,8}'.ord($search[$i]).';?)/', $search[$i], $val); // with a ; 
   } 

   // now the only remaining whitespace attacks are \t, \n, and \r 
   $ra1 = Array('javascript', 'vbscript', '<expression', '<applet', 'meta', '<xml', '<link', '<script', 'script>','&lt;script','script&gt;', '<embed', '<object', 'iframe', '<frame', 'frameset', 'ilayer', '<layer', 'bgsound', '<title'); 

   $ra2 = Array('onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavailable', 'ondatasetchanged', 'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterchange', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowenter', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload'); 

   $ra = array_merge($ra1, $ra2); 
   $found = true; // keep replacing as long as the previous round replaced something 
   
   while ($found == true) { 
      $val_before = $val; 
      for ($i = 0; $i < sizeof($ra); $i++) { 
         $pattern = '/'; 
         for ($j = 0; $j < strlen($ra[$i]); $j++) { 
            if ($j > 0) { 
               $pattern .= '('; 
               $pattern .= '(&#[x|X]0{0,8}([9][a][b]);?)?'; 
               $pattern .= '|(&#0{0,8}([9][10][13]);?)?'; 
               $pattern .= ')?'; 
            } 

            $pattern .= $ra[$i][$j]; 
         } 
         $pattern .= '/i'; 
         $replacement = substr($ra[$i], 0, 2).'<x>'.substr($ra[$i], 2); // add in <> to nerf the tag 
//		print $val."  -  ";
//		if(strtolower($val)!="description")
			 $val = preg_replace($pattern, $replacement, $val); // filter out the hex tags 
			 
         if ($val_before == $val) { 
            // no replacements were made, so exit the loop 
            $found = false; 
         } 
      } 
   } 

   str_replace("desc<x>ription","description",$val);
   return $val; 
} 

//Function to use before sending data to a query
function str_prepare($string,$xss=false)
{
	$string=trim($string);
	if(get_magic_quotes_gpc()) 
	{
		if(ini_get('magic_quotes_sybase'))
		{
			$string= str_replace("''", "'", $string);
		}
		else
		{
			$string = stripslashes($string);
		}
	}
	if($xss)
	{
		$string=RemoveXSS($string);
	}
	$string=str_replace("\r\n","",$string);
	
	$string=mysql_real_escape_string($string);
	return $string;
}

function output($string)
{
	print stripslashes(html_entity_decode($string,ENT_QUOTES));
}

function replace_newline($string, $replace='') {
	$order   = array("\\r\\n","\r\n","\n","\r");
//	$replace = '<br />';
  return (string)str_replace($order, $replace, $string);
}


	//A substring function which maintain word boundaries
	function smartSubstr($str,$len,$lines=0) {
		$l=strlen($str);
		$j=0;
		$result='';
		if($len<$l) {
			for($i=$len;$i<$l;$i++) {
				$tmp=$str[$i];
				if($tmp==' ') {
					break;
				}
				$j++;
			}
			$result=substr($str,0,($len+$j));
		}else {
			$result=$str;
		}
		if($lines>0) {
			$arr=explode("\r\n",$result);
			$lc=count($arr);
			if($lines==1) {
				$result=$arr[0];
			}else {
				$out='';
				for($i=0;$i<$lines;$i++) {
					if($i<$lc) {
						//if(trim($arr[$i]) !='') {
							$out.=$arr[$i]."\r\n";
						//}
					}else {
						break;
					}
				}
				$result=$out;
			}
		}
		return $result;
	}
	
	//Log entry
	function logEntry($str) {
		$fp=fopen("/home/panafroc/tmp/error.log","a+");
		fwrite($fp,$str);
		fwrite($fp,"\r\n");
		fclose($fp);
	}
	
	//Translation function
	function tl($var,$out=true) {
		global $language;
		if(isset($language[$var])) {
			$output=$language[$var];
		}else {
			$output=$var;
		}
		if($out) {
			print($output);
		}else {
			return $output;
		}
	}
	
	function debugMsg($msg) {
		global $_debugMessages;
		if(isset($msg)) {
			$msg=trim($msg);
			if($msg!='') {
				$_debugMessages[]=$msg;
			}
		}
	}

	function microtime_float() {
		list($usec, $sec) = explode(" ", microtime());
		return ((float)$usec + (float)$sec);
	}

function dateDiff($endDate, $beginDate, $type='days')
{
	$endDate=strtotime($endDate);
	$beginDate=strtotime($beginDate);
	$diff=$endDate - $beginDate;

	if($type=='days')
		$div=60*60*24;
	else if($type=='hours')
		$div=60*60;
	else if($type=='min')
		$div=60;
	else
		$div=1;
	$diff1=$diff/$div;
	return $diff1;

}


	//Fetch config for a module from Database
	function fetchDbConfig($confName) {
		global $conn;
		$result = NDatabase::getOne("SELECT array FROM ".TABLE_PREFIX."config WHERE cname = '$confName'");
		if($result){
		//print_r($result);
			$base64Encoded = unserialize($result);
			foreach($base64Encoded as $key => $value){
				$decoded[base64_decode($key)] = stripslashes(base64_decode($value));
			}
			$clean=array();
			foreach($decoded as $key => $value){
				if(strcasecmp($value,'true')==0) {
					$clean[$key]=true;
					continue;
				}
				if(strcasecmp($value,'false')==0) {
					$clean[$key]=false;
					continue;
				}
				$clean[$key]=$value;
			}
			return $clean;
		} else {
			return FALSE;
		}
	}
	
	//Write config to Database
	function writeDbConf($confName, $values) {
		global $conn;
		if (is_array($values)) {
			if (count($values) < 1){
				return false;
			}
			else {
				// serialise the array for DB storage bas64 encode to stop serialize bug
				foreach($values as $key => $value) {
					$value = str_replace(array("\'","'"),"&#39;",$value);
					$newConfigBase64[base64_encode($key)] = base64_encode($value);
		
				}
				$configText = serialize($newConfigBase64);
				// see if database config exists
				$result = $conn->Execute("SELECT count(*) AS c FROM ".TABLE_PREFIX."config WHERE cname = '$confName'");
				//$tmp=$result->fields;
				if($result->fields['c']>0) {
					$conn->AutoExecute(TABLE_PREFIX.'config',array('array'=>$configText),'UPDATE',"cname='$confName'",true,MAGIC_QUOTES);
				} else {
					$conn->AutoExecute(TABLE_PREFIX.'config',array('array'=>$configText),'INSERT',false,true,MAGIC_QUOTES);
				}
				return true;
			}
		}
		else {
			return false;
		}
	}

// Generate a random password
function generate_password($length = 8)
{
        $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
        $numChars = strlen($chars);
 
        $string = '';
        for ($i = 0; $i < $length; $i++) {
            $string .= substr($chars, rand(1, $numChars) - 1, 1);
        }
        return $string;
} 

	function persons_age($BirthDate) {
		if(isset($BirthDate)) {
			list($year, $month, $day) = split('[-.]', $BirthDate);
			$tmonth = date('n');
			$tday = date('j');
			$tyear = date('Y');
			$years = $tyear - $year;
			if ($tmonth <= $month)
			{
			  if ($month == $tmonth)
			  {
				  if ($day > $tday)
					  $years--;
			  }
			  else
				  $years--;
			}
		}
		else {
			$years='N.A';
		}
		return $years;
	}
	
	function prep($str) {
		return trim(htmlentities($str));
	}

function scandirectory($dir, $no_dots=TRUE) 
{
	$files = array();
	$dh  = @opendir($dir);
	if ($dh!=FALSE) 
	{
		while (false !== ($filename = readdir($dh))) {
		// Check for mp3 here
			$files[] = $filename;
		}
		if ($no_dots) {
			while(($ix = array_search('.',$files)) > -1) 
			  unset($files[$ix]);
			while(($ix = array_search('..',$files)) > -1) 
			  unset($files[$ix]);
			while(($ix = array_search('Thumbs.db',$files)) > -1) 
			  unset($files[$ix]);
			while(($ix = array_search('thumbs.db',$files)) > -1) 
			  unset($files[$ix]);
		}
		sort($files);
	}
	return $files;
}

function php4_scandir($dir,$listDirectories=false, $skipDots=true) 
{
	$dirArray = array();
	if ($handle = opendir($dir)) 
	{
		while (false !== ($file = readdir($handle))) 
		{
			if (($file != "." && $file != "..") || $skipDots == true) 
			{
				if($listDirectories == false) 
				{ 
					if(is_dir($file)) 
					{ 
						continue; 
					} 
				}
				array_push($dirArray,basename($file));
			}
		}
		closedir($handle);
	}
	return $dirArray;
}


function PageCompFeatured_tru($target_dir)
{
	$b=array();
	if ($target_dir)
	{
		$a=scandirectory($target_dir);
		foreach ( $a as $tmp)
		{
			if(is_dir($target_dir."/".$tmp))
			{
				if($tmp!='dlf')
				$b[]=$tmp;
			}
		}
	}
	return $b;
}

function recordExist($value,$table,$fieldName)
{ 
	global $conn;
	$sql ='Select '.$fieldName.' from '.$table.' where '.$fieldName." ='".$value."'"; 
	$result = $conn->Execute($sql); 
	if($result->RecordCount() > 0)
	{
		return true;
	}
	else
	{
		return false;
	}
 }
 
function loadEntity($entity)
{
    $file = ENTITY_DIR.$entity.'.php';
    if (file_exists($file))
	{
        require_once $file;
	}
	else
	{
		die('Could not load entity:'.$entity);
	}
}

function checkEmailFormat($email) 
{
   if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email))
   {
      return FALSE;
   }
   else
   {
	   return TRUE;
	}
}

	function getJSDate($mySqlDate)
	 {
	return date('d-M-Y', strtotime($mySqlDate)); 
     }
	
	function getCurrentTimeBlock(){
	$hourBlocks = date('H') * 4;
	$min = date('i');

	if($min >=0 and $min < 15) $minBlocks = 1;
	elseif($min >=15 and $min < 30) $minBlocks = 2;
	elseif($min >=30 and $min < 45) $minBlocks = 3;
	elseif($min >=45 and $min < 60) $minBlocks = 4;

	$currTimeBlock = $hourBlocks + $minBlocks;

	return $currTimeBlock;
    }
	function getMySqlDate($jsDate){
	return date('Y-m-d', strtotime($jsDate)); 
    }
?>