{include file="_headerAdmin.tpl"}
<script>	
		$(document).ready(function() {
				$("#addFaq").validationEngine()
			
		});
		
	</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td> <form action="add_category.php" method="post" name="addFaq" id="addFaq" enctype="multipart/form-data">
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Manage Category</h2></td>
        </tr>
         <tr>
<td colspan="2" align="center" class="error">{$getMsg}</td>
</tr>
        <tr>
          <td width="127"><strong>Category Name :</strong> </td>
          <td width="534"><label>
              <input name="category_name" type="text" class="validate[required] textbox" id="category_name" />
            </label></td>
        </tr>
        <tr>
          <td><strong>Category Column :</strong></td>
          <td><select name="category_column" class="validate[required] dropdown" id="category_column">
              <option value="1" selected="selected">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              
            </select></td>
        </tr>
        
         <tr>
          <td width="127"><strong>Sort Order :</strong> </td>
          <td width="534"><label>
              <input name="category_sort_order" type="text" class="validate[required] textbox" id="category_sort_order" />
            </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
              <input name="button" type="submit" id="button" value="Add" />
            </label></td>
        </tr>
      </table>
      </form>
      <br />
    <table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="grid">
                  <tr align="center">
                  <td class="hd" align="left"><a href="?order_by=category_name&dir={$category_name}{$queryString}" class="black">Category Name</a></td>
                  <td class="hd" align=""><a href="?order_by=add_date&dir={$add_date}{$queryString}" class="black">Subscription Date</a></td>           <td class="hd" align=""><a href="?order_by=is_active&dir={$is_active}{$queryString}" class="black">Active</a></td>             
                        <td class="hd">Edit</td>
                        <td class="hd">Delete</td>
                  </tr>    
            {foreach from=$category item=employees}               
                  <tr class="{cycle values = 'panel_0,panel_1'}">
                     <td align="left">{$employees.category_name}</td>
                     <td  align="center">{$employees.add_date}</td>
                     <td  align="center">{if $employees.is_active eq 1}Yes{else}No {/if}</td>
                     <td align="center" ><a href="update_category-{$employees.category_id}.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
                     <td align="center" ><a href="del_category-{$employees.category_id}.html"><img src="images/icon_delete.png" alt=" " width="16" height="16" /></a></td>
                   </tr>
            {foreachelse}
                        <tr>
                          <td colspan="5" class="panel_1" align="center">No Record Found.</td>
                        </tr>
                        {/foreach}
                        <tr>
                          <td colspan="5" align="center" class="hd">{include file="pager.tpl"}</td>
                        </tr>
          </table>      
      </td>
  </tr>
</table>
</td>
  </tr>
</table>
{include file="_footerAdmin.tpl"}