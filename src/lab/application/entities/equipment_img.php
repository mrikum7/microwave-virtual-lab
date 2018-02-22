<?php
/* 
* Company   : Web Supplements
* File Name   : employee.php
* Date Create  : 2009-02-11
* Default Path : DOCUMENT_ROOT/
* Description  : File contains common functions for file upload, delete, download, crawlling.
* Client   : Dream HP
*/
 
class equipment_img{
	
	function __equipment(){
		
	}
	
	function getARow($uid){
		$query = "SELECT * FROM equipment_images where equipment_image_id =?";
        $field = NDatabase::getARow($query, array($uid));
        return $field;
	}
	
	function getOne($uid){
		$query = "SELECT img_name FROM equipment_images where equipment_image_id =?";
        $field = NDatabase::getOne($query, array($uid));
        return $field;
	}
	
	
	function getAll($id)
	{
        $query = "SELECT * FROM equipment_images where equipment_id=? order by equipment_image_id";
        $arr = NDatabase::getAllAssoc($query,array($id));
        return $arr;
	}
	
	function getEquipmentImg()
	{
		$query = "SELECT * FROM equipment_images order by equipment_image_id";
        $field = NDatabase::getAllAssoc($query);
        return $field; 
	}
	
	function insert($arr)
	{
					
		$status=NDatabase::AutoExecute(TABLE_PREFIX.'equipment_images',$arr,'INSERT',false,true,MAGIC_QUOTES);
		
		return $status;
		
	}

	function update($arr, $id){
		$str='';
		
		foreach($arr as $key=>$val){
			$str.=$key."=?, ";
		}
		$str=trim($str);
		$str=substr($str,0,strlen($str)-1);
			
		$q="UPDATE equipment_images SET  ".$str." WHERE equipment_image_id=".$id;
        NDatabase::query($q, $arr);
		
		return 1;										 
		
	}
	
	function delete($id)
	{
		
		NDatabase::query("DELETE FROM equipment_images WHERE equipment_image_id=?", $id);
	}
	
	//function getBlogsAdmin(){
//        $query = "SELECT id, title as name, description, image_url as thumbnail FROM blogs order by id";
//        $arr = NDatabase::getAllAssoc($query);
//        return $arr;
//	}
	
}
?>