<?php
require_once("../includes/startup.php");
//require_once("authenticate.php");
if (isset($_POST['frmSubmit']) && $_POST['frmSubmit']=='Change Password')
{

	$old_password = $_POST['user_password'];
	$new_password = $_POST['new_password'];

	 $sql=" SELECT user_id from ".TABLE_PREFIX."user_master where user_id='".$_SESSION[SESSION_PREFIX.'admin_id']."' and user_password='".md5($old_password)."' and is_active=1";


	$arr = NDatabase::getARow($sql);
	$count=NDatabase::getNumRows();

	if($count == 0) 
	{
		setMsg('Old Password Not Correct!');
	}
	else
	{
		$sql=" UPDATE ".TABLE_PREFIX."user_master set user_password='".md5($new_password)."' where user_id='".$_SESSION[SESSION_PREFIX.'admin_id']."' and is_active=1";
		$status = NDatabase::Query($sql);
		if($status)
		{
			setMsg('Password changed successfully!');
		}
		else
		{
			setMsg('Could not change password!');
		}
	}
}
NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::assign("page_name","admin_change_password");
NTemplate::display('admin_change_password.tpl');

?>
