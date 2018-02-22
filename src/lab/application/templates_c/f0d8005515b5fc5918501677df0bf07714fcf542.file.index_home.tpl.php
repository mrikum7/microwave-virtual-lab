<?php /* Smarty version Smarty3-RC3, created on 2012-05-20 10:58:14
         compiled from "/home4/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/index_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7916830464fb91496e1bba4-10952896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0d8005515b5fc5918501677df0bf07714fcf542' => 
    array (
      0 => '/home4/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/index_home.tpl',
      1 => 1290248949,
    ),
  ),
  'nocache_hash' => '7916830464fb91496e1bba4-10952896',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_stripslash')) include '/home4/sandeep4/public_html/websupplements/projects/virtual_labs/application/components/NSmarty/smarty/plugins/modifier.stripslash.php';
?><?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
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
		window.location="<?php echo $_smarty_tpl->getVariable('APP_URL')->value;?>
index.php";
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
//                 $.post( "<?php echo $_smarty_tpl->getVariable('APP_URL')->value;?>
ajax_newsletter.php", $("#newsletter").serialize(), 
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
                <td valign="top">
                <div class="panel_content1">
                  <div id="welcome1">
                    <h1 class="heading1"><?php echo $_smarty_tpl->getVariable('arr')->value['content_title'];?>
</h1>
                    <div class="content"> <?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('arr')->value['content_description']);?>
</div>
                  </div>
                </div>
                
                </td>
                <td width="10">&nbsp;</td>
                <td width="521" valign="top">
                </td>
              </tr>
            </table>
          </div>
          <div class="gap2">&nbsp;</div>
          <div class="rows">
            <table width="944" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="640" valign="top"><div class="panel_content">
                  <h1 class="heading2">Welcome to Sakshat Virtual Labs!</h1>
                  <div class="content">
                    <div id="slider2">
                    <div id="slider_content">
                    <div id="slider">
                    
  <ul>
    <li>
    	<div id="left_col"><img src="images/01.jpg" width="427" height="223"  /></div>
        <div id="right_col">
        	<strong>Simulation Title Here</strong>
            <div class="content">Hype provides presents a smart organized way display your website. Lorem ipsum dolor sit amet, consect adipiscing elit. Hype provides presents a smart organized...<br /><br />
            <div class="readmore_btn"><a href="#">Read More</a></div>
        	</div>
        </div>
    </li>
    <li>
    	<div id="left_col"><img src="images/02.jpg" width="427" height="223"  /></div>
        <div id="right_col">
        	<strong>Simulation Title Here</strong>
            <div class="content">Hype provides presents a smart organized way display your website. Lorem ipsum dolor sit amet, consect adipiscing elit. Hype provides presents a smart organized...<br /><br />
            <div class="readmore_btn"><a href="#">Read More</a></div>
        	</div>
        </div>
    </li>
    <li>
    	<div id="left_col"><img src="images/03.jpg" width="427" height="223"  /></div>
        <div id="right_col">
        	<strong>Simulation Title Here</strong>
            <div class="content">Hype provides presents a smart organized way display your website. Lorem ipsum dolor sit amet, consect adipiscing elit. Hype provides presents a smart organized...<br /><br />
            <div class="readmore_btn"><a href="#">Read More</a></div>
        	</div>
        </div>
    </li>
    <li>
    	<div id="left_col"><img src="images/02.jpg" width="427" height="223"  /></div>
        <div id="right_col">
        	<strong>Simulation Title Here</strong>
            <div class="content">Hype provides presents a smart organized way display your website. Lorem ipsum dolor sit amet, consect adipiscing elit. Hype provides presents a smart organized...<br /><br />
            <div class="readmore_btn"><a href="#">Read More</a></div>
        	</div>
        </div>
    </li>
  </ul>
</div></div>
                    </div>
                  </div>
                </div></td>
                <td width="10">&nbsp;</td>
                <td width="294" valign="top"><div id="latest_news">
                      <h1><div class="heading3">News &amp; Events</div></h1>
                      <div id="news_content">
                  
                        <div class="content">
                            <div class="news_list"><?php echo $_smarty_tpl->getVariable('news')->value[0]['news_title'];?>
 <a class="blue" href="#">read more</a></div>
                       		<div class="news_list"><?php echo $_smarty_tpl->getVariable('news')->value[1]['news_title'];?>
 <a class="blue" href="#">read more</a></div>
                            <div class="news_list"><?php echo $_smarty_tpl->getVariable('news')->value[2]['news_title'];?>
 <a class="blue" href="#">read more</a></div>
                            <div class="news_list"><?php echo $_smarty_tpl->getVariable('news')->value[3]['news_title'];?>
 <a class="blue" href="#">read more</a></div>
                        </div>
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
                <div class="content">
                  <ul>
                    <li>
                      <div class="date">By <a class="blue" href="#">Admin</a> on 8 Oct, 2010</div>
                      <div class="blog_left_col"><img class="thumb" src="images/blog_pic.jpg" alt="" width="46" height="46" /></div>
                      <div class="blog_right_col">Lorem ipsum dolor sit amet.Maecenas a orci a massa<br />
                        [<a href="#" class="black">Continue reading</a>]</div>
                    </li>
                    
                  </ul>
                  <ul>
                  <li>
                      <div class="date">By <a class="blue" href="#">Admin</a> on the 7 Oct, 2010</div>
                      <div class="blog_left_col"><img class="thumb" src="images/blog_pic.jpg" alt="" width="46" height="46" /></div>
                      <div class="blog_right_col">Lorem ipsum dolor sit amet.Maecenas a orci a massa<br />
                        [<a href="#" class="black">Continue reading</a>]</div>
                    </li>
                  </ul>
                </div>
              </div>
      
            </div>
            <div id="newsletter">
              <div class="panel_content">
                <h1 class="heading1"><?php echo $_smarty_tpl->getVariable('newsletter')->value['content_title'];?>
</h1>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><div class="content"><?php echo $_smarty_tpl->getVariable('newsletter')->value['content_description'];?>

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
<?php $_template = new Smarty_Internal_Template("_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>