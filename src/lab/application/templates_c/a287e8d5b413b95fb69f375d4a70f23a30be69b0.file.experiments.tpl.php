<?php /* Smarty version Smarty3-RC3, created on 2012-05-21 00:32:15
         compiled from "/home4/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/experiments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17439853054fb9e16f4df539-12965617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a287e8d5b413b95fb69f375d4a70f23a30be69b0' => 
    array (
      0 => '/home4/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/experiments.tpl',
      1 => 1305617639,
    ),
  ),
  'nocache_hash' => '17439853054fb9e16f4df539-12965617',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
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
                      <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['name'] = 'index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('categoryCol1')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total']);
?>
                        <h1 class="heading4">
                        <?php echo $_smarty_tpl->getVariable('categoryCol1')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['category_name'];?>
</h1>
                        <div class="content"> <?php $_smarty_tpl->tpl_vars['experiment'] = new Smarty_variable($_smarty_tpl->getVariable('categoryCol1')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['experiments'], null, null);?>
                          <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['index2']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['name'] = 'index2';
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('experiment')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['total']);
?>
                          <div class="exp_list">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="30" valign="top"><span class="left_col2"><img src="images/icon_video.png" alt="" /></span></td>
                                <td valign="top"><a href="tab-<?php echo $_smarty_tpl->getVariable('experiment')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index2']['index']]['experiment_id'];?>
.html"><?php echo $_smarty_tpl->getVariable('experiment')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index2']['index']]['experiment_name'];?>
</a></td>
                              </tr>
                            </table>
                          </div>
                          <?php endfor; endif; ?> </div>
                          <br />
                        <br />
                        <?php endfor; endif; ?> </td>
                        
                      <td width="5%">&nbsp;</td>
                      <td width="30%" valign="top">
                       <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['name'] = 'index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('categoryCol2')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total']);
?>
                        <h1 class="heading4">
                        <?php echo $_smarty_tpl->getVariable('categoryCol2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['category_name'];?>
</h1>
                        <div class="content"> <?php $_smarty_tpl->tpl_vars['experiment'] = new Smarty_variable($_smarty_tpl->getVariable('categoryCol2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['experiments'], null, null);?>
                          <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['index2']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['name'] = 'index2';
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('experiment')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['total']);
?>
                          <div class="exp_list">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="30" valign="top"><span class="left_col2"><img src="images/icon_video.png" alt="" /></span></td>
                                <td valign="top"><a href="tab-<?php echo $_smarty_tpl->getVariable('experiment')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index2']['index']]['experiment_id'];?>
.html"><?php echo $_smarty_tpl->getVariable('experiment')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index2']['index']]['experiment_name'];?>
</a></td>
                              </tr>
                            </table>
                          </div>
                          <?php endfor; endif; ?> </div>
                        <br />
                        <br />
                        <?php endfor; endif; ?> </td>
                        
                      <td width="5%">&nbsp;</td>
                      <td width="30%" valign="top"> <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['name'] = 'index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('categoryCol3')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total']);
?>
                        <h1 class="heading4"><?php echo $_smarty_tpl->getVariable('categoryCol3')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['category_name'];?>
</h1>
                        <div class="content"> <?php $_smarty_tpl->tpl_vars['experiment'] = new Smarty_variable($_smarty_tpl->getVariable('categoryCol3')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['experiments'], null, null);?>
                          <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['index2']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['name'] = 'index2';
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('experiment')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['index2']['total']);
?>
                          <div class="exp_list">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="30" valign="top"><span class="left_col2"><img src="images/icon_video.png" alt="" /></span></td>
                                <td valign="top"><a href="tab-<?php echo $_smarty_tpl->getVariable('experiment')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index2']['index']]['experiment_id'];?>
.html"><?php echo $_smarty_tpl->getVariable('experiment')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index2']['index']]['experiment_name'];?>
</a></td>
                              </tr>
                            </table>
                          </div>
                          <?php endfor; endif; ?> </div>
                          <br />
                        <br />
                        <?php endfor; endif; ?> </td>
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
<?php $_template = new Smarty_Internal_Template("_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?> 