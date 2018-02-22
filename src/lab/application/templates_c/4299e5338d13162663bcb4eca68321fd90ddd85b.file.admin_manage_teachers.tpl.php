<?php /* Smarty version Smarty3-RC3, created on 2010-11-19 06:07:12
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_manage_teachers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17707661984ce66870d293d3-63239646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4299e5338d13162663bcb4eca68321fd90ddd85b' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_manage_teachers.tpl',
      1 => 1287655920,
    ),
  ),
  'nocache_hash' => '17707661984ce66870d293d3-63239646',
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
          <td colspan="2"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
        </tr>
        </table>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="grid">
                  <tr align="center">
                  <td class="hd" align=""><a href="?order_by=user_firstname&dir=<?php echo $_smarty_tpl->getVariable('user_firstname')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Name</a></td>
                  <td class="hd" align=""><a href="?order_by=user_institution_name&dir=<?php echo $_smarty_tpl->getVariable('user_institution_name')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Institute</a></td>
                  <td class="hd" align=""><a href="?order_by=user_qualification&dir=<?php echo $_smarty_tpl->getVariable('user_qualification')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Qualification</a></td>
                  <td class="hd" align=""><a href="?order_by=user_email&dir=<?php echo $_smarty_tpl->getVariable('user_email')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Email</a></td>
                  <td class="hd" align=""><a href="?order_by=phone_number&dir=<?php echo $_smarty_tpl->getVariable('phone_number')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Phone Number</a></td>
                  <td class="hd" align=""><a href="?order_by=Zip_Code&dir=<?php echo $_smarty_tpl->getVariable('Zip_Code')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Zip Code</a></td>
                   <td class="hd" align=""><a href="?order_by=is_active&dir=<?php echo $_smarty_tpl->getVariable('is_active')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Is Active</a></td>
                  <td class="hd">Edit</td>
                  <td class="hd">Delete</td>
                  </tr>    
            <?php  $_smarty_tpl->tpl_vars['employees'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('students')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['employees']->key => $_smarty_tpl->tpl_vars['employees']->value){
?>               
                  <tr class="<?php echo smarty_function_cycle(array('values'=>'panel_0,panel_1'),$_smarty_tpl->smarty,$_smarty_tpl);?>
">
                     <td align="center"><?php echo $_smarty_tpl->tpl_vars['employees']->value['user_firstname'];?>
</td>
                     <td  align="center"><?php echo $_smarty_tpl->tpl_vars['employees']->value['user_institution_name'];?>
</td>
                     <td align="center"><?php echo $_smarty_tpl->tpl_vars['employees']->value['user_qualification'];?>
</td>
                     <td  align="center"><?php echo $_smarty_tpl->tpl_vars['employees']->value['user_email'];?>
</td>
                     <td  align="center"><?php echo $_smarty_tpl->tpl_vars['employees']->value['phone_number'];?>
</td>
                     <td  align="center"><?php echo $_smarty_tpl->tpl_vars['employees']->value['Zip_Code'];?>
</td>
                     <td  align="center"><?php echo $_smarty_tpl->tpl_vars['employees']->value['is_active'];?>
</td>
                     <td align="center" ><a href="update_user-<?php echo $_smarty_tpl->tpl_vars['employees']->value['user_id'];?>
.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
                     <td align="center" ><a href="del_teacher-<?php echo $_smarty_tpl->tpl_vars['employees']->value['user_id'];?>
.html"><img src="images/icon_delete.png" alt=" " width="16" height="16" /></a></td>
                   </tr>
            <?php }} else { ?>
                        <tr>
                          <td colspan="9" class="panel_1" align="center">No Record Found.</td>
                        </tr>
                        <?php } ?>
                        <tr>
                          <td colspan="9" align="center" class="hd"><?php $_template = new Smarty_Internal_Template("pager.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?></td>
                        </tr>
          </table> </td>
  </tr>
</table>
<?php $_template = new Smarty_Internal_Template("_footerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>