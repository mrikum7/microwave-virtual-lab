{include file="_headerAdmin.tpl"}
<script>	
		$(document).ready(function() {
				$("#add_sub").validationEngine()
			
		});
		
	</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="update_img_exec.php" method="post" name="add_sub" id="add_sub" clientvalidate="true" enctype="multipart/form-data" >
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Change Order</h2></td>
        </tr>
         <tr>
<td colspan="2" align="center" class="error">{$getMsg}</td>
</tr>
        <tr>          
          <td colspan="2" align="left">
         <img src="{$smarty.const.UPLOADS_PROMO_SPACES_URL}{$data.image_name}" alt="{$smarty.const.UPLOADS_PROMO_SPACES_URL}{$employees.image_name}" align="left" width="80" class="thumb2" />
         <input type="hidden" id="id" name="id" value="{$id}"/>
            </td>
        </tr>
        <tr>
          <td width="20%"><strong>Order :</strong></td>
          <td width="80%"><input type="text" id="order" name="order" class="validate[required] textbox" value="{$data.sort_order}"/></td>
        </tr>
         <tr>
          <td><strong>Is Active :</strong></td>
          <td><input type="radio" id="is_active" name="is_active" value="1" {if $data.is_active eq 1}checked="checked"{/if}  />&nbsp;&nbsp;Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" id="is_active" name="is_active" value="0" {if $data.is_active neq 1}checked="checked"{/if} />&nbsp;&nbsp;No
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
              <input name="add" type="submit" id="add" value="Edit Image" />
            </label></td>
        </tr>
      </table>
      </form>
      
     
     </td>
  </tr>
</table>
{include file="_footerAdmin.tpl"}