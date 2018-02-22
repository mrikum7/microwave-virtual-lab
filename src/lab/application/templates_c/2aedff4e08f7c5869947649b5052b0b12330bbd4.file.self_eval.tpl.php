<?php /* Smarty version Smarty3-RC3, created on 2011-05-05 03:10:53
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/self_eval.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20775368994dc25b8d2cc568-17845410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2aedff4e08f7c5869947649b5052b0b12330bbd4' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/self_eval.tpl',
      1 => 1304583015,
    ),
  ),
  'nocache_hash' => '20775368994dc25b8d2cc568-17845410',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<script type="text/javascript">
			function showReason(id,content)
			{
			document.getElementById(id).innerHTML=content;
			}
		</script>
<div id="demoWrapper">
  <h3 align="center">Self Evaluation</h3>
  <hr />
  <h5 id="status"></h5>
  <form id="demoForm" method="post" action="self_eval_exec.php" class="bbq">
    <div id="fieldWrapper"> 
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['name'] = 'index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('current_question')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <span class="step" id="first_<?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['question_id'];?>
">
      <table width="100%" border="0" cellpadding="4" cellspacing="4">
        <tr>
          <td colspan=3><strong>Question -</strong> <?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['question_title'];?>
</td>
          
        </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td width="15%" align="center">

          <input type="radio" id="answer1_<?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['question_id'];?>
" name="answer_<?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['question_id'];?>
" value="1"  onclick="showReason('showReason_<?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['question_id'];?>
','<?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['wrong_reason1'];?>
');" />
         </td>
          <td width="55%" align="left"><?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['answer1'];?>
</td>
          <td rowspan="4" align="left" valign="top">
          <div id="showReason_<?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['question_id'];?>
" class="aToolTip" style="color:red;"></div></td>
        </tr>
        <tr>
          <td align="center"><input type="radio" id="answer2_<?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['question_id'];?>
" name="answer_<?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['question_id'];?>
"  value="2" onclick="showReason('showReason_<?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['question_id'];?>
','<?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['wrong_reason2'];?>
');" />
          </td>
          <td align="left"><?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['answer2'];?>
</td>
        </tr>
        <tr>
          <td align="center"><input type="radio" id="answer3_<?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['question_id'];?>
" name="answer_<?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['question_id'];?>
"  value="3" onclick="showReason('showReason_<?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['question_id'];?>
','<?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['wrong_reason3'];?>
');" />
                   </td>
          <td align="left"><?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['answer3'];?>
</td>
        </tr>
        <tr>
          <td align="center"><input type="radio" id="answer4_<?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['question_id'];?>
" name="answer_<?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['question_id'];?>
" value="4" onclick="showReason('showReason_<?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['question_id'];?>
','<?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['wrong_reason4'];?>
');" />
          </td>
          <td align="left"><?php echo $_smarty_tpl->getVariable('current_question')->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['answer4'];?>
</td>
        </tr>
      </table>
            
          
      </span>
      <?php endfor; endif; ?>
     
       </div>
    <div id="demoNavigation" align="center">
      <input class="navigation_button" id="next" value="Next" type="submit" />
    </div>
    <input type="hidden" id="e_id" name="e_id" value="<?php echo $_smarty_tpl->getVariable('e_id')->value;?>
" />
 
  </form>
  <hr />
  <p id="data"></p>
</div>
<script type="text/javascript" src="js/jquery-ui-1.8.5.custom.min.js"></script>
<script type="text/javascript" src="js/jquery.form.wizard-3.0.4.min.js"></script>

<script type="text/javascript">
		$(function(){
		$("#demoForm").formwizard({ 
		formPluginEnabled: false,
		validationEnabled: false,
		focusFirstInput : true,
		formOptions :{
		success: function(data){$("#status").fadeTo(500,1,function(){ $(this).html("You are now registered!").fadeTo(5000, 0); })},						beforeSubmit: function(data){$("#data").html("data sent to the server: " + $.param(data));},dataType: 'json',resetForm: true
				 	}	
				 }
				);
  		});
    </script>

<?php $_template = new Smarty_Internal_Template("_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>