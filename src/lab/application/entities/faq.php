<?php
/* 
* Company   : Web Supplements
* File Name   : employee.php
* Date Create  : 2009-02-11
* Default Path : DOCUMENT_ROOT/
* Description  : File contains common functions for file upload, delete, download, crawlling.
* Client   : Dream HP
*/
 
class faq{
	
	function __equipment(){
		
	}
	
	function getARow($uid){
		$query = "SELECT * FROM faq_master where faq_id =?";
        $field = NDatabase::getARow($query, array($uid));
        return $field;
	}
	function getSub(){
		$query = "SELECT subject_id,subject_name FROM subject_master";
        $field = NDatabase::getAllAssoc($query);
        return $field;
	}
	
	function getAll()
	{
        $query = "SELECT * FROM faq_master order by faq_id";
        $arr = NDatabase::getAllAssoc($query);
        return $arr;
	}
	
	//function getFaq()
//	{
//		$query = "SELECT fm.faq_question,fm.faq_answer,fm.sort_order,sm.subject_name,sm.subject_desc,sm.subject_thumbnail FROM faq_master as fm,subject_master as sm WHERE fm.subject_id=sm.subject_id order by faq_id";
//        $arr = NDatabase::getAllAssoc($query);
//
//        return $arr;
//	}
	
	function getFaq()
	{
	$query = "SELECT subject_id,subject_name,subject_thumbnail FROM subject_master WHERE is_active=1 order by subject_id";
        $field = NDatabase::getAllAssoc($query);
		$faq=array();
		foreach($field as $eq)
		{
			$query = "SELECT * FROM faq_master where is_active=1 AND subject_id=? order by sort_order";
	        $arr = NDatabase::getAllAssoc($query,array($eq['subject_id']));
			$eq['faqs']= $arr;
			$faq[] = $eq;
		}
        return $faq;
	}
	
	function insert($arr)
	{
					
		$status=NDatabase::AutoExecute(TABLE_PREFIX.'faq_master',$arr,'INSERT',false,true,MAGIC_QUOTES);
		
		return $status;
		
	}

	function update($arr, $id){
		$str='';
		
		foreach($arr as $key=>$val){
			$str.=$key."=?, ";
		}
		$str=trim($str);
		$str=substr($str,0,strlen($str)-1);
			
		$q="UPDATE faq_master SET  ".$str." WHERE faq_id=".$id;
        NDatabase::query($q, $arr);
		
		return 1;										 
		
	}
	
	function delete($id)
	{
		NDatabase::query("DELETE FROM faq_master WHERE faq_id=?", $id);
	}
	
	//function getBlogsAdmin(){
//        $query = "SELECT id, title as name, description, image_url as thumbnail FROM blogs order by id";
//        $arr = NDatabase::getAllAssoc($query);
//        return $arr;
//	}
	
}
?>