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
                <div class="panel_content">
                <form action="ask_student_question_exec.php" method="post" id="qustForm" name="qustForm" >
                <table width="90%" cellpadding="0" cellspacing="6">
                <tr>
                <td colspan="2">
                <h2 >Ask Question :</h2>
                </td>
                
                <td>{$getMsg}</td>
                
                
                </tr>
                <tr>
                  <td width="50%" align="center"><strong>Subject Name :</strong></td>
                  <td width="60%" align="left"><select name="subject_id" id="subject_id">
                      
                  {section name=location loop=$locations}
                  
                      <option value="{$locations[location].subject_id}">{$locations[location].subject_name} </option>
                      
                  {/section}
                  
                    </select> </td>
                </tr>
                <tr>
                <td align="center"><strong>Question :</strong></td>
                <td align="left"><textarea  id="question" name="question" cols="50" rows="10" /></textarea> </td>
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
