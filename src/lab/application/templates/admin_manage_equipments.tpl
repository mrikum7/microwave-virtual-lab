{include file="_headerAdmin.tpl"}
<script>	
		$(document).ready(function() {
				$("#editcontributors").validationEngine()
			
		});
		
	</script>
    <script type="text/javascript" src="../lib/ckeditor/ckeditor.js"></script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="add_equipment_exec.php" method="post" name="editcontributors" id="editcontributors" enctype="multipart/form-data">
    <table width="100%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Manage Equipments</h2></td>
        </tr>
        <tr>
<td colspan="2" align="center" class="error">{$getMsg}</td>
</tr>

        
        
        <tr>
          <td><strong>Equipments Title :</strong></td>
          <td><label>
              <input name="equipment_title" type="text" class="validate[required] textbox" id="equipment_title" />
            </label></td>
        </tr>
        
        <tr>
          <td valign="top"><strong>Equipments Description :</strong></td>
          <td>
            <script type="text/javascript">
		var editor = CKEDITOR.replace( 'desc' );
		</script>
            <label>
              <textarea name="equipment_description" cols="80" rows="10" class="validate[required]" id="CKEditor1"></textarea>
              
              
              
              </label></td>
        </tr>
        
         <tr>
          <td><strong>Equipment Image 1:</strong></td>
          <td><label>
              <input name="img_name1" id="img_name1" type="file" />
           your image(98 x 101 - 1 MB Max) </label></td>
            
        </tr>
        
         <tr>
          <td><strong>Equipment Image 2:</strong></td>
          <td><label>
              <input name="img_name2" id="img_name2" type="file" class="validate[required] file" />
           your image(98 x 101 - 1 MB Max) </label></td>
            
        </tr>
        <tr>
                  <td><strong>Equipment Sort Order :</strong></td>
                  <td><input name="sort_order" id="sort_order" type="text" class="validate[required] textbox" /></td>
                </tr>
        
        <tr>
          <td>&nbsp;<input type="hidden" name="equipmrnt_id" id="contributor_id" value="{$data.equipmrnt_id}" />
          </td>
          <td><label>
              <input name="button" type="submit" id="button" value="Submit" />
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
                  <td class="hd" align="left"><a href="?order_by=equipment_title&dir={$equipment_title}{$queryString}" class="black">Equipment Title</a></td>
                   <td class="hd" align="">Order</td>
                  <td class="hd" align=""><a href="?order_by=add_date&dir={$add_date}{$queryString}" class="black">Last Update</a></td>
                  
                  <td class="hd">Edit</td>
                  <td class="hd">Delete</td>
                  </tr>    
            {foreach from=$equipment item=employees}               
                  <tr class="{cycle values = 'panel_0,panel_1'}">
                     <td align="left">{$employees.equipment_title}</td>
                       <td align="left">{$employees.sort_order}</td>
                     <td  align="center">{$employees.add_date}</td> 
                     <td align="center" ><a href="update_equipment-{$employees.equipment_id}.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
                     <td align="center" ><a href="del_equipment-{$employees.equipment_id}.html"><img src="images/icon_delete.png" alt=" " width="16" height="16" /></a></td>
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