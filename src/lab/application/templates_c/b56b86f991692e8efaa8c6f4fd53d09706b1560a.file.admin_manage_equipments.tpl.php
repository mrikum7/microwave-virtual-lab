<?php /* Smarty version Smarty3-RC3, created on 2011-01-20 01:40:43
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_manage_equipments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10305381094d37e6fbd1ea39-73968943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b56b86f991692e8efaa8c6f4fd53d09706b1560a' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_manage_equipments.tpl',
      1 => 1295509173,
    ),
  ),
  'nocache_hash' => '10305381094d37e6fbd1ea39-73968943',
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
    <script type="text/javascript" src="../lib/ckeditor/ckeditor.js"></script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="add_equipment_exec.php" method="post" name="editcontributors" id="editcontributors" enctype="multipart/form-data">
    <table width="100%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Manage Equipments</h2></td>
        </tr>
        <tr>
<td colspan="2" align="center" class="error"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
</tr>

        
        
        <tr>
          <td><strong>Equipments Title :</strong></td>
          <td><label>
              <input name="equipment_title" type="text" class="validate[required] textbox" id="equipment_title" />
            </label></td>
        </tr>
        
        <tr>
          <td valign="top"><strong>Equipments Description :</strong></td>
          <td>
            <script type="text/javascript">
		var editor = CKEDITOR.replace( 'desc' );
		</script>
            <label>
              <textarea name="equipment_description" cols="80" rows="10" class="validate[required]" id="CKEditor1"></textarea>
              
              
              
              </label></td>
        </tr>
        
         <tr>
          <td><strong>Equipment Image 1:</strong></td>
          <td><label>
              <input name="img_name1" id="img_name1" type="file" />
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
                  <td><input name="sort_order" id="sort_order" type="text" class="validate[required] textbox" /></td>
                </tr>
        
        <tr>
          <td>&nbsp;<input type="hidden" name="equipmrnt_id" id="contributor_id" value="<?php echo $_smarty_tpl->getVariable('data')->value['equipmrnt_id'];?>
" />
          </td>
          <td><label>
              <input name="button" type="submit" id="button" value="Submit" />
            </label></td>
        </tr>
      </table>
      </form>
     </td>
  </tr>
</table>
<br />
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="grid">
                  <tr align="center">
                  <td class="hd" align="left"><a href="?order_by=equipment_title&dir=<?php echo $_smarty_tpl->getVariable('equipment_title')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Equipment Title</a></td>
                   <td class="hd" align="">Order</td>
                  <td class="hd" align=""><a href="?order_by=add_date&dir=<?php echo $_smarty_tpl->getVariable('add_date')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Last Update</a></td>
                  
                  <td class="hd">Edit</td>
                  <td class="hd">Delete</td>
                  </tr>    
            <?php  $_smarty_tpl->tpl_vars['employees'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('equipment')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['employees']->key => $_smarty_tpl->tpl_vars['employees']->value){
?>               
                  <tr class="<?php echo smarty_function_cycle(array('values'=>'panel_0,panel_1'),$_smarty_tpl->smarty,$_smarty_tpl);?>
">
                     <td align="left"><?php echo $_smarty_tpl->tpl_vars['employees']->value['equipment_title'];?>
</td>
                       <td align="left"><?php echo $_smarty_tpl->tpl_vars['employees']->value['sort_order'];?>
</td>
                     <td  align="center"><?php echo $_smarty_tpl->tpl_vars['employees']->value['add_date'];?>
</td> 
                     <td align="center" ><a href="update_equipment-<?php echo $_smarty_tpl->tpl_vars['employees']->value['equipment_id'];?>
.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
                     <td align="center" ><a href="del_equipment-<?php echo $_smarty_tpl->tpl_vars['employees']->value['equipment_id'];?>
.html"><img src="images/icon_delete.png" alt=" " width="16" height="16" /></a></td>
                   </tr>
            <?php }} else { ?>
                        <tr>
                          <td colspan="6" class="panel_1" align="center">No Record Found.</td>
                        </tr>
                        <?php } ?>
                        <tr>
                          <td colspan="6" align="center" class="hd"><?php $_template = new Smarty_Internal_Template("pager.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?></td>
                        </tr>
          </table>      
      </td>
  </tr>
</table>
<?php $_template = new Smarty_Internal_Template("_footerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>