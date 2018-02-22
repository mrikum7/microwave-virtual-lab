<?php /* Smarty version Smarty3-RC3, created on 2011-05-06 03:34:13
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/_headerAdmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7052624884dc3b285316d57-74892097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f662c6b2c72a47519838d18c0ce9ae222acb643e' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/_headerAdmin.tpl',
      1 => 1304583020,
    ),
  ),
  'nocache_hash' => '7052624884dc3b285316d57-74892097',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Virtual Labs</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="../css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<script src="../js/jquery-1.4.2.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="../js/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="../js/jquery.validationEngine.js"></script>
<?php if ($_smarty_tpl->getVariable('IS_EDITOR')->value==true){?>
<script type="text/javascript" src="../lib/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="../lib/ckfinder/ckfinder.js"></script>
<?php }?>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#DDEFFB">
        <tr>
          <td align="left"><a href="index.php" ><img border=0 src="images/vl_header1.jpg" alt=" " /></a></td>
		  <td width=126><img src="images/vl_header3.jpg" alt=" " /></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><div class="outer">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="244" valign="top"><div class="sidebar_outer">
                <table width="226" border="0" cellpadding="0" cellspacing="0" class="sidebar">
                  <tr >
                    <td valign="top">
                    <?php $_template = new Smarty_Internal_Template("_leftMenu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
                    </td>
                  </tr>
                </table>
              </div></td>
              <td valign="top">