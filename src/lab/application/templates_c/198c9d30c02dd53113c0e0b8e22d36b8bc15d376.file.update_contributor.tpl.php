<?php /* Smarty version Smarty3-RC3, created on 2010-12-16 07:29:41
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_contributor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10243989204d0a14453c1648-64997531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '198c9d30c02dd53113c0e0b8e22d36b8bc15d376' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_contributor.tpl',
      1 => 1290169090,
    ),
  ),
  'nocache_hash' => '10243989204d0a14453c1648-64997531',
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
				$("#editcontributors").validationEngine()
			
		});
		
	</script>
   
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="update_contributors_exec.php" method="post" name="editcontributors" id="editcontributors" enctype="multipart/form-data">
    <table width="100%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Edit Contributors</h2></td>
        </tr>
        
        <tr>
          <td colspan="2"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
        </tr>
        
        <tr>
          <td><strong>Contributor Name :</strong></td>
          <td><label>
              <input name="contributor_name" type="text" class="validate[required] textbox" id="contributor_name" value="<?php echo $_smarty_tpl->getVariable('data')->value['contributor_name'];?>
"/>
            </label></td>
        </tr>
        
        <tr>
          <td><strong>Contributor Title :</strong></td>
          <td><label>
              <input name="contributor_title" type="text" class="validate[required] textbox" id="contributor_title" value="<?php echo $_smarty_tpl->getVariable('data')->value['contributor_title'];?>
" />
            </label></td>
        </tr>
        
         <tr>
          <td><strong>Sort Order :</strong></td>
          <td><label>
              <input name="sort_order" type="text" class="validate[required] textbox" id="sort_order" value="<?php echo $_smarty_tpl->getVariable('data')->value['sort_order'];?>
" />
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
              <textarea name="contributor_description" cols="80" rows="10" class="validate[required] " id="contributor_description"><?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('data')->value['contributor_description']);?>
</textarea>
              
              
              
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
          <td>&nbsp;<input type="hidden" name="contributor_id" id="contributor_id" value="<?php echo $_smarty_tpl->getVariable('data')->value['contributor_id'];?>
" />
          <input type="hidden" name="contributor_old_img" id="contributor_old_img" value="<?php echo $_smarty_tpl->getVariable('data')->value['contributor_img'];?>
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