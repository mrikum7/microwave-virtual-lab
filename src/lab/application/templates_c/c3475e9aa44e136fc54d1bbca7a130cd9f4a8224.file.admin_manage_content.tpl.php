<?php /* Smarty version Smarty3-RC3, created on 2010-11-19 04:33:30
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_manage_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4527091044ce6527a03e759-31629494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3475e9aa44e136fc54d1bbca7a130cd9f4a8224' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_manage_content.tpl',
      1 => 1287636686,
    ),
  ),
  'nocache_hash' => '4527091044ce6527a03e759-31629494',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/components/NSmarty/smarty/plugins/function.cycle.php';
?><?php $_template = new Smarty_Internal_Template("_headerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<table><tr>
<td colspan="2" align="center" class="error"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="grid">
                  <tr align="center">
                  
                  <td class="hd" align="left"><a href="?order_by=content_page&dir=<?php echo $_smarty_tpl->getVariable('content_page')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Page Title</a></td>
                  <td class="hd" align=""><a href="?order_by=content_date&dir=<?php echo $_smarty_tpl->getVariable('content_date')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Last Update</a></td>                  <td class="hd">Edit</td>
                  </tr>    
            <?php  $_smarty_tpl->tpl_vars['employees'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('contents')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['employees']->key => $_smarty_tpl->tpl_vars['employees']->value){
?>               
                  <tr class="<?php echo smarty_function_cycle(array('values'=>'panel_0,panel_1'),$_smarty_tpl->smarty,$_smarty_tpl);?>
">
                     <td align="left"><?php echo $_smarty_tpl->tpl_vars['employees']->value['content_page'];?>
</td>
                     <td  align="center"><?php echo $_smarty_tpl->tpl_vars['employees']->value['content_date'];?>
</td>
                     <td align="center" ><a href="update_page-<?php echo $_smarty_tpl->tpl_vars['employees']->value['content_id'];?>
.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
                   </tr>
            <?php }} else { ?>
                        <tr>
                          <td colspan="4" class="panel_1" align="center">No Record Found.</td>
                        </tr>
                        <?php } ?>
                        <tr>
                          <td colspan="4" align="center" class="hd"><?php $_template = new Smarty_Internal_Template("pager.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?></td>
                        </tr>
          </table>      
      </td>
  </tr>
</table>
<?php $_template = new Smarty_Internal_Template("_footerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>