<?php /* Smarty version Smarty3-RC3, created on 2018-02-22 12:56:40
         compiled from "/var/www/application/templates/aboutus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3097157045a8e70b047ba26-38328780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2327f9d847b026bb44f0002bda73e349e842132b' => 
    array (
      0 => '/var/www/application/templates/aboutus.tpl',
      1 => 1519197094,
    ),
  ),
  'nocache_hash' => '3097157045a8e70b047ba26-38328780',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_stripslash')) include '/var/www/application/components/NSmarty/smarty/plugins/modifier.stripslash.php';
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