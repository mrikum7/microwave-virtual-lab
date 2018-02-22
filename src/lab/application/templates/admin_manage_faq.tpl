{include file="_headerAdmin.tpl"}
<script>	
		$(document).ready(function() {
				$("#addFaq").validationEngine()
			
		});
		
	</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="add_faq.php" method="post" name="addFaq" id="addFaq" enctype="multipart/form-data">
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
              <input name="question" type="text" class="validate[required] textbox" id="question" />
          </label></td>
        </tr>
        <tr>
          <td><strong>Sort Order :</strong></td>
          <td><input name="sort_order" type="text" class="validate[required] textbox" id="sort_order" /></td>
        </tr>
        <tr>
          <td><strong>Subject :</strong></td>
          <td><select name="subject" class="validate[required] dropdown" id="subject">
              <option ></option>
               {section name= index loop=$sub}
              <option value="{$sub[index].subject_id}">{$sub[index].subject_name}</option>
              {/section}
          </select></td>
        </tr>
        <tr>
          <td valign="top"><strong>Answer :</strong></td>
          <td><label>
              <textarea name="answer" cols="45" rows="5" class="validate[required]" id="answer"></textarea>
            </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
              <input name="add" type="submit" id="add" value="Add Faq" />
          </label></td>
        </tr>
      </table>
      </form>
      <br />
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="grid">
                  <tr align="center">
                  <td class="hd">S. No.</td>
                  <td class="hd" align=""><a href="?order_by=subject_name&dir={$subject_name}{$queryString}" class="black">Subject Name</a></td>
                  <td class="hd" align="" width="30%"><a href="?order_by=faq_question&dir={$faq_question}{$queryString}" class="black">Question</a></td>
                   <td class="hd" align=""><a href="?order_by=add_date&dir={$add_date}{$queryString}" class="black">Add Date</a></td>
                    <td class="hd" align=""><a href="?order_by=is_active&dir={$is_active}{$queryString}" class="black">Is Active</a></td>                    
                               <td class="hd">Edit</td>
                                <td class="hd">Delete</td>
                  </tr>    
                  {$counter}
            {foreach from=$contents item=employees}               
                  <tr class="{cycle values = 'panel_0,panel_1'}">
                     <td  align="center" valign="top">{counter}</td>
                    <td  align="center" valign="top">{$employees.subject_name}</td>
                    <td align="center" valign="top">{$employees.faq_question}</td>
                    <td  align="center" valign="top">{$employees.add_date}</td>
                    <td  align="center" valign="top">{$employees.is_active}</td>
                     
                     
                     
                     <td align="center" valign="top"><a href="update_faq-{$employees.faq_id}.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
                      <td align="center" valign="top"><a href="del_faq-{$employees.faq_id}.html"><img src="images/icon_delete.png" alt=" " width="16" height="16" /></a></td>
        </tr>
            {foreachelse}
                        <tr>
                          <td colspan="7" class="panel_1" align="center">No Record Found.</td>
                        </tr>
                        {/foreach}
                        <tr>
                          <td colspan="7" align="center" class="hd">{include file="pager.tpl"}</td>
                        </tr>
    </table>   </td>
  </tr>
</table>
{include file="_footerAdmin.tpl"}