<?php
	ob_start('TL_AutoParse');
	function tl_translate($matches) {
		$str=trim($matches[0]);
		$str=substr($str,1);
		$str=substr($str,0,strlen($str)-1);
		return tl($str,false);
	}
	function TL_AutoParse($buffer) {
		$constants=get_defined_constants();
		$template=$buffer;
		$matches=array();
		print("hello");
		preg_match_all('/\[(\w)+\]/',$template,$matches);
		foreach ($matches[0] as $key=>$val) {
			if (!(empty($val))) {
				$out='#-#';
				$val=substr($val,1,strlen($val)-2);
				if(isset($GLOBALS[$val])) {
					$out=$GLOBALS[$val];
				}
				else if(isset($constants[$val])) {
					$out=$constants[$val];
				}
				else if(isset($_POST[$val])) {
					$out=$_POST[$val];
				}
				else if(isset($_GET[$val])) {
					$out=$_GET[$val];
				}
				if($out!='#-#' && $out!='') {
					$template=str_replace("[$val]",$out,$template);
				}else {
					$template=str_replace("[$val]",'',$template);
				}
			}
		}
		return $template;
	}
?>