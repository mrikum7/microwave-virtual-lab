<?php /* Smarty version Smarty3-RC3, created on 2018-02-22 13:02:56
         compiled from "/var/www/application/templates/forgot_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15430960255a8e722875bf68-98053624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82e12914e24280530ccc430d17bf2df56c837823' => 
    array (
      0 => '/var/www/application/templates/forgot_password.tpl',
      1 => 1519197094,
    ),
  ),
  'nocache_hash' => '15430960255a8e722875bf68-98053624',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
 <script>	
		$(document).ready(function() {
				$("#forgotPasswordForm").validationEngine()
			//$.validationEngine.loadValidation("#date")
			//$.validationEngine.buildPrompt("#date","This is an example","error")	 		 // Exterior prompt build example
			//$.validationEngine.closePrompt(".formError",true) 							// CLOSE ALL OPEN PROMPTS
		});
	// JUST AN EXAMPLE OF CUSTOM VALIDATI0N FUNCTIONS : funcCall[validate2fields]
		function validate2fields(){
			if($("#e_mail").val() ==""){
				return false;
			}else{
				return true;
			}
		}
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
              <td><h1>Forgot Password</h1></td>
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
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                    
                    
                    
                    
                      <td align="center"><div id="forgot_password">
                          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td align="center">&nbsp;<?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td align="center" valign="top"> <form action="forgot_password.php" class="forgot-password" method="post" name="forgotPasswordForm" id="forgotPasswordForm" >
                                  <table width="60%" border="0" align="center" cellpadding="0" cellspacing="12">
                                    <tr>
                                      <td width="30%"><strong>Email</strong></td>
                                      <td width="70%" align="left"><input name="user_name" type="text" class="validate[required,custom[email],length[0,100]] textbox3" id="user_name" value=""/></td> 
                                    </tr>
                                    <tr>
                                      <td width="30%">&nbsp;</td>
                                      <td width="70%" align="left"><input name="frmSubmit" type="submit" class="submit_btn2" id="frmSubmit" value="Submit" /></td>
                                      
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