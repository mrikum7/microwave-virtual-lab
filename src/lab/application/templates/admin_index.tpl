{include file="_headerAdmin.tpl"}
<table>
<tr>
 <td colspan="2" align="center" class="error">{$getMsg}</td>
</tr></table>
 <table width="90%" border="0" cellpadding="2" cellspacing="0" class="panel1">
                          <tr>
                           <td colspan="4" align="center" class="error">&nbsp;
                                       </td>
                          </tr>
                          <tr>
                            <td width="10%"><A href="admin_manage_content.php"><img class="thumb" src="{$smarty.const.IMAGES}/content.png" alt="" width="110" height="110" /></A></td>
                            <td width="40%"><STRONG><A id=moduletitle href="admin_manage_content.php">Manage Content</A></STRONG><BR>
                              <SPAN class=smalltext>Submit new,edit or delete content</SPAN></td>
                            <td width="10%"><A href="admin_manage_experiment.php"><IMG src="{$smarty.const.IMAGES}/icon_chemical.png" width="90" height="90" border=0></A></td>
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
                            <td><a href="admin_manage_experiment_categories.php"><img src="{$smarty.const.IMAGES}/agilent_pic2.jpg" alt="" width="100" height="100" border="0" /></a></td>
                            <td><STRONG><A id=moduletitle href="admin_manage_experiment_categories.php">Manage Experiment Category</A></STRONG><BR>
                              <SPAN class=smalltext>Manage Experiment Category</SPAN></td>
                              
                               <td><a href="admin_manage_experiment_feedback.php"><img src="{$smarty.const.IMAGES}/feedback.jpeg" alt="" width="80" height="80" border="0" /></a></td>
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
                           <td><a href="admin_manage_faq.php"><img src="{$smarty.const.IMAGES}/FAQ.png" alt="" width="80" height="80" border="0" /></a></td>
                            <td><STRONG><A id=moduletitle href="admin_manage_faq.php">Manage FAQ</A></STRONG><BR>
                              <SPAN class=smalltext>Manage FAQ</SPAN></td>
                            
                           <td><a href="admin_manage_feedback.php"><img src="{$smarty.const.IMAGES}/feedback-icon-big.png" alt="" width="80" height="80" border="0" /></a></td>
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
                            <td><a href="admin_change_password.php"><img src="{$smarty.const.IMAGES}/change.png" alt="" width="80" height="80" border="0" /></a></td>
                            <td> 
						<STRONG><A id=moduletitle href="admin_change_password.php">Change Password</A></STRONG><BR>
                              <SPAN class=smalltext>Change Password</SPAN></td>
                              
                               <td><a href="admin_logout.php"><img src="{$smarty.const.IMAGES}/logout.gif" alt="" width="75" height="75" border="0" /></a></td>
                            <td><STRONG><A id=moduletitle href="admin_logout.php">Logout</A></STRONG><BR>
                              <SPAN class=smalltext>Logout</SPAN></td>
                              
                           
                            </tr> 
                                               
                        </table>

{include file="_footerAdmin.tpl"}