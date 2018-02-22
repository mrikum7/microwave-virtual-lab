<?php /* Smarty version Smarty3-RC3, created on 2010-11-19 06:35:18
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_self_eval.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21119363004ce66f0684cba0-12383622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1583f26f4659c22e2674907a4cac7c1aaeab5e65' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_self_eval.tpl',
      1 => 1287572338,
    ),
  ),
  'nocache_hash' => '21119363004ce66f0684cba0-12383622',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("_headerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>	
		$(document).ready(function() {
				$("#addFaq").validationEngine()
			
		});
		
	</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td> <form action="update_self_eval_exec.php" method="post" name="addFaq" id="addFaq">
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Update Self Eval</h2></td>
        </tr>
        
        <tr>
          <td><strong>Question Title :</strong></td>
          <td><label>
            <input name="question_title" type="text" class="validate[required] textbox" id="question_title" value="<?php echo $_smarty_tpl->getVariable('data')->value['question_title'];?>
"/></label></td>
          
        </tr>
        
        <tr>
          <td><strong>Answer1 :</strong></td>
          <td><label>
              <input name="answer1" type="text" class="validate[required] textbox" id="answer1" value="<?php echo $_smarty_tpl->getVariable('data')->value['answer1'];?>
" />
               &nbsp;&nbsp;<strong>Correct</strong> &nbsp;&nbsp;
              <input type="radio" id="correct_answer" name="correct_answer" value="1" class="validate[required]" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('data')->value['correct_answer'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1){?> checked="checked" <?php }?> />
            </label></td>
        </tr>
        
        <tr>
          <td><strong>Answer2 :</strong></td>
          <td><label>
              <input name="answer2" type="text" class="validate[required] textbox" id="answer2" value="<?php echo $_smarty_tpl->getVariable('data')->value['answer2'];?>
" />
               &nbsp;&nbsp;<strong>Correct</strong> &nbsp;&nbsp;
              <input type="radio" id="correct_answer" name="correct_answer" value="2" class="validate[required]" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('data')->value['correct_answer'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2==2){?> checked="checked" <?php }?>  />
            </label></td>
        </tr>
        
        <tr>
          <td><strong>Answer3 :</strong></td>
          <td><label>
              <input name="answer3" type="text" class="validate[required] textbox" id="answer3" value="<?php echo $_smarty_tpl->getVariable('data')->value['answer3'];?>
"  />
               &nbsp;&nbsp;<strong>Correct</strong> &nbsp;&nbsp;
              <input type="radio" id="correct_answer" name="correct_answer" value="3" class="validate[required]" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('data')->value['correct_answer'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3==3){?> checked="checked" <?php }?>  />
            </label></td>
        </tr>
        
        <tr>
          <td><strong>Answer4 :</strong></td>
          <td><label>
              <input name="answer4" type="text" class="validate[required] textbox" id="answer4"  value="<?php echo $_smarty_tpl->getVariable('data')->value['answer4'];?>
"/>
              &nbsp;&nbsp;<strong>Correct</strong> &nbsp;&nbsp;
              <input type="radio" id="correct_answer" name="correct_answer" value="4" class="validate[required]" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('data')->value['correct_answer'];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4==4){?> checked="checked" <?php }?> />
            </label></td>
        </tr>
         
         <tr>
                        <td><strong>Is Active</strong></td>
                        <td>
                         <input name="is_active" id="is_active" type="checkbox" value="1" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('data')->value['is_active'];?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5==1){?> checked="checked" <?php }?> >
                        </td>
                      </tr>
         
         
         <tr>
          <td>&nbsp;<input type="hidden" name="question_id" id="question_id" value="<?php echo $_smarty_tpl->getVariable('data')->value['question_id'];?>
" />
            <input type="hidden" name="experiment_id" id="experiment_id" value="<?php echo $_smarty_tpl->getVariable('data')->value['experiment_id'];?>
" />
          </td>
          <td><label>
              <input name="button" type="submit" id="button" value="Update" />
            </label></td>
        </tr>
      </table>
      </form>
    </td>
  </tr>
</table>
<?php $_template = new Smarty_Internal_Template("_footerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>