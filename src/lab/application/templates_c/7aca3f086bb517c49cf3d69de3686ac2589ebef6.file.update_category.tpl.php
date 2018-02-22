<?php /* Smarty version Smarty3-RC3, created on 2010-11-19 06:09:57
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21022979774ce669157dafd6-26836019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aca3f086bb517c49cf3d69de3686ac2589ebef6' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_category.tpl',
      1 => 1287655900,
    ),
  ),
  'nocache_hash' => '21022979774ce669157dafd6-26836019',
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
    <td> <form action="update_category_exec.php" method="post" name="addFaq" id="addFaq" enctype="multipart/form-data">
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Update Category</h2></td>
        </tr>
         <tr>
<td colspan="2" align="center" class="error"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
</tr>
        <tr>
          <td width="127"><strong>Category Name :</strong> </td>
          <td width="534">
              <input name="category_name" type="text" class="validate[required] textbox" id="category_name" value="<?php echo $_smarty_tpl->getVariable('data')->value['category_name'];?>
" />
               <input name="id" type="hidden" class="textbox" id="id" value="<?php echo $_smarty_tpl->getVariable('data')->value['category_id'];?>
" />
           </td>
        </tr>
        <tr>
          <td><strong>Category Column :</strong></td>
          <td><select name="category_column" class="validate[required] dropdown" id="category_column">
              <option value="1" <?php if ($_smarty_tpl->getVariable('data')->value['category_column']==1){?> selected="selected" <?php }?> >1</option>
              <option value="2" <?php if ($_smarty_tpl->getVariable('data')->value['category_column']==2){?> selected="selected" <?php }?>>2</option>
              <option value="3" <?php if ($_smarty_tpl->getVariable('data')->value['category_column']==3){?> selected="selected" <?php }?>>3</option>
              
            </select></td>
        </tr>
        
         <tr>
          <td width="127"><strong>Sort Order :</strong> </td>
          <td width="534"><label>
              <input name="category_sort_order" type="text" class="validate[required] textbox" id="category_sort_order" value="<?php echo $_smarty_tpl->getVariable('data')->value['category_sort_order'];?>
" />
            </label></td>
        </tr>
         <tr>
           <td><strong>Is Active :</strong></td>
           <td><input name="is_active" type="text" class="validate[required] textbox" id="is_active" value="<?php echo $_smarty_tpl->getVariable('data')->value['is_active'];?>
" /></td>
         </tr>
         <tr>
          <td>&nbsp;</td>
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