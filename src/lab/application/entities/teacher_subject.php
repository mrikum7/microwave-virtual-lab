<?php
/* 
* Company   : Web Supplements
* File Name   : employee.php
* Date Create  : 2009-02-11
* Default Path : DOCUMENT_ROOT/
* Description  : File contains common functions for file upload, delete, download, crawlling.
* Client   : Dream HP
*/
 
class teacher_subject{
	
	function __construct(){
		
	}
	
	function getARow($uid){
		$teacher_subject = "SELECT * FROM teacher_subject_master where teacher_subject_id =?";
        $field = NDatabase::getARow($teacher_subject, array($uid));
        return $field;
	}
	
	function getAll()
	{
        $teacher_subject = "SELECT * FROM teacher_subject_master order by teacher_subject_id";
        $arr = NDatabase::getAllAssoc($teacher_subject);
        return $arr;
	}
	
	function getQuestions()
	{
		$teacher_subject = "SELECT * From teacher_subject_master where is_active=1 LIMIT 4 ";
        $field = NDatabase::getAllAssoc($teacher_subject);
        return $field; 
	}
	
	function insert($arr)
	{
					
		$status=NDatabase::AutoExecute(TABLE_PREFIX.'teacher_subject_master',$arr,'INSERT',false,true,MAGIC_QUOTES);
		
		return $status;
		
	}

	function update($arr, $id){
		$str='';
		
		foreach($arr as $key=>$val){
			$str.=$key."=?, ";
		}
		$str=trim($str);
		$str=substr($str,0,strlen($str)-1);
			
		$q="UPDATE teacher_subject_master SET  ".$str." WHERE teacher_subject_id=".$id;
        NDatabase::teacher_subject($q, $arr);
		
		return 1;										 
		
	}
	
	function delete($id)
	{
		NDatabase::teacher_subject("DELETE FROM teacher_subject_master WHERE teacher_subject_id=?", $id);
	}
	
	
	
}
?>