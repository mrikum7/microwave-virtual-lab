<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function-createLink.php
 * Type:     function
 * Name:     createLink
 * Purpose:  accept URL and outputs a SEO URL
 * -------------------------------------------------------------
 */


function smarty_function_createLink($arr , $smarty, $template)
{
	$link=$arr['link'];
//	print_r($arr);
	while (strstr($link, '&&')) $link = str_replace('&&', '&', $link);
		$link = str_replace('?', '/', $link);
		$link = str_replace('&', '/', $link);
		$link = str_replace('=', '/', $link);
		return $link;
}
	
	
?>