{include file="_header.tpl"}
<script>
	function callSuccessFunction()
	{
		//alert("success executed");
//		window.location
		window.location="{$page_ref}";
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
                        <td colspan="2" align="center" class="error">{$getMsg}</td>
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
{include file="_footer.tpl"}