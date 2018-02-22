{include file="_header.tpl"}
	<script type="text/javascript">
			function showReason(id,content)
			{
			document.getElementById(id).innerHTML=content;
			}
		</script>
<div id="demoWrapper">
  <h3 align="center">Self Evaluation</h3>
  <hr />
  <h5 id="status"></h5>
  <form id="demoForm" method="post" action="self_eval_exec.php" class="bbq">
    <div id="fieldWrapper"> 
    {section name = index loop=$current_question} 
    <span class="step" id="first_{$current_question[index].question_id}">
      <table width="100%" border="0" cellpadding="4" cellspacing="4">
        <tr>
          <td colspan=3><strong>Question -</strong> {$current_question[index].question_title}</td>
          
        </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td width="15%" align="center">

          <input type="radio" id="answer1_{$current_question[index].question_id}" name="answer_{$current_question[index].question_id}" value="1"  onclick="showReason('showReason_{$current_question[index].question_id}','{$current_question[index].wrong_reason1}');" />
         </td>
          <td width="55%" align="left">{$current_question[index].answer1}</td>
          <td rowspan="4" align="left" valign="top">
          <div id="showReason_{$current_question[index].question_id}" class="aToolTip" style="color:red;"></div></td>
        </tr>
        <tr>
          <td align="center"><input type="radio" id="answer2_{$current_question[index].question_id}" name="answer_{$current_question[index].question_id}"  value="2" onclick="showReason('showReason_{$current_question[index].question_id}','{$current_question[index].wrong_reason2}');" />
          </td>
          <td align="left">{$current_question[index].answer2}</td>
        </tr>
        <tr>
          <td align="center"><input type="radio" id="answer3_{$current_question[index].question_id}" name="answer_{$current_question[index].question_id}"  value="3" onclick="showReason('showReason_{$current_question[index].question_id}','{$current_question[index].wrong_reason3}');" />
                   </td>
          <td align="left">{$current_question[index].answer3}</td>
        </tr>
        <tr>
          <td align="center"><input type="radio" id="answer4_{$current_question[index].question_id}" name="answer_{$current_question[index].question_id}" value="4" onclick="showReason('showReason_{$current_question[index].question_id}','{$current_question[index].wrong_reason4}');" />
          </td>
          <td align="left">{$current_question[index].answer4}</td>
        </tr>
      </table>
            
          
      </span>
      {/section}
     
       </div>
    <div id="demoNavigation" align="center">
      <input class="navigation_button" id="next" value="Next" type="submit" />
    </div>
    <input type="hidden" id="e_id" name="e_id" value="{$e_id}" />
 
  </form>
  <hr />
  <p id="data"></p>
</div>
<script type="text/javascript" src="js/jquery-ui-1.8.5.custom.min.js"></script>
<script type="text/javascript" src="js/jquery.form.wizard-3.0.4.min.js"></script>
{literal}
<script type="text/javascript">
		$(function(){
		$("#demoForm").formwizard({ 
		formPluginEnabled: false,
		validationEnabled: false,
		focusFirstInput : true,
		formOptions :{
		success: function(data){$("#status").fadeTo(500,1,function(){ $(this).html("You are now registered!").fadeTo(5000, 0); })},						beforeSubmit: function(data){$("#data").html("data sent to the server: " + $.param(data));},dataType: 'json',resetForm: true
				 	}	
				 }
				);
  		});
    </script>
{/literal}
{include file="_footer.tpl"}