<?php /* Smarty version Smarty3-RC3, created on 2011-06-22 05:17:06
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_manage_self_eval.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1410917214e01c122e2aec8-25971270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdec2aa7f594dfd98848223186728b077f974263' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_manage_self_eval.tpl',
      1 => 1304583017,
    ),
  ),
  'nocache_hash' => '1410917214e01c122e2aec8-25971270',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/components/NSmarty/smarty/plugins/function.cycle.php';
?><?php $_template = new Smarty_Internal_Template("_headerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>	
		$(document).ready(function() {
				$("#editcontributors").validationEngine()
			
		});
		
	</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="add_question_exec.php" method="post" name="editcontributors" id="editcontributors" enctype="multipart/form-data">
    <table width="100%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Manage Self Evaluation Question</h2></td>
        </tr>
       
        
        <tr>
          <td width="30%"><strong>Question Title :</strong></td>
          <td><label>
            <input name="question_title" type="text" class="validate[required] textbox" id="question_title"  /></label></td>
          
        </tr>
        
        <tr>
          <td><strong>Answer1 :</strong></td>
          <td><label>
              <input name="answer1" type="text" class="validate[required] textbox" id="answer1" />
               &nbsp;&nbsp;<strong>Correct</strong> &nbsp;&nbsp;
              <input type="radio" id="correct_answer" name="correct_answer" value="1" />
            </label></td>
        </tr>
        
        <tr>
          <td><strong>Wrong Reason1 / Correct Intimation:</strong></td>
          <td><label>
              <input name="wrong_reason1" type="text" class="validate[required] textbox" id="wrong_reason1" />
             
            </label></td>
        </tr>
        
        
        
        <tr>
          <td><strong>Answer2 :</strong></td>
          <td><label>
              <input name="answer2" type="text" class="validate[required] textbox" id="answer2" />
               &nbsp;&nbsp;<strong>Correct</strong> &nbsp;&nbsp;
              <input type="radio" id="correct_answer" name="correct_answer" value="2" class="validate[required]" />
            </label></td>
        </tr>
        
          <tr>
          <td><strong>Wrong Reason2  / Correct Intimation:</strong></td>
          <td><label>
              <input name="wrong_reason2" type="text" class="validate[required] textbox" id="wrong_reason2" />
             
            </label></td>
        </tr>
        
        <tr>
          <td><strong>Answer3 :</strong></td>
          <td><label>
              <input name="answer3" type="text" class="validate[required] textbox" id="answer3" />
               &nbsp;&nbsp;<strong>Correct</strong> &nbsp;&nbsp;
              <input type="radio" id="correct_answer" name="correct_answer" value="3" class="validate[required]" />
            </label></td>
        </tr>
        
          <tr>
          <td><strong>Wrong Reason3  / Correct Intimation:</strong></td>
          <td><label>
              <input name="wrong_reason3" type="text" class="validate[required] textbox" id="wrong_reason3" />
             
            </label></td>
        </tr>
        
        <tr>
          <td><strong>Answer4 :</strong></td>
          <td><label>
              <input name="answer4" type="text" class="validate[required] textbox" id="answer4" />
              &nbsp;&nbsp;<strong>Correct</strong> &nbsp;&nbsp;
              <input type="radio" id="correct_answer" name="correct_answer" value="4" class="validate[required]" />
            </label></td>
        </tr>
        
          <tr>
          <td><strong>Wrong Reason4  / Correct Intimation:</strong></td>
          <td><label>
              <input name="wrong_reason4" type="text" class="validate[required] textbox" id="wrong_reason4" />
             
            </label></td>
        </tr>

        <tr>
          <td>&nbsp;<input type="hidden" name="experiment_id" id="experiment_id" value="<?php echo $_smarty_tpl->getVariable('experiment_id')->value;?>
" />
       
            </td>
          <td><label>
            <input name="button" type="submit" id="button" value="Submit" />
            <input name="button" type="submit" id="button" value="Cancel" />
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
                  <td class="hd" align="left"><a href="?order_by=question_title&dir=<?php echo $_smarty_tpl->getVariable('question_title')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Question Title</a></td>
                  <td class="hd" align=""><a href="?order_by=add_date&dir=<?php echo $_smarty_tpl->getVariable('add_date')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Last Update</a></td>                  <td class="hd">Edit</td>
                   <td class="hd">Delete</td>
                  </tr>    
            <?php  $_smarty_tpl->tpl_vars['employees'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('question')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['employees']->key => $_smarty_tpl->tpl_vars['employees']->value){
?>               
                  <tr class="<?php echo smarty_function_cycle(array('values'=>'panel_0,panel_1'),$_smarty_tpl->smarty,$_smarty_tpl);?>
">
                   <td align="left"><?php echo $_smarty_tpl->tpl_vars['employees']->value['question_title'];?>
</td>
                     <td  align="center"><?php echo $_smarty_tpl->tpl_vars['employees']->value['add_date'];?>
</td>
                     <td align="center" ><a href="update_self_eval-<?php echo $_smarty_tpl->tpl_vars['employees']->value['question_id'];?>
.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
                     <td align="center" ><a href="del_self_eval-<?php echo $_smarty_tpl->tpl_vars['employees']->value['question_id'];?>
.html"><img src="images/icon_delete.png" alt=" " width="16" height="16" /></a></td>
                   </tr>
            <?php }} else { ?>
                        <tr>
                          <td colspan="6" class="panel_1" align="center">No Record Found.</td>
                        </tr>
                        <?php } ?>
                        <tr>
                          <td colspan="6" align="center" class="hd"><?php $_template = new Smarty_Internal_Template("pager.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?></td>
                        </tr>
          </table>      
      </td>
  </tr>
</table>
<?php $_template = new Smarty_Internal_Template("_footerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>