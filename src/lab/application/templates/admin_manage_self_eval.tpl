{include file="_headerAdmin.tpl"}
<script>	
		$(document).ready(function() {
				$("#editcontributors").validationEngine()
			
		});
		
	</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="add_question_exec.php" method="post" name="editcontributors" id="editcontributors" enctype="multipart/form-data">
    <table width="100%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Manage Self Evaluation Question</h2></td>
        </tr>
       
        
        <tr>
          <td width="30%"><strong>Question Title :</strong></td>
          <td><label>
            <input name="question_title" type="text" class="validate[required] textbox" id="question_title"  /></label></td>
          
        </tr>
        
        <tr>
          <td><strong>Answer1 :</strong></td>
          <td><label>
              <input name="answer1" type="text" class="validate[required] textbox" id="answer1" />
               &nbsp;&nbsp;<strong>Correct</strong> &nbsp;&nbsp;
              <input type="radio" id="correct_answer" name="correct_answer" value="1" />
            </label></td>
        </tr>
        
        <tr>
          <td><strong>Wrong Reason1 / Correct Intimation:</strong></td>
          <td><label>
              <input name="wrong_reason1" type="text" class="validate[required] textbox" id="wrong_reason1" />
             
            </label></td>
        </tr>
        
        
        
        <tr>
          <td><strong>Answer2 :</strong></td>
          <td><label>
              <input name="answer2" type="text" class="validate[required] textbox" id="answer2" />
               &nbsp;&nbsp;<strong>Correct</strong> &nbsp;&nbsp;
              <input type="radio" id="correct_answer" name="correct_answer" value="2" class="validate[required]" />
            </label></td>
        </tr>
        
          <tr>
          <td><strong>Wrong Reason2  / Correct Intimation:</strong></td>
          <td><label>
              <input name="wrong_reason2" type="text" class="validate[required] textbox" id="wrong_reason2" />
             
            </label></td>
        </tr>
        
        <tr>
          <td><strong>Answer3 :</strong></td>
          <td><label>
              <input name="answer3" type="text" class="validate[required] textbox" id="answer3" />
               &nbsp;&nbsp;<strong>Correct</strong> &nbsp;&nbsp;
              <input type="radio" id="correct_answer" name="correct_answer" value="3" class="validate[required]" />
            </label></td>
        </tr>
        
          <tr>
          <td><strong>Wrong Reason3  / Correct Intimation:</strong></td>
          <td><label>
              <input name="wrong_reason3" type="text" class="validate[required] textbox" id="wrong_reason3" />
             
            </label></td>
        </tr>
        
        <tr>
          <td><strong>Answer4 :</strong></td>
          <td><label>
              <input name="answer4" type="text" class="validate[required] textbox" id="answer4" />
              &nbsp;&nbsp;<strong>Correct</strong> &nbsp;&nbsp;
              <input type="radio" id="correct_answer" name="correct_answer" value="4" class="validate[required]" />
            </label></td>
        </tr>
        
          <tr>
          <td><strong>Wrong Reason4  / Correct Intimation:</strong></td>
          <td><label>
              <input name="wrong_reason4" type="text" class="validate[required] textbox" id="wrong_reason4" />
             
            </label></td>
        </tr>

        <tr>
          <td>&nbsp;<input type="hidden" name="experiment_id" id="experiment_id" value="{$experiment_id}" />
       
            </td>
          <td><label>
            <input name="button" type="submit" id="button" value="Submit" />
            <input name="button" type="submit" id="button" value="Cancel" />
            </label></td>
        </tr>
      </table>
      </form>
     </td>
  </tr>
</table>
<br />
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="grid">
                  <tr align="center">
                  <td class="hd" align="left"><a href="?order_by=question_title&dir={$question_title}{$queryString}" class="black">Question Title</a></td>
                  <td class="hd" align=""><a href="?order_by=add_date&dir={$add_date}{$queryString}" class="black">Last Update</a></td>                  <td class="hd">Edit</td>
                   <td class="hd">Delete</td>
                  </tr>    
            {foreach from=$question item=employees}               
                  <tr class="{cycle values = 'panel_0,panel_1'}">
                   <td align="left">{$employees.question_title}</td>
                     <td  align="center">{$employees.add_date}</td>
                     <td align="center" ><a href="update_self_eval-{$employees.question_id}.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
                     <td align="center" ><a href="del_self_eval-{$employees.question_id}.html"><img src="images/icon_delete.png" alt=" " width="16" height="16" /></a></td>
                   </tr>
            {foreachelse}
                        <tr>
                          <td colspan="6" class="panel_1" align="center">No Record Found.</td>
                        </tr>
                        {/foreach}
                        <tr>
                          <td colspan="6" align="center" class="hd">{include file="pager.tpl"}</td>
                        </tr>
          </table>      
      </td>
  </tr>
</table>
{include file="_footerAdmin.tpl"}