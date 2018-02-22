<?php /* Smarty version Smarty3-RC3, created on 2010-11-19 06:11:02
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9301404664ce66956ca7692-23387206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33db6e7f3a785fe05c999d4db1afc53b0d99607b' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_news.tpl',
      1 => 1288083399,
    ),
  ),
  'nocache_hash' => '9301404664ce66956ca7692-23387206',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("_headerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>	
		$(document).ready(function() {
				$("#editnews").validationEngine()
			
		});
		
	</script>
    <script type="text/javascript" src="../lib/ckeditor/ckeditor.js"></script>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="update_news_exec.php" method="post" name="editnews" id="editnews">
    <table width="100%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Manage news</h2></td>
        </tr>
         <tr>
<td colspan="2" align="center" class="error"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
</tr>
        
        
        <tr>
          <td><strong>Contributor Title :</strong></td>
          <td><label>
              <input name="news_title" type="text" class="validate[required] textbox" id="news_title" value="<?php echo $_smarty_tpl->getVariable('data')->value['news_title'];?>
" />
            </label></td>
        </tr>
        
         <tr>
          <td><strong>Sort Order :</strong></td>
          <td><label>
              <input name="sort_order" type="text" class="validate[required] textbox" id="sort_order" value="<?php echo $_smarty_tpl->getVariable('data')->value['sort_order'];?>
" />
            </label></td>
        </tr>

        <tr>
          <td valign="top"><strong>Contributor Description :</strong></td>
          <td><label>
              <textarea name="news_description" class="validate[required]" id="CKEditor1"><?php echo $_smarty_tpl->getVariable('data')->value['news_description'];?>
</textarea>
              </label></td>
        </tr>
        <tr>
                        <td><strong>Is Active</strong></td>
                        <td>
                         <input name="is_active" id="is_active" type="checkbox" value="1" <?php ob_start();?><?php echo $_smarty_tpl->getVariable('data')->value['is_active'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1){?> checked="checked" <?php }?> >
                        </td>
                      </tr>
        
        <tr>
          <td>&nbsp;<input type="hidden" name="news_id" id="news_id" value="<?php echo $_smarty_tpl->getVariable('data')->value['news_id'];?>
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