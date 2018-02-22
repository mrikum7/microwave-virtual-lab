{include file="_headerAdmin.tpl"}
<script>	
		$(document).ready(function() {
				$("#add_sub").validationEngine()
			
		});
		
	</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="add_subject.php" method="post" name="add_sub" id="add_sub" clientvalidate="true" enctype="multipart/form-data" >
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Manage Topic</h2></td>
        </tr>
        <tr>
          <td colspan="2">{$getMsg}</td>
        </tr>
        <tr>
          <td width="127"><strong>Topic Name :</strong></td>
          <td width="534"><label>
              <input name="name" type="text" class="validate[required] textbox" id="name" />
            </label></td>
        </tr>
        <tr>
          <td valign="top"><strong>Description  :</strong></td>
          <td><label>
              <textarea name="desc" rows="10" cols="80"  class="validate[required]" id="desc"></textarea>
            </label></td>
        </tr>
        <tr>
          <td><strong>Image :</strong></td>
          <td>
          <input name="sub_img" id="sub_img" type="file" class="validate[required]" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
              <input name="add" type="submit" id="add" value="Add" />
            </label></td>
        </tr>
      </table>
      </form>
      <br />
     <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="grid">
               <tr align="center">
               <td class="hd" align="left"><a href="?order_by=subject_name&dir={$subject_name}{$queryString}" class="black">Topic Name</a></td>
                 <td class="hd" align=""><a href="?order_by=add_date&dir={$add_date}{$queryString}" class="black">Date</a></td>
                 <td class="hd" align=""><a href="?order_by=is_active&dir={$is_active}{$queryString}" class="black">Is Active</a></td>
                  <td class="hd">Edit</td>
                  <td class="hd">Delete</td>
               </tr>    
            {foreach from=$subjects item=employees}               
                  <tr class="{cycle values = 'panel_0,panel_1'}">
                     <td align="left">{$employees.subject_name}</td>
                     <td  align="center">{$employees.add_date}</td>
                     <td align="center">{$employees.is_active}</td>
                     <td align="center" ><a href="update_subject-{$employees.subject_id}.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
                     <td align="center" ><a href="del_subject-{$employees.subject_id}.html"><img src="images/icon_delete.png" alt=" " width="16" height="16" /></a></td>
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