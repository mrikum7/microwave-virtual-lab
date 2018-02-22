<?php /* Smarty version Smarty3-RC3, created on 2018-02-22 12:58:22
         compiled from "/var/www/application/templates/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:696692205a8e711653eb85-38292838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64ff2c054565b3ce883e74dd1eb514621523f0e8' => 
    array (
      0 => '/var/www/application/templates/register.tpl',
      1 => 1519197094,
    ),
  ),
  'nocache_hash' => '696692205a8e711653eb85-38292838',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>	
		$(document).ready(function() {
				$("#registerForm").validationEngine()
			
		});
		
	</script>
<table width="1002" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="images/panel_top.jpg" alt="" width="1002" height="18" /></td>
  </tr>
  <tr>
    <td id="panel_bg"><div id="container">
        <div class="page_heading">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="6"><img src="images/heading_l.jpg" alt="" width="6" height="43" /></td>
              <td><h1>Registration</h1></td>
              <td colspan="2" align="center" class="error"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
              <td width="6"><img src="images/heading_r.jpg" alt="" width="6" height="43" /></td>
            </tr>
          </table>
        </div>
        <div class="gap">
        </div>
        <form action="register_exec.php" method="post" id="registerForm" name="registerForm">
        <div class="rows">
          <div id="TabbedPanels1" class="TabbedPanels">
            <ul class="TabbedPanelsTabGroup">
              <li class="TabbedPanelsTab" tabindex="0">Step 1</li>
              <li class="TabbedPanelsTab" tabindex="0">Step 2</li>
            </ul>
            
            <div class="TabbedPanelsContentGroup">
              <div class="TabbedPanelsContent">
                <div class="panel_content"> 
                  <div class="content">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="right">(<span class="red_asterisk">*</span>) required fields</td>
                      </tr>
                      <tr>
                      </tr>
                      
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><div class="bg_white">
                            <table width="60%" border="0" cellspacing="14">
                              <tr>
                                 
                                <td width="40%" valign="top"><strong>Full Name<span class="red_asterisk">*</span></strong></td>
                                
                                
                                <td width="60%"><table width="260" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                    
                                      <td width="130"><input name="user_firstname" type="text" class="validate[required] textbox2" id="user_firstname" /></td>
                                      <td width="125"><input name="user_lastname" type="text" class="validate[required] textbox2" id="user_lastname" /></td>
                                    </tr>
                                    <tr>
                                      <td class="label">First Name</td>
                                      <td class="label">Last Name</td>
                                    </tr>
                                  </table></td>
                              </tr>
                              <tr>
                                <td width="40%"><strong>Institution Name</strong></td>
                                <td width="60%"><input name="user_institution_name" type="text" class="textbox1" id="user_institution_name" /></td>
                              </tr>
                              <tr>
                                <td width="40%"><strong>Institute URL</strong></td>
                                <td width="60%"><input name="user_institution_url" type="text" class="textbox1" id="user_institution_url" /></td>
                              </tr>
                              <tr>
                                <td width="40%"><strong>Institute Roll No.</strong></td>
                                <td width="60%"><input name="user_institution_rollno" type="text" class="textbox1" id="user_institution_rollno" /></td>
                              </tr>
                              <tr>
                                <td><strong>Discipline</strong></td>
                                <td><input name="user_disipline" type="text" class="textbox1" id="user_disipline" /></td>
                              </tr>
                              <tr>
                                <td><strong>Qualification</strong></td>
                                <td><input name="user_qualification" type="text" class="textbox1" id="user_qualification" /></td>
                              </tr>
                              <tr>
                                <td><strong>User ID<span class="red_asterisk">*</span></strong></td>
                              <td><input name="user_email" type="text" class="validate[required,custom[email],length[0,100],ajax[ajaxEmail]] textbox1" id="user_email" value="" maxlength="50" />
                               
                                </td>
                              </tr>
							  <tr>
                                <td><strong>Password<span class="red_asterisk">*</span></strong></td>
                                <td><input name="user_password" type="password" class="validate[required] textbox1" id="user_password" /></td>
                              </tr>
							  <tr>
                                <td><strong>Confirm Password<span class="red_asterisk">*</span></strong></td>
                                <td><input name="user_password1" type="password" class="validate[required,confirm[user_password]] textbox1" id="user_password1" /></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td width="63%"><input name="Button" type="button" class="submit_btn2" id="submit" value="Proceed to Next Step" onclick="TabbedPanels1.showPanel(1);" /></td>
                                      <td width="37%"><input name="submit2" type="reset" class="submit_btn2" id="submit2" value="Cancel" onclick="$.validationEngine.closePrompt('.formError',true)" /></td>
                                    </tr>
                                    
                                  </table>
                
                                  </td>
                              </tr>
                            </table>
                            
                        </div>
                          
                          
                          </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class="TabbedPanelsContent">
                <div class="panel_content">
                  <div class="content">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="right">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><div class="bg_white">
                            <table width="60%" border="0" cellspacing="14">
                              <tr>
                                <td width="40%" valign="top"><strong>Address</strong></td>
                                <td width="60%"><table width="260" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td><input name="user_address1" type="text" class="textbox1" id="user_address1" /></td>
                                    </tr>
                                    <tr>
                                      <td class="label">Street Address</td>
                                    </tr>
                                  </table></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><table width="260" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td><input name="user_address2" type="text" class="textbox1" id="user_address2" /></td>
                                    </tr>
                                    <tr>
                                      <td class="label">Street Address Line 2</td>
                                    </tr>
                                  </table></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><table width="260" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td width="130"><input name="city" type="text" class="textbox2" id="city" /></td>
                                      <td width="125"><input name="state" type="text" class="textbox2" id="state" /></td>
                                    </tr>
                                    <tr>
                                      <td class="label">City</td>
                                      <td class="label">State/Province </td>
                                    </tr>
                                  </table></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><table width="260" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td width="130"><input name="Zip_Code" type="text" class="textbox2" id="Zip_Code" /></td>
                                      <td width="125"><input name="country" type="text" class="textbox2" id="country" /></td>
                                    </tr>
                                    <tr>
                                      <td class="label">Postal/Zip Code</td>
                                      <td class="label">Country</td>
                                    </tr>
                                  </table></td>
                              </tr>
                              <tr>
                                <td valign="top">Phone Number</td>
                                <td><table width="260" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td width="130"><input name="phone_std_code" type="text" class="textbox2" id="phone_std_code" /></td>
                                      <td width="125"><input name="phone_number" type="text" class="textbox2" id="phone_number" /></td>
                                    </tr>
                                    <tr>
                                      <td class="label">Area Code</td>
                                      <td class="label">Phone No.</td>
                                    </tr>
                                  </table></td>
                              </tr>
                              <tr>
                                <td valign="top">Mentor Name</td>
                                <td><input name="mentor_name" type="text" class="textbox1" id="mentor_name" /></td>
                              </tr>
                              <tr>
                                <td valign="top">Mentor E-mail</span></strong></td>
                                <td><input name="mentor_email" type="text" class="textbox1" id="mentor_email" /></td>
                              </tr>
                               <tr>
          <td>User Type :</td>
          <td>
          <input name="user_type" type="radio" id="user_type_student" value="Student" checked="checked" /> Student &nbsp;&nbsp;
          <input type="radio" id="user_type_teacher" name="user_type" value="Teacher" /> Teacher
          </td>
        </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td width="35%"><input name="submit3" type="submit" class="submit_btn2" id="submit3" value="Register" /></td>
                                      <td width="65%"><input name="submit3" type="reset" class="submit_btn2" id="submit4" value="Cancel" onclick="$.validationEngine.closePrompt('.formError',true)" /></td>
                                    </tr>
                                  </table></td>
                              </tr>
                            </table>
                          </div></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
             
            </div>
          </div> 
        </div>
        </form>
      </div></td>
  </tr>
  <tr>
    <td><img src="images/panel_btm.jpg" alt="" width="1002" height="18" /></td>
  </tr>
</table>
<?php $_template = new Smarty_Internal_Template("_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?> 