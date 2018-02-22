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
    <form action="add_contributors_exec.php" method="post" name="editcontributors" id="editcontributors" enctype="multipart/form-data">
    <table width="100%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Manage Contributors</h2></td>
        </tr>
         <tr>
          <td colspan="2" align="center">{$getMsg}</td>
        </tr>
        
        <tr>
          <td><strong>Contributor Name :</strong></td>
          <td><label>
              <input name="contributor_name" type="text" class="validate[required] textbox" id="contributor_name" value=""/>
            </label></td>
        </tr>
        
        <tr>
          <td><strong>Contributor Title :</strong></td>
          <td><label>
              <input name="contributor_title" type="text" class="validate[required] textbox" id="contributor_title" />
            </label></td>
        </tr>
        
         <tr>
          <td><strong>Sort Order :</strong></td>
          <td><label>
              <input name="sort_order" type="text" class="validate[required] textbox" id="sort_order" />
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
              <textarea name="contributor_description" cols="80" rows="10" class="validate[required]" id="contributor_description"></textarea>
              
              
              
            </label></td>
        </tr>
        
        <tr>
          <td>&nbsp;<input type="hidden" name="contributor_id" id="contributor_id" value="{$data.contributor_id}" />
          <input type="hidden" name="contributor_old_img" id="contributor_old_img" value="{$data.contributor_img}" />
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
                  <td class="hd" align="left"><a href="?order_by=contributor_name&dir={$contributor_name}{$queryString}" class="black">Contributor Name</a></td>
                  <td class="hd" align="left"><a href="?order_by=contributor_title&dir={$contributor_title}{$queryString}" class="black">Contributor Title</a></td>
                  <td class="hd" align=""><a href="?order_by=add_date&dir={$add_date}{$queryString}" class="black">Last Update</a></td>                  <td class="hd">Edit</td>
                   <td class="hd">Edit</td>
                  </tr>    
            {foreach from=$contributors item=employees}               
                  <tr class="{cycle values = 'panel_0,panel_1'}">
                   <td align="left">{$employees.contributor_name}</td>
                     <td align="left">{$employees.contributor_title}</td>
                     <td  align="center">{$employees.add_date}</td>
                     <td align="center" ><a href="update_contributor-{$employees.contributor_id}.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
                     <td align="center" ><a href="del_contributor-{$employees.contributor_id}.html"><img src="images/icon_delete.png" alt=" " width="16" height="16" /></a></td>
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