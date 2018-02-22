<?php
/* 
* Company   : Web Supplements
* File Name   : employee.php
* Date Create  : 2009-02-11
* Default Path : DOCUMENT_ROOT/
* Description  : File contains common functions for file upload, delete, download, crawlling.
* Client   : Dream HP
*/
 
class content{
	
	function __construct(){
		
	}
	
	function getARow($uid){
		$query = "SELECT * FROM content_master where content_id =?";
        $field = NDatabase::getARow($query, array($uid));
        return $field;
	}
	
	function getAll()
	{
        $query = "SELECT * FROM content_master order by content_id";
        $arr = NDatabase::getAllAssoc($query);
        return $arr;
	}
	
	function getAbout()
	{
		 $query = "SELECT content_id,content_title,content_description From content_master where content_id=1 order by content_title";
        $field = NDatabase::getARow($query);
        return $field; 
	}
	
	function getAcknowledgement()
	{
		 $query = "SELECT content_id,content_title,content_description From content_master where content_id=7 order by content_title";
        $field = NDatabase::getARow($query);
        return $field; 
	}
	
	function getIndex()
	{
		$query = "SELECT content_id,content_title,SUBSTRING(content_description,1,645) as content_description From content_master where content_id=2 order by content_title";
        $field = NDatabase::getARow($query);
        return $field; 
	}
	
	function getIndex1()
	{
		$query = "SELECT content_id,content_title,content_description From content_master where content_id=2 order by content_title";
        $field = NDatabase::getARow($query);
        return $field; 
	}
	
	function getValue()
	{
		 $query = "SELECT content_id,content_title,SUBSTRING(content_description,1,100) as content_description From content_master where content_id=3 order by content_title";
        $field = NDatabase::getARow($query);
        return $field; 
	}
			
	function getNewsletter()
	{
		 $query = "SELECT content_id,content_title,SUBSTRING(content_description,1,145) as content_description From content_master where content_id=5 order by content_title";
        $field = NDatabase::getARow($query);
        return $field; 
	}
	
	function getBlog()
	{
		 $query = "SELECT content_id,content_date,content_title,SUBSTRING(content_description,1,60) as content_description From content_master where content_id=6 order by content_title";
        $field = NDatabase::getARow($query);
        return $field; 
	}
	
	
	
	function insert($arr)
	{
					
		$status=NDatabase::AutoExecute(TABLE_PREFIX.'content_master',$arr,'INSERT',false,true,MAGIC_QUOTES);
		
		return $status;
		
	}

	function update($arr, $id){
		$str='';
		
		foreach($arr as $key=>$val){
			$str.=$key."=?, ";
		}
		$str=trim($str);
		$str=substr($str,0,strlen($str)-1);
			
		$q="UPDATE content_master SET  ".$str." WHERE content_id=".$id;
        NDatabase::query($q, $arr);
		
		return 1;										 
		
	}
	
	function delete($id)
	{
		NDatabase::query("DELETE FROM content_master WHERE content_id=?", $id);
	}
	
	//function getBlogsAdmin(){
//        $query = "SELECT id, title as name, description, image_url as thumbnail FROM blogs order by id";
//        $arr = NDatabase::getAllAssoc($query);
//        return $arr;
//	}
	
}
?>