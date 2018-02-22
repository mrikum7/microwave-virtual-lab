<?php /* Smarty version Smarty3-RC3, created on 2011-07-04 02:39:10
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_manage_experiment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17213833604e116e1ede6002-77964923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb7531319bcd549e3c2856a3604ebd892e78616e' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_manage_experiment.tpl',
      1 => 1309764850,
    ),
  ),
  'nocache_hash' => '17213833604e116e1ede6002-77964923',
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
				$("#editcontributors").validationEngine()
			
		});
		
	</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0"  >
        <tr>
          <td><form action="add_experiment_exec.php" method="post" name="editcontributors" id="editcontributors" enctype="multipart/form-data">
              <table width="100%" border="0" cellpadding="6" cellspacing="6" class="panel1">
                <tr>
                  <td colspan="2"><h2>Manage Experiments</h2></td>
                </tr>
                
                 <tr>
<td colspan="2" align="center" class="error"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
</tr>
                
                <tr>
                  <td><strong>Category Name: </strong></td>
                  <td><select name="category_id" id="category_id">
                      
                  <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['location']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['name'] = 'location';
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('locations')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total']);
?>
                  
                      <option value="<?php echo $_smarty_tpl->getVariable('locations')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location']['index']]['category_id'];?>
"><?php echo $_smarty_tpl->getVariable('locations')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location']['index']]['category_name'];?>
 </option>
                      
                  <?php endfor; endif; ?>
                  
                    </select></td>
                </tr>
                <tr>
                  <td><strong>Experiment Name :</strong></td>
                  <td><label>
                      <input name="experiment_name" type="text" class="validate[required] textbox" id="experiment_name" />
                    </label></td>
                </tr>
                <tr>
                  <td><strong>Experiment Title :</strong></td>
                  <td><label>
                      <input name="experiment_title" type="text" class="validate[required] textbox" id="experiment_title" />
                    </label></td>
                </tr>
                <tr>
                  <td valign="top"><strong>Experiment Description :</strong></td>
                  <td><label>
                      <textarea name="experiment_description"  class="validate[required]" id="CKEditor1"></textarea>
                    </label></td>
                </tr>
                
                <tr>
                  <td valign="top"><strong>Experiment Video :</strong></td>
                  <td><label>
                      <textarea name="experiment_video" id="experiment_video" cols="40" rows="8"></textarea>
                    </label></td>
                </tr>
                
                
                <tr>
                  <td><strong>Experiment Image :</strong></td>
                  <td><label>
                      <input name="experiment_img" id="experiment_img" type="file" />
                      your image(98 x 101 - 1 MB Max) </label></td>
                </tr>
                
                  <tr>
                  <td><strong>Experiment Manual :</strong></td>
                  <td><label>
                      <input name="experiment_manual" id="experiment_manual" type="file" />
                      your image(98 x 101 - 1 MB Max) </label></td>
                </tr>
                
                <tr>
                  <td><strong> Simulator Flash :</strong></td>
                  <td><label>
                      <input name="simulator_flash" id="simulator_flash" type="file" class="validate[required] file" />
                      your image(98 x 101 - 1 MB Max) </label></td>
                </tr>
                <tr>
                  <td><strong>Experiment Sort Order :</strong></td>
                  <td><input name="sort_order" id="sort_order" type="text" class="validate[required] file" /></td>
                </tr>
                
                 <tr>
                        <td><strong>Is Featured</strong></td>
                        <td>
                         <input name="is_featured" id="is_featured" type="checkbox" value="1" >
                        </td>
                      </tr>
                
                <tr>
                  <td>&nbsp;
                    <input type="hidden" name="experiment_id" id="experiment_id" /></td>
                  <td><label>
                      <input name="button" type="submit" id="button" value="Submit" />
                    </label></td>
                </tr>
              </table>
            </form></td>
        </tr>
      </table>
      <br />
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="grid">
        <tr align="center">
          <td class="hd" align="left"><a href="?order_by=experiment_name&dir=<?php echo $_smarty_tpl->getVariable('experiment_name')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Experiment Name</a></td>
          <td class="hd" align="">Experiment Theory</td>
          <td class="hd" align="">Experiment Procedure</td>
          <td class="hd" align="">Experiment Assignment</td>
          <td class="hd" align="">Experiment Reference</td>
           <td class="hd" align="">Experiment Self Eval</td>
          <td class="hd">Edit</td>
          <td class="hd">Delete</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['employees'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('experiment')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['employees']->key => $_smarty_tpl->tpl_vars['employees']->value){
?>
        <tr class="<?php echo smarty_function_cycle(array('values'=>'panel_0,panel_1'),$_smarty_tpl->smarty,$_smarty_tpl);?>
">
          <td align="left"><?php echo $_smarty_tpl->tpl_vars['employees']->value['experiment_name'];?>
</td>
          <td align="center" ><a href="admin_manage_theory.php?experiment_id=<?php echo $_smarty_tpl->tpl_vars['employees']->value['experiment_id'];?>
">Experiment Theory</a></td>
          <td align="center" ><a href="admin_manage_procedure.php?experiment_id=<?php echo $_smarty_tpl->tpl_vars['employees']->value['experiment_id'];?>
">Experiment Procedure</a></td>
          <td align="center" ><a href="admin_manage_assignment.php?experiment_id=<?php echo $_smarty_tpl->tpl_vars['employees']->value['experiment_id'];?>
">Experiment Assignment</a></td>
          <td align="center" ><a href="admin_manage_reference.php?experiment_id=<?php echo $_smarty_tpl->tpl_vars['employees']->value['experiment_id'];?>
">Experiment Reference</a></td>
           <td align="center" ><a href="admin_manage_self_eval.php?experiment_id=<?php echo $_smarty_tpl->tpl_vars['employees']->value['experiment_id'];?>
">Experiment Self Eval</a></td>
          <td align="center" ><a href="update_experiment-<?php echo $_smarty_tpl->tpl_vars['employees']->value['experiment_id'];?>
.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
          <td align="center" ><a href="del_experiment-<?php echo $_smarty_tpl->tpl_vars['employees']->value['experiment_id'];?>
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
      </table></td>
  </tr>
</table>
<?php $_template = new Smarty_Internal_Template("_footerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>