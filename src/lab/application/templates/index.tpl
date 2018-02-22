{include file="_header.tpl"}
<script>	
		$(document).ready(function() {
				$("#subscription").validationEngine()
			
		});
		
	</script>
    <script>
	function callSuccessFunction()
	{
		//alert("success executed");
//		window.location
		window.location="{$APP_URL}index.php";
	}
	function callFailFunction()
	{
		//alert("fail executed");
	}
		// If you want draggable notes, feel free to download the "DragResize" script
		// from my website http://www.twinhelix.com -- it's a nice addition :).
</script>
	</script>
    <script>	
		$(document).ready(function() {
				$("#subscription").validationEngine({
				ajaxSubmit: true,
					ajaxSubmitFile: "ajax_newsletter.php",
					inlineValidation: true,
					promptPosition: "topRight",
					ajaxSubmitMessage: "Thanks for subscribing!",
				success : false,
				failure : function() { }
			})
			//$.validationEngine.loadValidation("#date")
			//$.validationEngine.buildPrompt("#date","This is an example","error")	 		 // Exterior prompt build example
			//$.validationEngine.closePrompt(".formError",true) 							// CLOSE ALL OPEN PROMPTS
		});
	// JUST AN EXAMPLE OF CUSTOM VALIDATI0N FUNCTIONS : funcCall[validate2fields]
		function validate2fields(){
			if($("#email").val() =="" ){
				return false;
			}else{
				return true;
			}
		}
	</script>
     <script type="text/javascript"> 
	//$(document).ready(function(){ 
//							   
//       $("#newsletter").submit(function(){ 
//                 $.post( "{$APP_URL}ajax_newsletter.php", $("#newsletter").serialize(), 
//                function(data){ 
//						document.getElementById('newsletter_email').value=data.message;
//               }, 
//               "json"  
//           ); 
//       }); 
//   });
	function clearContents(field)
	{
		if(field.value == "Enter your email address")
			field.value="";
	}
   </script>
    <table width="1002" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="images/panel_top.jpg" alt="" width="1002" height="18" /></td>
      </tr>
      <tr>
        <td id="panel_bg"><div id="container">
          <div class="rows">
            <table width="944" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td valign="top"><div class="panel_content">
                  <div id="welcome">
                    <h1 class="heading1">{$arr.content_title|stripslash}</h1>
                    <div class="content"> {$arr.content_description|stripslash}</div>
                    
                    <div align="right"><a class="blue" href="index_home.php">Read More</a></div>
                  </div>
                </div>
                
                </td>
                <td width="10">&nbsp;</td>
                <td width="521" valign="top"><div id="slider1">
                  <div id="image_slider">
                    <div class="container">
                      <div style="width: 2000px; left: 0px;" class="slides">
                        <div style="position: absolute; left: 0px; display: block;">
                        <img src="{$smarty.const.UPLOADS_PROMO_SPACES_URL}{$img[0].image_name}" width="502" height="310" /></div>
                        <div style="position: absolute; left: 500px; display: block;">
                        <img src="{$smarty.const.UPLOADS_PROMO_SPACES_URL}{$img[1].image_name}" width="502" height="310" /></div>
                        <div style="position: absolute; left: 1000px; display: block;">
                        <img src="{$smarty.const.UPLOADS_PROMO_SPACES_URL}{$img[2].image_name}" width="502" height="310" /></div>
                        <div style="position: absolute; left: -500px; display: block;">
                        <img src="{$smarty.const.UPLOADS_PROMO_SPACES_URL}{$img[3].image_name}" width="502" height="310" /></div>
                        <div style="position: absolute; left: -500px; display: block;">
                        <img src="{$smarty.const.UPLOADS_PROMO_SPACES_URL}{$img[4].image_name}" width="502" height="310" /></div>
                      </div>
                      
                    </div>
                    <div class="pagination_panel">
                    <ul class="pagination">
                      <li class="active2"><a rel="1" href="javascript:void();">1</a></li>
                      <li class=""><a rel="2" href="javascript:void();">2</a></li>
                      <li class=""><a rel="3" href="javascript:void();">3</a></li>
                      <li class=""><a rel="4" href="javascript:void();">4</a></li>
                      <li class=""><a rel="5" href="javascript:void();">5</a></li>
                    </ul>
                   </div>
                  </div>
                </div></td>
              </tr>
            </table>
          </div>
          <div class="gap2">&nbsp;</div>
          <div class="rows">
            <table width="944" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="640" valign="top"><div class="panel_content">
                  <h1 class="heading1">Featured Experiments!</h1>
                  <div class="content">
                    <div id="slider2">
                    <div id="slider_content">
                    <div id="slider">
                    
  <ul>
  {section name=fe_index loop=$featured_experiment}
    <li>
    	<div id="left_col"><img src="{$smarty.const.UPLOADS_EXPERIMENTS_URL}{$featured_experiment[fe_index].experiment_img}" alt="" width="427" height="223"  /></div>
        <div id="right_col">
        	<strong>{$featured_experiment[fe_index].experiment_title}</strong>
            <div class="content">{$featured_experiment[fe_index].experiment_description}...<br /><br />
            <div class="readmore_btn"><a href="tab-{{$featured_experiment[fe_index].experiment_id}}.html">Read More</a></div><br />&nbsp;
        	</div>
        </div>
    </li>
   {/section}
  </ul>
</div></div>
                    </div>
                  </div>
                </div></td>
                <td width="10">&nbsp;</td>
                <td width="294" valign="top"><div id="latest_news">
                      <h1><div class="heading3">News &amp; Events</div></h1>
                      <div id="news_content">
                   {section name=news loop=$news}
                        <div class="content">
                            <div class="news_list">{$news[news].news_title|stripslash} <a href="news-{$news[news].news_id}.html" class="black">read more</a></div>
                       		
                        </div>
                      {/section}
                      </div>
                </div></td>
              </tr>
            </table>
          </div>
          <div class="gap2">&nbsp;</div>
          <div class="rows">
            <div id="promo_adv"><img src="images/promo_adv.jpg" alt="" width="328" height="225" /></div>
            <div id="latest_blog">
              <div class="panel_content">
                <h1 class="heading1">Blog Updates</h1>
                 {section name=category loop=$items}
                <div class="content">
                  <ul>
                    <li>
                      <div class="date">By <a class="blue" href="#">Admin</a> {$items[category].date}</div>
                      <div class="blog_left_col"><img class="thumb" src="images/blog_pic.jpg" alt="" width="46" height="46" /></div>
                      <div class="blog_right_col">{$items[category].title}<br />
                        [<a href="{$items[category].link}" class="black">Continue reading</a>]</div>
                    </li>
                    
                  </ul>
                  <ul>
                  <li>
                      <div class="date">By <a class="blue" href="#">Admin</a> {$items[category].date}</div>
                      <div class="blog_left_col"><img class="thumb" src="images/blog_pic.jpg" alt="" width="46" height="46" /></div>
                      <div class="blog_right_col">{$items[category].title}<br />
                        [<a href="{$items[category].link}" class="black">Continue reading</a>]</div>
                    </li>
                  </ul>
                </div>
                {/section}
              </div>
      
            </div>
            <div id="newsletter">
              <div class="panel_content">
                <h1 class="heading1">{$newsletter.content_title}</h1>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><div class="content">{$newsletter.content_description|stripslash}
                     <form action="" method="post" id="subscription" name="subscription">
                            <input name="email" type="text" class="validate[required,custom[email],length[0,100]] email" id="email" value="" maxlength="50" /> 
                            <input name="newslettersubmit" type="submit" class="submit_btn" id="newslettersubmit" value="Subscribe" />
                          </form>
     
                    </div></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div></td>
      </tr>
      <tr>
        <td><img src="images/panel_btm.jpg" alt="" width="1002" height="18" /></td>
      </tr>
    </table>
{include file="_footer.tpl"}