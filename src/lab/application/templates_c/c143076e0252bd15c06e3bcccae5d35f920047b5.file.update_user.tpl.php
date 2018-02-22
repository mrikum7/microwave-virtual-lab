<?php /* Smarty version Smarty3-RC3, created on 2010-12-23 03:59:34
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10444537584d131d86692006-28613560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c143076e0252bd15c06e3bcccae5d35f920047b5' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_user.tpl',
      1 => 1287655904,
    ),
  ),
  'nocache_hash' => '10444537584d131d86692006-28613560',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("_headerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script type="text/javascript" src="../lib/ckeditor/ckeditor.js"></script>

<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="update_user_exec.php" method="post" >
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Update User</h2></td>
        </tr>
         <tr>
<td colspan="2" align="center" class="error"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
</tr>
        <tr>
          <td valign="top" width="35%"><strong>User Name :</strong></td>
          <td>
              <?php echo $_smarty_tpl->getVariable('data')->value['user_name'];?>

             </td>
        </tr>
        
        <tr>
          <td valign="top"><strong>First Name :</strong></td>
          <td><input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->getVariable('data')->value['user_id'];?>
" />
              <?php echo $_smarty_tpl->getVariable('data')->value['user_firstname'];?>

             </td>
        </tr>
         <tr>
          <td valign="top"><strong>Last Name :</strong></td>
          <td>
             <?php echo $_smarty_tpl->getVariable('data')->value['user_lastname'];?>

             </td>
        </tr>
         <tr>
          <td valign="top"><strong>Institution Name :</strong></td>
          <td>
             <?php echo $_smarty_tpl->getVariable('data')->value['user_institution_name'];?>

          </td>
        </tr>
        <tr>
          <td valign="top"><strong>Institution URL :</strong></td>
          <td>
           <?php echo $_smarty_tpl->getVariable('data')->value['user_institution_url'];?>

             </td>
        </tr>
        <tr>
          <td valign="top"><strong>User Type :</strong></td>
          <td>
              <?php echo $_smarty_tpl->getVariable('data')->value['user_type'];?>

             </td>
        </tr>
         <tr>
          <td valign="top"><strong>Qualification :</strong></td>
          <td>
              <?php echo $_smarty_tpl->getVariable('data')->value['user_qualification'];?>

             </td>
         </tr>
         <tr>
          <td valign="top"><strong>Email :</strong></td>
          <td>
              <?php echo $_smarty_tpl->getVariable('data')->value['user_email'];?>

             </td>
        </tr>
        <tr>
          <td valign="top"><strong>Institution Roll No. :</strong></td>
          <td>
             $data.user_institution_rollno}
             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Disipline :</strong></td>
          <td>
              <?php echo $_smarty_tpl->getVariable('data')->value['user_disipline'];?>

             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Address1 :</strong></td>
          <td>
              <?php echo $_smarty_tpl->getVariable('data')->value['user_address1'];?>

             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Address2 :</strong></td>
          <td>
              <?php echo $_smarty_tpl->getVariable('data')->value['user_address2'];?>

             </td>
        </tr> 
         <tr>
          <td valign="top"><strong>City :</strong></td>
          <td>
             <?php echo $_smarty_tpl->getVariable('data')->value['city'];?>

             </td>
        </tr>
          <tr>
          <td valign="top"><strong>State :</strong></td>
          <td>
 <?php echo $_smarty_tpl->getVariable('data')->value['state'];?>

             </td>
        </tr>
        <tr>
          <td valign="top"><strong>Country :</strong></td>
          <td>
              <?php echo $_smarty_tpl->getVariable('data')->value['country'];?>

             </td>
        </tr>
        
        <tr>
          <td valign="top"><strong>Phone STD Code :</strong></td>
          <td>
              <?php echo $_smarty_tpl->getVariable('data')->value['phone_std_code'];?>

             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Mentor Name :</strong></td>
          <td>
              <?php echo $_smarty_tpl->getVariable('data')->value['mentor_name'];?>

             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Mentor Email :</strong></td>
          <td>
              <?php echo $_smarty_tpl->getVariable('data')->value['mentor_email'];?>

             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Registeration Date :</strong></td>
          <td>
              <?php echo $_smarty_tpl->getVariable('data')->value['reg_date'];?>

             </td>
        </tr>
             
         <tr>
          <td valign="top"><strong>Is Active :</strong></td>
          <td>
          <input type="radio" id="is_active" name="is_active" value="1" <?php if ($_smarty_tpl->getVariable('data')->value['is_active']==1){?>checked="checked" <?php }?>/>Yes
          <input type="radio" id="is_active" name="is_active" value="0" <?php if ($_smarty_tpl->getVariable('data')->value['is_active']!=1){?>checked="checked" <?php }?> />No
              
             </td>
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