<?php /* Smarty version Smarty3-RC3, created on 2012-05-21 00:31:32
         compiled from "/home4/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20402137454fb9e144e193b6-73792668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '658af1ff507eeb21278e8cefd9e7ce5ad580c025' => 
    array (
      0 => '/home4/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/profile.tpl',
      1 => 1307527946,
    ),
  ),
  'nocache_hash' => '20402137454fb9e144e193b6-73792668',
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
                <div id="user_profile" >
                <div class="panel_content">
                    <h1 class="heading2">My Profile</h1>
                
<?php echo $_smarty_tpl->getVariable('getMsg')->value;?>


                    <div class="content">
                      <div class="content">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><div class="bg_white2">
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="35%" valign="top">
                                  <img src="<?php echo @UPLOADS_USER_ATTACHMENT_URL;?>
<?php echo $_smarty_tpl->getVariable('user_img')->value;?>
" alt="<?php echo $_smarty_tpl->getVariable('user_img')->value;?>
" width="180" class="thumb2" /></td>
                                  <td width="65%" valign="top"><table width="95%" border="0" align="left" cellpadding="0" cellspacing="8">
                                    <tr>
                                      <td width="45%" class="blue_text">Name:</td>
                                      <td width="55%"><?php echo $_smarty_tpl->getVariable('fname')->value;?>
 <?php echo $_smarty_tpl->getVariable('lname')->value;?>
</td>
                                    </tr>
                                    <tr>
                                      <td class="blue_text">Location:</td>
                                      <td><?php echo $_smarty_tpl->getVariable('city')->value;?>
</td>
                                    </tr>
                                    <tr>
                                      <td class="blue_text">Joined:</td>
                                      <td><?php echo $_smarty_tpl->getVariable('join_date')->value;?>
</td>
                                    </tr>
                                    <tr>
                                      <td class="blue_text">Email:</td>
                                      <td><?php echo $_smarty_tpl->getVariable('user_email')->value;?>
</td>
                                    </tr>
                                    <tr>
                                      <td class="blue_text">Institution:</td>
                                      <td><?php echo $_smarty_tpl->getVariable('user_institution_name')->value;?>
</td>
                                    </tr>
                                    <tr>
                                      <td class="blue_text">Disipline:</td>
                                      <td><?php echo $_smarty_tpl->getVariable('user_disipline')->value;?>
</td>
                                    </tr>
                                    <tr>
                                      <td class="blue_text">Qualification:</td>
                                      <td><?php echo $_smarty_tpl->getVariable('user_qualification')->value;?>
</td>
                                    </tr>
                                    <tr>
                                      <td class="blue_text">State:</td>
                                      <td><?php echo $_smarty_tpl->getVariable('state')->value;?>
</td>
                                    </tr>
                                    <tr>
                                      <td class="blue_text">Country:</td>
                                      <td><?php echo $_smarty_tpl->getVariable('country')->value;?>
</td>
                                    </tr>
                                    <tr>
                                      <td class="blue_text">Mentor Name:</td>
                                      <td><?php echo $_smarty_tpl->getVariable('mentor_name')->value;?>
</td>
                                    </tr>
                                     <tr>
                                      <td class="blue_text">Mentor Email:</td>
                                      <td><?php echo $_smarty_tpl->getVariable('mentor_email')->value;?>
</td>
                                    </tr>
                                    <tr>
                                    <td colspan="2" align="center">
                                    <a href="#" onclick="edit()"><img src="images/btn_edit.png" alt="" width="133" height="27" /></a>
                                    </td>
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
                  <div class="gap2"></div>
                  <div class="panel_content">
                    <h1 class="heading2">Blogs</h1>
                    <div class="content">
                      <div class="content">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><div class="bg_white2"><div class="content">
                  <ul class="blog_list">
                    <li>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="12%" valign="top"><img class="thumb" src="images/blog_pic.jpg" alt="" width="46" height="46" /></td>
                          <td width="88%" valign="top"><div class="date">By <a class="blue" href="#">somedoby</a> on the 25/02/2010</div>
                                                        Hype provides presents a smart organized way display your website. Lorem ipsum. Hype provides presents a smart organized way display your website. Lorem ipsum... </td>
                        </tr>
                      </table>
                    </li>
                    <li>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="12%" valign="top"><img class="thumb" src="images/blog_pic.jpg" alt="" width="46" height="46" /></td>
                          <td width="88%" valign="top"><div class="date">By <a class="blue" href="#">somedoby</a> on the 25/02/2010</div>
                                                        Hype provides presents a smart organized way display your website. Lorem ipsum. Hype provides presents a smart organized way display your website. Lorem ipsum... </td>
                        </tr>
                      </table>
                    </li>
                    <li>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="12%" valign="top"><img class="thumb" src="images/blog_pic.jpg" alt="" width="46" height="46" /></td>
                          <td width="88%" valign="top"><div class="date">By <a class="blue" href="#">somedoby</a> on the 25/02/2010</div>
                                                        Hype provides presents a smart organized way display your website. Lorem ipsum. Hype provides presents a smart organized way display your website. Lorem ipsum... </td>
                        </tr>
                      </table>
                    </li>
                    <li>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="12%" valign="top"><img class="thumb" src="images/blog_pic.jpg" alt="" width="46" height="46" /></td>
                          <td width="88%" valign="top"><div class="date">By <a class="blue" href="#">somedoby</a> on the 25/02/2010</div>
                                                        Hype provides presents a smart organized way display your website. Lorem ipsum. Hype provides presents a smart organized way display your website. Lorem ipsum... </td>
                        </tr>
                      </table>
                    </li>
                    <li>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="12%" valign="top"><img class="thumb" src="images/blog_pic.jpg" alt="" width="46" height="46" /></td>
                          <td width="88%" valign="top"><div class="date">By <a class="blue" href="#">somedoby</a> on the 25/02/2010</div>
                                                        Hype provides presents a smart organized way display your website. Lorem ipsum. Hype provides presents a smart organized way display your website. Lorem ipsum... </td>
                        </tr>
                      </table>
                    </li>
                    </ul>
                </div></div></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="gap2"></div>
                  </div>
                  <div id="edit_profile" style=" display:none; ">
                  <div class="panel_content">
                    <h1 class="heading2">Edit Profile</h1>
                    <div class="content">
                    <div class="content">
               <form action="edit_profile_exec.php" method="post" name="editForm" id="editForm">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><div class="bg_white">
                          <table width="90%" border="0" cellspacing="10">
                                  <tr>
                              <td width="32%" valign="top"><strong>Full Name<span class="red_asterisk">*</span></strong></td>
                              <td width="68%">                              
                              <table width="260" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td width="130"><input name="fname" type="text" class="validate[required] textbox2" id="fname" value="<?php echo $_smarty_tpl->getVariable('fname')->value;?>
" /></td>
                                    <td width="125"><input name="lname" type="text" class="validate[required] textbox2" id="lname" value="<?php echo $_smarty_tpl->getVariable('lname')->value;?>
" /></td>
                                  </tr>
                                  <tr>
                                    <td class="label">First Name</td>
                                    <td class="label">Last Name</td>
                                  </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td width="32%"><strong>Institution Name<span class="red_asterisk">*</span></strong></td>
                              <td width="68%"><input name="user_institution_name" type="text" class="validate[required] textbox1" id="user_institution_name" value="<?php echo $_smarty_tpl->getVariable('user_institution_name')->value;?>
" /></td>
                            </tr>
                            <tr>
                              <td width="32%"><strong>Institute URL<span class="red_asterisk">*</span></strong></td>
                              <td width="68%"><input name="user_institution_url" type="text" class="validate[required] textbox1" id="user_institution_url" value="<?php echo $_smarty_tpl->getVariable('user_institution_url')->value;?>
" /></td>
                            </tr>
                            <tr>
                              <td width="32%"><strong>Institute Roll No.<span class="red_asterisk">*</span></strong></td>
                              <td width="68%"><input name="user_institution_rollno" type="text" class="validate[required] textbox1" id="user_institution_rollno" value="<?php echo $_smarty_tpl->getVariable('user_institution_rollno')->value;?>
"/></td>
                            </tr>
                            <tr>
                              <td><strong>Disipline<span class="red_asterisk">*</span></strong></td>
                              <td><input name="user_disipline" type="text" class="validate[required] textbox1" id="user_disipline" value="<?php echo $_smarty_tpl->getVariable('user_disipline')->value;?>
"/></td>
                            </tr>
                            <tr>
                              <td><strong>Qualification<span class="red_asterisk">*</span></strong></td>
                              <td><input name="user_qualification" type="text" class="validate[required] textbox1" id="user_qualification" value="<?php echo $_smarty_tpl->getVariable('user_qualification')->value;?>
" /></td>
                            </tr>
                             
                            <tr>
                              <td><strong>E-mail<span class="red_asterisk">*</span></strong></td>
                              <td><input name="user_email" type="text" class="validate[required] textbox1" id="user_email" value="<?php echo $_smarty_tpl->getVariable('user_email')->value;?>
" /></td>
                            </tr>
                             <tr>
                              <td><strong>Address1<span class="red_asterisk">*</span></strong></td>
                              <td><input name="user_address1" type="text" class="validate[required] textbox1" id="user_address1" value="<?php echo $_smarty_tpl->getVariable('user_address1')->value;?>
" /></td>
                            </tr>
                             <tr>
                              <td><strong>Address2<span class="red_asterisk">*</span></strong></td>
                              <td><input name="user_address2" type="text" class="validate[required] textbox1" id="user_address2" value="<?php echo $_smarty_tpl->getVariable('user_address2')->value;?>
" /></td>
                            </tr>
                             <tr>
                              <td><strong>City<span class="red_asterisk">*</span></strong></td>
                              <td><input name="city" type="text" class="validate[required] textbox1" id="city" value="<?php echo $_smarty_tpl->getVariable('city')->value;?>
" /></td>
                            </tr>
                             <tr>
                              <td><strong>State<span class="red_asterisk">*</span></strong></td>
                              <td><input name="state" type="text" class="validate[required] textbox1" id="state" value="<?php echo $_smarty_tpl->getVariable('state')->value;?>
" /></td>
                            </tr>
                             <tr>
                              <td><strong>Country<span class="red_asterisk">*</span></strong></td>
                              <td><input name="country" type="text" class="validate[required] textbox1" id="country" value="<?php echo $_smarty_tpl->getVariable('country')->value;?>
" /></td>
                            </tr>
                             <tr>
                              <td><strong>Phone Number<span class="red_asterisk">*</span></strong></td>
                              <td><input name="phone_number" type="text" class="validate[required] textbox1" id="phone_number" value="<?php echo $_smarty_tpl->getVariable('phone_number')->value;?>
" /></td>
                            </tr>
                            
                             <tr>
                              <td><strong>Home Number<span class="red_asterisk">*</span></strong></td>
                              <td><input name="phone_std_code" type="text" class="validate[required] textbox1" id="phone_std_code" value="<?php echo $_smarty_tpl->getVariable('phone_std_code')->value;?>
" /></td>
                            </tr>
                            
                             <tr>
                              <td><strong>Mentor Name<span class="red_asterisk">*</span></strong></td>
                              <td><input name="mentor_name" type="text" class="validate[required] textbox1" id="mentor_name" value="<?php echo $_smarty_tpl->getVariable('mentor_name')->value;?>
" /></td>
                            </tr>
                            
                             <tr>
                              <td><strong>Mentor Email<span class="red_asterisk">*</span></strong></td>
                              <td><input name="mentor_email" type="text" class="validate[required] textbox1" id="mentor_email" value="<?php echo $_smarty_tpl->getVariable('mentor_email')->value;?>
" /></td>
                            </tr>
                            
                            <tr>
                              <td>&nbsp;</td>
                              <td><input name="submit" type="submit" class="submit_btn2" id="submit" value="Submit" /></td>
                            </tr>
                          </table>
                      </div></td>
                    </tr>
                  </table>
                  </form>
                  </div>
                  </div>
                  </div>
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
                        <li><img src="images/icon_product.png" alt="" width="20" height="20" /><a href="ask_student_question.php">Ask Question</a></li>                       
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
