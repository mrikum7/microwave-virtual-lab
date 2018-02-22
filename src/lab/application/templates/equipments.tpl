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
                <td><h1>Equipments</h1></td>
                <td width="6"><img src="images/heading_r.jpg" alt="" width="6" height="43" /></td>
              </tr>
            </table>
          </div>
          <div class="gap"></div>
          <div class="rows">
           {section name=location loop=$arr}
            <div class="{cycle values='panel_content2,panel_content'}">
              <h1 class="heading1">{$arr[location].equipment_title|stripslash} </h1>
              <div class="content">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="center" valign="top">&nbsp;</td>
                    <td valign="top">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="30%" align="center" valign="top">
                    {$img = $arr[location].equipment_images}
                    {section name=location1 loop=$img} 
                    <img src="{$smarty.const.UPLOADS_EQUIPMENTS_URL}{$img[location1].img_name}" alt="" width="224" class="thumb2" /><br />
                        <br />
                        {/section}
                       </td>
                    <td width="70%" valign="top"><span class="blue_text">
                    {$arr[location].equipment_description|stripslash}
                    </td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="gap">&nbsp;</div>
         {/section}
          </div>
        </div></td>
      </tr>
      <tr>
        <td><img src="images/panel_btm.jpg" alt="" width="1002" height="18" /></td>
      </tr>
    </table>
{include file="_footer.tpl"}