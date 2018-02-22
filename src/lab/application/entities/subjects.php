<?php
 
class subject{
	
	function __construct(){
		
	}	
	function getARow($uid){
		$query = "SELECT * FROM subject_master where subject_id =?";
        $field = NDatabase::getARow($query, array($uid));
        return $field;
	}	
	function getAll()
	{
        $query = "SELECT * FROM subject_master order by subject_id";
        $arr = NDatabase::getAllAssoc($query);
        return $arr;
	}	
	function insert($arr)
	{
					
		$status=NDatabase::AutoExecute(TABLE_PREFIX.'subject_master',$arr,'INSERT',false,true,MAGIC_QUOTES);
		
		return $status;
		
	}

	function update($arr, $id){
		$str='';
		
		foreach($arr as $key=>$val){
			$str.=$key."=?, ";
		}
		$str=trim($str);
		$str=substr($str,0,strlen($str)-1);
			
		$q="UPDATE subject_master SET  ".$str." WHERE subject_id=".$id;
        NDatabase::query($q, $arr);
		
		return 1;										 
		
	}
	
	function delete($id)
	{
		NDatabase::query("DELETE FROM subject_master WHERE subject_id=?", $id);
	}
	

	
}
?>