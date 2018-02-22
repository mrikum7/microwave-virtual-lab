<?php
	class TL_Parser {
		var $template;
		var $contents;
		var $locale;
		var $template_dir;
		var $debugInfo=array();
		
		function TL_Parser($template,$locale,$dir) {
			$this->template=$template;
			$this->locale=$locale;
			$this->template_dir=$dir;
			$this->contents=file_get_contents($this->template_dir.$this->locale.'/'.$this->template);
		}
		
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
			readfile(APP_DIR."$str");
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
			include(APP_DIR."$str");
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
		function parse ($pageTags=array(),$methodTags=array()) {
			//global $_debugMessages;
			//global $_systemTags;
			$constants=get_defined_constants();
			$template=$this->contents;
			$matches=array();
			preg_match_all('/\[(\w)+\]/',$template,$matches);
			foreach ($matches[0] as $key=>$val) {
				if (!(empty($val))) {
					$out='#-#';
					//Check if this is System Tag
					$val=substr($val,1,strlen($val)-2);
					if(isset($methodTags[$val])) {
						//Get the function associated with this tag and execute it
						$method=$methodTags[$val];
						//debugMsg("Calling function : $method");
						eval("\$out=$method;");
					}else {
						if(isset($pageTags[$val])) {
							$out=$pageTags[$val];
						}
						else if(isset($constants[$val])) {
							$out=$constants[$val];
						}
					}
					//$template = eregi_replace('\[' . $key . '\]',$val,$template);
					if($out!='#-#' && $out!='') {
						$template=str_replace("[$val]",$out,$template);
					}else {
						$template=str_replace("[$val]",'',$template);
						if($out=='') {
							$this->debugInfo[]="Tag has no contents: [$val]";
						}else {
							$this->debugInfo[]="Unresolved tag: [$val]";
						}
					}
				}
			}
			$template=preg_replace_callback('/\[EVAL (.+)\]/',array($this,"tl_execute_function"),$template);
			$template=preg_replace_callback('/\[FILE (.+)\]/',array($this,"tl_include_phpfile"),$template);
			//$template=preg_replace_callback('/\[PHPFILE (.+)\]/',array($this,"tl_include_phpfile"),$template);
			//$template=preg_replace_callback('/\{(.+)\}/',"tl_translate",$template);
			//$template = ereg_replace('\[[A-Z0-9_]+\]', "", $template);
			/*if(PARSER_DEBUG) {
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
			}*/
			return $template;
		}
	}
?>