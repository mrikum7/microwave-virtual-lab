{include file="_headerAdmin.tpl"}
<script>	
		$(document).ready(function() {
				$("#editcontributors").validationEngine()
			
		});
		
	</script>
   
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="update_contributors_exec.php" method="post" name="editcontributors" id="editcontributors" enctype="multipart/form-data">
    <table width="100%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Edit Contributors</h2></td>
        </tr>
        
        <tr>
          <td colspan="2">{$getMsg}</td>
        </tr>
        
        <tr>
          <td><strong>Contributor Name :</strong></td>
          <td><label>
              <input name="contributor_name" type="text" class="validate[required] textbox" id="contributor_name" value="{$data.contributor_name}"/>
            </label></td>
        </tr>
        
        <tr>
          <td><strong>Contributor Title :</strong></td>
          <td><label>
              <input name="contributor_title" type="text" class="validate[required] textbox" id="contributor_title" value="{$data.contributor_title}" />
            </label></td>
        </tr>
        
         <tr>
          <td><strong>Sort Order :</strong></td>
          <td><label>
              <input name="sort_order" type="text" class="validate[required] textbox" id="sort_order" value="{$data.sort_order}" />
            </label></td>
        </tr>
        
        <tr>
          <td><strong>Contributor Image :</strong></td>
          <td><label>
              <input name="contributor_img" id="contributor_img" type="file" class="validate[required] file" />
           your image(98 x 101 - 1 MB Max) </label></td>
            
        </tr>
        
        <tr>
          <td valign="top"><strong>Contributor Description :</strong></td>
          <td>
          <label>
              <textarea name="contributor_description" cols="80" rows="10" class="validate[required] " id="contributor_description">{$data.contributor_description|stripslash}</textarea>
              
              
              
            </label></td>
        </tr>
        <tr>
                        <td><strong>Is Active</strong></td>
                        <td>
                         <input name="is_active" id="is_active" type="checkbox" value="1" {if {$data.is_active} eq 1} checked="checked" {/if} >
                        </td>
                      </tr>
        
        <tr>
          <td>&nbsp;<input type="hidden" name="contributor_id" id="contributor_id" value="{$data.contributor_id}" />
          <input type="hidden" name="contributor_old_img" id="contributor_old_img" value="{$data.contributor_img}" />
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