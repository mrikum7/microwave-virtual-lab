<?php /* Smarty version Smarty3-RC3, created on 2010-11-19 06:10:59
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_manage_news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9857868184ce66953cdeab0-32395600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '436bc6f3396603c78032daa1c5912e98144c7a5e' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/admin_manage_news.tpl',
      1 => 1288083400,
    ),
  ),
  'nocache_hash' => '9857868184ce66953cdeab0-32395600',
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
				$("#Addnews").validationEngine()
			
		});
		
	</script>
    <script type="text/javascript" src="../lib/ckeditor/ckeditor.js"></script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="add_news_exec.php" method="post" name="Addnews" id="Addnews">
    <table width="100%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Manage News</h2></td>
        </tr>
         <tr>
<td colspan="2" align="center" class="error"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
</tr>
        <tr>
          <td><strong>News Title :</strong></td>
          <td><label>
            <input name="news_title" type="text" class="validate[required] textbox" id="news_title" />
            </label></td>
        </tr>
        
         <tr>
          <td><strong>Sort Order :</strong></td>
          <td><label>
              <input name="sort_order" type="text" class="validate[required] textbox" id="sort_order" />
            </label></td>
        </tr>
        
        <tr>
          <td valign="top"><strong>News Description :</strong></td>
          <td><label>
              <textarea name="news_description" class="validate[required]" id="CKEditor1"></textarea>              
              </label></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td><label>
              <input name="button" type="submit" id="button" value="Submit" />
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
                  <td class="hd" align="left"><a href="?order_by=news_title&dir=<?php echo $_smarty_tpl->getVariable('news_title')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">News Title</a></td>
                  <td class="hd" align=""><a href="?order_by=news_date&dir=<?php echo $_smarty_tpl->getVariable('news_date')->value;?>
<?php echo $_smarty_tpl->getVariable('queryString')->value;?>
" class="black">Last Update</a></td>                  <td class="hd">Edit</td>
                   <td class="hd">Delete</td>
                  </tr>    
            <?php  $_smarty_tpl->tpl_vars['employees'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['employees']->key => $_smarty_tpl->tpl_vars['employees']->value){
?>               
                  <tr class="<?php echo smarty_function_cycle(array('values'=>'panel_0,panel_1'),$_smarty_tpl->smarty,$_smarty_tpl);?>
">
                     <td align="left"><?php echo $_smarty_tpl->tpl_vars['employees']->value['news_title'];?>
</td>
                     <td  align="center"><?php echo $_smarty_tpl->tpl_vars['employees']->value['news_date'];?>
</td>
                     <td align="center" ><a href="update_news-<?php echo $_smarty_tpl->tpl_vars['employees']->value['news_id'];?>
.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
                     <td align="center" ><a href="del_news-<?php echo $_smarty_tpl->tpl_vars['employees']->value['news_id'];?>
.html"><img src="images/icon_delete.png" alt=" " width="16" height="16" /></a></td>
                   </tr>
            <?php }} else { ?>
                        <tr>
                          <td colspan="5" class="panel_1" align="center">No Record Found.</td>
                        </tr>
                        <?php } ?>
                        <tr>
                          <td colspan="5" align="center" class="hd"><?php $_template = new Smarty_Internal_Template("pager.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?></td>
                        </tr>
          </table>      
      </td>
  </tr>
</table>
<?php $_template = new Smarty_Internal_Template("_footerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>