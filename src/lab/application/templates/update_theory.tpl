{include file="_headerAdmin.tpl"}
<script>	
		$(document).ready(function() {
				$("#addFaq").validationEngine()
			
		});
		
	</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td> <form action="update_theory_exec.php" method="post" name="addFaq" id="addFaq">
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Update Theory</h2></td>
        </tr>
        <tr>
          <td colspan="2">{$getMsg}</td>
        </tr>
         <tr>
           <td><strong>Theory Title :</strong> </td>
           <td>
             <input name="theory_title" type="text" class="validate[required] textbox" id="theory_title" value="{$data.theory_title}" />
            </td>
         </tr>
         <tr>
          <td valign="top"><strong> Theory Description  :</strong></td>
          <td><label>
              <textarea name="theory_description" class="ckeditor" id="desc">{$data.theory_description|stripslash}</textarea>
            </label></td>
        </tr>

         <tr>
          <td width="127"><strong>Sort Order :</strong> </td>
          <td width="534"><label>
              <input name="sort_order" type="text" class="validate[required] textbox" id="sort_order" value="{$data.sort_order}" />
            </label></td>
        </tr>

         <tr>
                        <td><strong>Is Active</strong></td>
                        <td>
                         <input name="is_active" id="is_active" type="checkbox" value="1" {if {$data.is_active} eq 1} checked="checked" {/if} >
                        </td>
                      </tr>
         <tr>
          <td><input type="hidden" name="theory_id" id="theory_id" value="{$data.theory_id}" />
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