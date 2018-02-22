<?php /* Smarty version Smarty3-RC3, created on 2010-11-19 06:21:57
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_procedure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16308806744ce66be5bf0925-08147968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fe5f8433d66284c8ac79afb1b17cd77b826b42a' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_procedure.tpl',
      1 => 1290169091,
    ),
  ),
  'nocache_hash' => '16308806744ce66be5bf0925-08147968',
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
    <td> <form action="update_procedure_exec.php" method="post" name="addFaq" id="addFaq">
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Update Procedure</h2></td>
        </tr>
        <tr>
          <td colspan="2"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
        </tr>
         <tr>
           <td><strong>Procedure Title :</strong> </td>
           <td>
             <input name="procedure_title" type="text" class="validate[required] textbox" id="procedure_title" value="<?php echo $_smarty_tpl->getVariable('data')->value['procedure_title'];?>
" />
            </td>
         </tr>
         <tr>
          <td valign="top"><strong> Procedure Description  :</strong></td>
          <td><label>
              <textarea name="procedure_description"  class="ckeditor" id="desc"><?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('data')->value['procedure_description']);?>
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
                        <td><strong>Is Active</strong></td>
                        <td>
                         <input name="is_active" id="is_active" type="checkbox" value="1" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('data')->value['is_active'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1){?> checked="checked" <?php }?> >
                        </td>
                      </tr>
         <tr>
          <td>&nbsp;<input type="hidden" name="procedure_id" id="procedure_id" value="<?php echo $_smarty_tpl->getVariable('data')->value['procedure_id'];?>
" />
          <input type="hidden" name="experiment_id" id="experiment_id" value="<?php echo $_smarty_tpl->getVariable('data')->value['experiment_id'];?>
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