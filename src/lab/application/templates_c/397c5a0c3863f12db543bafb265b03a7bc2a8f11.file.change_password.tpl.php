<?php /* Smarty version Smarty3-RC3, created on 2010-11-20 02:42:38
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/change_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10593938124ce789fe1306c1-41647773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '397c5a0c3863f12db543bafb265b03a7bc2a8f11' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/change_password.tpl',
      1 => 1286980287,
    ),
  ),
  'nocache_hash' => '10593938124ce789fe1306c1-41647773',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
  <script>	
		$(document).ready(function() {
				$("#changePasswordForm").validationEngine()
			
		});
	</script>
    <table width="1002" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="images/panel_top.jpg" alt="" width="1002" height="18" /></td>
      </tr>
      <tr>
        <td id="panel_bg"><div id="container">
         
          <div class="gap"></div>
          <div class="rows">
            <table width="944" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="640" valign="top">                
                  <form method="post" action="change_password.php" name="changePasswordForm" id="changePasswordForm">
                    <table width="100%" border="0" cellpadding="6" cellspacing="6" class="panel1">
                        <tr>
                          <td colspan="2"><h2>Change Password</h2></td>
                        </tr>
                        <tr>
                                        <td colspan="2" align="center" class="error"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
                        <tr>
                          <td width="40%"><strong>Old Password :  </strong></td>
                          <td width="60%"><label>
                              <input name="user_password" type="password" class="validate[required] textbox1" id="user_password" />
                            </label></td>
                        </tr>
                        <tr>
                          <td><strong>New Password : </strong></td>
                          <td><label>
                              <input name="new_password" type="password" class="validate[required] textbox1" id="new_password" />
                            </label></td>
                        </tr>
                        <tr>
                          <td><strong>Confirm Password : </strong></td>
                          <td><label>
                              <input name="confirm_password" type="password" class="validate[required,confirm[new_password]] textbox1" id="confirm_password" />
                            </label></td>
                        </tr>
                        <tr>
                        <td colspan="2">&nbsp;
                        </td>
                        </tr>
                        <tr>          
                          <td colspan="2" align="center">
                             
                              <input name="frmSubmit" type="submit" class="submit_btn2" id="frmSubmit" value="Submit" />
                              </td>
                        </tr>
                      </table>
                      </form>
                                  </td>
                <td width="10">&nbsp;</td>
                <td width="294" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>
                  <div class="panel_content">
                      <ul class="list3">
                        <li><img src="images/icon_dashboard.jpg" alt="" width="14" height="14" /><a href="profile.php">Go To My Profile</a></li>
                        <li><img src="images/icon_pwd.png" alt="" width="24" height="24" /><a href="change_password.php">Change Password</a></li>
                        <li><img src="images/icon_product.png" alt="" width="20" height="20" /><a href="query.php">Ask Question</a></li>                       
                      </ul>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td><div class="gap2"></div></td>
                  </tr>
                  
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  
                </table></td>
              </tr>
             
            </table>
          </div>
        </div></td>
      </tr>
      <tr>
        <td><img src="images/panel_btm.jpg" alt="" width="1002" height="18" /></td>
      </tr>
    </table>
<?php $_template = new Smarty_Internal_Template("_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
