<?php
/* 
* Company   : Web Supplements
* File Name   : employee.php
* Date Create  : 2009-02-11
* Default Path : DOCUMENT_ROOT/
* Description  : File contains common functions for file upload, delete, download, crawlling.
* Client   : Dream HP
*/
 
class theory{
	
	function __construct(){
		
	}
	
	function getARow($uid){
		$query = "SELECT * FROM experiment_theory_master where theory_id=?";
        $field = NDatabase::getARow($query, array($uid));
        return $field;
	}
	
	function getAll()
	{
        $query = "SELECT * FROM experiment_theory_master order by theory_id";
        $arr = NDatabase::getAllAssoc($query);
        return $arr;
	}
	
	function getThoery($id)
	{
		$query = "SELECT * From experiment_theory_master where is_active=1 AND experiment_id=".$id." order by sort_order";
        $field = NDatabase::getAllAssoc($query);
        return $field; 
	}
	
	/*function getThoery2()
	{
		$query = "SELECT * From experiment_theory_master where theory_id=2 order by sort_order";
        $field = NDatabase::getARow($query);
        return $field; 
	}
	
	function getThoery3()
	{
		$query = "SELECT * From experiment_theory_master where theory_id=3 order by sort_order";
        $field = NDatabase::getARow($query);
        return $field; 
	}*/
	
	function insert($arr)
	{
					
		$status=NDatabase::AutoExecute(TABLE_PREFIX.'experiment_theory_master',$arr,'INSERT',false,true,MAGIC_QUOTES);
		
		return $status;
		
	}

	function update($arr, $id){
		$str='';
		
		foreach($arr as $key=>$val){
			$str.=$key."=?, ";
		}
		$str=trim($str);
		$str=substr($str,0,strlen($str)-1);
			
		$q="UPDATE experiment_theory_master SET  ".$str." WHERE theory_id 	=".$id;
        NDatabase::query($q, $arr);
		
		return 1;										 
		
	}
	function delete($id)
	{
		
		$e_id = NDatabase::getOne("SELECT experiment_id FROM experiment_theory_master WHERE theory_id=?", $id);
		NDatabase::query("DELETE FROM experiment_theory_master WHERE theory_id=?", $id);
		return $e_id;
	}
	
	
	
	//function getBlogsAdmin(){
//        $query = "SELECT id, title as name, description, image_url as thumbnail FROM blogs order by id";
//        $arr = NDatabase::getAllAssoc($query);
//        return $arr;
//	}
	
}
?>