<?php
/* 
* Company   : Web Supplements
* File Name   : employee.php
* Date Create  : 2009-02-11
* Default Path : DOCUMENT_ROOT/
* Description  : File contains common functions for file upload, delete, download, crawlling.
* Client   : Dream HP
*/
 
class feedback{
	
	function __construct(){
		
	}
	
	function getARow($uid){
		$query = "SELECT * FROM feedback_master where feedback_id =?";
        $field = NDatabase::getARow($query, array($uid));
        return $field;
	}
	
	function getAll()
	{
        $query = "SELECT * FROM feedback_master order by feedback_id";
        $arr = NDatabase::getAllAssoc($query);
        return $arr;
	}
	
	function getContent()
	{
		$query = "SELECT * From feedback_master order by feedback_id";
        $field = NDatabase::getAllAssoc($query);
        return $field; 
	}
	
	function insert($arr)
	{
					
		$status=NDatabase::AutoExecute(TABLE_PREFIX.'feedback_master',$arr,'INSERT',false,true,MAGIC_QUOTES);
		
		return $status;
		
	}

	function update($arr, $id){
		$str='';
		
		foreach($arr as $key=>$val){
			$str.=$key."=?, ";
		}
		$str=trim($str);
		$str=substr($str,0,strlen($str)-1);
			
		$q="UPDATE feedback_master SET  ".$str." WHERE feedback_id=".$id;
        NDatabase::query($q, $arr);
		
		return 1;										 
		
	}
	
	function delete($id)
	{
		NDatabase::query("DELETE FROM feedback_master WHERE feedback_id=?", $id);
	}
	
	//function getBlogsAdmin(){
//        $query = "SELECT id, title as name, description, image_url as thumbnail FROM blogs order by id";
//        $arr = NDatabase::getAllAssoc($query);
//        return $arr;
//	}
	
}
?>