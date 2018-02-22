<?php
/* 
* Company   : Web Supplements
* File Name   : employee.php
* Date Create  : 2009-02-11
* Default Path : DOCUMENT_ROOT/
* Description  : File contains common functions for file upload, delete, download, crawlling.
* Client   : Dream HP
*/
 
class user_eval{
	
	function __construct(){
		
	}	
	function getARow($uid){
		$query = "SELECT * FROM user_evaluation where user_evaluation_id=?";
        $field = NDatabase::getARow($query, array($uid));
        return $field;
	}
	function insert($arr)
	{
		$status=NDatabase::AutoExecute(TABLE_PREFIX.'user_evaluation',$arr,'INSERT',false,true,MAGIC_QUOTES);
	   	return $status;
	}
	function update($arr, $id){
		$str='';
		foreach($arr as $key=>$val){
			$str.=$key."=?, ";
		}
		$str=trim($str);
		$str=substr($str,0,strlen($str)-1);
			
		$q="UPDATE user_evaluation SET  ".$str." WHERE user_evaluation_id 	=".$id;
        NDatabase::query($q, $arr);
        return 1;										 
	}
	
	function delete($id)
	{
		NDatabase::query("DELETE FROM user_evaluation WHERE user_evaluation_id 	=?", $id);
	}
}
?>