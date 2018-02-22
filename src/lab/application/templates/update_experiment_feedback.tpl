{include file="_headerAdmin.tpl"}
<script type="text/javascript" src="../lib/ckeditor/ckeditor.js"></script>

<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
    <form action="update_feedback_exec.php" method="post" >
    <table width="90%" border="0" cellpadding="6" cellspacing="6" class="panel1">
        <tr>
          <td colspan="2"><h2>Experiment Feedback</h2></td>
        </tr>
        
        <tr>
          <td valign="top" width="35%"><strong>Student Name :</strong></td>
          <td>
           {$data.student_name}
            </td>
        </tr>
         <tr>
          <td valign="top"><strong>Department :</strong></td>
          <td>
              {$data.department}
             </td>
        </tr>
         <tr>
          <td valign="top"><strong>Lab Name :</strong></td>
          <td>
{$data.lab_name} </td>
        </tr>
        <tr>
          <td valign="top"><strong>Lemote Lab Type :</strong></td>
          <td>
{$data.lab_type}
             </td>
        </tr>
         <tr>
           <td valign="top"><strong>Online Performance :</strong></td>
           <td>
             {$data.online_performance}
             </td>
         </tr>
         <tr>
          <td valign="top"><strong>Interaction Control :</strong></td>
          <td>
{$data.interaction_control}
             </td>
        </tr>
        <tr>
          <td valign="top"><strong>Degree Simulation :</strong></td>
          <td>
{$data.degree_simulation}
             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Measurement Analysis:</strong></td>
          <td>
{$data.measurement_analysis}
             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Helpful Manual :</strong></td>
          <td>
             {$data.helpful_manual}
             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Consistency Links:</strong></td>
          <td>
           {$data.consistency_links}
             </td>
        </tr> 
         <tr>
          <td valign="top"><strong>Interpretable Results :</strong></td>
          <td>
              {$data.interpretable_results}
             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Clear Understanding :</strong></td>
          <td>
              {$data.clear_understanding}
             </td>
        </tr>
        <tr>
          <td valign="top"><strong>Experiment Helpful :</strong></td>
          <td>
             {$data.experiment_helpful}
             </td>
        </tr>
        
        <tr>
          <td valign="top"><strong>Problem Experienced:</strong></td>
          <td>
           {$data.problem_experienced}
             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Tell Anything :</strong></td>
          <td>
          {$data.tell_anything}
             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Feel Confident :</strong></td>
          <td>
             {$data.feel_confident}
             </td>
        </tr>
          <tr>
          <td valign="top"><strong>Experiment Motivating :</strong></td>
          <td>
              {$data.experiment_motivating}
             </td>
        </tr>
             
         <tr>
          <td valign="top"><strong>Go Through Manual:</strong></td>
          <td>
         {$data.go_through_manual}     
             </td>
        </tr>
        <tr>
          <td valign="top"><strong>Feel Actual Lab :</strong></td>
          <td>
              {$data.feel_actual_lab}
             </td>
        </tr>
             
         <tr>
          <td valign="top"><strong>Feel Absence Of Instructor:</strong></td>
          <td>
         {$data.feel_absence_of_instructor}     
             </td>
        </tr><tr>
          <td valign="top"><strong>Run Experiments Smoothly :</strong></td>
          <td>
              {$data.run_experiments_smoothly}
             </td>
        </tr>
             
         <tr>
          <td valign="top"><strong>Measure Analyse Data:</strong></td>
          <td>
         {$data.measure_analyse_data}     
             </td>
        </tr>   
        
             <tr>
          <td valign="top"><strong>Follow Steps:</strong></td>
          <td>
         {$data.follow_steps}     
             </td>
        </tr>   
        
             <tr>
          <td valign="top"><strong>Result Comparison:</strong></td>
          <td>
         {$data.result_comparison}     
             </td>
        </tr>   
        
        
             <tr>
          <td valign="top"><strong>Is Challenging:</strong></td>
          <td>
         {$data.is_challenging}     
             </td>
        </tr>   
        
        
             <tr>
          <td valign="top"><strong>Three Problems:</strong></td>
          <td>
         {$data.three_problems}     
             </td>
        </tr>   
        
        
             <tr>
          <td valign="top"><strong>Three Interesting Things:</strong></td>
          <td>
         {$data.three_interesting_things}     
             </td>
        </tr>   
        
        
             <tr>
          <td valign="top"><strong>feedback Date:</strong></td>
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