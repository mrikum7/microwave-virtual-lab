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
                  <td class="hd" align="left"><a href="?order_by=email&dir={$email}{$queryString}" class="black">Email</a></td>
                  <td class="hd" align=""><a href="?order_by=newsletter_date&dir={$newsletter_date}{$queryString}" class="black">Subscription Date</a></td>                  <td class="hd">Edit</td>
                   <td class="hd">Delete</td>
                  </tr>    
            {foreach from=$newsletter item=employees}               
                  <tr class="{cycle values = 'panel_0,panel_1'}">
                     <td align="left">{$employees.email}</td>
                     <td  align="center">{$employees.newsletter_date}</td>
                     <td  align="center"><a href="change-{$employees.newsletter_subscription_id}.html" class="green">{if $employees.is_active eq 1}Active{else}Inactive {/if}</a></td>
                      <td align="center" ><a href="del_newsletter-{$employees.newsletter_subscription_id}.html"><img src="images/icon_delete.png" alt=" " width="16" height="16" /></a></td>
                     
                   </tr>
            {foreachelse}
                        <tr>
                          <td colspan="4" class="panel_1" align="center">No Record Found.</td>
                        </tr>
                        {/foreach}
                        <tr>
                          <td colspan="4" align="center" class="hd">{include file="pager.tpl"}</td>
                        </tr>
          </table>      
      </td>
  </tr>
</table>
{include file="_footerAdmin.tpl"}