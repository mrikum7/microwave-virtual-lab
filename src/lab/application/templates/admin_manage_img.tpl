{include file="_headerAdmin.tpl"}
<script>	
		$(document).ready(function() {
				$("#add_sub").validationEngine()
			
		});
		
	</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="add_img.php" method="post" name="add_sub" id="add_sub" clientvalidate="true" enctype="multipart/form-data" >
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Manage Images</h2></td>
        </tr>
        <tr>
                        <td colspan="2" align="center" class="error">{$getMsg}
                        </td>
                      </tr>
        <tr>
          <td width="127"><strong>Image :</strong></td>
          <td width="534">
            <input name="sub_img" id="sub_img" type="file" class="validate[required] textbox" /></td>
        </tr>
        <tr>
          <td><strong>Order :</strong></td>
          <td><input type="text" id="order" name="order" class="validate[required] textbox"/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
              <input name="add" type="submit" id="add" value="Add Image" />
            </label></td>
        </tr>
      </table>
      </form>
      <br />
     <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="grid">
               <tr align="center">
               <td class="hd" align=""><a href="?order_by=image_name&dir={$image_name}{$queryString}" class="black">Image</a></td>
                 <td class="hd" align=""><a href="?order_by=added_on&dir={$added_on}{$queryString}" class="black">Date</a></td>
                 <td class="hd" align=""><a href="?order_by=is_active&dir={$is_active}{$queryString}" class="black">Is Active</a></td>
                  <td class="hd">Change Order</td>
                   <td class="hd">Delete</td>
               </tr>    
            {foreach from=$scroller item=employees}               
<tr class="{cycle values = 'panel_0,panel_1'}">
                     <td align="center">
<img src="{$smarty.const.UPLOADS_PROMO_SPACES_URL}{$employees.image_name}" alt="{$smarty.const.UPLOADS_PROMO_SPACES_URL}{$employees.image_name}" align="left" width="100" class="thumb2" /> </td>
                     <td  align="center" valign="top">{$employees.added_on}</td>
                     <td align="center" valign="top">{$employees.is_active}</td>
                     <td align="center" valign="top" ><a href="update_img-{$employees.scroller_id}.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
                     <td align="center" valign="top" ><a href="del_img-{$employees.scroller_id}.html"><img src="images/icon_delete.png" alt=" " width="16" height="16" /></a></td>
                   </tr>
            {foreachelse}
                        <tr>
                          <td colspan="8" class="panel_1" align="center">No Record Found.</td>
                        </tr>
                        {/foreach}
                        <tr>
                          <td colspan="8" align="center" class="hd">{include file="pager.tpl"}</td>
                        </tr>
          </table>
     
     </td>
  </tr>
</table>
{include file="_footerAdmin.tpl"}