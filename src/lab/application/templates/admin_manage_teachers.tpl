{include file="_headerAdmin.tpl"}
<table>
<tr>
          <td colspan="2">{$getMsg}</td>
        </tr>
        </table>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="grid">
                  <tr align="center">
                  <td class="hd" align=""><a href="?order_by=user_firstname&dir={$user_firstname}{$queryString}" class="black">Name</a></td>
                  <td class="hd" align=""><a href="?order_by=user_institution_name&dir={$user_institution_name}{$queryString}" class="black">Institute</a></td>
                  <td class="hd" align=""><a href="?order_by=user_qualification&dir={$user_qualification}{$queryString}" class="black">Qualification</a></td>
                  <td class="hd" align=""><a href="?order_by=user_email&dir={$user_email}{$queryString}" class="black">Email</a></td>
                  <td class="hd" align=""><a href="?order_by=phone_number&dir={$phone_number}{$queryString}" class="black">Phone Number</a></td>
                  <td class="hd" align=""><a href="?order_by=Zip_Code&dir={$Zip_Code}{$queryString}" class="black">Zip Code</a></td>
                   <td class="hd" align=""><a href="?order_by=is_active&dir={$is_active}{$queryString}" class="black">Is Active</a></td>
                  <td class="hd">Edit</td>
                  <td class="hd">Delete</td>
                  </tr>    
            {foreach from=$students item=employees}               
                  <tr class="{cycle values = 'panel_0,panel_1'}">
                     <td align="center">{$employees.user_firstname}</td>
                     <td  align="center">{$employees.user_institution_name}</td>
                     <td align="center">{$employees.user_qualification}</td>
                     <td  align="center">{$employees.user_email}</td>
                     <td  align="center">{$employees.phone_number}</td>
                     <td  align="center">{$employees.Zip_Code}</td>
                     <td  align="center">{$employees.is_active}</td>
                     <td align="center" ><a href="update_user-{$employees.user_id}.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
                     <td align="center" ><a href="del_teacher-{$employees.user_id}.html"><img src="images/icon_delete.png" alt=" " width="16" height="16" /></a></td>
                   </tr>
            {foreachelse}
                        <tr>
                          <td colspan="9" class="panel_1" align="center">No Record Found.</td>
                        </tr>
                        {/foreach}
                        <tr>
                          <td colspan="9" align="center" class="hd">{include file="pager.tpl"}</td>
                        </tr>
          </table> </td>
  </tr>
</table>
{include file="_footerAdmin.tpl"}