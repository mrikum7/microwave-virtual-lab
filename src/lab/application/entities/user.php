<?php
/* 
* Company   : Web Supplements
* File Name   : employee.php
* Date Create  : 2009-02-11
* Default Path : DOCUMENT_ROOT/
* Description  : File contains common functions for file upload, delete, download, crawlling.
* Client   : Dream HP
*/
 
class user{
	
	function __construct(){
		
	}
	
	function getARow($uuser_id){
		$query = "SELECT * FROM user_master where user_id=?";
        $field = NDatabase::getARow($query, array($uuser_id));
        return $field;
	}
	
	function getAll(){
        $query = "SELECT * FROM user_master order by user_id";
        $arr = NDatabase::getAllAssoc($query);
        return $arr;
	}
	
	function insert($arr)
	{
					
		$status=NDatabase::AutoExecute(TABLE_PREFIX.'user_master',$arr,'INSERT',false,true,MAGIC_QUOTES);
		
		return $status;
		
	}

	function update($arr, $user_id){
		$str='';
		
		foreach($arr as $key=>$val){
			$str.=$key."=?, ";
		}
		$str=trim($str);
		$str=substr($str,0,strlen($str)-1);
			
		$q="UPDATE user_master SET  ".$str." WHERE user_id=".$user_id;
        NDatabase::query($q, $arr);
		
		return 1;										 
		
	}
	
	function delete($user_id)
	{
		NDatabase::query("DELETE FROM user_master WHERE user_id=?", $user_id);
	}
	
	function checkUserLogin($user_name, $user_password)
	{
	 $query = "SELECT user_id,user_type FROM user_master WHERE user_name=? and user_password=?";
        return NDatabase::getARow($query, array( $user_name, md5($user_password)));	
	}
	
	function checkusername($user_id)
	{
		$query = "SELECT user_name FROM user_master WHERE user_id=".$user_id;
        $arr = NDatabase::getARow($query);
        return $arr;
	}
	
	function getUserInfo($u_id){
		$query = "SELECT * from user_master Where user_id = ".$u_id;
        $field = NDatabase::getARow($query);
        return $field;
	}
	
	function isAdmin($admin_id)
	{
		$query = "SELECT user_type FROM user_master WHERE user_id=".$admin_id;
        $arr = NDatabase::getOne($query);
        return $arr;
	}
	
	
	function getExperimentCount($id)
	{
		$query = "SELECT experiment_name, count FROM user_participation ep,experiment_master em WHERE em.experiment_id = ep.experiment_id AND ep.user_id=".$id." LIMIT 0, 5";
        $arr = NDatabase::getAllAssoc($query);
        return $arr;
	}
	
	function getAssignmentCount($id)
	{
		$query = "SELECT assignment_title, count FROM experiment_assignment_master ep,user_assignments em WHERE em.assignment_id = ep.assignment_id AND em.user_id=".$id." LIMIT 0, 5";
        $arr = NDatabase::getAllAssoc($query);
        return $arr;
	}
	
	function getEvaluationData($id)
	{
		$query = "SELECT experiment_name, score FROM experiment_master em,user_evaluation ue WHERE em.experiment_id = ue.experiment_id AND ue.user_id=".$id." LIMIT 0, 5";
        $arr = NDatabase::getAllAssoc($query);
        return $arr;
	}
	/*
	function getmessageDetails()
	{
		$query = "UPDATE messages set status=0 where parent_id=0 AND reciever_id=".$_SESSION[SESSION_PREFIX.'user_id'];
		NDatabase::query($query); 
		 $query = "SELECT * FROM messages where parent_id=0 AND reciever_id=".$_SESSION[SESSION_PREFIX.'user_id'];
        $arr = NDatabase::getAllAssoc($query);
        return $arr;
	}
	
	function getTotalmessage()
	{
		 $query = "SELECT * FROM messages where status=0 AND id=".$_SESSION[SESSION_PREFIX.'user_id'];
        $arr = NDatabase::getAllAssoc($query);
        return $arr;
	}
	*/
	/*function change_password($password,$user_id,$new_password)
	{

		$query="SELECT count(user_id) as count from users where user_id='".$_SESSION[SESSION_PREFIX.'user_id']."' AND password='".md5($password)."'";
		$count = NDatabase::getOne($query);
		if($count>0)
		{
			$query="UPDATE users SET password='".md5($new_password)."' WHERE user_id=".$user_id." AND password = '".md5($password)."'";
			NDatabase::query($query); 
			return true;
		}
		else
		{
			return false;
		}
	}
	*/
		function hasUser($email){
		$query = "SELECT count(user_id) as count from user_master where user_email='".$email."'";
        $field = NDatabase::getOne($query);
        return $field;
	}
	

}

?>