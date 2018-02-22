{include file="_headerAdmin.tpl"}
<script>	
		$(document).ready(function() {
				$("#Addnews").validationEngine()
			
		});
		
	</script>
    <script type="text/javascript" src="../lib/ckeditor/ckeditor.js"></script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="add_news_exec.php" method="post" name="Addnews" id="Addnews">
    <table width="100%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Manage News</h2></td>
        </tr>
         <tr>
<td colspan="2" align="center" class="error">{$getMsg}</td>
</tr>
        <tr>
          <td><strong>News Title :</strong></td>
          <td><label>
            <input name="news_title" type="text" class="validate[required] textbox" id="news_title" />
            </label></td>
        </tr>
        
         <tr>
          <td><strong>Sort Order :</strong></td>
          <td><label>
              <input name="sort_order" type="text" class="validate[required] textbox" id="sort_order" />
            </label></td>
        </tr>
        
        <tr>
          <td valign="top"><strong>News Description :</strong></td>
          <td><label>
              <textarea name="news_description" class="validate[required]" id="CKEditor1"></textarea>              
              </label></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td><label>
              <input name="button" type="submit" id="button" value="Submit" />
            </label></td>
        </tr>
      </table>
      </form>
     </td>
  </tr>
</table>
<br />
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="grid">
                  <tr align="center">
                  <td class="hd" align="left"><a href="?order_by=news_title&dir={$news_title}{$queryString}" class="black">News Title</a></td>
                  <td class="hd" align=""><a href="?order_by=news_date&dir={$news_date}{$queryString}" class="black">Last Update</a></td>                  <td class="hd">Edit</td>
                   <td class="hd">Delete</td>
                  </tr>    
            {foreach from=$news item=employees}               
                  <tr class="{cycle values = 'panel_0,panel_1'}">
                     <td align="left">{$employees.news_title}</td>
                     <td  align="center">{$employees.news_date}</td>
                     <td align="center" ><a href="update_news-{$employees.news_id}.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
                     <td align="center" ><a href="del_news-{$employees.news_id}.html"><img src="images/icon_delete.png" alt=" " width="16" height="16" /></a></td>
                   </tr>
            {foreachelse}
                        <tr>
                          <td colspan="5" class="panel_1" align="center">No Record Found.</td>
                        </tr>
                        {/foreach}
                        <tr>
                          <td colspan="5" align="center" class="hd">{include file="pager.tpl"}</td>
                        </tr>
          </table>      
      </td>
  </tr>
</table>
{include file="_footerAdmin.tpl"}