<?php /* Smarty version Smarty3-RC3, created on 2010-11-19 06:11:44
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_faq.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2398429294ce66980d968f8-33840938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42ad97d9a8308b8a5a59e98fba786fc5cd389825' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_faq.tpl',
      1 => 1287655901,
    ),
  ),
  'nocache_hash' => '2398429294ce66980d968f8-33840938',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("_headerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>	
		$(document).ready(function() {
				$("#addFaq").validationEngine()
			
		});
		
	</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="update_faq_exec.php" method="post" name="addFaq" id="addFaq" enctype="multipart/form-data">
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
              <input name="id" type="hidden"  id="id" value="<?php echo $_smarty_tpl->getVariable('data')->value['faq_id'];?>
" />
              <input name="question" type="text" class="validate[required] textbox" id="question" value="<?php echo $_smarty_tpl->getVariable('data')->value['faq_question'];?>
" />
          </label></td>
        </tr>
        <tr>
          <td><strong>Sort Order :</strong></td>
          <td><input name="sort_order" type="text" class="validate[required] textbox" id="sort_order" value="<?php echo $_smarty_tpl->getVariable('data')->value['sort_order'];?>
" /></td>
        </tr>
        <tr>
          <td><strong>Subject :</strong></td>
          <td><select name="subject" class="validate[required] dropdown" id="subject">
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
" <?php if ($_smarty_tpl->getVariable('data')->value['subject_id']==$_smarty_tpl->getVariable('sub')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['subject_id']){?>selected="selected" <?php }?> ><?php echo $_smarty_tpl->getVariable('sub')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['subject_name'];?>
</option>
              <?php endfor; endif; ?>
          </select></td>
        </tr>
        <tr>
          <td valign="top"><strong>Answer :</strong></td>
          <td><label>
              <textarea name="answer" cols="45" rows="5" class="validate[required]" id="answer"><?php echo $_smarty_tpl->getVariable('data')->value['faq_answer'];?>
</textarea>
            </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
              <input name="add" type="submit" id="add" value="Search" />
          </label></td>
        </tr>
      </table>
      </form>
      </td>
  </tr>
</table>
<?php $_template = new Smarty_Internal_Template("_footerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>