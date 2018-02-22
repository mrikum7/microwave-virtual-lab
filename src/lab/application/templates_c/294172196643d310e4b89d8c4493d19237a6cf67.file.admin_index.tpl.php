<?php /* Smarty version Smarty3-RC3, created on 2010-11-19 04:00:26
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15689814414ce64abac74b08-40292388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '294172196643d310e4b89d8c4493d19237a6cf67' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_index.tpl',
      1 => 1287658014,
    ),
  ),
  'nocache_hash' => '15689814414ce64abac74b08-40292388',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("_headerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<table>
<tr>
 <td colspan="2" align="center" class="error"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
</tr></table>
 <table width="90%" border="0" cellpadding="2" cellspacing="0" class="panel1">
                          <tr>
                           <td colspan="4" align="center" class="error">&nbsp;
                                       </td>
                          </tr>
                          <tr>
                            <td width="10%"><A href="admin_manage_content.php"><img class="thumb" src="<?php echo @IMAGES;?>
/content.png" alt="" width="110" height="110" /></A></td>
                            <td width="40%"><STRONG><A id=moduletitle href="admin_manage_content.php">Manage Content</A></STRONG><BR>
                              <SPAN class=smalltext>Submit new,edit or delete content</SPAN></td>
                            <td width="10%"><A href="admin_manage_experiment.php"><IMG src="<?php echo @IMAGES;?>
/icon_chemical.png" width="90" height="90" border=0></A></td>
                            <td width="40%"><STRONG><A id=moduletitle href="admin_manage_experiment.php">Manage Experiment</A></STRONG><BR>
                              <SPAN class=smalltext>Submit a new Experiment.</SPAN></td>
                          </tr>
                         
                           <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>              
                            <td><a href="admin_manage_experiment_categories.php"><img src="<?php echo @IMAGES;?>
/agilent_pic2.jpg" alt="" width="100" height="100" border="0" /></a></td>
                            <td><STRONG><A id=moduletitle href="admin_manage_experiment_categories.php">Manage Experiment Category</A></STRONG><BR>
                              <SPAN class=smalltext>Manage Experiment Category</SPAN></td>
                              
                               <td><a href="admin_manage_experiment_feedback.php"><img src="<?php echo @IMAGES;?>
/feedback.jpeg" alt="" width="80" height="80" border="0" /></a></td>
                            <td><STRONG><A id=moduletitle href="admin_manage_experiment_feedback.php">Manage Experiment Feedback</A></STRONG><BR>
                              <SPAN class=smalltext>Manage Experiment Feedback</SPAN></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                      <tr>
                           <td><a href="admin_manage_faq.php"><img src="<?php echo @IMAGES;?>
/FAQ.png" alt="" width="80" height="80" border="0" /></a></td>
                            <td><STRONG><A id=moduletitle href="admin_manage_faq.php">Manage FAQ</A></STRONG><BR>
                              <SPAN class=smalltext>Manage FAQ</SPAN></td>
                            
                           <td><a href="admin_manage_feedback.php"><img src="<?php echo @IMAGES;?>
/feedback-icon-big.png" alt="" width="80" height="80" border="0" /></a></td>
                            <td><STRONG><A id=moduletitle href="admin_manage_feedback.php">Manage Feedback</A></STRONG><BR>
                              <SPAN class=smalltext>Manage Feedback</SPAN></td>
                          </tr>  
                          <tr>
                           <td>&nbsp;</td>
                            <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           
                           </tr>
                             
						 <tr>                       
                            <td><a href="admin_change_password.php"><img src="<?php echo @IMAGES;?>
/change.png" alt="" width="80" height="80" border="0" /></a></td>
                            <td> 
						<STRONG><A id=moduletitle href="admin_change_password.php">Change Password</A></STRONG><BR>
                              <SPAN class=smalltext>Change Password</SPAN></td>
                              
                               <td><a href="admin_logout.php"><img src="<?php echo @IMAGES;?>
/logout.gif" alt="" width="75" height="75" border="0" /></a></td>
                            <td><STRONG><A id=moduletitle href="admin_logout.php">Logout</A></STRONG><BR>
                              <SPAN class=smalltext>Logout</SPAN></td>
                              
                           
                            </tr> 
                                               
                        </table>

<?php $_template = new Smarty_Internal_Template("_footerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>