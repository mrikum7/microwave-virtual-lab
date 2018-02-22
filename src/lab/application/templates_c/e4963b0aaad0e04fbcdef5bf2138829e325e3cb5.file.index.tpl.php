<?php /* Smarty version Smarty3-RC3, created on 2018-02-22 12:55:18
         compiled from "/var/www/application/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10833609115a8e705ecb1f27-72589377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4963b0aaad0e04fbcdef5bf2138829e325e3cb5' => 
    array (
      0 => '/var/www/application/templates/index.tpl',
      1 => 1519197094,
    ),
  ),
  'nocache_hash' => '10833609115a8e705ecb1f27-72589377',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_stripslash')) include '/var/www/application/components/NSmarty/smarty/plugins/modifier.stripslash.php';
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
                <td valign="top"><div class="panel_content">
                  <div id="welcome">
                    <h1 class="heading1"><?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('arr')->value['content_title']);?>
</h1>
                    <div class="content"> <?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('arr')->value['content_description']);?>
</div>
                    
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
                        <img src="<?php echo @UPLOADS_PROMO_SPACES_URL;?>
<?php echo $_smarty_tpl->getVariable('img')->value[0]['image_name'];?>
" width="502" height="310" /></div>
                        <div style="position: absolute; left: 500px; display: block;">
                        <img src="<?php echo @UPLOADS_PROMO_SPACES_URL;?>
<?php echo $_smarty_tpl->getVariable('img')->value[1]['image_name'];?>
" width="502" height="310" /></div>
                        <div style="position: absolute; left: 1000px; display: block;">
                        <img src="<?php echo @UPLOADS_PROMO_SPACES_URL;?>
<?php echo $_smarty_tpl->getVariable('img')->value[2]['image_name'];?>
" width="502" height="310" /></div>
                        <div style="position: absolute; left: -500px; display: block;">
                        <img src="<?php echo @UPLOADS_PROMO_SPACES_URL;?>
<?php echo $_smarty_tpl->getVariable('img')->value[3]['image_name'];?>
" width="502" height="310" /></div>
                        <div style="position: absolute; left: -500px; display: block;">
                        <img src="<?php echo @UPLOADS_PROMO_SPACES_URL;?>
<?php echo $_smarty_tpl->getVariable('img')->value[4]['image_name'];?>
" width="502" height="310" /></div>
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
  <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['name'] = 'fe_index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('featured_experiment')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['fe_index']['total']);
?>
    <li>
    	<div id="left_col"><img src="<?php echo @UPLOADS_EXPERIMENTS_URL;?>
<?php echo $_smarty_tpl->getVariable('featured_experiment')->value[$_smarty_tpl->getVariable('smarty')->value['section']['fe_index']['index']]['experiment_img'];?>
" alt="" width="427" height="223"  /></div>
        <div id="right_col">
        	<strong><?php echo $_smarty_tpl->getVariable('featured_experiment')->value[$_smarty_tpl->getVariable('smarty')->value['section']['fe_index']['index']]['experiment_title'];?>
</strong>
            <div class="content"><?php echo $_smarty_tpl->getVariable('featured_experiment')->value[$_smarty_tpl->getVariable('smarty')->value['section']['fe_index']['index']]['experiment_description'];?>
...<br /><br />
            <div class="readmore_btn"><a href="tab-<?php ob_start();?><?php echo $_smarty_tpl->getVariable('featured_experiment')->value[$_smarty_tpl->getVariable('smarty')->value['section']['fe_index']['index']]['experiment_id'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
.html">Read More</a></div><br />&nbsp;
        	</div>
        </div>
    </li>
   <?php endfor; endif; ?>
  </ul>
</div></div>
                    </div>
                  </div>
                </div></td>
                <td width="10">&nbsp;</td>
                <td width="294" valign="top"><div id="latest_news">
                      <h1><div class="heading3">News &amp; Events</div></h1>
                      <div id="news_content">
                   <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['news']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['name'] = 'news';
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('news')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total']);
?>
                        <div class="content">
                            <div class="news_list"><?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['news_title']);?>
 <a href="news-<?php echo $_smarty_tpl->getVariable('news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['news_id'];?>
.html" class="black">read more</a></div>
                       		
                        </div>
                      <?php endfor; endif; ?>
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
                 <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['category']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['name'] = 'category';
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('items')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['total']);
?>
                <div class="content">
                  <ul>
                    <li>
                      <div class="date">By <a class="blue" href="#">Admin</a> <?php echo $_smarty_tpl->getVariable('items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['date'];?>
</div>
                      <div class="blog_left_col"><img class="thumb" src="images/blog_pic.jpg" alt="" width="46" height="46" /></div>
                      <div class="blog_right_col"><?php echo $_smarty_tpl->getVariable('items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['title'];?>
<br />
                        [<a href="<?php echo $_smarty_tpl->getVariable('items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['link'];?>
" class="black">Continue reading</a>]</div>
                    </li>
                    
                  </ul>
                  <ul>
                  <li>
                      <div class="date">By <a class="blue" href="#">Admin</a> <?php echo $_smarty_tpl->getVariable('items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['date'];?>
</div>
                      <div class="blog_left_col"><img class="thumb" src="images/blog_pic.jpg" alt="" width="46" height="46" /></div>
                      <div class="blog_right_col"><?php echo $_smarty_tpl->getVariable('items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['title'];?>
<br />
                        [<a href="<?php echo $_smarty_tpl->getVariable('items')->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['link'];?>
" class="black">Continue reading</a>]</div>
                    </li>
                  </ul>
                </div>
                <?php endfor; endif; ?>
              </div>
      
            </div>
            <div id="newsletter">
              <div class="panel_content">
                <h1 class="heading1"><?php echo $_smarty_tpl->getVariable('newsletter')->value['content_title'];?>
</h1>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><div class="content"><?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('newsletter')->value['content_description']);?>

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