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
                <td><h1>News & Events</h1></td>
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
                      
                    </div>
                  <div class="content">
                    {section name=location loop=$news}
                      <div class="contributors" style="padding-top:0;">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                          
                            <td valign="top"><span class="blue_text">
                            {$news[location].news_title}
                            </span><br />
                              <br />
                              {$news[location].news_description}
                               </td>
                          </tr>
                        </table>
                      </div>
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