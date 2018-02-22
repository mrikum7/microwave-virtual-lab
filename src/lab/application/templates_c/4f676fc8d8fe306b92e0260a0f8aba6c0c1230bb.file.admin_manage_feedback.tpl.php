<?php /* Smarty version Smarty3-RC3, created on 2010-12-23 04:17:11
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_manage_feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7257255924d1321a78057d3-63162575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f676fc8d8fe306b92e0260a0f8aba6c0c1230bb' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_manage_feedback.tpl',
      1 => 1287655908,
    ),
  ),
  'nocache_hash' => '7257255924d1321a78057d3-63162575',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/components/NSmarty/smarty/plugins/function.cycle.php';
?><?php $_template = new Smarty_Internal_Template("_headerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<table>
 <tr>
<td colspan="2" align="center" class="error"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="grid">
                  <tr align="center">
                  <td class="hd" align="left"><a href="?order_by=name&dir=<?php echo $_smarty_tpl->getVariable('name')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Name</a></td>
            <td class="hd" align=""><a href="?order_by=feedback_date&dir=<?php echo $_smarty_tpl->getVariable('feedback_date')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Date</a></td>
                  
                  <td class="hd">View Details</td>
                  </tr>    
            		<?php  $_smarty_tpl->tpl_vars['employees'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('feedback')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['employees']->key => $_smarty_tpl->tpl_vars['employees']->value){
?>               
                  <tr class="<?php echo smarty_function_cycle(array('values'=>'panel_0,panel_1'),$_smarty_tpl->smarty,$_smarty_tpl);?>
">
                     <td align="left"><?php echo $_smarty_tpl->tpl_vars['employees']->value['name'];?>
</td>
                   <td  align="center"><?php echo $_smarty_tpl->tpl_vars['employees']->value['feedback_date'];?>
</td>
                     <td align="center" ><a href="update_feedback-<?php echo $_smarty_tpl->tpl_vars['employees']->value['feedback_id'];?>
.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
                   </tr>
            <?php }} else { ?>
                        <tr>
                          <td colspan="8" class="panel_1" align="center">No Record Found.</td>
                        </tr>
                        <?php } ?>
                        <tr>
                          <td colspan="8" align="center" class="hd"><?php $_template = new Smarty_Internal_Template("pager.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?></td>
                        </tr>
          </table> </td>
  </tr>
</table>
<?php $_template = new Smarty_Internal_Template("_footerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>