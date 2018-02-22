{include file="_headerAdmin.tpl"}
<script>	
		$(document).ready(function() {
				$("#addFaq").validationEngine()
			
		});
		
	</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td> <form action="update_assignment_exec.php" method="post" name="addFaq" id="addFaq"enctype="multipart/form-data">
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Update Assignment</h2></td>
        </tr>
     
<tr>
          <td colspan="2">{$getMsg}</td>
        </tr>

         <tr>
           <td><strong>Assignment Title :</strong> </td>
           <td>
             <input name="assignment_title" type="text" class="validate[required] textbox" id="assignment_title" value="{$data.assignment_title}" />
            </td>
         </tr>

         <tr>
           <td width="127"><strong>Sort Order :</strong> </td>
           <td width="534"><label>
             <input name="sort_order" type="text" class="validate[required] textbox" id="sort_order" value="{$data.sort_order}" />
            </label></td>
         </tr>
         <tr>
          <td><strong>Assignment Image :</strong></td>
          <td><label>
            <input name="assignment_img" id="assignment_img" type="file" class="validate[required] file" />
            your image(98 x 101 - 1 MB Max) </label></td>
          
        </tr>

         <tr>
                        <td><strong>Is Active</strong></td>
                        <td>
                         <input name="is_active" id="is_active" type="checkbox" value="1" {if {$data.is_active} eq 1} checked="checked" {/if} >
                        </td>
                      </tr>
         <tr>
          <td>&nbsp;<input type="hidden" name="assignment_id" id="assignment_id" value="{$data.assignment_id}" />
           <input type="hidden" name="assignment_old_img" id="assignment_old_img" value="{$data.assignment_img}" />
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