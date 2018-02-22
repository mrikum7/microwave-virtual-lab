<?php
/* 
* Company   : Web Supplements
* File Name   : employee.php
* Date Create  : 2009-02-11
* Default Path : DOCUMENT_ROOT/
* Description  : File contains common functions for file upload, delete, download, crawlling.
* Client   : Dream HP
*/
 
class news{
	
	function __construct(){
		
	}
	
	function getARow($uid){
		$query = "SELECT * FROM news_events where news_id =?";
        $field = NDatabase::getARow($query, array($uid));
        return $field;
	}
	
	function getAll()
	{
        $query = "SELECT * FROM news_events order by news_id";
        $arr = NDatabase::getAllAssoc($query);
        return $arr;
	}
	
	function getNews()
	{
		$query = "SELECT news_id,news_description,SUBSTRING(news_title,1,70) as news_title From news_events where is_active=1 order by sort_order LIMIT 4";
        $field = NDatabase::getAllAssoc($query);
        return $field; 
	}
	
	function insert($arr)
	{
					
		$status=NDatabase::AutoExecute(TABLE_PREFIX.'news_events',$arr,'INSERT',false,true,MAGIC_QUOTES);
		
		return $status;
		
	}

	function update($arr, $id){
		$str='';
		
		foreach($arr as $key=>$val){
			$str.=$key."=?, ";
		}
		$str=trim($str);
		$str=substr($str,0,strlen($str)-1);
			
		$q="UPDATE news_events SET  ".$str." WHERE news_id=".$id;
        NDatabase::query($q, $arr);
		
		return 1;										 
		
	}
	
	function delete($id)
	{
		NDatabase::query("DELETE FROM news_events WHERE news_id=?", $id);
	}
	
	//function getBlogsAdmin(){
//        $query = "SELECT id, title as name, description, image_url as thumbnail FROM blogs order by id";
//        $arr = NDatabase::getAllAssoc($query);
//        return $arr;
//	}
	
}
?>