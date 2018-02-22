<?php
/* 
* Company   : Web Supplements
* File Name   : employee.php
* Date Create  : 2009-02-11
* Default Path : DOCUMENT_ROOT/
* Description  : File contains common functions for file upload, delete, download, crawlling.
* Client   : Dream HP
*/
 
class equipment{
	
	function __equipment(){
		
	}
	
	function getARow($uid){
		$query = "SELECT * FROM equipment_master where equipment_id =?";
        $field = NDatabase::getARow($query, array($uid));
        return $field;
	}
	
	function getAll()
	{
        $query = "SELECT * FROM equipment_master order by equipment_id";
        $arr = NDatabase::getAllAssoc($query);
        return $arr;
	}
	
	function getEquipment()
	{
		 $query = "SELECT * FROM equipment_master order by sort_order";
        $field = NDatabase::getAllAssoc($query);
		$equipments=array();
		foreach($field as $eq)
		{
			$query = "SELECT * FROM equipment_images where equipment_id=? order by equipment_image_id";
	        $arr = NDatabase::getAllAssoc($query,array($eq['equipment_id']));
			$eq['equipment_images'] = $arr;
			$equipments[] = $eq;
		}
        return $equipments;
	}
	
	function insert($arr)
	{
					
		$status=NDatabase::AutoExecute(TABLE_PREFIX.'equipment_master',$arr,'INSERT',false,true,MAGIC_QUOTES);
		
		return $status;
		
	}

	function update($arr, $id){
		$str='';
		
		foreach($arr as $key=>$val){
			$str.=$key."=?, ";
		}
		$str=trim($str);
		$str=substr($str,0,strlen($str)-1);
			
		$q="UPDATE equipment_master SET  ".$str." WHERE equipment_id=".$id;
        NDatabase::query($q, $arr);
		
		return 1;										 
		
	}
	
	function delete($id)
	{
		NDatabase::query("DELETE FROM equipment_master WHERE equipment_id=?", $id);
	}
	
	//function getBlogsAdmin(){
//        $query = "SELECT id, title as name, description, image_url as thumbnail FROM blogs order by id";
//        $arr = NDatabase::getAllAssoc($query);
//        return $arr;
//	}
	
}
?>