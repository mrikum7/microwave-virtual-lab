<?php /* Smarty version Smarty3-RC3, created on 2012-05-20 04:28:32
         compiled from "/home4/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/aboutus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18360277044fb8b94060c827-90187386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad2a09cc0662a45969f3a544806bc4474f758633' => 
    array (
      0 => '/home4/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/aboutus.tpl',
      1 => 1287636691,
    ),
  ),
  'nocache_hash' => '18360277044fb8b94060c827-90187386',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_stripslash')) include '/home4/sandeep4/public_html/websupplements/projects/virtual_labs/application/components/NSmarty/smarty/plugins/modifier.stripslash.php';
?><?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<a name="top"></a>
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
                <td><h1> <?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('arr')->value['content_title']);?>
</h1></td>
                <td width="6"><img src="images/heading_r.jpg" alt="" width="6" height="43" /></td>
              </tr>
            </table>
          </div>
          <div class="gap"></div>
          <div class="rows">
            <div class="panel_content2">           
              <div class="content"> <?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('arr')->value['content_description']);?>
 <br />
                  <div class="top"><img src="images/arrow_top.png" alt="" /><a href="#top" class="orange">Top</a></div>
              </div>
              
              <div class="gap3"> 
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