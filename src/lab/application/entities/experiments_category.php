<?php
 
class category{
	
	function __construct(){
		
	}
	
	function getARow($uid){
		$query = "SELECT * FROM experiment_categories_master where category_id =?";
        $field = NDatabase::getARow($query, array($uid));
        return $field;
	}
	
	function getAll()
	{
        $query = "SELECT * FROM experiment_categories_master order by category_id";
        $arr = NDatabase::getAllAssoc($query);
        return $arr;
	}
	
	function getContent()
	{
		$query = "SELECT * From experiment_categories_master Where is_active=1  order by category_id";
        $field = NDatabase::getAllAssoc($query);
        return $field; 
	}
	function getcategoriesName()
	{
		$query = "SELECT category_name From experiment_categories_master order by category_id";
        $field = NDatabase::getCol($query);
        return $field; 
	}
	
	function getContentCol($id)
	{
		 $query = "SELECT category_name From experiment_categories_master Where is_active=1 AND category_column = ".$id." order by category_sort_order";
        $field = NDatabase::getAllAssoc($query);
        return $field; 
	}
	
	
	
	function insert($arr)
	{
					
		$status=NDatabase::AutoExecute(TABLE_PREFIX.'experiment_categories_master',$arr,'INSERT',false,true,MAGIC_QUOTES);
		
		return $status;
		
	}

	function update($arr, $id){
		$str='';
		
		foreach($arr as $key=>$val){
			$str.=$key."=?, ";
		}
		$str=trim($str);
		$str=substr($str,0,strlen($str)-1);
			
		$q="UPDATE experiment_categories_master SET  ".$str." WHERE category_id=".$id;
        NDatabase::query($q, $arr);
		
		return 1;										 
		
	}
	
	function delete($id)
	{
		NDatabase::query("DELETE FROM experiment_categories_master WHERE category_id=?", $id);
	}
	

	
}
?>