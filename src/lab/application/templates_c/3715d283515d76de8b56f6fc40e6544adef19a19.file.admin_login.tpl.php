<?php /* Smarty version Smarty3-RC3, created on 2010-11-18 23:20:16
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19683555894ce609103e3a77-43878333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3715d283515d76de8b56f6fc40e6544adef19a19' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_login.tpl',
      1 => 1286973948,
    ),
  ),
  'nocache_hash' => '19683555894ce609103e3a77-43878333',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Virtual Labs</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />

<script src="../js/jquery-1.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="../js/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="../js/jquery.validationEngine.js"></script>
<script>	
		$(document).ready(function() {
				$("#loginform").validationEngine()
			
		});
		
	</script>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#DDEFFB">
        <tr>
          <td align="left"><img src="images/vl_header1.jpg" alt=" " /></td>
		  <td width=126><img src="images/vl_header3.jpg" alt=" " /></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><div class="outer">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="panel1">
                  <tr>
                    <td><br />
                        <br />
                      <br />
                        <br />
                        <form method="post" name="loginform" id="loginform" action="login_exec.php">
                      <table width="400" border="0" align="center" cellpadding="4" cellspacing="4">
                      <tr>
                        <td colspan="2"><h2>Login Here</h2></td>
                      </tr>
                       <tr>
                        <td colspan="2" align="center" class="error"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
        <tr>
                      <tr>
                        <td width="94">User Name : </td>
                        <td width="262"><label>
                          <input name="username" type="text" class="validate[required] textbox" id="username" />
                        </label></td>
                      </tr>
                      <tr>
                        <td>Password :</td>
                        <td><input name="password" type="password" class="validate[required] textbox" id="password" /></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><label>
                          <input name="button" type="submit" id="button" value="Login" />
                        </label></td>
                      </tr>
                    </table>
                    </form>
                      <br />
                    <br />
                    <br />
                    <br /></td>
                </tr>
                </table>
              </td>
          </tr>
        </table>
      </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Admin Panel for Virtual Labs Website<br />
      <a target="_blank" href="<?php echo $_smarty_tpl->getVariable('APP_URL')->value;?>
" class="green">Go to the Portal</a></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
</table>
</body>
</html>
