<?php
/* 
* Company   : Web Supplements
* File Name   : employee.php
* Date Create  : 2009-02-11
* Default Path : DOCUMENT_ROOT/
* Description  : File contains common functions for file upload, delete, download, crawlling.
* Client   : Dream HP
*/
 
class answer{
	
	function __construct(){
		
	}
	
	function getARow($uid){
		$teacher_subject = "SELECT * FROM teacher_answer_master where answer_id =?";
        $field = NDatabase::getARow($teacher_subject, array($uid));
        return $field;
	}
	
	function getAll()
	{
        $teacher_subject = "SELECT * FROM teacher_answer_master order by answer_id";
        $arr = NDatabase::getAllAssoc($teacher_subject);
        return $arr;
	}
	
	function getQuestions()
	{
		$teacher_subject = "SELECT * From teacher_answer_master where is_active=1 LIMIT 4 ";
        $field = NDatabase::getAllAssoc($teacher_subject);
        return $field; 
	}
	
	function insert($arr)
	{
					
		$status=NDatabase::AutoExecute(TABLE_PREFIX.'teacher_answer_master',$arr,'INSERT',false,true,MAGIC_QUOTES);
		
		return $status;
		
	}

	function update($arr, $id){
		$str='';
		
		foreach($arr as $key=>$val){
			$str.=$key."=?, ";
		}
		$str=trim($str);
		$str=substr($str,0,strlen($str)-1);
			
		$q="UPDATE teacher_answer_master SET  ".$str." WHERE answer_id=".$id;
        NDatabase::teacher_subject($q, $arr);
		
		return 1;										 
		
	}
	
	function delete($id)
	{
		NDatabase::teacher_subject("DELETE FROM teacher_answer_master WHERE answer_id=?", $id);
	}
	
	
	
}
?>