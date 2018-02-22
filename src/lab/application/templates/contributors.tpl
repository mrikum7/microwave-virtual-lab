{include file="_header.tpl"}
    <table width="1002" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="images/panel_top.jpg" alt="" width="1002" height="18" /></td>
      </tr>
      <tr>
        <td id="panel_bg"><div id="container">
        
          <div class="page_heading">
         
          
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="6"><img src="images/heading_l.jpg" alt="" width="6" height="43" /></td>
                <td><h1>Contributors</h1></td>
                <td width="6"><img src="images/heading_r.jpg" alt="" width="6" height="43" /></td>
              </tr>
            </table>
          </div>
          <div class="gap"></div>
          <div class="rows">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><div class="panel_content2">
                    <div>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><h1 class="heading1">&nbsp;</h1></td>
                          <td width="75"><span class="heading1"><img src="images/icon_contributors.png" alt="" width="70" height="70" class="icon" /></span></td>
                        </tr>
                      </table>
                    </div>
                  <div class="content">
                   {$ctr = 1}
          {section name=location loop=$arr}
                      <div class="contributors" {if $ctr eq 1}style="padding-top:0;"{/if}>
                      {if $ctr%2 ne 0}
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="115" valign="top"><img src="{$smarty.const.UPLOADS_CONTRIBUTORS_URL}{$arr[location].contributor_img}" alt="" width="98" class="thumb2" /></td>
                            <td valign="top"><span class="blue_text">{$arr[location].contributor_name}</span><br />
                           {$arr[location].contributor_title}
                              <br /><br />
                             {$arr[location].contributor_description} </td>
                          </tr>
                        </table>
                        {else}
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td valign="top"><span class="blue_text">{$arr[location].contributor_name}</span><br />
                           {$arr[location].contributor_title}
                              <br /><br />
                             {$arr[location].contributor_description} </td>
                             <td width="115" align="right" valign="top"><img src="{$smarty.const.UPLOADS_CONTRIBUTORS_URL}{$arr[location].contributor_img}" alt="" width="98" height="101" class="thumb2" /></td>
                          </tr>
                        </table>
                        {/if}
                      </div>
                      {$ctr = $ctr+1}
                      {/section}
                  </div>
                </div></td>
              </tr>
            </table>
          </div>
        </div></td>
      </tr>
      <tr>
        <td><img src="images/panel_btm.jpg" alt="" width="1002" height="18" /></td>
      </tr>
    </table>
   {include file="_footer.tpl"}