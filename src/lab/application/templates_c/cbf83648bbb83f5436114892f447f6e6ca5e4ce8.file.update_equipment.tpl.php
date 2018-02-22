<?php /* Smarty version Smarty3-RC3, created on 2011-01-20 01:41:06
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_equipment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:862340774d37e712706e60-46575596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbf83648bbb83f5436114892f447f6e6ca5e4ce8' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_equipment.tpl',
      1 => 1295509173,
    ),
  ),
  'nocache_hash' => '862340774d37e712706e60-46575596',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_stripslash')) include '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/components/NSmarty/smarty/plugins/modifier.stripslash.php';
if (!is_callable('smarty_function_cycle')) include '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/components/NSmarty/smarty/plugins/function.cycle.php';
?><?php $_template = new Smarty_Internal_Template("_headerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>	
		$(document).ready(function() {
				$("#editcontributors").validationEngine()
			
		});
		
	</script>
    <script type="text/javascript" src="../lib/ckeditor/ckeditor.js"></script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="update_equipment_exec.php" method="post" name="editcontributors" id="editcontributors" enctype="multipart/form-data">
    <table width="100%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Edit Equipments</h2></td>
        </tr>
         <tr>
<td colspan="2" align="center" class="error"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
</tr>
        <tr>
          <td><strong>Equipments Title :</strong></td>
          <td><label>
              <input name="equipment_title" type="text" class="validate[required] textbox" id="equipment_title" value="<?php echo $_smarty_tpl->getVariable('data')->value['equipment_title'];?>
"/>
            </label></td>
        </tr>
 
        <tr>
          <td valign="top"><strong>Equipments Description :</strong></td>
          <td>
            <script type="text/javascript">
		var editor = CKEDITOR.replace( 'desc' );
		</script>
            <label>
              <textarea name="equipment_description" cols="80" rows="10" class="validate[required] " id="CKEditor1"><?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('data')->value['equipment_description']);?>
</textarea> 
            </label></td>
        </tr>
        
         <tr>
          <td><strong>Equipment Image 1:</strong></td>
          <td><label>
            <input name="img_name1" id="img_name1" type="file" class="validate[required] file" />
            your image(98 x 101 - 1 MB Max) </label></td>
          
        </tr>
        
        <tr>
          <td><strong>Equipment Image 2:</strong></td>
          <td><label>
            <input name="img_name2" id="img_name2" type="file" class="validate[required] file" />
            your image(98 x 101 - 1 MB Max) </label></td>
          
        </tr>
        
        <tr>
                  <td><strong>Equipment Sort Order :</strong></td>
                  <td><input name="sort_order" id="sort_order" type="text" class="validate[required] textbox" value="<?php echo $_smarty_tpl->getVariable('data')->value['sort_order'];?>
" /></td>
                </tr>
        
        
        <tr>
          <td>&nbsp;<input type="hidden" name="equipment_id" id="equipment_id" value="<?php echo $_smarty_tpl->getVariable('data')->value['equipment_id'];?>
" />
          <input type="hidden" name="equipment_image_id" id="equipment_id" value="<?php echo $_smarty_tpl->getVariable('arr')->value['equipment_image_id'];?>
" />
            </td>
          <td><label>
            <input name="button" type="submit" id="button" value="Update" />
            </label></td>
        </tr>
      </table>
      <br />
     <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="grid">
                  <tr align="center">
                  <td class="hd" align=""><a href="?order_by=img_name&dir=<?php echo $_smarty_tpl->getVariable('img_name')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Equipment Image</a></td>
                 
                  <td class="hd">Delete</td>
                  </tr>    
            <?php  $_smarty_tpl->tpl_vars['employees'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['employees']->key => $_smarty_tpl->tpl_vars['employees']->value){
?>               
                  <tr class="<?php echo smarty_function_cycle(array('values'=>'panel_0,panel_1'),$_smarty_tpl->smarty,$_smarty_tpl);?>
">
                     <td align="left"><img src="<?php echo @UPLOADS_EQUIPMENTS_URL;?>
<?php echo $_smarty_tpl->tpl_vars['employees']->value['img_name'];?>
" alt="<?php echo @UPLOADS_EQUIPMENTS_URL;?>
<?php echo $_smarty_tpl->tpl_vars['employees']->value['img_name'];?>
" width="100" class="thumb2" /><br /></td>
                     <td align="center" ><a href="del_equipment_img-<?php echo $_smarty_tpl->tpl_vars['employees']->value['equipment_image_id'];?>
.html"><img src="images/icon_delete.png" alt=" " width="16" height="16" /></a></td>
                   </tr>
            <?php }} else { ?>
                        <tr>
                          <td colspan="4" class="panel_1" align="center">No Record Found.</td>
                        </tr>
                        <?php } ?>
                        <tr>
                          <td colspan="4" align="center" class="hd"><?php $_template = new Smarty_Internal_Template("pager.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?></td>
                        </tr>
          </table>

      
      </form>
     </td>
  </tr>
</table>
<?php $_template = new Smarty_Internal_Template("_footerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>