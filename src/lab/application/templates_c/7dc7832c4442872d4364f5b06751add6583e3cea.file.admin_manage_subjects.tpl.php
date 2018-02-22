<?php /* Smarty version Smarty3-RC3, created on 2010-11-19 06:03:59
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_manage_subjects.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1357139484ce667afac5209-25107487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dc7832c4442872d4364f5b06751add6583e3cea' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_manage_subjects.tpl',
      1 => 1287655922,
    ),
  ),
  'nocache_hash' => '1357139484ce667afac5209-25107487',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/components/NSmarty/smarty/plugins/function.cycle.php';
?><?php $_template = new Smarty_Internal_Template("_headerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>	
		$(document).ready(function() {
				$("#add_sub").validationEngine()
			
		});
		
	</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="add_subject.php" method="post" name="add_sub" id="add_sub" clientvalidate="true" enctype="multipart/form-data" >
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Manage Topic</h2></td>
        </tr>
        <tr>
          <td colspan="2"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
        </tr>
        <tr>
          <td width="127"><strong>Topic Name :</strong></td>
          <td width="534"><label>
              <input name="name" type="text" class="validate[required] textbox" id="name" />
            </label></td>
        </tr>
        <tr>
          <td valign="top"><strong>Description  :</strong></td>
          <td><label>
              <textarea name="desc" rows="10" cols="80"  class="validate[required]" id="desc"></textarea>
            </label></td>
        </tr>
        <tr>
          <td><strong>Image :</strong></td>
          <td>
          <input name="sub_img" id="sub_img" type="file" class="validate[required]" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
              <input name="add" type="submit" id="add" value="Add" />
            </label></td>
        </tr>
      </table>
      </form>
      <br />
     <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="grid">
               <tr align="center">
               <td class="hd" align="left"><a href="?order_by=subject_name&dir=<?php echo $_smarty_tpl->getVariable('subject_name')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Topic Name</a></td>
                 <td class="hd" align=""><a href="?order_by=add_date&dir=<?php echo $_smarty_tpl->getVariable('add_date')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Date</a></td>
                 <td class="hd" align=""><a href="?order_by=is_active&dir=<?php echo $_smarty_tpl->getVariable('is_active')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Is Active</a></td>
                  <td class="hd">Edit</td>
                  <td class="hd">Delete</td>
               </tr>    
            <?php  $_smarty_tpl->tpl_vars['employees'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('subjects')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['employees']->key => $_smarty_tpl->tpl_vars['employees']->value){
?>               
                  <tr class="<?php echo smarty_function_cycle(array('values'=>'panel_0,panel_1'),$_smarty_tpl->smarty,$_smarty_tpl);?>
">
                     <td align="left"><?php echo $_smarty_tpl->tpl_vars['employees']->value['subject_name'];?>
</td>
                     <td  align="center"><?php echo $_smarty_tpl->tpl_vars['employees']->value['add_date'];?>
</td>
                     <td align="center"><?php echo $_smarty_tpl->tpl_vars['employees']->value['is_active'];?>
</td>
                     <td align="center" ><a href="update_subject-<?php echo $_smarty_tpl->tpl_vars['employees']->value['subject_id'];?>
.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
                     <td align="center" ><a href="del_subject-<?php echo $_smarty_tpl->tpl_vars['employees']->value['subject_id'];?>
.html"><img src="images/icon_delete.png" alt=" " width="16" height="16" /></a></td>
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
          </table>
     
     </td>
  </tr>
</table>
<?php $_template = new Smarty_Internal_Template("_footerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>