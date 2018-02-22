<?php
	function tl_execute_function($matches) {
		$str=trim($matches[0]);
		$str=substr($str,5);
		$str=substr($str,0,strlen($str)-1);
		$output='';
		ob_start();
		eval("$str;");
		$output=ob_get_contents();
		ob_end_clean();
		return $output;
	}
	function tl_include_file($matches) {
		$str=trim($matches[0]);
		$str=substr($str,5);
		$str=substr($str,0,strlen($str)-1);
		$output='';
		$str=trim($str);
		ob_start();
		readfile("$str");
		$output=ob_get_contents();
		ob_end_clean();
		return $output;
	}
	function tl_include_phpfile($matches) {
		$str=trim($matches[0]);
		$str=substr($str,5);
		$str=substr($str,0,strlen($str)-1);
		$output='';
		$str=trim($str);
		ob_start();
		include("$str");
		$output=ob_get_contents();
		ob_end_clean();
		return $output;
	}
	function tl_translate($matches) {
		$str=trim($matches[0]);
		$str=substr($str,1);
		$str=substr($str,0,strlen($str)-1);
		return tl($str,false);
	}
	function parse_template ($template, $pageTags, $warn=0) {
		global $_debugMessages;
		global $_systemTags;
		
		$matches=array();
		preg_match_all('/\[(\w)+\]/',$template,$matches);
		foreach ($matches[0] as $key=>$val) {
			if (!(empty($val))) {
				$out='#-#';
				//Check if this is System Tag
				$val=substr($val,1,strlen($val)-2);
				if(isset($_systemTags[$val])) {
					//Get the function associated with this tag and execute it
					$method=$_systemTags[$val];
					//debugMsg("Calling function : $method");
					eval("\$out=$method;");
				}else {
					if(isset($pageTags[$val])) {
						$out=$pageTags[$val];
					}
					/*Tried replacing CONSTANTS directly but the below code does not work
					try using get_defined_contants();
					else if(isset($GLOBALS[$val])) {
						$out=$GLOBALS[$val];
					}*/
				}
				//$template = eregi_replace('\[' . $key . '\]',$val,$template);
				if($out!='#-#' && $out!='') {
					$template=str_replace("[$val]",$out,$template);
				}else {
					$template=str_replace("[$val]",'',$template);
					if(DEBUG) {
						if($out=='') {
							debugMsg("Tag has not contents: [$val]");
						}else {
							debugMsg("Unresolved tag: [$val]");
						}
					}
				}
			}
		}
		$template=preg_replace_callback('/\[EVAL (.+)\]/',"tl_execute_function",$template);
		$template=preg_replace_callback('/\[FILE (.+)\]/',"tl_include_phpfile",$template);
		//$template=preg_replace_callback('/\[PHPFILE (.+)\]/',"tl_include_phpfile",$template);
		$template=preg_replace_callback('/\{(.+)\}/',"tl_translate",$template);
		//$template = ereg_replace('\[[A-Z0-9_]+\]', "", $template);
		if(DEBUG) {
			$debug='';
			if(isset($_debugMessages) && is_array($_debugMessages) && count($_debugMessages)>0) {
				$debug.=('<div class="debugBox"><ul>');
				foreach($_debugMessages as $tmp) {
					$debug.=('<li>'.$tmp.'</li>');
				}
				$debug.=('</ul></div>');
				//$_debugMessages=array();
			}
			$template.=$debug;
		}
		return $template;
	}
?>