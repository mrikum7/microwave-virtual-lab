{include file="_headerAdmin.tpl"}
<script>	
		$(document).ready(function() {
				$("#editcontributors").validationEngine()
			
		});
		
	</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="add_assignment_exec.php" method="post" name="editcontributors" id="editcontributors" enctype="multipart/form-data">
    <table width="100%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Manage Assignment</h2></td>
        </tr>
       
        <tr>
<td colspan="2" align="center" class="error">{$getMsg}</td>
</tr>
        
        <tr>
          <td><strong>Assignment Title :</strong></td>
          <td><label>
            <input name="assignment_title" type="text" class="validate[required] textbox" id="assignment_title" />
            </label></td>
        </tr>
        
         <tr>
          <td><strong>Sort Order :</strong></td>
          <td><label>
              <input name="sort_order" type="text" class="validate[required] textbox" id="sort_order" />
            </label></td>
        </tr>
        
        <tr>
                  <td><strong>Assignment Image :</strong></td>
                  <td><label>
                      <input name="assignment_img" id="assignment_img" type="file" />
                      your image(98 x 101 - 1 MB Max) </label></td>
                </tr>
        
        <tr>
          <td>&nbsp;<input type="hidden" name="assignment_id" id="assignment_id" value="{$data.assignment_id}" />
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
                  <td class="hd" align="left"><a href="?order_by=assignment_title&dir={$assignment_title}{$queryString}" class="black">Thoery Title</a></td>
                  <td class="hd" align=""><a href="?order_by=add_date&dir={$add_date}{$queryString}" class="black">Last Update</a></td>                  <td class="hd">Edit</td>
                   <td class="hd">Delete</td>
                  </tr>    
            {foreach from=$assignment item=employees}               
                  <tr class="{cycle values = 'panel_0,panel_1'}">
                   <td align="left">{$employees.assignment_title}</td>
                     <td  align="center">{$employees.add_date}</td>
                     <td align="center" ><a href="update_assignment-{$employees.assignment_id}.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
                     <td align="center" ><a href="del_assignment-{$employees.assignment_id}.html"><img src="images/icon_delete.png" alt=" " width="16" height="16" /></a></td>
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