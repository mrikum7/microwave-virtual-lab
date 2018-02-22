{include file="_headerAdmin.tpl"}
<script>	
		$(document).ready(function() {
				$("#addFaq").validationEngine()
			
		});
		
	</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="update_faq_exec.php" method="post" name="addFaq" id="addFaq" enctype="multipart/form-data">
       <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Manage FAQ</h2></td>
        </tr>
         <tr>
<td colspan="2" align="center" class="error">{$getMsg}</td>
</tr>
        <tr>
          <td width="127"><strong>Question :</strong></td>
          <td width="534"><label>
              <input name="id" type="hidden"  id="id" value="{$data.faq_id}" />
              <input name="question" type="text" class="validate[required] textbox" id="question" value="{$data.faq_question}" />
          </label></td>
        </tr>
        <tr>
          <td><strong>Sort Order :</strong></td>
          <td><input name="sort_order" type="text" class="validate[required] textbox" id="sort_order" value="{$data.sort_order}" /></td>
        </tr>
        <tr>
          <td><strong>Subject :</strong></td>
          <td><select name="subject" class="validate[required] dropdown" id="subject">
                            {section name= index loop=$sub}
              <option value="{$sub[index].subject_id}" {if $data.subject_id eq $sub[index].subject_id}selected="selected" {/if} >{$sub[index].subject_name}</option>
              {/section}
          </select></td>
        </tr>
        <tr>
          <td valign="top"><strong>Answer :</strong></td>
          <td><label>
              <textarea name="answer" cols="45" rows="5" class="validate[required]" id="answer">{$data.faq_answer}</textarea>
            </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
              <input name="add" type="submit" id="add" value="Search" />
          </label></td>
        </tr>
      </table>
      </form>
      </td>
  </tr>
</table>
{include file="_footerAdmin.tpl"}