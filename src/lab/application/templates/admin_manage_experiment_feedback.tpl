{include file="_headerAdmin.tpl"}
<table>
 <tr>
<td colspan="2" align="center" class="error">{$getMsg}</td>
</tr>
</table>


<table width="100%" border="0" cellspacing="0" cellpadding="0"  >
  <tr>
    <td>
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="grid">
                  <tr align="center">
                  <td class="hd" align=""><a href="?order_by=experiment_id&dir={$experiment_id}{$queryString}" class="black">Experiment Name</a></td>
                  <td class="hd" align=""><a href="?order_by=student_name&dir={$student_name}{$queryString}" class="black">Student Name</a></td>
                   <td class="hd" align=""><a href="?order_by=department&dir={$department}{$queryString}" class="black">Department</a></td>
                    <td class="hd" align=""><a href="?order_by=lab_name&dir={$lab_name}{$queryString}" class="black">lab Name</a></td>
            <td class="hd" align=""><a href="?order_by=lab_type&dir={$lab_type}{$queryString}" class="black">Lab Type</a></td>
                  
                  <td class="hd">View Details</td>
                   <td class="hd">Delete</td>
                  </tr>    
            		{foreach from=$feedback item=employees}               
                  <tr class="{cycle values = 'panel_0,panel_1'}">
                     <td align="center">{$employees.experiment_name}</td>
                   <td  align="center">{$employees.student_name}</td>
                    <td align="center">{$employees.department}</td>
                   <td  align="center">{$employees.lab_name}</td>
                    <td  align="center">{$employees.lab_type}</td>
                    
                     <td align="center" ><a href="update_experiment_feedback-{$employees.feedback_id}.html"><img src="images/icon_edit.png" alt=" " width="16" height="16" /></a></td>
                      <td align="center" ><a href="del_experiment_feedback-{$employees.feedback_id}.html"><img src="images/icon_delete.png" alt=" " width="16" height="16" /></a></td>
                   </tr>
            {foreachelse}
                        <tr>
                          <td colspan="9" class="panel_1" align="center">No Record Found.</td>
                        </tr>
                        {/foreach}
                        <tr>
                          <td colspan="9" align="center" class="hd">{include file="pager.tpl"}</td>
                        </tr>
          </table> </td>
  </tr>
</table>
{include file="_footerAdmin.tpl"}