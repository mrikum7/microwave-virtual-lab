<?php /* Smarty version Smarty3-RC3, created on 2012-05-20 04:24:06
         compiled from "/home4/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15675588584fb8b8369bedd5-16530852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '915f437975412f2e72fab11c93dd8870a145da8c' => 
    array (
      0 => '/home4/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/feedback.tpl',
      1 => 1307527887,
    ),
  ),
  'nocache_hash' => '15675588584fb8b8369bedd5-16530852',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <script>	
		$(document).ready(function() {
				$("#feedback").validationEngine()
			
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
                  <td><h1>Feedback</h1></td>
                  <td width="6"><img src="images/heading_r.jpg" alt="" width="6" height="43" /></td>
                </tr>
              </table>
            </div>
            <div class="gap">&nbsp;</div>
            <div class="rows">
              <div class="panel_content2">
                <form id="feedback" name="feedback" method="post" action="feedback_exec.php">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><table width="60%" border="0" cellspacing="14">
                          <tr>
                            <td width="40%" valign="top"><strong>Full Name<span class="red_asterisk">*</span></strong></td>
                            <td width="60%"><table width="260" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="130"><input name="first_name" type="text" class="validate[required] textbox2" id="first_name" /></td>
                                  <td width="125"><input name="last_name" type="text" class="validate[required] textbox2" id="last_name" /></td>
                                </tr>
                                <tr>
                                  <td class="label">First Name</td>
                                  <td class="label">Last Name</td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td width="40%"><strong>Name of the Virtual Lab<span class="red_asterisk">*</span></strong></td>
                            <td width="60%"><input name="virtual_lab_name" type="text" class="validate[required] textbox1" id="virtual_lab_name" /></td>
                          </tr>
                          <tr>
                            <td width="40%"><strong>Location of the Remote Lab</strong></td>
                            <td width="60%"><input name="remote_lab_location" type="text" class="validate[required] textbox1" id="remote_lab_location" /></td>
                          </tr>
                          <tr>
                            <td width="40%"><strong>User ID<span class="red_asterisk">*</span></strong></td>
                            <td width="60%"><input name="email" type="text" class="validate[required,custom[email],length[0,100]] textbox1" id="email" /></td>
                          </tr>
                          <tr>
                            <td width="40%"><strong>Typa of Virtual Lab</strong></td>
                            <td width="60%"><input type="checkbox" name="virtual_lab_type[]" id="checkbox" value="Simulation" />
                              <strong> Simulation</strong><br />
                              <input type="checkbox" name="virtual_lab_type[]" id="checkbox2" value="Measurement" />
                              <strong> Measurement</strong><br />
                              <input type="checkbox" name="virtual_lab_type[]" id="checkbox3" value="Remote Triggering" />
                              <strong>Remote Triggering</strong></td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><h1 class="heading1">Technical</h1></td>
                            <td width="70"><img src="images/icon_technical.png" alt="" width="70" height="70" class="icon" /></td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td><table width="90%" border="0" cellspacing="10">
                         <tr>
                            <td valign="top">&nbsp;</td>
                            <td align="center"><strong>Excellent</strong></td>
                            <td align="center"><strong>V. Good</strong></td>
                            <td  align="center"><strong>Good</strong></td>
                            <td align="center"><strong>Average</strong></td>
                            <td align="center"><strong>Poor</strong></td>
                          </tr>
                          <tr>
                            <td width="60%" valign="top"><strong>The objective of the experiment are clearly defined </strong></td>
                            <td width="8%" align="center"><input name="technical_objective_defined" type="radio" id="technical_objective_defined" value="Very Good" checked="CHECKED" /></td>
                            <td width="8%" align="center"><input type="radio" name="technical_objective_defined" id="technical_objective_defined" value="Very Good" /></td>
                            <td width="8%" align="center" ><input type="radio" name="technical_objective_defined" id="technical_objective_defined" value="Good" /></td>
                            <td width="8%" align="center"><input type="radio" name="technical_objective_defined" id="technical_objective_defined" value="Average" /></td>
                            <td width="8%" align="center"><input type="radio" name="technical_objective_defined" id="technical_objective_defined" value="Poor" /></td>
                          </tr>
                          <tr>
                            <td valign="top"><strong>The experiments can be easily understood by the 
                              student </strong></td>
                            <td align="center"><input name="technical_easily_understood" type="radio" id="technical_easily_understood" value="Excellent" checked="CHECKED" /></td>
                            <td align="center"><input type="radio" name="technical_easily_understood" id="technical_easily_understood" value="Very Good" /></td>
                            <td align="center"><input type="radio" name="technical_easily_understood" id="technical_easily_understood" value="Good" /></td>
                            <td align="center"><input type="radio" name="technical_easily_understood" id="technical_easily_understood" value="Average" /></td>
                            <td align="center"><input type="radio" name="technical_easily_understood" id="technical_easily_understood" value="Poor" /></td>
                          </tr>
                          <tr>
                            <td valign="top"><strong>There is sufficient background material for conducting 
                              the experiment</strong></td>
                            <td align="center"><input name="technical_sufficient_background" type="radio" id="technical_sufficient_background" value="Excellent" checked="CHECKED" /></td>
                            <td align="center"><input type="radio" name="technical_sufficient_background" id="technical_sufficient_background" value="Very Good" /></td>
                            <td align="center" ><input type="radio" name="technical_sufficient_background" id="technical_sufficient_background" value="Good" /></td>
                            <td align="center"><input type="radio" name="technical_sufficient_background" id="technical_sufficient_background" value="Average" /></td>
                            <td align="center"><input type="radio" name="technical_sufficient_background" id="technical_sufficient_background" value="Poor" /></td>
                          </tr>
                          <tr>
                            <td valign="top"><strong>The manual for the experiments is helpful </strong></td>
                            <td align="center"><input name="technical_helpful_manual" type="radio" id="technical_helpful_manual" value="Excellent" checked="CHECKED" /></td>
                            <td align="center"><input type="radio" name="technical_helpful_manual" id="technical_helpful_manual" value="Very Good" /></td>
                            <td align="center" ><input type="radio" name="technical_helpful_manual" id="technical_helpful_manual" value="Good" /></td>
                            <td align="center"><input type="radio" name="technical_helpful_manual" id="technical_helpful_manual" value="Average" /></td>
                            <td align="center"><input type="radio" name="technical_helpful_manual" id="technical_helpful_manual" value="Poor" /></td>
                          </tr>
                          <tr>
                            <td valign="top"><strong>The diagrams/figures/captions are easy to read </strong></td>
                            <td align="center"><input name="technical_diagrams_easy" type="radio" id="technical_diagrams_easy" value="Excellent" checked="CHECKED" /></td>
                            <td align="center"><input type="radio" name="technical_diagrams_easy" id="technical_diagrams_easy" value="Very Good" /></td>
                            <td align="center"><input type="radio" name="technical_diagrams_easy" id="technical_diagrams_easy" value="Good" /></td>
                            <td align="center"><input type="radio" name="technical_diagrams_easy" id="technical_diagrams_easy" value="Average" /></td>
                            <td align="center"><input type="radio" name="technical_diagrams_easy" id="technical_diagrams_easy" value="Poor" /></td>
                          </tr>
                          <tr>
                            <td valign="top"><strong>The experiment will be useful to the students </strong></td>
                            <td align="center"><input name="technical_experiment_useful" type="radio" id="technical_experiment_useful" value="Excellent" checked="CHECKED" /></td>
                            <td align="center"><input type="radio" name="technical_experiment_useful" id="technical_experiment_useful" value="Very Good" /></td>
                            <td align="center"><input type="radio" name="technical_experiment_useful" id="technical_experiment_useful" value="Good" /></td>
                            <td align="center"><input type="radio" name="technical_experiment_useful" id="technical_experiment_useful" value="Average" /></td>
                            <td align="center"><input type="radio" name="technical_experiment_useful" id="technical_experiment_useful" value="Poor" /></td>
                          </tr>
                          <td valign="top"><strong>The experiments are appropriate for the Virtual labs 
                              theme </strong></td>
                            <td align="center"><input name="technical_experiment_appropriate" type="radio" id="technical_experiment_appropriate" value="Excellent" checked="CHECKED" /></td>
                            <td align="center"><input type="radio" name="technical_experiment_appropriate" id="technical_experiment_appropriate" value="Very Good" /></td>
                            <td align="center"><input type="radio" name="technical_experiment_appropriate" id="technical_experiment_appropriate" value="Good" /></td>
                            <td align="center"><input type="radio" name="technical_experiment_appropriate" id="technical_experiment_appropriate" value="Average" /></td>
                            <td align="center"><input type="radio" name="technical_experiment_appropriate" id="technical_experiment_appropriate" value="Poor" /></td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><h1 class="heading1">Web - Interface</h1></td>
                            <td width="70"><img src="images/icon_web.png" alt="" width="70" height="70" class="icon" /></td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td><table width="90%" border="0" cellspacing="10">
                          <tr>
                            <td valign="top">&nbsp;</td>
                            <td align="center"><strong>Excellent</strong></td>
                            <td align="center"><strong>V. Good</strong></td>
                            <td  align="center"><strong>Good</strong></td>
                            <td align="center"><strong>Average</strong></td>
                            <td align="center"><strong>Poor</strong></td>
                          </tr>
                          <tr>
                            <td width="60%" valign="top"><strong>The Web-interface is user freindly </strong></td>
                            <td width="8%" align="center"><input name="interface_user_friendly" type="radio" id="interface_user_friendly" value="Excellent" checked="CHECKED" /></td>
                            <td width="8%" align="center"><input type="radio" name="interface_user_friendly" id="interface_user_friendly" value="Very Good" /></td>
                            <td width="8%" align="center" ><input type="radio" name="interface_user_friendly" id="interface_user_friendly" value="Good" /></td>
                            <td width="8%" align="center"><input type="radio" name="interface_user_friendly" id="interface_user_friendly" value="Average" /></td>
                            <td width="8%" align="center"><input type="radio" name="interface_user_friendly" id="interface_user_friendly" value="Poor" /></td>
                          </tr>
                          <tr>
                            <td valign="top"><strong>Ease of navigation of the lab Website </strong></td>
                            <td align="center"><input name="interface_ease_navigation" type="radio" id="interface_ease_navigation" value="Excellent" checked="CHECKED" /></td>
                            <td align="center"><input type="radio" name="interface_ease_navigation" id="interface_ease_navigation" value="Very Good" /></td>
                            <td align="center"><input type="radio" name="interface_ease_navigation" id="interface_ease_navigation" value="Good" /></td>
                            <td align="center"><input type="radio" name="interface_ease_navigation" id="interface_ease_navigation" value="Average" /></td>
                            <td align="center"><input type="radio" name="interface_ease_navigation" id="interface_ease_navigation" value="Poor" /></td>
                          </tr>
                          <tr>
                            <td valign="top"><strong>The student gets a feel for doing the experiment 
                              remotely</strong></td>
                            <td align="center"><input name="interface_remote_feel" type="radio" id="interface_remote_feel" value="Excellent" checked="CHECKED" /></td>
                            <td align="center"><input type="radio" name="interface_remote_feel" id="interface_remote_feel" value="Very Good" /></td>
                            <td align="center"><input type="radio" name="interface_remote_feel" id="interface_remote_feel" value="Good" /></td>
                            <td align="center"><input type="radio" name="interface_remote_feel" id="interface_remote_feel" value="Average" /></td>
                            <td align="center"><input type="radio" name="interface_remote_feel" id="interface_remote_feel" value="Poor" /></td>
                          </tr>
                          <tr>
                            <td valign="top"><strong>The Web page looks and feels attractive/exciting </strong></td>
                            <td align="center"><input name="interface_attractive" type="radio" id="interface_attractive" value="Excellent" checked="CHECKED" /></td>
                            <td align="center"><input type="radio" name="interface_attractive" id="interface_attractive" value="Very Good" /></td>
                            <td align="center"><input type="radio" name="interface_attractive" id="interface_attractive" value="Good" /></td>
                            <td align="center"><input type="radio" name="interface_attractive" id="interface_attractive" value="Average" /></td>
                            <td align="center"><input type="radio" name="interface_attractive" id="interface_attractive" value="Poor" /></td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><h1 class="heading1">Comments</h1></td>
                            <td width="70"><img src="images/icon_comments.png" alt="" width="75" height="64" class="icon" /></td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td><table width="60%" border="0" cellspacing="14">
                          <tr>
                            <td width="40%" valign="top"><strong>Suggestion</strong></td>
                            <td width="60%"><textarea name="comments" cols="45" rows="5" class="validate[required] commentbox" id="comments"></textarea></td>
                          </tr>
                          <tr>
                            <td valign="top">&nbsp;</td>
                            <td><input name="submit" type="submit" class="submit_btn2" id="submit" value="Submit Form" /></td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
                </form>
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