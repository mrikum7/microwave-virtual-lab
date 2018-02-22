<?php
 
class experiment{
	
	function __construct(){
		
	}
	
	function getARow($uid){
		$query = "SELECT * FROM experiment_master where experiment_id =?";
        $field = NDatabase::getARow($query, array($uid));
        return $field;
	}	
	function getAll()
	{
        $query = "SELECT * FROM experiment_master order by experiment_id";
        $arr = NDatabase::getAllAssoc($query);
        return $arr;
	}	
	
	function getAllFeatured()
	{
        $query = "SELECT SUBSTRING(experiment_title,1,60) as experiment_title,SUBSTRING(experiment_description,1,130) as experiment_description,experiment_img,experiment_id FROM experiment_master Where is_featured = 1 order by experiment_id";
        $arr = NDatabase::getAllAssoc($query);
        return $arr;
	}	
	
	function getOne($uid){
		$query = "SELECT experiment_img FROM experiment_master where experiment_id =?";
        $field = NDatabase::getOne($query, array($uid));
        return $field;
	}
	
	function getContent()
	{
		$query = "SELECT * From experiment_master order by experiment_id";
        $field = NDatabase::getAllAssoc($query);
        return $field; 
	}
	function getExperiment($id)
	{
		$query = "SELECT e.experiment_id,e.experiment_name,ecm.category_sort_order From experiment_master e,experiment_categories_master ecm Where e.is_active=1 AND ecm.category_name = '".$id."' AND e.category_id=ecm.category_id order by sort_order";
        $field = NDatabase::getAllAssoc($query);
        return $field; 
	}
	
	function getExperimentName($id)
	{
		$query = "SELECT experiment_name From experiment_master Where  experiment_id= '".$id."' order by experiment_id";
        $field = NDatabase::getOne($query);
        return $field; 
	}
	function getExperimentSimulator($id)
	{
		$query = "SELECT simulator_flash From experiment_master Where  experiment_id= '".$id."' order by experiment_id";
        $field = NDatabase::getOne($query);
        return $field; 
	}
	
	
	function getExperimentVideo($id)
	{
	 $query = "SELECT experiment_video From experiment_master Where  experiment_id= '".$id."' order by experiment_id";
        $field = NDatabase::getARow($query);
        return $field; 
	}
	
	
	function insert($arr)
	{
					
		$status=NDatabase::AutoExecute(TABLE_PREFIX.'experiment_master',$arr,'INSERT',false,true,MAGIC_QUOTES);
		
		return $status;
		
	}

	function update($arr, $id){
		$str='';
		
		foreach($arr as $key=>$val){
			$str.=$key."=?, ";
		}
		$str=trim($str);
		$str=substr($str,0,strlen($str)-1);
			
		$q="UPDATE experiment_master SET  ".$str." WHERE experiment_id=".$id;
        NDatabase::query($q, $arr);
		
		return 1;										 
		
	}
	
	function delete($id)
	{
		NDatabase::query("DELETE FROM experiment_master WHERE experiment_id=?", $id);
	}
	

	
}
?>