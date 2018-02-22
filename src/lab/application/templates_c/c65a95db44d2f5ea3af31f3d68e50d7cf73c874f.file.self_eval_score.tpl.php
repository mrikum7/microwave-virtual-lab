<?php /* Smarty version Smarty3-RC3, created on 2010-11-19 06:56:27
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/self_eval_score.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17983183704ce673fbd4d910-69022778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c65a95db44d2f5ea3af31f3d68e50d7cf73c874f' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/self_eval_score.tpl',
      1 => 1289300543,
    ),
  ),
  'nocache_hash' => '17983183704ce673fbd4d910-69022778',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<div id="demoWrapper">
  <h3 align="center">Self Evaluation</h3>
  <hr />
  <h5 id="status"></h5>
  <form id="demoForm" method="post" action="self_eval_exec.php" class="bbq">
    <div id="fieldWrapper" align="center"> 
         <h3>Scores : <?php echo $_smarty_tpl->getVariable('score')->value;?>
</h3> <div align="right"><a href="tab-<?php echo $_smarty_tpl->getVariable('e_id')->value;?>
.html" class="green" >Back</a></div>
     </div>
    <input type="hidden" id="e_id" name="e_id" value="<?php echo $_smarty_tpl->getVariable('e_id')->value;?>
" />
  </form>
  <hr />
  <p id="data"></p>
</div>
<?php $_template = new Smarty_Internal_Template("_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>