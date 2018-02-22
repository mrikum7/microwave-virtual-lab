<?php
/* 
* Company   : Web Supplements
* File Name   : employee.php
* Date Create  : 2009-02-11
* Default Path : DOCUMENT_ROOT/
* Description  : File contains common functions for file upload, delete, download, crawlling.
* Client   : Dream HP
*/
 
class query{
	
	function __construct(){
		
	}
	
	function getARow($uid){
		$query = "SELECT * FROM student_question_master where question_id =?";
        $field = NDatabase::getARow($query, array($uid));
        return $field;
	}
	
	function getAll()
	{
        $query = "SELECT * FROM student_question_master order by question_id";
        $arr = NDatabase::getAllAssoc($query);
        return $arr;
	}
	
	function getQuestions()
	{
		$query = "SELECT * From student_question_master where is_active=1 LIMIT 4 ";
        $field = NDatabase::getAllAssoc($query);
        return $field; 
	}
	
	function insert($arr)
	{
					
		$status=NDatabase::AutoExecute(TABLE_PREFIX.'student_question_master',$arr,'INSERT',false,true,MAGIC_QUOTES);
		
		return $status;
		
	}

	function update($arr, $id){
		$str='';
		
		foreach($arr as $key=>$val){
			$str.=$key."=?, ";
		}
		$str=trim($str);
		$str=substr($str,0,strlen($str)-1);
			
		$q="UPDATE student_question_master SET  ".$str." WHERE question_id=".$id;
        NDatabase::query($q, $arr);
		
		return 1;										 
		
	}
	
	function delete($id)
	{
		NDatabase::query("DELETE FROM student_question_master WHERE question_id=?", $id);
	}
	
	
	
}
?>