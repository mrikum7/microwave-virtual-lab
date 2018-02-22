<?php
	function showSelectList(&$rs,$sid='') {
		$sel='';
		while (!$rs->EOF) {
			$arr=$rs->fields;
			if($sid!='') {
				if($sid==$arr[0]) {
					$sel=' selected="selected"';
				}else {
					$sel='';
				}
			}
			print('<option value="'.$arr[0].'"'.$sel.'>'.$arr[1].'</option>'."\n");
			$rs->MoveNext();
		}
	}
	
	function showHiddenField($name,$value) {
		print('<input type="hidden" name="'.$name.'" id="'.$name.'" value="'.$value.'">');
	}
	
	function createImage($src,$width='',$height='',$align='',$hspace=0,$vspace=0,$alt='',$css='',$border=-1,$name='') {
		$tag='<img src="'.$src.'"';
		if($width!='') {
			$tag.=' width="'.$width.'"';
		}
		if($height!='') {
			$tag.=' height="'.$height.'"';
		}
		if($align!='') {
			$tag.=' align="'.$align.'"';
		}
		if($hspace!='') {
			$tag.=' hspace="'.$hspace.'"';
		}
		if($vspace!='') {
			$tag.=' vspace="'.$vspace.'"';
		}
		if($alt!='') {
			$tag.=' alt="'.$alt.'" title=" '.$alt.' "';
		}
		if($css!='') {
			$tag.=' class="'.$css.'"';
		}
		if($border!=-1) {
			$tag.=' border="'.$border.'"';
		}
		if($name!='') {
			$tag.=' name="'.$name.'" id="'.$name.'"';
		}
		$tag.=' />';
		//print($tag);
		return $tag;
	}
	
	function createLink($text,$link,$params=array(),$class='',$target='') {
		$class=trim($class);
		$append='';
		if($class!='') {
			$css=' class="'.$class.'"';
		}
		else {
			$css='';
		}
		if(is_array($params) && count($params)>0) {
			$append='?';
			foreach($params as $nm=>$tmp) {
				$append.="$nm=$tmp&";
			}
			$append=substr($append,0,-1);
		}
		$ln=APP_URL.$link.$append;
		if(SEO_LINKS) {
			$ln=formatSEOLink($ln);
		}
		$output='<a href="'.$ln.'"'.$css.' target="'.$target.'">'.$text.'</a>';
		return $output;
	}
	
	function formatSEOLink($link) {
		while (strstr($link, '&&')) $link = str_replace('&&', '&', $link);
		$link = str_replace('?', '/', $link);
		$link = str_replace('&', '/', $link);
		$link = str_replace('=', '/', $link);
		return $link;
	}
?>