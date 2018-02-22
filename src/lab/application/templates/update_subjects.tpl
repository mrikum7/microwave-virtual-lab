{include file="_headerAdmin.tpl"}

<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="update_subject_exec.php" method="post" name="add_sub" id="add_sub" clientvalidate="true" enctype="multipart/form-data" >
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Edit Subjects</h2></td>
        </tr>
         <tr>
<td colspan="2" align="center" class="error">{$getMsg}</td>
</tr>
        <tr>
          <td width="127"><strong>Topic Name :</strong></td>
          <td width="534"><input type="hidden" id="id" name="id" value="{$id}" />
              <input name="name" type="text" class="textbox" id="name" value="{$data.subject_name}" />
            </td>
        </tr>
        <tr>
          <td valign="top"><strong>Description  :</strong></td>
          <td><label>
              <textarea name="desc" rows="10" cols="80"  class="ckeditor" id="desc">{$data.subject_desc|stripslash}</textarea>
            </label></td>
        </tr>
        <tr>
          <td><strong>Image :</strong></td>
          <td>
          <input name="sub_img" id="sub_img" type="file" class="validate[required]" value="{$data.subject_thumbnail}" />
          <input type="hidden" id="old_sub_img" name="old_sub_img" value="{$data.subject_thumbnail}" />
          </td>
        </tr>
          <tr>
          <td><strong>Is Active :</strong></td>
          <td>
          <input type="radio" id="is_active" name="is_active" value="1" {if $data.is_active eq 1}checked="checked" {/if}/>Yes
          <input type="radio" id="is_active" name="is_active" value="0" {if $data.is_active neq 1}checked="checked" {/if}/>No
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
              <input name="add" type="submit" id="add" value="Update" />
            </label></td>
        </tr>
      </table>
      </form>
      <br />
     </td>
  </tr>
</table>
{include file="_footerAdmin.tpl"}