{include file="_headerAdmin.tpl"}
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
                        <td colspan="2" align="center" class="error">{$getMsg}</td>
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
{include file="_footerAdmin.tpl"}