{include file="_header.tpl"}
  
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
                
{$getMsg}

                    <div class="content">
                      <div class="content">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><div class="bg_white2">
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="35%" valign="top">
                                  <img src="{$smarty.const.UPLOADS_USER_ATTACHMENT_URL}{$user_img}" alt="{$user_img}" width="180" class="thumb2" /></td>
                                  <td width="65%" valign="top"><table width="95%" border="0" align="left" cellpadding="0" cellspacing="8">
                                    <tr>
                                      <td width="45%" class="blue_text">Name:</td>
                                      <td width="55%">{$fname} {$lname}</td>
                                    </tr>
                                    <tr>
                                      <td class="blue_text">Location:</td>
                                      <td>{$city}</td>
                                    </tr>
                                    <tr>
                                      <td class="blue_text">Joined:</td>
                                      <td>{$join_date}</td>
                                    </tr>
                                    <tr>
                                      <td class="blue_text">Email:</td>
                                      <td>{$user_email}</td>
                                    </tr>
                                    <tr>
                                      <td class="blue_text">Institution:</td>
                                      <td>{$user_institution_name}</td>
                                    </tr>
                                    <tr>
                                      <td class="blue_text">Disipline:</td>
                                      <td>{$user_disipline}</td>
                                    </tr>
                                    <tr>
                                      <td class="blue_text">Qualification:</td>
                                      <td>{$user_qualification}</td>
                                    </tr>
                                    <tr>
                                      <td class="blue_text">State:</td>
                                      <td>{$state}</td>
                                    </tr>
                                    <tr>
                                      <td class="blue_text">Country:</td>
                                      <td>{$country}</td>
                                    </tr>
                                    <tr>
                                      <td class="blue_text">Mentor Name:</td>
                                      <td>{$mentor_name}</td>
                                    </tr>
                                     <tr>
                                      <td class="blue_text">Mentor Email:</td>
                                      <td>{$mentor_email}</td>
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
                                    <td width="130"><input name="fname" type="text" class="validate[required] textbox2" id="fname" value="{$fname}" /></td>
                                    <td width="125"><input name="lname" type="text" class="validate[required] textbox2" id="lname" value="{$lname}" /></td>
                                  </tr>
                                  <tr>
                                    <td class="label">First Name</td>
                                    <td class="label">Last Name</td>
                                  </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td width="32%"><strong>Institution Name<span class="red_asterisk">*</span></strong></td>
                              <td width="68%"><input name="user_institution_name" type="text" class="validate[required] textbox1" id="user_institution_name" value="{$user_institution_name}" /></td>
                            </tr>
                            <tr>
                              <td width="32%"><strong>Institute URL<span class="red_asterisk">*</span></strong></td>
                              <td width="68%"><input name="user_institution_url" type="text" class="validate[required] textbox1" id="user_institution_url" value="{$user_institution_url}" /></td>
                            </tr>
                            <tr>
                              <td width="32%"><strong>Institute Roll No.<span class="red_asterisk">*</span></strong></td>
                              <td width="68%"><input name="user_institution_rollno" type="text" class="validate[required] textbox1" id="user_institution_rollno" value="{$user_institution_rollno}"/></td>
                            </tr>
                            <tr>
                              <td><strong>Disipline<span class="red_asterisk">*</span></strong></td>
                              <td><input name="user_disipline" type="text" class="validate[required] textbox1" id="user_disipline" value="{$user_disipline}"/></td>
                            </tr>
                            <tr>
                              <td><strong>Qualification<span class="red_asterisk">*</span></strong></td>
                              <td><input name="user_qualification" type="text" class="validate[required] textbox1" id="user_qualification" value="{$user_qualification}" /></td>
                            </tr>
                             
                            <tr>
                              <td><strong>E-mail<span class="red_asterisk">*</span></strong></td>
                              <td><input name="user_email" type="text" class="validate[required] textbox1" id="user_email" value="{$user_email}" /></td>
                            </tr>
                             <tr>
                              <td><strong>Address1<span class="red_asterisk">*</span></strong></td>
                              <td><input name="user_address1" type="text" class="validate[required] textbox1" id="user_address1" value="{$user_address1}" /></td>
                            </tr>
                             <tr>
                              <td><strong>Address2<span class="red_asterisk">*</span></strong></td>
                              <td><input name="user_address2" type="text" class="validate[required] textbox1" id="user_address2" value="{$user_address2}" /></td>
                            </tr>
                             <tr>
                              <td><strong>City<span class="red_asterisk">*</span></strong></td>
                              <td><input name="city" type="text" class="validate[required] textbox1" id="city" value="{$city}" /></td>
                            </tr>
                             <tr>
                              <td><strong>State<span class="red_asterisk">*</span></strong></td>
                              <td><input name="state" type="text" class="validate[required] textbox1" id="state" value="{$state}" /></td>
                            </tr>
                             <tr>
                              <td><strong>Country<span class="red_asterisk">*</span></strong></td>
                              <td><input name="country" type="text" class="validate[required] textbox1" id="country" value="{$country}" /></td>
                            </tr>
                             <tr>
                              <td><strong>Phone Number<span class="red_asterisk">*</span></strong></td>
                              <td><input name="phone_number" type="text" class="validate[required] textbox1" id="phone_number" value="{$phone_number}" /></td>
                            </tr>
                            
                             <tr>
                              <td><strong>Home Number<span class="red_asterisk">*</span></strong></td>
                              <td><input name="phone_std_code" type="text" class="validate[required] textbox1" id="phone_std_code" value="{$phone_std_code}" /></td>
                            </tr>
                            
                             <tr>
                              <td><strong>Mentor Name<span class="red_asterisk">*</span></strong></td>
                              <td><input name="mentor_name" type="text" class="validate[required] textbox1" id="mentor_name" value="{$mentor_name}" /></td>
                            </tr>
                            
                             <tr>
                              <td><strong>Mentor Email<span class="red_asterisk">*</span></strong></td>
                              <td><input name="mentor_email" type="text" class="validate[required] textbox1" id="mentor_email" value="{$mentor_email}" /></td>
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
                   {if $experiments|@count != 0}
                    <div class="panel_content">
                      <h3>Experiments Participated</h3>
                      <div class="content">
                          <ul class="list2">
                            {section name=expe loop=$experiments}
                            <li>
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="84%" valign="top">{$experiments[expe].experiment_name}.</td>
                                  <td width="16%" align="center" valign="top" class="blue_text">{$experiments[expe].count}</td>
                                </tr>
                              </table>
                            </li>
                            {/section}
                            
                            </ul>
                      </div>
                    </div>
                    {/if}</td>
                  </tr>
                  <tr>
                    <td><div class="gap2"></div></td>
                  </tr>
                 
                  <tr>
                    <td>
                     {if $assignment|@count != 0}
                    <div class="panel_content">
                      <h3>Experiment Assignments</h3>
                      <div class="content">
                        <ul class="list2">
                          {section name=assin loop=$assignment}
                          <li>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="84%" valign="top">{$assignment[assin].assignment_title}.</td>
                                <td width="16%" align="center" valign="top" class="blue_text">{$assignment[assin].count}</td>
                              </tr>
                            </table>
                          </li>
                          {/section}
                          
                        </ul>
                      </div>
                    </div>
                    {/if}
                      <div class="gap2"></div>
                      {if $evaluation|@count != 0}
                      <div class="panel_content">
                        <h3>Self Evaluation Scores</h3>
                        <div class="content">
                          <ul class="list2">
                            {section name=eval loop=$evaluation}
                            <li>
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="84%" valign="top">{$evaluation[eval].experiment_name}.</td>
                                  <td width="16%" align="center" valign="top" class="blue_text">{$evaluation[eval].score}</td>
                                </tr>
                              </table>
                            </li>
                            {/section}
                           
                          </ul>
                        </div>
                      </div>
                      {/if}
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
{include file="_footer.tpl"}
