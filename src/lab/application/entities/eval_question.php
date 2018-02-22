<?php
/* 
* Company   : Web Supplements
* File Name   : employee.php
* Date Create  : 2009-02-11
* Default Path : DOCUMENT_ROOT/
* Description  : File contains common functions for file upload, delete, download, crawlling.
* Client   : Dream HP
*/
 
class question{
	
	function __construct(){
		
	}
	
	function getARow($uid){
		$query = "SELECT * FROM experiment_self_eval_master where question_id=?";
        $field = NDatabase::getARow($query, array($uid));
        return $field;
	}
	function getCol($id)
	{
        $query = "SELECT question_id FROM experiment_self_eval_master Where experiment_id=".$id;
        $arr = NDatabase::getCol($query);
        return $arr;
	}
	
	function getAll()
	{
         $query = "SELECT * FROM experiment_self_eval_master order by question_id";
        $arr = NDatabase::getAllAssoc($query);
        return $arr;
	}
	
	function getquestion($id)
	{
		$query = "SELECT * From experiment_self_eval_master where experiment_id=".$id." order by sort_order";
        $field = NDatabase::getAllAssoc($query);
        return $field; 
	}
	

	function insert($arr)
	{
					
		$status=NDatabase::AutoExecute(TABLE_PREFIX.'experiment_self_eval_master',$arr,'INSERT',false,true,MAGIC_QUOTES);
		
		return $status;
		
	}

	function update($arr, $id){
		$str='';
		
		foreach($arr as $key=>$val){
			$str.=$key."=?, ";
		}
		$str=trim($str);
		$str=substr($str,0,strlen($str)-1);
			
		$q="UPDATE experiment_self_eval_master SET  ".$str." WHERE question_id 	=".$id;
        NDatabase::query($q, $arr);
		
		return 1;										 
		
	}
	
	function delete($id)
	{
		NDatabase::query("DELETE FROM experiment_self_eval_master WHERE question_id 	=?", $id);
	}
	
	function checkAnswer($q_id,$user_ans)
	{
		$query = "SELECT correct_answer FROM experiment_self_eval_master where question_id=?";
        $field = NDatabase::getOne($query, array($q_id));
        if($field == $user_ans)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	//function getBlogsAdmin(){
//        $query = "SELECT id, title as name, description, image_url as thumbnail FROM blogs order by id";
//        $arr = NDatabase::getAllAssoc($query);
//        return $arr;
//	}
	
}
?>