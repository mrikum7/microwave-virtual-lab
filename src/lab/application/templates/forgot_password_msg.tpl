{include file="_header.tpl"}
<div id="leftCntr">
  <script>	
		$(document).ready(function() {
				$("#forgotPasswordForm").validationEngine()
			//$.validationEngine.loadValidation("#date")
			//$.validationEngine.buildPrompt("#date","This is an example","error")	 		 // Exterior prompt build example
			//$.validationEngine.closePrompt(".formError",true) 							// CLOSE ALL OPEN PROMPTS
		});
	// JUST AN EXAMPLE OF CUSTOM VALIDATI0N FUNCTIONS : funcCall[validate2fields]
		function validate2fields(){
			if($("#e_mail").val() ==""){
				return false;
			}else{
				return true;
			}
		}
	</script>

  <div class="login-lightBox">
    <h2>Forgot your login info?<span>Keep cool, everything is gonna be alright!</span></h2><span>
    <div align="center"><strong>{$getMsg}</strong></div>
  </div>
</div>

<!--  \ LEFT CONTAINER / -->
<!--  / RIGHT CONTAINER \ -->
{include file="_right_menu.tpl"}

{include file="_footer.tpl"}