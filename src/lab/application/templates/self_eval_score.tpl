{include file="_header.tpl"}
<div id="demoWrapper">
  <h3 align="center">Self Evaluation</h3>
  <hr />
  <h5 id="status"></h5>
  <form id="demoForm" method="post" action="self_eval_exec.php" class="bbq">
    <div id="fieldWrapper" align="center"> 
         <h3>Scores : {$score}</h3> <div align="right"><a href="tab-{$e_id}.html" class="green" >Back</a></div>
     </div>
    <input type="hidden" id="e_id" name="e_id" value="{$e_id}" />
  </form>
  <hr />
  <p id="data"></p>
</div>
{include file="_footer.tpl"}