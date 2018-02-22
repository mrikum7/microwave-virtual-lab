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
              <td><h1>Experiments</h1></td>
              <td width="6"><img src="images/heading_r.jpg" alt="" width="6" height="43" /></td>
            </tr>
          </table>
        </div>
        <div class="gap"></div>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td><div class="panel_content2">
                <div class="content">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                    
                      <td width="30%" valign="top"> 
                      {section name=index loop=$categoryCol1}
                        <h1 class="heading4">
                        {$categoryCol1[index].category_name}</h1>
                        <div class="content"> {$experiment = $categoryCol1[index].experiments}
                          {section name=index2 loop=$experiment}
                          <div class="exp_list">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="30" valign="top"><span class="left_col2"><img src="images/icon_video.png" alt="" /></span></td>
                                <td valign="top"><a href="tab-{$experiment[index2].experiment_id}.html">{$experiment[index2].experiment_name}</a></td>
                              </tr>
                            </table>
                          </div>
                          {/section} </div>
                          <br />
                        <br />
                        {/section} </td>
                        
                      <td width="5%">&nbsp;</td>
                      <td width="30%" valign="top">
                       {section name=index loop=$categoryCol2}
                        <h1 class="heading4">
                        {$categoryCol2[index].category_name}</h1>
                        <div class="content"> {$experiment = $categoryCol2[index].experiments}
                          {section name=index2 loop=$experiment}
                          <div class="exp_list">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="30" valign="top"><span class="left_col2"><img src="images/icon_video.png" alt="" /></span></td>
                                <td valign="top"><a href="tab-{$experiment[index2].experiment_id}.html">{$experiment[index2].experiment_name}</a></td>
                              </tr>
                            </table>
                          </div>
                          {/section} </div>
                        <br />
                        <br />
                        {/section} </td>
                        
                      <td width="5%">&nbsp;</td>
                      <td width="30%" valign="top"> {section name=index loop=$categoryCol3}
                        <h1 class="heading4">{$categoryCol3[index].category_name}</h1>
                        <div class="content"> {$experiment = $categoryCol3[index].experiments}
                          {section name=index2 loop=$experiment}
                          <div class="exp_list">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="30" valign="top"><span class="left_col2"><img src="images/icon_video.png" alt="" /></span></td>
                                <td valign="top"><a href="tab-{$experiment[index2].experiment_id}.html">{$experiment[index2].experiment_name}</a></td>
                              </tr>
                            </table>
                          </div>
                          {/section} </div>
                          <br />
                        <br />
                        {/section} </td>
                    </tr>
                  </table>
                </div>
              </div></td>
          </tr>
        </table>
      </div></td>
  </tr>
  <tr>
    <td><img src="images/panel_btm.jpg" alt="" width="1002" height="18" /></td>
  </tr>
</table>
{include file="_footer.tpl"} 