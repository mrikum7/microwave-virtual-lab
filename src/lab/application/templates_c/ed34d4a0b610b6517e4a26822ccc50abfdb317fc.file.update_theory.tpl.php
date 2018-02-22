<?php /* Smarty version Smarty3-RC3, created on 2010-11-20 06:30:11
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_theory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4911071554ce7bf53841a62-52268236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed34d4a0b610b6517e4a26822ccc50abfdb317fc' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_theory.tpl',
      1 => 1290169086,
    ),
  ),
  'nocache_hash' => '4911071554ce7bf53841a62-52268236',
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
    <td> <form action="update_theory_exec.php" method="post" name="addFaq" id="addFaq">
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Update Theory</h2></td>
        </tr>
        <tr>
          <td colspan="2"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
        </tr>
         <tr>
           <td><strong>Theory Title :</strong> </td>
           <td>
             <input name="theory_title" type="text" class="validate[required] textbox" id="theory_title" value="<?php echo $_smarty_tpl->getVariable('data')->value['theory_title'];?>
" />
            </td>
         </tr>
         <tr>
          <td valign="top"><strong> Theory Description  :</strong></td>
          <td><label>
              <textarea name="theory_description" class="ckeditor" id="desc"><?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('data')->value['theory_description']);?>
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
          <td><input type="hidden" name="theory_id" id="theory_id" value="<?php echo $_smarty_tpl->getVariable('data')->value['theory_id'];?>
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