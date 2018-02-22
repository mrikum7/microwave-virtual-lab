<?php /* Smarty version Smarty3-RC3, created on 2010-11-19 06:11:39
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_manage_faq.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18944772644ce6697bb8ee66-25850444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38cc6cc8bf57e989d0fdeb18b04176e5cc9011b9' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_manage_faq.tpl',
      1 => 1287655908,
    ),
  ),
  'nocache_hash' => '18944772644ce6697bb8ee66-25850444',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/components/NSmarty/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_function_counter')) include '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/components/NSmarty/smarty/plugins/function.counter.php';
?><?php $_template = new Smarty_Internal_Template("_headerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>	
		$(document).ready(function() {
				$("#addFaq").validationEngine()
			
		});
		
	</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="add_faq.php" method="post" name="addFaq" id="addFaq" enctype="multipart/form-data">
       <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Manage FAQ</h2></td>
        </tr>
 <tr>
<td colspan="2" align="center" class="error"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
</tr>

        <tr>
          <td width="127"><strong>Question :</strong></td>
          <td width="534"><label>
              <input name="question" type="text" class="validate[required] textbox" id="question" />
          </label></td>
        </tr>
        <tr>
          <td><strong>Sort Order :</strong></td>
          <td><input name="sort_order" type="text" class="validate[required] textbox" id="sort_order" /></td>
        </tr>
        <tr>
          <td><strong>Subject :</strong></td>
          <td><select name="subject" class="validate[required] dropdown" id="subject">
              <option ></option>
               <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['name'] = 'index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('sub')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total']);
?>
              <option value="<?php echo $_smarty_tpl->getVariable('sub')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['subject_id'];?>
"><?php echo $_smarty_tpl->getVariable('sub')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['subject_name'];?>
</option>
              <?php endfor; endif; ?>
          </select></td>
        </tr>
        <tr>
          <td valign="top"><strong>Answer :</strong></td>
          <td><label>
              <textarea name="answer" cols="45" rows="5" class="validate[required]" id="answer"></textarea>
            </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
              <input name="add" type="submit" id="add" value="Add Faq" />
          </label></td>
        </tr>
      </table>
      </form>
      <br />
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="grid">
                  <tr align="center">
                  <td class="hd">S. No.</td>
                  <td class="hd" align=""><a href="?order_by=subject_name&dir=<?php echo $_smarty_tpl->getVariable('subject_name')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Subject Name</a></td>
                  <td class="hd" align="" width="30%"><a href="?order_by=faq_question&dir=<?php echo $_smarty_tpl->getVariable('faq_question')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Question</a></td>
                   <td class="hd" align=""><a href="?order_by=add_date&dir=<?php echo $_smarty_tpl->getVariable('add_date')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Add Date</a></td>
                    <td class="hd" align=""><a href="?order_by=is_active&dir=<?php echo $_smarty_tpl->getVariable('is_active')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Is Active</a></td>                    
                               <td class="hd">Edit</td>
                                <td class="hd">Delete</td>
                  </tr>    
                  <?php echo $_smarty_tpl->getVariable('counter')->value;?>

            <?php  $_smarty_tpl->tpl_vars['employees'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('contents')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['employees']->key => $_smarty_tpl->tpl_vars['employees']->value){
?>               
                  <tr class="<?php echo smarty_function_cycle(array('values'=>'panel_0,panel_1'),$_smarty_tpl->smarty,$_smarty_tpl);?>
">
                     <td  align="center" valign="top"><?php echo smarty_function_counter(array(),$_smarty_tpl->smarty,$_smarty_tpl);?>
</td>
                    <td  align="center" valign="top"><?php echo $_smarty_tpl->tpl_vars['employees']->value['subject_name'];?>
</td>
                    <td align="center" valign="top"><?php echo $_smarty_tpl->tpl_vars['employees']->value['faq_question'];?>
</td>
                    <td  align="center" valign="top"><?php echo $_smarty_tpl->tpl_vars['employees']->value['add_date'];?>
</td>
                    <td  align="center" valign="top"><?php echo $_smarty_tpl->tpl_vars['employees']->value['is_active'];?>
</td>
                     
                     
                     
                     <td align="center" valign="top"><a href="update_faq-<?php echo $_smarty_tpl->tpl_vars['employees']->value['faq_id'];?>
.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
                      <td align="center" valign="top"><a href="del_faq-<?php echo $_smarty_tpl->tpl_vars['employees']->value['faq_id'];?>
.html"><img src="images/icon_delete.png" alt=" " width="16" height="16" /></a></td>
        </tr>
            <?php }} else { ?>
                        <tr>
                          <td colspan="7" class="panel_1" align="center">No Record Found.</td>
                        </tr>
                        <?php } ?>
                        <tr>
                          <td colspan="7" align="center" class="hd"><?php $_template = new Smarty_Internal_Template("pager.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?></td>
                        </tr>
    </table>   </td>
  </tr>
</table>
<?php $_template = new Smarty_Internal_Template("_footerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>