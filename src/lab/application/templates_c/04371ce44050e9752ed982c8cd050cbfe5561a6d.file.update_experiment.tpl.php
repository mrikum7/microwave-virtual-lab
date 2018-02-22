<?php /* Smarty version Smarty3-RC3, created on 2011-07-04 02:39:43
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_experiment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18834676374e116e3fd8cf16-13029034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04371ce44050e9752ed982c8cd050cbfe5561a6d' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_experiment.tpl',
      1 => 1309764850,
    ),
  ),
  'nocache_hash' => '18834676374e116e3fd8cf16-13029034',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_stripslash')) include '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/components/NSmarty/smarty/plugins/modifier.stripslash.php';
?><?php $_template = new Smarty_Internal_Template("_headerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>	
		$(document).ready(function() {
				$("#addFaq").validationEngine()
			
		});
		
	</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td> <form action="update_experiment_exec.php" method="post" name="addFaq" id="addFaq" enctype="multipart/form-data">
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Update Experiment</h2></td>
        </tr>    
         <tr>
<td colspan="2" align="center" class="error"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
</tr>
        <tr>
                        <td><strong>Category Name: </strong></td>
                        <td>
                            <select name="category_id" id="category_id">   
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
"<?php if ($_smarty_tpl->getVariable('locations')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location']['index']]['category_id']==$_smarty_tpl->getVariable('data')->value['category_id']){?> selected <?php }?>> <?php echo $_smarty_tpl->getVariable('locations')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location']['index']]['category_name'];?>
 </option>
                  <?php endfor; endif; ?>
                  </select>
                        </td>
                      </tr>         
        <tr>
          <td><strong>Experiment Name :</strong> </td>
          <td>
              <input name="experiment_name" type="text" class="validate[required] textbox" id="experiment_name" value="<?php echo $_smarty_tpl->getVariable('data')->value['experiment_name'];?>
" />
           </td>
        </tr>
         <tr>
          <td><strong>Experiment Title :</strong> </td>
          <td>
              <input name="experiment_title" type="text" class="validate[required] textbox" id="experiment_title" value="<?php echo $_smarty_tpl->getVariable('data')->value['experiment_title'];?>
" />
           </td>
        </tr>
         <tr>
          <td valign="top"><strong> Experiment Description  :</strong></td>
          <td><label>
              <textarea name="experiment_description"  class="ckeditor" id="CKEditor1"><?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('data')->value['experiment_description']);?>
</textarea>
            </label></td>
        </tr>
        
          <tr>
                  <td valign="top"><strong>Experiment Video :</strong></td>
                  <td><label>
                      <textarea name="experiment_video" id="experiment_video" cols="40" rows="8"><?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('data')->value['experiment_video']);?>
</textarea>
                    </label></td>
                </tr>

         <tr>
          <td width="127"><strong>Sort Order :</strong> </td>
          <td width="534"><label>
              <input name="sort_order" type="text" class="validate[required] textbox" id="sort_order" value="<?php echo $_smarty_tpl->getVariable('data')->value['sort_order'];?>
" />
            </label></td>
        </tr>
        
        <tr>
          <td><strong>Equipment Image :</strong></td>
          <td><label>
            <input name="experiment_img" id="experiment_img" type="file" class="validate[required] file" />
            your image(98 x 101 - 1 MB Max) </label></td>
          
        </tr>
        
           <tr>
                  <td><strong>Experiment Manual :</strong></td>
                  <td><label>
                      <input name="experiment_manual" id="experiment_manual" type="file" />
                      your image(98 x 101 - 1 MB Max) </label></td>
                </tr>
        
        <tr>
          <td><strong>Equipment Simulator Flash:</strong></td>
          <td><label>
            <input name="simulator_flash" id="simulator_flash" type="file" class="validate[required] file" />
            your image(98 x 101 - 1 MB Max) </label></td>
          
        </tr>
        
         <tr>
                        <td><strong>Is Active</strong></td>
                        <td>
                         <input name="is_active" id="is_active" type="checkbox" value="1" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('data')->value['is_active'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1){?> checked="checked" <?php }?> >
                        </td>
                      </tr>
                       <tr>
                        <td><strong>Is featured</strong></td>
                        <td>
                         <input name="is_featured" id="is_featured" type="checkbox" value="1" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('data')->value['is_featured'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2==1){?> checked="checked" <?php }?> >
                        </td>
                      </tr>
         <tr>
          <td>&nbsp;<input type="hidden" name="experiment_id" id="experiment_id" value="<?php echo $_smarty_tpl->getVariable('data')->value['experiment_id'];?>
" />
          <input type="hidden" name="experiment_old_img" id="experiment_old_img" value="<?php echo $_smarty_tpl->getVariable('data')->value['experiment_img'];?>
" />
            <input type="hidden" name="simulator_old_flash" id="simulator_old_flash" value="<?php echo $_smarty_tpl->getVariable('data')->value['simulator_flash'];?>
" />
            <input type="hidden" name="old_experiment_manual" id="old_experiment_manual" value="<?php echo $_smarty_tpl->getVariable('data')->value['experiment_manual'];?>
" />
          </td>
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