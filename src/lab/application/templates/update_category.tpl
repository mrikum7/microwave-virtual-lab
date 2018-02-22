{include file="_headerAdmin.tpl"}
<script>	
		$(document).ready(function() {
				$("#addFaq").validationEngine()
			
		});
		
	</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td> <form action="update_category_exec.php" method="post" name="addFaq" id="addFaq" enctype="multipart/form-data">
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Update Category</h2></td>
        </tr>
         <tr>
<td colspan="2" align="center" class="error">{$getMsg}</td>
</tr>
        <tr>
          <td width="127"><strong>Category Name :</strong> </td>
          <td width="534">
              <input name="category_name" type="text" class="validate[required] textbox" id="category_name" value="{$data.category_name}" />
               <input name="id" type="hidden" class="textbox" id="id" value="{$data.category_id}" />
           </td>
        </tr>
        <tr>
          <td><strong>Category Column :</strong></td>
          <td><select name="category_column" class="validate[required] dropdown" id="category_column">
              <option value="1" {if $data.category_column eq 1} selected="selected" {/if} >1</option>
              <option value="2" {if $data.category_column eq 2} selected="selected" {/if}>2</option>
              <option value="3" {if $data.category_column eq 3} selected="selected" {/if}>3</option>
              
            </select></td>
        </tr>
        
         <tr>
          <td width="127"><strong>Sort Order :</strong> </td>
          <td width="534"><label>
              <input name="category_sort_order" type="text" class="validate[required] textbox" id="category_sort_order" value="{$data.category_sort_order}" />
            </label></td>
        </tr>
         <tr>
           <td><strong>Is Active :</strong></td>
           <td><input name="is_active" type="text" class="validate[required] textbox" id="is_active" value="{$data.is_active}" /></td>
         </tr>
         <tr>
          <td>&nbsp;</td>
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