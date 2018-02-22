<?php /* Smarty version Smarty3-RC3, created on 2011-06-27 08:37:13
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9787958524e088789319852-97837806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08903726fdde412967b112dac051231f7bf752ad' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/login.tpl',
      1 => 1309181759,
    ),
  ),
  'nocache_hash' => '9787958524e088789319852-97837806',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>
	function callSuccessFunction()
	{
		//alert("success executed");
//		window.location
		window.location="<?php echo $_smarty_tpl->getVariable('page_ref')->value;?>
";
	}
	function callFailFunction()
	{
		//alert("fail executed");
	}
	</script>
<script>
		$(document).ready(function() {
				$("#loginform").validationEngine({
				ajaxSubmit: true,
					ajaxSubmitFile: "ajax_login.php",
					inlineValidation: true,
					promptPosition: "topRight",
					ajaxSubmitMessage: " ",
				success : function() { callSuccessFunction();},
				failure : function() { callFailFunction();}
			})
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
              <td><h1>Login</h1></td>
              <td width="6"><img src="images/heading_r.jpg" alt="" width="6" height="43" /></td>
            </tr>
          </table>
        </div>
        <div class="gap"></div>
        <div class="rows">
          <div class="login_panel">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td colspan="2" align="center" class="error"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
                    </tr>
                    <tr>
                      <td align="center"><div id="login_panel">
                          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td align="center"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="50%" align="left"><strong>Login Here</strong></td>
                                    <td width="50%" align="right" ><a href="forgot_password.php" class="blue">Forgot Password?</a></td>
                                  </tr>
                                </table></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td align="center" valign="top"><form method="post" name="loginform" id="loginform" action="">
                                  <table width="60%" border="0" align="center" cellpadding="0" cellspacing="12">
                                    <tr>
                                      <td width="30%"><strong>User ID</strong></td>
                                      <td width="70%" align="left"><input name="user_name" type="text" class="validate[required,length[0,100]] textbox3" id="user_name" value=""/></td> 
                                    </tr>
                                    <tr>
                                      <td width="30%"><strong>Password</strong></td>
                                      <td width="70%" align="left"><input name="user_password" type="password" class="validate[required] textbox3" id="user_password" value="" /></td>
                                    </tr>
                                    <tr>
                                      <td width="30%">&nbsp;</td>
                                      <td width="70%" align="left"><input name="login_frmSubmit" type="submit" class="submit_btn2" id="login_frmSubmit" value="Login" /></td>
                                    </tr>
                                  </table>
                                </form></td>
                            </tr>
                          </table>
                        </div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                  </table></td>
              </tr>
            </table>
          </div>
        </div>
      </div></td>
  </tr>
  <tr>
    <td><img src="images/panel_btm.jpg" alt="" width="1002" height="18" /></td>
  </tr>
</table>
<?php $_template = new Smarty_Internal_Template("_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>