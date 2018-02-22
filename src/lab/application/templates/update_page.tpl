{include file="_headerAdmin.tpl"}

<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="update_homePage_exec.php" method="post" >
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>{$data.content_title}</h2></td>
          <td colspan="2" align="center" class="error">{$getMsg}</td>
        </tr>
        <tr>
          <td valign="top"><strong>Title :</strong></td>
          <td>
              <input name="title" type="text" class="textfield" id="title" value="{$data.content_title}" size="30">
             </td>
        </tr> 
        <tr>
          <td valign="top"><strong>Details :</strong></td>
          <td>
             <textarea cols="80" rows="10" id="CKEditor1" name="desc">{$data.content_description|stripslash}</textarea>
             <input type="hidden" name="id" id="id" value="{$data.content_id}" />
            </td>
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