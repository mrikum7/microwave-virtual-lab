<?php /* Smarty version Smarty3-RC3, created on 2011-01-18 04:36:54
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_change_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1660662204d356d466c5288-00157229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '367efd7e6c278b0bac3ee223357830878596bd57' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_change_password.tpl',
      1 => 1286973961,
    ),
  ),
  'nocache_hash' => '1660662204d356d466c5288-00157229',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("_headerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>	
		$(document).ready(function() {
				$("#changePasswordForm").validationEngine()
			
		});
		
	</script>


<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form method="post" name="changePasswordForm" id="changePasswordForm">
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Change Password</h2></td>
        </tr>
        <tr>
                        <td colspan="2" align="center" class="error"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
        <tr>
          <td width="127"><strong>Old Password :  </strong></td>
          <td width="534"><label>
              <input name="user_password" type="password" class="validate[required] textbox" id="user_password" />
            </label></td>
        </tr>
        <tr>
          <td><strong>New Password : </strong></td>
          <td><label>
              <input name="new_password" type="password" class="validate[required] textbox" id="new_password" />
            </label></td>
        </tr>
        <tr>
          <td><strong>Confirm Password : </strong></td>
          <td><label>
              <input name="confirm_password" type="password" class="validate[required] textbox" id="confirm_password" />
            </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
             
              <input name="frmSubmit" type="submit" id="frmSubmit" value="Change Password" class="bluebutton"/>
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