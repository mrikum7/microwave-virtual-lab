<?php /* Smarty version Smarty3-RC3, created on 2012-05-20 04:13:23
         compiled from "/home4/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21342998224fb8b5b3631c94-13431679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cf1e59f4fa63252a97630bd8ef16465e95b5aac' => 
    array (
      0 => '/home4/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/tab.tpl',
      1 => 1309767414,
    ),
  ),
  'nocache_hash' => '21342998224fb8b5b3631c94-13431679',
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
				$("#feedback").validationEngine()
			
		});
		
	</script>
<table width="1002" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="images/panel_top.jpg" alt="" width="1002" height="18" /></td>
  </tr>
  <tr>
    <td id="panel_bg">
    <div id="container">    
        <div class="heading5"><?php echo $_smarty_tpl->getVariable('experiment_name')->value;?>
</div>
        <div class="gap"></div>
        <div class="rows">
          <div id="TabbedPanels1" class="TabbedPanels">
            <ul class="TabbedPanelsTabGroup">
              <li class="TabbedPanelsTab" tabindex="0">
                <div><img src="images/icon_theory.png" alt="" width="40" height="39" /></div>
                Theory</li>
              <li class="TabbedPanelsTab" tabindex="0">
                <div><img src="images/icon_procedure.png" alt="" width="40" height="39" /></div>
                Procedure</li>
              
              <li class="TabbedPanelsTab" tabindex="0">
                <div><img src="images/icon_simulator.png" alt="" width="40" height="39" /></div>
                Simulator</li>
                <li class="TabbedPanelsTab" tabindex="0">
                <div><img src="images/icon_evaluation.png" alt="" width="40" height="39" /></div>
                Self-Evaluation</li>
             <!-- <li class="TabbedPanelsTab" tabindex="0">
                <div><img src="images/icon_assignment.png" alt="" width="40" height="39" /></div>
                Assignment</li>-->
              <li class="TabbedPanelsTab" tabindex="0">
                <div><img src="images/icon_ref.png" alt="" width="40" height="39" /></div>
                Reference</li>
              <li class="TabbedPanelsTab" tabindex="0">
                <div><img src="images/icon_feedback.png" alt="" width="40" height="39" /></div>
                Feedback</li>
                <li class="TabbedPanelsTab" tabindex="0">
                <div><img src="images/icon_assignment.png" alt="" width="40" height="39" /></div>
                Manuals</li>
                
                <li class="TabbedPanelsTab" tabindex="0">
                <div><img src="images/index.png" alt="" width="40" height="39" /></div>
                Experiment Video</li>
                
            </ul>
            <div class="TabbedPanelsContentGroup">
              <div class="TabbedPanelsContent">
                <div class="panel_content">
                  <div class="content">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><div class="bg_white2">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td><div class="tab_left_col">
                                    <ul class="left_links">
                                    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['location']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['name'] = 'location';
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('arr')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total']);
?>
                                      <li ><a href="#<?php echo $_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location']['index']]['theory_title'];?>
"<?php if ($_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location']['index']]['theory_title']=="#Introduction"){?>class="active_link" <?php }?>><?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location']['index']]['theory_title']);?>
</a></li>
                                     <?php endfor; endif; ?>
                                    </ul>
                                  </div>
                                  <div class="tab_right_col">
                                    <div class="tab_content">
                                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td><a name="top" id="top"></a>
                                        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['location1']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['name'] = 'location1';
$_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('arr')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['total']);
?>
                                          <h1 class="heading4"><a name="<?php echo $_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location1']['index']]['theory_title'];?>
"></a><?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location1']['index']]['theory_title']);?>
</h1>
                                            <div class="content"><?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location1']['index']]['theory_description']);?>
. <br />
                                              <div class="top"><img src="images/arrow_top.png" alt="" /><a href="#top" class="orange">Top</a></div>
                                            </div>
                                            <div class="gap">&nbsp;</div>
                                          <?php endfor; endif; ?>
											</td>
                                        </tr>
                                      </table>
                                    </div>
                                  </div></td>
                              </tr>
                            </table>
                          </div></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              
              <div class="TabbedPanelsContent">
                <div class="panel_content">
                  <div class="content">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><div class="bg_white2">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td><div class="tab_left_col">
                                    <ul class="left_links">
                                    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['location2']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['name'] = 'location2';
$_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('ars')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['location2']['total']);
?>
                                      <li ><a href="#<?php echo $_smarty_tpl->getVariable('ars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location2']['index']]['procedure_title'];?>
"><?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('ars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location2']['index']]['procedure_title']);?>
</a></li>
                                      <?php endfor; endif; ?>
                                    </ul>
                                  </div>
                                  
                                  <div class="tab_right_col">
                                    <div class="tab_content">
                                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td><a name="top1" id="top1"></a>
                                          <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['location3']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['name'] = 'location3';
$_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('ars')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['location3']['total']);
?>
                                          <a name="<?php echo $_smarty_tpl->getVariable('ars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location3']['index']]['procedure_title'];?>
"></a>
                                          <h1 class="heading4"><?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('ars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location3']['index']]['procedure_title']);?>
</h1>
                                            <div class="content">
                                              <?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('ars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location3']['index']]['procedure_description']);?>

                                              <br />
                                              <div class="top"><img src="images/arrow_top.png" alt="" /><a href="#top1" class="orange">Top</a></div>
                                            </div>
                                            <div class="gap">&nbsp;</div>
                                            <div class="gap">&nbsp;</div>
                                            <div class="gap">&nbsp;</div>
                                            <?php endfor; endif; ?></td>
                                        </tr>
                                      </table>
                                    </div>
                                  </div></td>
                              </tr>
                            </table>
                          </div></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              
              <div class="TabbedPanelsContent">
                <div class="panel_content">
                  <div class="content">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><div class="bg_white2">
                            
                            <table border=1 width="100%">
                            <tr>
                            <td align="left">
                            <h3>emGine Environment - 3D Electromagnetic Field Simulator</h3>
                            <br /><p> The emGine Environment(TM) is a full-wave 3D electromagnetic field simulation environment solving Maxwell's equations in time-domain. It is used for the modeling of high-frequency electromagnetic field in microwave circuits, antennas, resonators, microwave filters, hollow waveguides, etc.  </p>
<br />
<p>
<strong>Download emGine Environment - 3D Electromagnetic (EM) Field Simulator :  <a href="<?php echo @UPLOADS_SIMULATORS_FLASH_URL;?>
emGine_0.9.3a1.exe" style="text-decoration:none; color:#FA7E14;"><img src="images/download_icon.gif" /> CLICK HERE</a></strong>

<br /><br />
If above given link is not working then you can get same software from  <a href="http://www.petr-lorenz.com/emgine/index.php?option=com_content&view=article&id=45&Itemid=55" style="color:#069;" target="_blank">http://www.petr-lorenz.com/emgine</a>.
</p>
</td>
</tr>
                            </table>
                 <table width="100%">
                    <tr>
                    <td colspan="2"><h3>Instalation Details</h3></td>
                    </tr>
                    <tr>
                    <td align="center" valign="top" width="10%"><strong>Step 1</strong></td>
                    <td align="left" width="25%"><img src="uploads/simulators_flash/step1.JPG" width="300"/></td>
                    <td align="center" valign="top" width="10%"><strong>Step 2</strong></td>
                    <td align="left" width="25%"><img src="uploads/simulators_flash/step2.JPG" width="300" /></td>
                    </tr>
                    <tr><td>&nbsp;</td></tr>
                    <tr>
                    <td align="center" valign="top"><strong>Step 3</strong></td>
                    <td align="left"><img src="uploads/simulators_flash/step4.JPG" width="300" /></td>
                    <td align="center" valign="top"><strong>Step 4</strong></td>
                    <td align="left"><img src="uploads/simulators_flash/step5.JPG" width="300" /></td>
                    </tr>
                    <tr><td>&nbsp;</td></tr>
                    <tr>
                     <td align="center" valign="top"><strong>Step 5</strong></td>
                    <td align="left"><img src="uploads/simulators_flash/step6.JPG" width="300" /></td>
                    </tr>
                    <tr><td>&nbsp;</td></tr>
                </table>
                <br />
                <?php if ($_smarty_tpl->getVariable('experiment_simulator')->value!=''){?>
                <p><h3>Sample Project File: <a href="download.php?file=<?php echo $_smarty_tpl->getVariable('experiment_simulator')->value;?>
" style="text-decoration:none; color:#069;">Download here</a></h3></p>
                <?php }?>
                <br />
                <table width="100%">
                  <tr><td colspan="2" align="center"><h3>Experiments Sample Images</h3></td></tr>
                  <tr><td>&nbsp;</td></tr>
                  <td width="30%" align="center"><img src="uploads/simulators_flash/ex12port01.png" width="300" /></td>
                  <td width="30%" align="center"><img src="uploads/simulators_flash/ex12port02.png" width="300" /></td>
                  </tr> <tr><td>&nbsp;</td></tr>
                  <tr>
                  <td width="30%" align="center"><img src="uploads/simulators_flash/thumb_emgine_090a9_01.jpg" width="300" /></td>
                  <td width="30%" align="center"><img src="uploads/simulators_flash/thumb_emgine_examples_01.jpg" width="300" /></td>
                  </tr> <tr><td>&nbsp;</td></tr>
                  <tr>
              <td width="30%" align="center"><img src="uploads/simulators_flash/emGine_scMain_thumb.png" width="300"/></td>
                  <td width="30%" align="center"><img src="uploads/simulators_flash/thumb_emgine_result1_01.jpg" width="300" /></td>
                  </tr> <tr><td>&nbsp;</td></tr>
                 
                </table>                          
                     </div>
                     </td>
                      </tr>
               </table> 
                  </div>
                </div>
              </div>
              
              <div class="TabbedPanelsContent">
                <div class="panel_content">
                  <div class="content">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><div class="bg_white2">
                           <a style="text-decoration:none" href="self_eval.php?experiment_id=<?php echo $_smarty_tpl->getVariable('experiment_id')->value;?>
" target="_blank"> <img src="images/icon_comments.png"/> CLICK HERE FOR SELF EVALUATION</a></div>                         
                           </td>
                      </tr>
                    </table>
                   
                  </div>
                </div>
              </div>
              
              
              
              
              <!--<div class="TabbedPanelsContent">
                <div class="panel_content">
                  <div class="content">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td>
                        <div class="bg_white2">
                           <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['location4']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['name'] = 'location4';
$_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('ary')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['location4']['total']);
?>
                        <div class="bg_white2">
                            <div class="faq_grid1"><?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('ary')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location4']['index']]['assignment_title']);?>
.</div>
                            <div class="faq_grid2">
                              <div align="center"><img src="<?php echo @UPLOADS_ASSIGNMENT_URL;?>
<?php echo $_smarty_tpl->getVariable('ary')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location4']['index']]['assignment_img'];?>
" alt="" width="140" height="118" /></div>
                            </div>
                          </div>
                          <?php endfor; endif; ?>
                          </div></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>-->
              
              <div class="TabbedPanelsContent">
                <div class="panel_content">
                  <div class="content">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><div class="bg_white2">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td><div class="tab_left_col">
                                    <ul class="left_links">
                                    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['location5']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['name'] = 'location5';
$_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('ref')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['location5']['total']);
?>
                                      <li ><a href="#<?php echo $_smarty_tpl->getVariable('ref')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location5']['index']]['reference_title'];?>
"><?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('ref')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location5']['index']]['reference_title']);?>
</a></li>
                                    <?php endfor; endif; ?>
                                    </ul>
                                  </div>
                                  <div class="tab_right_col">
                                    <div class="tab_content">
                                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td>
                                          <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['location6']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['name'] = 'location6';
$_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('ref')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['location6']['total']);
?>
                                          <h1 class="heading4"><a name="<?php echo $_smarty_tpl->getVariable('ref')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location6']['index']]['reference_title'];?>
"></a><?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('ref')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location6']['index']]['reference_title']);?>
</h1>
                                            <div class="content">
                                              <ul class="list">
                                                <?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('ref')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location6']['index']]['reference_description']);?>

                                              </ul>
                                              <br />
                                              <br />
                                            </div>
                                            <div class="gap">&nbsp;</div>
                                            
                                            
                                            <div class="gap">&nbsp;</div>
                                            <?php endfor; endif; ?>
                                            </td>
                                        </tr>
                                      </table>
                                    </div>
                                  </div></td>
                              </tr>
                            </table>
                          </div></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <form method="post" action="tab_exec.php" name="feedback" id="feedback">
                <div class="TabbedPanelsContent">
                  <div class="panel_content">
                    <div class="content">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><div class="bg_white2">
                              <table width="100%" border="0" cellspacing="12" cellpadding="0">
                                <tr>
                                  <td><h1 class="heading4">Virtual Lab feedback</h1>
                                    <div class="content"> Welcome to the Sakshat Amrita Virtual Lab online feedback system. Thanks for taking the time to share your feedback. We'll use the information you provide below to improve our virtual labs. </div></td>
                                </tr>
                                <tr>
                                  <td align="right">(<span class="red_asterisk">*</span>) required fields</td>
                                </tr>
                                <tr>
                                  <td valign="top"><table width="60%" border="0" cellspacing="14">
                                      <tr>
                                        <td width="40%" valign="top"><strong>Name of the student <span class="red_asterisk">*</span></strong></td>
                                        <td width="60%"><input name="student_name" type="text" class="validate[required] textbox2" id="student_name" /></td>
                                      </tr>
                                      <tr>
                                        <td width="40%"><strong>Department<span class="red_asterisk">*</span></strong></td>
                                        <td width="60%"><input name="department" type="text" class="validate[required] textbox2" id="department" /></td>
                                      </tr>
                                    </table></td>
                                </tr>
                              </table>
                            </div></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td><div class="bg_white2">
                              <table width="100%" border="0" cellspacing="12" cellpadding="0">
                                <tr>
                                  <td valign="top"><h1 class="heading4">Lab Details</h1></td>
                                </tr>
                                <tr>
                                  <td valign="top"><table width="60%" border="0" cellspacing="14">
                                      <tr>
                                        <td width="40%" valign="top"><strong>Name of the Virtual Lab<span class="red_asterisk">*</span></strong></td>
                                        <td width="60%"><input name="lab_name" type="text" class="validate[required] textbox1" id="lab_name" /></td>
                                      </tr>
                                      <tr>
                                        <td width="40%" valign="top"><strong>Type of Virtual Lab <span class="red_asterisk">*</span></strong></td>
                                        <td width="60%" valign="top"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                                            <tr>
                                              <td><input name="lab_type" type="radio" id="lab_type" value="Simulation" checked="checked" />
                                                Simulation</td>
                                            </tr>
                                            <tr>
                                              <td><input type="radio" name="lab_type" id="lab_type" value="Measurement" />
                                                Measurement</td>
                                            </tr>
                                            <tr>
                                              <td><input type="radio" name="lab_type" id="lab_type" value="Remote Trigger" />
                                                Remote trigger</td>
                                            </tr>
                                          </table></td>
                                      </tr>
                                    </table></td>
                                </tr>
                              </table>
                            </div></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td><div class="bg_white2">
                              <table width="100%" border="0" cellspacing="12" cellpadding="0">
                                <tr>
                                  <td valign="top"><h1 class="heading4">Please tell your agreement with the following statements</h1></td>
                                </tr>
                                <tr>
                                  <td valign="top"><table width="100%" border="0" cellspacing="14">
                                      <tr>
                                        <td colspan="2" valign="top"><table width="90%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td width="50%" class="heading_grid">&nbsp;</td>
                                              <td width="10%" align="center" class="heading_grid">Excellent</td>
                                              <td width="10%" align="center" class="heading_grid">Very Good</td>
                                              <td width="10%" align="center" class="heading_grid">Good</td>
                                              <td width="10%" align="center" class="heading_grid">Average</td>
                                              <td width="10%" align="center" class="heading_grid">Poor</td>
                                            </tr>
                                            <tr>
                                              <td width="50%" class="grid1">How do you rate the online performance of the experiment?</td>
                                              <td width="10%" align="center" class="grid1"><input name="online_performance" type="radio" id="online_performance" value="Excellent" checked="checked" /></td>
                                              <td width="10%" align="center" class="grid1"><input type="radio" name="online_performance" id="online_performance" value="Very Good" /></td>
                                              <td width="10%" align="center" class="grid1"><input type="radio" name="online_performance" id="online_performance" value="Good" /></td>
                                              <td width="10%" align="center" class="grid1"><input type="radio" name="online_performance" id="online_performance" value="Average" /></td>
                                              <td width="10%" align="center" class="grid1"><input type="radio" name="online_performance" id="online_performance" value="Poor" /></td>
                                            </tr>
                                            <tr>
                                              <td width="50%" class="grid2">To what extent did you have control over the interactions?</td>
                                              <td width="10%" align="center" class="grid2"><input name="interaction_control" type="radio" id="interaction_control" value="Excellent" checked="checked" /></td>
                                              <td width="10%" align="center" class="grid2"><input type="radio" name="interaction_control" id="interaction_control" value="Very Good" /></td>
                                              <td width="10%" align="center" class="grid2"><input type="radio" name="interaction_control" id="interaction_control" value="Good" /></td>
                                              <td width="10%" align="center" class="grid2"><input type="radio" name="interaction_control" id="interaction_control" value="Average" /></td>
                                              <td width="10%" align="center" class="grid2"><input type="radio" name="interaction_control" id="interaction_control" value="Poor" /></td>
                                            </tr>
                                            <tr>
                                              <td width="50%" class="grid1">To what degree was the actual lab environment simulated?</td>
                                              <td width="10%" align="center" class="grid1"><input name="degree_simulation" type="radio" id="degree_simulation" value="Excellent" checked="checked" /></td>
                                              <td width="10%" align="center" class="grid1"><input type="radio" name="degree_simulation" id="degree_simulation" value="Very Good" /></td>
                                              <td width="10%" align="center" class="grid1"><input type="radio" name="degree_simulation" id="degree_simulation" value="Good" /></td>
                                              <td width="10%" align="center" class="grid1"><input type="radio" name="degree_simulation" id="degree_simulation" value="Average" /></td>
                                              <td width="10%" align="center" class="grid1"><input type="radio" name="degree_simulation" id="degree_simulation" value="Poor" /></td>
                                            </tr>
                                            <tr>
                                              <td width="50%" class="grid2">The measurement and analysis of data was found to be easy</td>
                                              <td width="10%" align="center" class="grid2"><input name="measurement_analysis" type="radio" id="measurement_analysis" value="Excellent" checked="checked" /></td>
                                              <td width="10%" align="center" class="grid2"><input type="radio" name="measurement_analysis" id="measurement_analysis" value="Very Good" /></td>
                                              <td width="10%" align="center" class="grid2"><input type="radio" name="measurement_analysis" id="measurement_analysis" value="Good" /></td>
                                              <td width="10%" align="center" class="grid2"><input type="radio" name="measurement_analysis" id="measurement_analysis" value="Average" /></td>
                                              <td width="10%" align="center" class="grid2"><input type="radio" name="measurement_analysis" id="measurement_analysis" value="Poor" /></td>
                                            </tr>
                                            <tr>
                                              <td width="50%" class="grid1">The manuals were found to be helpful</td>
                                              <td align="center" class="grid1"><input name="helpful_manual" type="radio" id="helpful_manual" value="Excellent" checked="checked" /></td>
                                              <td align="center" class="grid1"><input type="radio" name="helpful_manual" id="helpful_manual" value="Very Good" /></td>
                                              <td align="center" class="grid1"><input type="radio" name="helpful_manual" id="helpful_manual" value="Good" /></td>
                                              <td align="center" class="grid1"><input type="radio" name="helpful_manual" id="helpful_manual" value="Average" /></td>
                                              <td align="center" class="grid1"><input type="radio" name="helpful_manual" id="helpful_manual" value="Poor" /></td>
                                            </tr>
                                            <tr>
                                              <td width="50%" class="grid2">The links provided were consistent with the objectives of the experiment</td>
                                              <td align="center" class="grid2"><input name="consistency_links" type="radio" id="consistency_links" value="Excellent" checked="checked" /></td>
                                              <td align="center" class="grid2"><input type="radio" name="consistency_links" id="consistency_links" value="Very Good" /></td>
                                              <td align="center" class="grid2"><input type="radio" name="consistency_links" id="consistency_links" value="Good" /></td>
                                              <td align="center" class="grid2"><input type="radio" name="consistency_links" id="consistency_links" value="Average" /></td>
                                              <td align="center" class="grid2"><input type="radio" name="consistency_links" id="consistency_links" value="Poor" /></td>
                                            </tr>
                                            <tr>
                                              <td width="50%" class="grid1">The results of experiment were easily interpretable</td>
                                              <td align="center" class="grid1"><input name="interpretable_results" type="radio" id="interpretable_results" value="Excellent" checked="checked" /></td>
                                              <td align="center" class="grid1"><input type="radio" name="interpretable_results" id="interpretable_results" value="Very Good" /></td>
                                              <td align="center" class="grid1"><input type="radio" name="interpretable_results" id="interpretable_results" value="Good" /></td>
                                              <td align="center" class="grid1"><input type="radio" name="interpretable_results" id="interpretable_results" value="Average" /></td>
                                              <td align="center" class="grid1"><input type="radio" name="interpretable_results" id="interpretable_results" value="Poor" /></td>
                                            </tr>
                                            <tr>
                                              <td width="50%" class="grid2">A clear understanding of the experiment and related topics was gained</td>
                                              <td align="center" class="grid2"><input name="clear_understanding" type="radio" id="clear_understanding" value="Excellent" checked="checked" /></td>
                                              <td align="center" class="grid2"><input type="radio" name="clear_understanding" id="clear_understanding" value="Very Good" /></td>
                                              <td align="center" class="grid2"><input type="radio" name="clear_understanding" id="clear_understanding" value="Good" /></td>
                                              <td align="center" class="grid2"><input type="radio" name="clear_understanding" id="clear_understanding" value="Average" /></td>
                                              <td align="center" class="grid2"><input type="radio" name="clear_understanding" id="clear_understanding" value="Poor" /></td>
                                            </tr>
                                          </table></td>
                                      </tr>
                                      <tr>
                                        <td width="100%" colspan="2" valign="top"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                                            <tr>
                                              <td><strong>How helpful do you feel the system is? </strong></td>
                                            </tr>
                                            <tr>
                                              <td><textarea name="experiment_helpful" cols="45" rows="5" class="validate[required] commentbox2" id="experiment_helpful"></textarea></td>
                                            </tr>
                                          </table></td>
                                      </tr>
                                      <tr>
                                        <td colspan="2" valign="top"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                                            <tr>
                                              <td><strong>Did you experience any problem? </strong></td>
                                            </tr>
                                            <tr>
                                              <td><textarea name="problem_experienced" cols="45" rows="5" class="validate[required] commentbox2" id="problem_experienced"></textarea></td>
                                            </tr>
                                          </table></td>
                                      </tr>
                                      <tr>
                                        <td colspan="2" valign="top"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                                            <tr>
                                              <td><strong>Is there anything you would like to tell us? </strong></td>
                                            </tr>
                                            <tr>
                                              <td><textarea name="tell_anything" cols="45" rows="5" class="validate[required] commentbox2" id="tell_anything"></textarea></td>
                                            </tr>
                                          </table></td>
                                      </tr>
                                      <tr>
                                        <td colspan="2" valign="top"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                                            <tr>
                                              <td><strong>Did you feel confident enough while performing the experiment?</strong></td>
                                            </tr>
                                            <tr>
                                              <td><input name="feel_confident" type="radio" id="feel_confident" value="Yes" checked="checked" />
                                                Yes</td>
                                            </tr>
                                            <tr>
                                              <td><input type="radio" name="feel_confident" id="feel_confident" value="No" />
                                                No</td>
                                            </tr>
                                            <tr>
                                              <td><input type="radio" name="feel_confident" id="feel_confident" value="Can't say" />
                                                Can't say</td>
                                            </tr>
                                          </table></td>
                                      </tr>
                                      <tr>
                                        <td colspan="2" valign="top"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                                            <tr>
                                              <td><strong>Was the experiment/process motivating enough? </strong></td>
                                            </tr>
                                            <tr>
                                              <td><input name="experiment_motivating" type="radio" id="experiment_motivating" value="Yes" checked="checked" />
                                                Yes</td>
                                            </tr>
                                            <tr>
                                              <td><input type="radio" name="experiment_motivating" id="experiment_motivating" value="No" />
                                                No</td>
                                            </tr>
                                            <tr>
                                              <td><input type="radio" name="experiment_motivating" id="experiment_motivating" value="Can't say" />
                                                Can't say</td>
                                            </tr>
                                          </table></td>
                                      </tr>
                                      <tr>
                                        <td colspan="2" valign="top"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                                            <tr>
                                              <td><strong>Did you go through the manual/ step by step method before performing the experiments live? </strong></td>
                                            </tr>
                                            <tr>
                                              <td><input name="go_through_manual" type="radio" id="go_through_manual" value="Yes" checked="checked" />
                                                Yes</td>
                                            </tr>
                                            <tr>
                                              <td><input type="radio" name="go_through_manual" id="go_through_manual" value="No" />
                                                No</td>
                                            </tr>
                                          </table></td>
                                      </tr>
                                      <tr>
                                        <td colspan="2" valign="top"><table width="90%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td width="80%" class="heading_grid">&nbsp;</td>
                                              <td width="10%" align="center" class="heading_grid">Yes</td>
                                              <td width="10%" align="center" class="heading_grid">No</td>
                                            </tr>
                                            <tr>
                                              <td width="80%" class="grid1">Did you get the feel “actual lab” while performing the experiments</td>
                                              <td width="10%" align="center" class="grid1"><input name="feel_actual_lab" type="radio" id="feel_actual_lab" value="Yes" checked="checked" /></td>
                                              <td width="10%" align="center" class="grid1"><input type="radio" name="feel_actual_lab" id="feel_actual_lab" value="No" /></td>
                                            </tr>
                                            <tr>
                                              <td width="80%" class="grid2">Did you feel the absence of an instructor? </td>
                                              <td width="10%" align="center" class="grid2"><input name="feel_absence_of_instructor" type="radio" id="feel_absence_of_instructor" value="Yes" checked="checked" /></td>
                                              <td width="10%" align="center" class="grid2"><input type="radio" name="feel_absence_of_instructor" id="feel_absence_of_instructor" value="No" /></td>
                                            </tr>
                                            <tr>
                                              <td width="80%" class="grid1">Could you run the experiments smoothly, i.e., without interruptions?</td>
                                              <td width="10%" align="center" class="grid1"><input name="run_experiments_smoothly" type="radio" id="run_experiments_smoothly" value="Yes" checked="checked" /></td>
                                              <td width="10%" align="center" class="grid1"><input type="radio" name="run_experiments_smoothly" id="run_experiments_smoothly" value="No" /></td>
                                            </tr>
                                            <tr>
                                              <td width="80%" class="grid2">Could you measure and analyze the data successfully? </td>
                                              <td width="10%" align="center" class="grid2"><input name="measure_analyse_data" type="radio" id="measure_analyse_data" value="Yes" checked="checked" /></td>
                                              <td width="10%" align="center" class="grid2"><input type="radio" name="measure_analyse_data" id="measure_analyse_data" value="No" /></td>
                                            </tr>
                                            <tr>
                                              <td width="80%" class="grid1">Did you follow the step by step method before running the live experiment?</td>
                                              <td align="center" class="grid1"><input name="follow_steps" type="radio" id="follow_steps" value="Yes" checked="checked" /></td>
                                              <td align="center" class="grid1"><input type="radio" name="follow_steps" id="follow_steps" value="No" /></td>
                                            </tr>
                                            <tr>
                                              <td width="80%" class="grid2">Could you compare your results with the given typical results?</td>
                                              <td align="center" class="grid2"><input name="result_comparison" type="radio" id="result_comparison" value="Yes" checked="checked" /></td>
                                              <td align="center" class="grid2"><input type="radio" name="result_comparison" id="result_comparison" value="No" /></td>
                                            </tr>
                                            <tr>
                                              <td width="80%" class="grid1">Do you think performing experiments through virtual labs are more challenging than the real lab experiments?</td>
                                              <td align="center" class="grid1"><input name="is_challenging" type="radio" id="is_challenging" value="Yes" checked="checked" /></td>
                                              <td align="center" class="grid1"><input type="radio" name="is_challenging" id="is_challenging" value="No" /></td>
                                            </tr>
                                          </table></td>
                                      </tr>
                                      <tr>
                                        <td colspan="2" valign="top"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                                            <tr>
                                              <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                              <td><strong>Specify three problems/difficulties you faced while performing the experiments? </strong></td>
                                            </tr>
                                            <tr>
                                              <td><textarea name="three_problems" cols="45" rows="5" class="validate[required] commentbox2" id="three_problems"></textarea></td>
                                            </tr>
                                          </table></td>
                                      </tr>
                                      <tr>
                                        <td colspan="2" valign="top"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                                            <tr>
                                              <td><strong>Give three interesting things about the experiments </strong></td>
                                            </tr>
                                            <tr>
                                              <td><textarea name="three_intereting_things" cols="45" rows="5" class="validate[required] commentbox2" id="three_intereting_things"></textarea></td>
                                            </tr>
                                          </table></td>
                                      </tr>
                                      <tr>
                                        <td colspan="2" valign="top"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                                            <tr>
                                              <td><strong>Do you think doing experiments through virtual lab gives scope for more innovative and creative research work? </strong></td>
                                            </tr>
                                            <tr>
                                              <td><input name="scope_of_innovative_research" type="radio" id="scope_of_innovative_research" value="Yes" checked="checked" />
                                                Yes</td>
                                            </tr>
                                            <tr>
                                              <td><input type="radio" name="scope_of_innovative_research" id="scope_of_innovative_research" value="No" />
                                                No
                                                <input name="experiment_id" type="hidden" id="experiment_id" value="<?php echo $_smarty_tpl->getVariable('experiment_id')->value;?>
" /></td>
                                            </tr>
                                          </table></td>
                                      </tr>
                                      <tr>
                                        <td colspan="2" valign="top"><input name="submit3" type="submit" class="submit_btn2" id="submit3" value="Submit" /></td>
                                      </tr>
                                    </table></td>
                                </tr>
                              </table>
                            </div></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </form>
              
              <div class="TabbedPanelsContent">
                <div class="panel_content">
                  <div class="content">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><div class="bg_white2">
                           <a style="text-decoration:none" href="download_manual.php?experiment_id=<?php echo $_smarty_tpl->getVariable('experiment_id')->value;?>
" target="_blank"> <img src="images/pdf.jpg"/> CLICK HERE FOR DOWNLOAD MANUAL</a></div>                         
                           </td>
                      </tr>
                    </table>
                   
                  </div>
                </div>
              </div>
              
              
              
              <div class="TabbedPanelsContent">
                <div class="panel_content">
                  <div class="content">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td>  
                        
                        <div class="bg_white2" align="center">
                           <?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('video')->value['experiment_video']);?>

                          </div>
                          
                          </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              
              
              
              
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