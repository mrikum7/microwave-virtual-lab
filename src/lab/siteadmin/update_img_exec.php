<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
loadEntity("scroller");
$id= $_REQUEST['id'];


$data['sort_order']=str_prepare($_POST['order']);
$data['added_on']=date('Y-m-d H:i:s');
$data['is_active']=str_prepare($_POST['is_active']);;
/*print"<PRE>";
print_r($data);
exit();*/
scroller::update($data,$id);
header('location:admin_manage_img.php');
setMsg('Image Edited successfully!');
exit();
?>
