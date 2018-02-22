<?php /* Smarty version Smarty3-RC3, created on 2010-12-23 04:17:16
         compiled from "/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3623472664d1321ac326f67-69553723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d698d6658a3c2ccc8ecfd799219f65d6727320a' => 
    array (
      0 => '/home/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/update_feedback.tpl',
      1 => 1287655901,
    ),
  ),
  'nocache_hash' => '3623472664d1321ac326f67-69553723',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("_headerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script type="text/javascript" src="../lib/ckeditor/ckeditor.js"></script>

<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="update_feedback_exec.php" method="post" >
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Feedback</h2></td>
        </tr>
         <tr>
<td colspan="2" align="center" class="error"><?php echo $_smarty_tpl->getVariable('getMsg')->value;?>
</td>
</tr>
        <tr>
          <td valign="top" width="35%"><strong>First Name :</strong></td>
          <td>
           <?php echo $_smarty_tpl->getVariable('data')->value['first_name'];?>

            </td>
        </tr>
         <tr>
          <td valign="top"><strong>Last Name :</strong></td>
          <td>
              <?php echo $_smarty_tpl->getVariable('data')->value['last_name'];?>

             </td>
        </tr>
         <tr>
          <td valign="top"><strong>virtual Lab Name :</strong></td>
          <td>
<?php echo $_smarty_tpl->getVariable('data')->value['virtual_lab_name'];?>
 </td>
        </tr>
        <tr>
          <td valign="top"><strong>Lemote Lab Location :</strong></td>
          <td>
<?php echo $_smarty_tpl->getVariable('data')->value['remote_lab_location'];?>

             </td>
        </tr>
        <tr>
          <td valign="top"><strong>email :</strong></td>
          <td>
              <?php echo $_smarty_tpl->getVariable('data')->value['email'];?>

             </td>
        </tr>
         <tr>
          <td valign="top"><strong>Virtual Lab Type :</strong></td>
          <td>
              <?php echo $_smarty_tpl->getVariable('data')->value['virtual_lab_type'];?>

             </td>
         </tr>
         <tr>
          <td valign="top"><strong>Technical Objective Defined :</strong></td>
          <td>
<?php echo $_smarty_tpl->getVariable('data')->value['technical_objective_defined'];?>

             </td>
        </tr>
        <tr>
          <td valign="top"><strong>Technical Easily Understood :</strong></td>
          <td>
<?php echo $_smarty_tpl->getVariable('data')->value['technical_easily_understood'];?>

             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Technical Sufficient Background :</strong></td>
          <td>
<?php echo $_smarty_tpl->getVariable('data')->value['technical_sufficient_background'];?>

             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Technical Helpful Manual :</strong></td>
          <td>
             <?php echo $_smarty_tpl->getVariable('data')->value['technical_helpful_manual'];?>

             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Technical Diagrams Easy :</strong></td>
          <td>
           <?php echo $_smarty_tpl->getVariable('data')->value['technical_diagrams_easy'];?>

             </td>
        </tr> 
         <tr>
          <td valign="top"><strong>Technical Experiment Useful :</strong></td>
          <td>
              <?php echo $_smarty_tpl->getVariable('data')->value['technical_experiment_useful'];?>

             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Technical Experiment Appropriate :</strong></td>
          <td>
              <?php echo $_smarty_tpl->getVariable('data')->value['technical_experiment_appropriate'];?>

             </td>
        </tr>
        <tr>
          <td valign="top"><strong>Interface User Friendly :</strong></td>
          <td>
             $data.interface_user_friendly}
             </td>
        </tr>
        
        <tr>
          <td valign="top"><strong>Interface Ease Navigation :</strong></td>
          <td>
           <?php echo $_smarty_tpl->getVariable('data')->value['interface_ease_navigation'];?>

             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Interface Remote Feel :</strong></td>
          <td>
          <?php echo $_smarty_tpl->getVariable('data')->value['interface_remote_feel'];?>

             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Interface Attractive :</strong></td>
          <td>
             <?php echo $_smarty_tpl->getVariable('data')->value['interface_attractive'];?>

             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Comments :</strong></td>
          <td>
              <?php echo $_smarty_tpl->getVariable('data')->value['comments'];?>

             </td>
        </tr>
             
         <tr>
          <td valign="top"><strong>Feedback Date :</strong></td>
          <td>
         <?php echo $_smarty_tpl->getVariable('data')->value['feedback_date'];?>
     
             </td>
        </tr>        
        <tr>
          <td>&nbsp;</td>
          
        </tr>
      </table>
      </form>
     </td>
  </tr>
</table>
<?php $_template = new Smarty_Internal_Template("_footerAdmin.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>