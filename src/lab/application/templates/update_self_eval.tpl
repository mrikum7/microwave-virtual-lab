{include file="_headerAdmin.tpl"}
<script>	
		$(document).ready(function() {
				$("#addFaq").validationEngine()
			
		});
		
	</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td> <form action="update_self_eval_exec.php" method="post" name="addFaq" id="addFaq">
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Update Self Eval</h2></td>
        </tr>
        
        <tr>
          <td><strong>Question Title :</strong></td>
          <td><label>
            <input name="question_title" type="text" class="validate[required] textbox" id="question_title" value="{$data.question_title}"/></label></td>
          
        </tr>
        
        <tr>
          <td><strong>Answer1 :</strong></td>
          <td><label>
              <input name="answer1" type="text" class="validate[required] textbox" id="answer1" value="{$data.answer1}" />
               &nbsp;&nbsp;<strong>Correct</strong> &nbsp;&nbsp;
              <input type="radio" id="correct_answer" name="correct_answer" value="1" class="validate[required]" {if {$data.correct_answer} eq 1} checked="checked" {/if} />
            </label></td>
        </tr>
        
        <tr>
          <td><strong>Answer2 :</strong></td>
          <td><label>
              <input name="answer2" type="text" class="validate[required] textbox" id="answer2" value="{$data.answer2}" />
               &nbsp;&nbsp;<strong>Correct</strong> &nbsp;&nbsp;
              <input type="radio" id="correct_answer" name="correct_answer" value="2" class="validate[required]" {if {$data.correct_answer} eq 2} checked="checked" {/if}  />
            </label></td>
        </tr>
        
        <tr>
          <td><strong>Answer3 :</strong></td>
          <td><label>
              <input name="answer3" type="text" class="validate[required] textbox" id="answer3" value="{$data.answer3}"  />
               &nbsp;&nbsp;<strong>Correct</strong> &nbsp;&nbsp;
              <input type="radio" id="correct_answer" name="correct_answer" value="3" class="validate[required]" {if {$data.correct_answer} eq 3} checked="checked" {/if}  />
            </label></td>
        </tr>
        
        <tr>
          <td><strong>Answer4 :</strong></td>
          <td><label>
              <input name="answer4" type="text" class="validate[required] textbox" id="answer4"  value="{$data.answer4}"/>
              &nbsp;&nbsp;<strong>Correct</strong> &nbsp;&nbsp;
              <input type="radio" id="correct_answer" name="correct_answer" value="4" class="validate[required]" {if {$data.correct_answer} eq 4} checked="checked" {/if} />
            </label></td>
        </tr>
         
         <tr>
                        <td><strong>Is Active</strong></td>
                        <td>
                         <input name="is_active" id="is_active" type="checkbox" value="1" {if {$data.is_active} eq 1} checked="checked" {/if} >
                        </td>
                      </tr>
         
         
         <tr>
          <td>&nbsp;<input type="hidden" name="question_id" id="question_id" value="{$data.question_id}" />
            <input type="hidden" name="experiment_id" id="experiment_id" value="{$data.experiment_id}" />
          </td>
          <td><label>
              <input name="button" type="submit" id="button" value="Update" />
            </label></td>
        </tr>
      </table>
      </form>
    </td>
  </tr>
</table>
{include file="_footerAdmin.tpl"}