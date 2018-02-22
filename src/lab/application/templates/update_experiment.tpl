{include file="_headerAdmin.tpl"}
<script>	
		$(document).ready(function() {
				$("#addFaq").validationEngine()
			
		});
		
	</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td> <form action="update_experiment_exec.php" method="post" name="addFaq" id="addFaq" enctype="multipart/form-data">
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Update Experiment</h2></td>
        </tr>    
         <tr>
<td colspan="2" align="center" class="error">{$getMsg}</td>
</tr>
        <tr>
                        <td><strong>Category Name: </strong></td>
                        <td>
                            <select name="category_id" id="category_id">   
                  {section name=location loop=$locations} 
                  <option value="{$locations[location].category_id}"{if $locations[location].category_id eq $data.category_id} selected {/if}> {$locations[location].category_name} </option>
                  {/section}
                  </select>
                        </td>
                      </tr>         
        <tr>
          <td><strong>Experiment Name :</strong> </td>
          <td>
              <input name="experiment_name" type="text" class="validate[required] textbox" id="experiment_name" value="{$data.experiment_name}" />
           </td>
        </tr>
         <tr>
          <td><strong>Experiment Title :</strong> </td>
          <td>
              <input name="experiment_title" type="text" class="validate[required] textbox" id="experiment_title" value="{$data.experiment_title}" />
           </td>
        </tr>
         <tr>
          <td valign="top"><strong> Experiment Description  :</strong></td>
          <td><label>
              <textarea name="experiment_description"  class="ckeditor" id="CKEditor1">{$data.experiment_description|stripslash}</textarea>
            </label></td>
        </tr>
        
          <tr>
                  <td valign="top"><strong>Experiment Video :</strong></td>
                  <td><label>
                      <textarea name="experiment_video" id="experiment_video" cols="40" rows="8">{$data.experiment_video|stripslash}</textarea>
                    </label></td>
                </tr>

         <tr>
          <td width="127"><strong>Sort Order :</strong> </td>
          <td width="534"><label>
              <input name="sort_order" type="text" class="validate[required] textbox" id="sort_order" value="{$data.sort_order}" />
            </label></td>
        </tr>
        
        <tr>
          <td><strong>Equipment Image :</strong></td>
          <td><label>
            <input name="experiment_img" id="experiment_img" type="file" class="validate[required] file" />
            your image(98 x 101 - 1 MB Max) </label></td>
          
        </tr>
        
           <tr>
                  <td><strong>Experiment Manual :</strong></td>
                  <td><label>
                      <input name="experiment_manual" id="experiment_manual" type="file" />
                      your image(98 x 101 - 1 MB Max) </label></td>
                </tr>
        
        <tr>
          <td><strong>Equipment Simulator Flash:</strong></td>
          <td><label>
            <input name="simulator_flash" id="simulator_flash" type="file" class="validate[required] file" />
            your image(98 x 101 - 1 MB Max) </label></td>
          
        </tr>
        
         <tr>
                        <td><strong>Is Active</strong></td>
                        <td>
                         <input name="is_active" id="is_active" type="checkbox" value="1" {if {$data.is_active} eq 1} checked="checked" {/if} >
                        </td>
                      </tr>
                       <tr>
                        <td><strong>Is featured</strong></td>
                        <td>
                         <input name="is_featured" id="is_featured" type="checkbox" value="1" {if {$data.is_featured} eq 1} checked="checked" {/if} >
                        </td>
                      </tr>
         <tr>
          <td>&nbsp;<input type="hidden" name="experiment_id" id="experiment_id" value="{$data.experiment_id}" />
          <input type="hidden" name="experiment_old_img" id="experiment_old_img" value="{$data.experiment_img}" />
            <input type="hidden" name="simulator_old_flash" id="simulator_old_flash" value="{$data.simulator_flash}" />
            <input type="hidden" name="old_experiment_manual" id="old_experiment_manual" value="{$data.experiment_manual}" />
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