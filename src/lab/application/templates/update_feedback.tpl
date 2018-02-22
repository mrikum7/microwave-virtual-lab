{include file="_headerAdmin.tpl"}
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
<td colspan="2" align="center" class="error">{$getMsg}</td>
</tr>
        <tr>
          <td valign="top" width="35%"><strong>First Name :</strong></td>
          <td>
           {$data.first_name}
            </td>
        </tr>
         <tr>
          <td valign="top"><strong>Last Name :</strong></td>
          <td>
              {$data.last_name}
             </td>
        </tr>
         <tr>
          <td valign="top"><strong>virtual Lab Name :</strong></td>
          <td>
{$data.virtual_lab_name} </td>
        </tr>
        <tr>
          <td valign="top"><strong>Lemote Lab Location :</strong></td>
          <td>
{$data.remote_lab_location}
             </td>
        </tr>
        <tr>
          <td valign="top"><strong>email :</strong></td>
          <td>
              {$data.email}
             </td>
        </tr>
         <tr>
          <td valign="top"><strong>Virtual Lab Type :</strong></td>
          <td>
              {$data.virtual_lab_type}
             </td>
         </tr>
         <tr>
          <td valign="top"><strong>Technical Objective Defined :</strong></td>
          <td>
{$data.technical_objective_defined}
             </td>
        </tr>
        <tr>
          <td valign="top"><strong>Technical Easily Understood :</strong></td>
          <td>
{$data.technical_easily_understood}
             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Technical Sufficient Background :</strong></td>
          <td>
{$data.technical_sufficient_background}
             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Technical Helpful Manual :</strong></td>
          <td>
             {$data.technical_helpful_manual}
             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Technical Diagrams Easy :</strong></td>
          <td>
           {$data.technical_diagrams_easy}
             </td>
        </tr> 
         <tr>
          <td valign="top"><strong>Technical Experiment Useful :</strong></td>
          <td>
              {$data.technical_experiment_useful}
             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Technical Experiment Appropriate :</strong></td>
          <td>
              {$data.technical_experiment_appropriate}
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
           {$data.interface_ease_navigation}
             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Interface Remote Feel :</strong></td>
          <td>
          {$data.interface_remote_feel}
             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Interface Attractive :</strong></td>
          <td>
             {$data.interface_attractive}
             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Comments :</strong></td>
          <td>
              {$data.comments}
             </td>
        </tr>
             
         <tr>
          <td valign="top"><strong>Feedback Date :</strong></td>
          <td>
         {$data.feedback_date}     
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
{include file="_footerAdmin.tpl"}