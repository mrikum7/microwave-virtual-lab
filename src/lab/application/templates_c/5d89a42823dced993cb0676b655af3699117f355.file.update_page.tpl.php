<?php /* Smarty version Smarty3-RC3, created on 2010-11-19 04:33:33
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8305360894ce6527d0376a5-05520570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d89a42823dced993cb0676b655af3699117f355' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_page.tpl',
      1 => 1288083404,
    ),
  ),
  'nocache_hash' => '8305360894ce6527d0376a5-05520570',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_stripslash')) include '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/components/NSmarty/smarty/plugins/modifier.stripslash.php';
?><?php $_template = new Smarty_Internal_Template("_headerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="update_homePage_exec.php" method="post" >
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2><?php echo $_smarty_tpl->getVariable('data')->value['content_title'];?>
</h2></td>
          <td colspan="2" align="center" class="error"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
        </tr>
        <tr>
          <td valign="top"><strong>Title :</strong></td>
          <td>
              <input name="title" type="text" class="textfield" id="title" value="<?php echo $_smarty_tpl->getVariable('data')->value['content_title'];?>
" size="30">
             </td>
        </tr> 
        <tr>
          <td valign="top"><strong>Details :</strong></td>
          <td>
             <textarea cols="80" rows="10" id="CKEditor1" name="desc"><?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('data')->value['content_description']);?>
</textarea>
             <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->getVariable('data')->value['content_id'];?>
" />
            </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
              <input name="button" type="submit" id="button" value="Update" />
            </label></td>
        </tr>
      </table>
      </form>
     </td>
  </tr>
</table>
<?php $_template = new Smarty_Internal_Template("_footerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>