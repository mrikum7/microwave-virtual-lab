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
                <td><h1>FAQ's</h1></td>
                <td width="6"><img src="images/heading_r.jpg" alt="" width="6" height="43" /></td>
              </tr>
            </table>
          </div>
          <div class="gap">&nbsp;</div>
          <div class="rows">
         {section name=location loop=$arr}
            <div class="{cycle values='panel_content2,panel_content'}">
              <div>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><h1 class="heading1">{$arr[location].subject_name}</h1></td>
                    <td width="70"><img src="{$smarty.const.UPLOADS_SUBJECTS_URL}{$arr[location].subject_thumbnail}" alt="" width="70" height="70" class="icon" /></td>
                  </tr>
                </table>
              </div>
              <div class="content">
              {$faq = $arr[location].faqs}
              {section name=location1 loop=$faq}
                <div class="faq_grid1">{$faq[location1].faq_question|stripslash}</div>
                <div class="faq_grid2">{$faq[location1].faq_answer|stripslash}</div>
                 {/section}
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
