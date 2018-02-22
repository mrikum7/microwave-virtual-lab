<?php /* Smarty version Smarty3-RC3, created on 2010-11-19 04:00:34
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/pager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1961250674ce64ac2b207c5-90660949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63cbf341db3620459dd8fa8309b48b41cd207629' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/pager.tpl',
      1 => 1286973961,
    ),
  ),
  'nocache_hash' => '1961250674ce64ac2b207c5-90660949',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (is_array($_smarty_tpl->getVariable('pager')->value)){?>
<div class="point"> <?php if ($_smarty_tpl->getVariable('cur_page')->value=='0'){?> <span class="underline" >First</span> |
  <?php }else{ ?> <a href="?page=0<?php if ($_smarty_tpl->getVariable('queryString')->value!=''){?><?php echo $_smarty_tpl->getVariable('queryString')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('queryString1')->value!=''){?><?php echo $_smarty_tpl->getVariable('queryString1')->value;?>
<?php }?>" class="black">First</a> | 
  <?php }?>
  
  <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pager')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value){
?>
  <?php if ($_smarty_tpl->tpl_vars['key']->value['current']){?> <span class="page-c" ><?php echo $_smarty_tpl->tpl_vars['key']->value['name'];?>
</span> | 
  <?php }else{ ?><a href="?page=<?php echo $_smarty_tpl->tpl_vars['key']->value['page'];?>
<?php if ($_smarty_tpl->getVariable('queryString')->value!=''){?><?php echo $_smarty_tpl->getVariable('queryString')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('queryString1')->value!=''){?><?php echo $_smarty_tpl->getVariable('queryString1')->value;?>
<?php }?>" class="black"><?php echo $_smarty_tpl->tpl_vars['key']->value['name'];?>
</a> | <?php }?>
  <?php }} ?>
  
  <?php if ($_smarty_tpl->getVariable('cur_page')->value==$_smarty_tpl->getVariable('last_page')->value){?> <span class="underline" >Last</span> <?php }else{ ?> <a href="?page=<?php echo $_smarty_tpl->getVariable('last_page')->value;?>
<?php if ($_smarty_tpl->getVariable('queryString')->value!=''){?><?php echo $_smarty_tpl->getVariable('queryString')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('queryString1')->value!=''){?><?php echo $_smarty_tpl->getVariable('queryString1')->value;?>
<?php }?>" class="black">Last</a> <?php }?> </div>
<?php }?>