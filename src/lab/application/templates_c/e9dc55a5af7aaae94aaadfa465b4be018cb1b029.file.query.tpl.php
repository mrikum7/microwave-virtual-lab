<?php /* Smarty version Smarty3-RC3, created on 2010-11-26 11:46:12
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/query.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13632954484ceff264a3eb47-50516728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9dc55a5af7aaae94aaadfa465b4be018cb1b029' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/query.tpl',
      1 => 1286980290,
    ),
  ),
  'nocache_hash' => '13632954484ceff264a3eb47-50516728',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
  
    <script language="javascript" type="text/javascript">
										function edit()
										{
								
								             document.getElementById('edit_profile').style.display = "block";
											document.getElementById('user_profile').style.display = "none";
											
										}
										
                                        </script>
                                        <script>	
		$(document).ready(function() {
				$("#editForm").validationEngine()
			
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
                <div class="panel_content">
                <form action="query_exec.php" method="post" id="qustForm" name="qustForm" >
                <table width="90%" cellpadding="0" cellspacing="6">
                <tr>
                <td colspan="2">
                <h2 >Ask Question :</h2>
                </td>
                </tr>
                <tr>
                <td width="40%" align="center"><strong>Question:</strong></td>
                <td width="60%" align="left"><input type="text" id="quest" name="quest" class="textbox1" /></td>
                </tr>
                <tr>
                <td align="center"><strong>Category :</strong></td>
                <td align="left"><select name="category_id" id="category_id">
                      
                  <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['location']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['name'] = 'location';
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('locations')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total']);
?>
                  
                      <option value="<?php echo $_smarty_tpl->getVariable('locations')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location']['index']]['subject_id'];?>
"><?php echo $_smarty_tpl->getVariable('locations')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location']['index']]['subject_name'];?>
 </option>
                      
                  <?php endfor; endif; ?>
                  
                    </select> </td>
                </tr>
                <tr>
                <td align="center"><strong>Description :</strong></td>
                <td align="left"><textarea  id="desc" name="decs" cols="50" rows="10" /> </textarea> </td>
                </tr>
                <tr><td colspan="2" align="center"><input name="submit" type="submit" class="submit_btn2" id="submit" value="Submit" /> </td></tr>
                </table>
                </form>
                </div>
 				</td>
                <td width="10">&nbsp;</td>
                <td width="294" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>
                  <div class="panel_content">
                      <ul class="list3">
                        <li><img src="images/icon_dashboard.jpg" alt="" width="14" height="14" /><a href="profile.php">Go To My Profile</a></li>
                        <li><img src="images/icon_pwd.png" alt="" width="24" height="24" /><a href="change_password.php">Change Password</a></li>
                        <li><img src="images/icon_product.png" alt="" width="20" height="20" /><a href="#">Ask Question</a></li>                       
                      </ul>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td><div class="gap2"></div></td>
                  </tr>
                  <tr>
                    <td>
                   <?php if (count($_smarty_tpl->getVariable('experiments')->value)!=0){?>
                    <div class="panel_content">
                      <h3>Experiments Participated</h3>
                      <div class="content">
                          <ul class="list2">
                            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['expe']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['name'] = 'expe';
$_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('experiments')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['expe']['total']);
?>
                            <li>
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="84%" valign="top"><?php echo $_smarty_tpl->getVariable('experiments')->value[$_smarty_tpl->getVariable('smarty')->value['section']['expe']['index']]['experiment_name'];?>
.</td>
                                  <td width="16%" align="center" valign="top" class="blue_text"><?php echo $_smarty_tpl->getVariable('experiments')->value[$_smarty_tpl->getVariable('smarty')->value['section']['expe']['index']]['count'];?>
</td>
                                </tr>
                              </table>
                            </li>
                            <?php endfor; endif; ?>
                            
                            </ul>
                      </div>
                    </div>
                    <?php }?></td>
                  </tr>
                  <tr>
                    <td><div class="gap2"></div></td>
                  </tr>
                 
                  <tr>
                    <td>
                     <?php if (count($_smarty_tpl->getVariable('assignment')->value)!=0){?>
                    <div class="panel_content">
                      <h3>Experiment Assignments</h3>
                      <div class="content">
                        <ul class="list2">
                          <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['assin']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['name'] = 'assin';
$_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('assignment')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['assin']['total']);
?>
                          <li>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="84%" valign="top"><?php echo $_smarty_tpl->getVariable('assignment')->value[$_smarty_tpl->getVariable('smarty')->value['section']['assin']['index']]['assignment_title'];?>
.</td>
                                <td width="16%" align="center" valign="top" class="blue_text"><?php echo $_smarty_tpl->getVariable('assignment')->value[$_smarty_tpl->getVariable('smarty')->value['section']['assin']['index']]['count'];?>
</td>
                              </tr>
                            </table>
                          </li>
                          <?php endfor; endif; ?>
                          
                        </ul>
                      </div>
                    </div>
                    <?php }?>
                      <div class="gap2"></div>
                      <?php if (count($_smarty_tpl->getVariable('evaluation')->value)!=0){?>
                      <div class="panel_content">
                        <h3>Self Evaluation Scores</h3>
                        <div class="content">
                          <ul class="list2">
                            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['eval']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['name'] = 'eval';
$_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('evaluation')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['eval']['total']);
?>
                            <li>
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="84%" valign="top"><?php echo $_smarty_tpl->getVariable('evaluation')->value[$_smarty_tpl->getVariable('smarty')->value['section']['eval']['index']]['experiment_name'];?>
.</td>
                                  <td width="16%" align="center" valign="top" class="blue_text"><?php echo $_smarty_tpl->getVariable('evaluation')->value[$_smarty_tpl->getVariable('smarty')->value['section']['eval']['index']]['score'];?>
</td>
                                </tr>
                              </table>
                            </li>
                            <?php endfor; endif; ?>
                           
                          </ul>
                        </div>
                      </div>
                      <?php }?>
                      </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  
                </table></td>
              </tr>
              <tr>
                <td valign="top">&nbsp;</td>
                <td>&nbsp;</td>
                <td valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td valign="top">&nbsp;</td>
                <td>&nbsp;</td>
                <td valign="top">&nbsp;</td>
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
