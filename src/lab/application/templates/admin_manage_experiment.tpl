{include file="_headerAdmin.tpl"}
<script>	
		$(document).ready(function() {
				$("#editcontributors").validationEngine()
			
		});
		
	</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0"  >
        <tr>
          <td><form action="add_experiment_exec.php" method="post" name="editcontributors" id="editcontributors" enctype="multipart/form-data">
              <table width="100%" border="0" cellpadding="6" cellspacing="6" class="panel1">
                <tr>
                  <td colspan="2"><h2>Manage Experiments</h2></td>
                </tr>
                
                 <tr>
<td colspan="2" align="center" class="error">{$getMsg}</td>
</tr>
                
                <tr>
                  <td><strong>Category Name: </strong></td>
                  <td><select name="category_id" id="category_id">
                      
                  {section name=location loop=$locations}
                  
                      <option value="{$locations[location].category_id}">{$locations[location].category_name} </option>
                      
                  {/section}
                  
                    </select></td>
                </tr>
                <tr>
                  <td><strong>Experiment Name :</strong></td>
                  <td><label>
                      <input name="experiment_name" type="text" class="validate[required] textbox" id="experiment_name" />
                    </label></td>
                </tr>
                <tr>
                  <td><strong>Experiment Title :</strong></td>
                  <td><label>
                      <input name="experiment_title" type="text" class="validate[required] textbox" id="experiment_title" />
                    </label></td>
                </tr>
                <tr>
                  <td valign="top"><strong>Experiment Description :</strong></td>
                  <td><label>
                      <textarea name="experiment_description"  class="validate[required]" id="CKEditor1"></textarea>
                    </label></td>
                </tr>
                
                <tr>
                  <td valign="top"><strong>Experiment Video :</strong></td>
                  <td><label>
                      <textarea name="experiment_video" id="experiment_video" cols="40" rows="8"></textarea>
                    </label></td>
                </tr>
                
                
                <tr>
                  <td><strong>Experiment Image :</strong></td>
                  <td><label>
                      <input name="experiment_img" id="experiment_img" type="file" />
                      your image(98 x 101 - 1 MB Max) </label></td>
                </tr>
                
                  <tr>
                  <td><strong>Experiment Manual :</strong></td>
                  <td><label>
                      <input name="experiment_manual" id="experiment_manual" type="file" />
                      your image(98 x 101 - 1 MB Max) </label></td>
                </tr>
                
                <tr>
                  <td><strong> Simulator Flash :</strong></td>
                  <td><label>
                      <input name="simulator_flash" id="simulator_flash" type="file" class="validate[required] file" />
                      your image(98 x 101 - 1 MB Max) </label></td>
                </tr>
                <tr>
                  <td><strong>Experiment Sort Order :</strong></td>
                  <td><input name="sort_order" id="sort_order" type="text" class="validate[required] file" /></td>
                </tr>
                
                 <tr>
                        <td><strong>Is Featured</strong></td>
                        <td>
                         <input name="is_featured" id="is_featured" type="checkbox" value="1" >
                        </td>
                      </tr>
                
                <tr>
                  <td>&nbsp;
                    <input type="hidden" name="experiment_id" id="experiment_id" /></td>
                  <td><label>
                      <input name="button" type="submit" id="button" value="Submit" />
                    </label></td>
                </tr>
              </table>
            </form></td>
        </tr>
      </table>
      <br />
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="grid">
        <tr align="center">
          <td class="hd" align="left"><a href="?order_by=experiment_name&dir={$experiment_name}{$queryString}" class="black">Experiment Name</a></td>
          <td class="hd" align="">Experiment Theory</td>
          <td class="hd" align="">Experiment Procedure</td>
          <td class="hd" align="">Experiment Assignment</td>
          <td class="hd" align="">Experiment Reference</td>
           <td class="hd" align="">Experiment Self Eval</td>
          <td class="hd">Edit</td>
          <td class="hd">Delete</td>
        </tr>
        {foreach from=$experiment item=employees}
        <tr class="{cycle values = 'panel_0,panel_1'}">
          <td align="left">{$employees.experiment_name}</td>
          <td align="center" ><a href="admin_manage_theory.php?experiment_id={$employees.experiment_id}">Experiment Theory</a></td>
          <td align="center" ><a href="admin_manage_procedure.php?experiment_id={$employees.experiment_id}">Experiment Procedure</a></td>
          <td align="center" ><a href="admin_manage_assignment.php?experiment_id={$employees.experiment_id}">Experiment Assignment</a></td>
          <td align="center" ><a href="admin_manage_reference.php?experiment_id={$employees.experiment_id}">Experiment Reference</a></td>
           <td align="center" ><a href="admin_manage_self_eval.php?experiment_id={$employees.experiment_id}">Experiment Self Eval</a></td>
          <td align="center" ><a href="update_experiment-{$employees.experiment_id}.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
          <td align="center" ><a href="del_experiment-{$employees.experiment_id}.html"><img src="images/icon_delete.png" alt=" " width="16" height="16" /></a></td>
        </tr>
        {foreachelse}
        <tr>
          <td colspan="8" class="panel_1" align="center">No Record Found.</td>
        </tr>
        {/foreach}
        <tr>
          <td colspan="8" align="center" class="hd">{include file="pager.tpl"}</td>
        </tr>
      </table></td>
  </tr>
</table>
{include file="_footerAdmin.tpl"}