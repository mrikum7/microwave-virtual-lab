<?php /* Smarty version Smarty3-RC3, created on 2010-11-19 04:00:26
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/_footerAdmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17263501654ce64abaf26e20-85900570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4831ebd771ca67a44dac72ce932104a2b4c639f' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/_footerAdmin.tpl',
      1 => 1288084007,
    ),
  ),
  'nocache_hash' => '17263501654ce64abaf26e20-85900570',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('IS_EDITOR')->value==true){?>
<script type="text/javascript">
   CKFinder.setupCKEditor( null, '/projects/virtual_labs/lib/ckfinder/' );
	var editor = CKEDITOR.replace( 'CKEditor1' );
</script>
<?php }?>
</td>
          </tr>
        </table>
      </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Admin Panel for Virtual Labs Website<br />
      <a target="_blank" href="<?php echo $_smarty_tpl->getVariable('APP_URL')->value;?>
" class="green">Go to the Portal</a></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
</table>
</body>
</html>
