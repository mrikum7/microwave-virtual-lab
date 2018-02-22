{include file="_headerAdmin.tpl"}
<table><tr>
<td colspan="2" align="center" class="error">{$getMsg}</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="grid">
                  <tr align="center">
                  
                  <td class="hd" align="left"><a href="?order_by=content_page&dir={$content_page}{$queryString}" class="black">Page Title</a></td>
                  <td class="hd" align=""><a href="?order_by=content_date&dir={$content_date}{$queryString}" class="black">Last Update</a></td>                  <td class="hd">Edit</td>
                  </tr>    
            {foreach from=$contents item=employees}               
                  <tr class="{cycle values = 'panel_0,panel_1'}">
                     <td align="left">{$employees.content_page}</td>
                     <td  align="center">{$employees.content_date}</td>
                     <td align="center" ><a href="update_page-{$employees.content_id}.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
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