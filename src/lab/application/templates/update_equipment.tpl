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
    <form action="update_equipment_exec.php" method="post" name="editcontributors" id="editcontributors" enctype="multipart/form-data">
    <table width="100%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Edit Equipments</h2></td>
        </tr>
         <tr>
<td colspan="2" align="center" class="error">{$getMsg}</td>
</tr>
        <tr>
          <td><strong>Equipments Title :</strong></td>
          <td><label>
              <input name="equipment_title" type="text" class="validate[required] textbox" id="equipment_title" value="{$data.equipment_title}"/>
            </label></td>
        </tr>
 
        <tr>
          <td valign="top"><strong>Equipments Description :</strong></td>
          <td>
            <script type="text/javascript">
		var editor = CKEDITOR.replace( 'desc' );
		</script>
            <label>
              <textarea name="equipment_description" cols="80" rows="10" class="validate[required] " id="CKEditor1">{$data.equipment_description|stripslash}</textarea> 
            </label></td>
        </tr>
        
         <tr>
          <td><strong>Equipment Image 1:</strong></td>
          <td><label>
            <input name="img_name1" id="img_name1" type="file" class="validate[required] file" />
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
                  <td><input name="sort_order" id="sort_order" type="text" class="validate[required] textbox" value="{$data.sort_order}" /></td>
                </tr>
        
        
        <tr>
          <td>&nbsp;<input type="hidden" name="equipment_id" id="equipment_id" value="{$data.equipment_id}" />
          <input type="hidden" name="equipment_image_id" id="equipment_id" value="{$arr.equipment_image_id}" />
            </td>
          <td><label>
            <input name="button" type="submit" id="button" value="Update" />
            </label></td>
        </tr>
      </table>
      <br />
     <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="grid">
                  <tr align="center">
                  <td class="hd" align=""><a href="?order_by=img_name&dir={$img_name}{$queryString}" class="black">Equipment Image</a></td>
                 
                  <td class="hd">Delete</td>
                  </tr>    
            {foreach from=$arr item=employees}               
                  <tr class="{cycle values = 'panel_0,panel_1'}">
                     <td align="left"><img src="{$smarty.const.UPLOADS_EQUIPMENTS_URL}{$employees.img_name}" alt="{$smarty.const.UPLOADS_EQUIPMENTS_URL}{$employees.img_name}" width="100" class="thumb2" /><br /></td>
                     <td align="center" ><a href="del_equipment_img-{$employees.equipment_image_id}.html"><img src="images/icon_delete.png" alt=" " width="16" height="16" /></a></td>
                   </tr>
            {foreachelse}
                        <tr>
                          <td colspan="4" class="panel_1" align="center">No Record Found.</td>
                        </tr>
                        {/foreach}
                        <tr>
                          <td colspan="4" align="center" class="hd">{include file="pager.tpl"}</td>
                        </tr>
          </table>

      
      </form>
     </td>
  </tr>
</table>
{include file="_footerAdmin.tpl"}