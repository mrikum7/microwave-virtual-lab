<?php /* Smarty version Smarty3-RC3, created on 2010-11-19 06:04:04
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_subjects.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19267397764ce667b42cba66-15012933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee34331bcf04a6b5597a2d95f73bc6c81b912b82' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_subjects.tpl',
      1 => 1287655902,
    ),
  ),
  'nocache_hash' => '19267397764ce667b42cba66-15012933',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("_headerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="update_subject_exec.php" method="post" name="add_sub" id="add_sub" clientvalidate="true" enctype="multipart/form-data" >
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Edit Subjects</h2></td>
        </tr>
         <tr>
<td colspan="2" align="center" class="error"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
</tr>
        <tr>
          <td width="127"><strong>Topic Name :</strong></td>
          <td width="534"><input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->getVariable('id')->value;?>
" />
              <input name="name" type="text" class="textbox" id="name" value="<?php echo $_smarty_tpl->getVariable('data')->value['subject_name'];?>
" />
            </td>
        </tr>
        <tr>
          <td valign="top"><strong>Description  :</strong></td>
          <td><label>
              <textarea name="desc" rows="10" cols="80"  class="ckeditor" id="desc"><?php echo $_smarty_tpl->getVariable('data')->value['subject_desc'];?>
</textarea>
            </label></td>
        </tr>
        <tr>
          <td><strong>Image :</strong></td>
          <td>
          <input name="sub_img" id="sub_img" type="file" class="validate[required]" value="<?php echo $_smarty_tpl->getVariable('data')->value['subject_thumbnail'];?>
" />
          <input type="hidden" id="old_sub_img" name="old_sub_img" value="<?php echo $_smarty_tpl->getVariable('data')->value['subject_thumbnail'];?>
" />
          </td>
        </tr>
          <tr>
          <td><strong>Is Active :</strong></td>
          <td>
          <input type="radio" id="is_active" name="is_active" value="1" <?php if ($_smarty_tpl->getVariable('data')->value['is_active']==1){?>checked="checked" <?php }?>/>Yes
          <input type="radio" id="is_active" name="is_active" value="0" <?php if ($_smarty_tpl->getVariable('data')->value['is_active']!=1){?>checked="checked" <?php }?>/>No
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
              <input name="add" type="submit" id="add" value="Update" />
            </label></td>
        </tr>
      </table>
      </form>
      <br />
     </td>
  </tr>
</table>
<?php $_template = new Smarty_Internal_Template("_footerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>