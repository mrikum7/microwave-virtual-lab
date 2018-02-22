{include file="_headerAdmin.tpl"}
<table>
 <tr>
<td colspan="2" align="center" class="error">{$getMsg}</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="grid">
                  <tr align="center">
                  <td class="hd" align="left"><a href="?order_by=name&dir={$name}{$queryString}" class="black">Name</a></td>
            <td class="hd" align=""><a href="?order_by=feedback_date&dir={$feedback_date}{$queryString}" class="black">Date</a></td>
                  
                  <td class="hd">View Details</td>
                  </tr>    
            		{foreach from=$feedback item=employees}               
                  <tr class="{cycle values = 'panel_0,panel_1'}">
                     <td align="left">{$employees.name}</td>
                   <td  align="center">{$employees.feedback_date}</td>
                     <td align="center" ><a href="update_feedback-{$employees.feedback_id}.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
                   </tr>
            {foreachelse}
                        <tr>
                          <td colspan="8" class="panel_1" align="center">No Record Found.</td>
                        </tr>
                        {/foreach}
                        <tr>
                          <td colspan="8" align="center" class="hd">{include file="pager.tpl"}</td>
                        </tr>
          </table> </td>
  </tr>
</table>
{include file="_footerAdmin.tpl"}