{include file="_headerAdmin.tpl"}
<script>	
		$(document).ready(function() {
				$("#editnews").validationEngine()
			
		});
		
	</script>
    <script type="text/javascript" src="../lib/ckeditor/ckeditor.js"></script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="update_news_exec.php" method="post" name="editnews" id="editnews">
    <table width="100%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Manage news</h2></td>
        </tr>
         <tr>
<td colspan="2" align="center" class="error">{$getMsg}</td>
</tr>
        
        
        <tr>
          <td><strong>Contributor Title :</strong></td>
          <td><label>
              <input name="news_title" type="text" class="validate[required] textbox" id="news_title" value="{$data.news_title}" />
            </label></td>
        </tr>
        
         <tr>
          <td><strong>Sort Order :</strong></td>
          <td><label>
              <input name="sort_order" type="text" class="validate[required] textbox" id="sort_order" value="{$data.sort_order}" />
            </label></td>
        </tr>

        <tr>
          <td valign="top"><strong>Contributor Description :</strong></td>
          <td><label>
              <textarea name="news_description" class="validate[required]" id="CKEditor1">{$data.news_description|stripslash}</textarea>
              </label></td>
        </tr>
        <tr>
                        <td><strong>Is Active</strong></td>
                        <td>
                         <input name="is_active" id="is_active" type="checkbox" value="1" {if {$data.is_active} eq 1} checked="checked" {/if} >
                        </td>
                      </tr>
        
        <tr>
          <td>&nbsp;<input type="hidden" name="news_id" id="news_id" value="{$data.news_id}" />
         
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