<?php /* Smarty version Smarty3-RC3, created on 2010-11-19 04:33:27
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_manage_contributors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9943972014ce65277af1837-81421203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbf818933163b92953280a956ec2513110fb7dde' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_manage_contributors.tpl',
      1 => 1287655924,
    ),
  ),
  'nocache_hash' => '9943972014ce65277af1837-81421203',
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
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="add_contributors_exec.php" method="post" name="editcontributors" id="editcontributors" enctype="multipart/form-data">
    <table width="100%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Manage Contributors</h2></td>
        </tr>
         <tr>
          <td colspan="2" align="center"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
        </tr>
        
        <tr>
          <td><strong>Contributor Name :</strong></td>
          <td><label>
              <input name="contributor_name" type="text" class="validate[required] textbox" id="contributor_name" value=""/>
            </label></td>
        </tr>
        
        <tr>
          <td><strong>Contributor Title :</strong></td>
          <td><label>
              <input name="contributor_title" type="text" class="validate[required] textbox" id="contributor_title" />
            </label></td>
        </tr>
        
         <tr>
          <td><strong>Sort Order :</strong></td>
          <td><label>
              <input name="sort_order" type="text" class="validate[required] textbox" id="sort_order" />
            </label></td>
        </tr>
        
        <tr>
          <td><strong>Contributor Image :</strong></td>
          <td><label>
              <input name="contributor_img" id="contributor_img" type="file" class="validate[required] file" />
           your image(98 x 101 - 1 MB Max) </label></td>
            
        </tr>
        
        <tr>
          <td valign="top"><strong>Contributor Description :</strong></td>
          <td>
          <label>
              <textarea name="contributor_description" cols="80" rows="10" class="validate[required]" id="contributor_description"></textarea>
              
              
              
            </label></td>
        </tr>
        
        <tr>
          <td>&nbsp;<input type="hidden" name="contributor_id" id="contributor_id" value="<?php echo $_smarty_tpl->getVariable('data')->value['contributor_id'];?>
" />
          <input type="hidden" name="contributor_old_img" id="contributor_old_img" value="<?php echo $_smarty_tpl->getVariable('data')->value['contributor_img'];?>
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
                  <td class="hd" align="left"><a href="?order_by=contributor_name&dir=<?php echo $_smarty_tpl->getVariable('contributor_name')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Contributor Name</a></td>
                  <td class="hd" align="left"><a href="?order_by=contributor_title&dir=<?php echo $_smarty_tpl->getVariable('contributor_title')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Contributor Title</a></td>
                  <td class="hd" align=""><a href="?order_by=add_date&dir=<?php echo $_smarty_tpl->getVariable('add_date')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Last Update</a></td>                  <td class="hd">Edit</td>
                   <td class="hd">Edit</td>
                  </tr>    
            <?php  $_smarty_tpl->tpl_vars['employees'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('contributors')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['employees']->key => $_smarty_tpl->tpl_vars['employees']->value){
?>               
                  <tr class="<?php echo smarty_function_cycle(array('values'=>'panel_0,panel_1'),$_smarty_tpl->smarty,$_smarty_tpl);?>
">
                   <td align="left"><?php echo $_smarty_tpl->tpl_vars['employees']->value['contributor_name'];?>
</td>
                     <td align="left"><?php echo $_smarty_tpl->tpl_vars['employees']->value['contributor_title'];?>
</td>
                     <td  align="center"><?php echo $_smarty_tpl->tpl_vars['employees']->value['add_date'];?>
</td>
                     <td align="center" ><a href="update_contributor-<?php echo $_smarty_tpl->tpl_vars['employees']->value['contributor_id'];?>
.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
                     <td align="center" ><a href="del_contributor-<?php echo $_smarty_tpl->tpl_vars['employees']->value['contributor_id'];?>
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