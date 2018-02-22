<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Sakshat Virtual Labs</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
{if $spry eq 'yes'}
<script src="js/SpryTabbedPanels.js" type="text/javascript"></script>
{/if}
<script src="js/jquery-1.4.2.min.js" type="text/javascript" ></script>
<script type="text/javascript" src="js/util-functions.js"></script>
<script type="text/javascript" src="js/clear-default-text.js"></script>
<script src="js/loopedslider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/urchin.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="js/easySlider1.5.js"></script>
<script type="text/javascript">
		$(document).ready(function(){	
			$("#slider").easySlider({
				auto: false,
				continuous: true 
			});
		});	
	</script>

<script type="text/javascript">
<!--
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script>


</head>
<body>
<div id="wrapper">
  <div id="header">
  <div align="center">
  <!-- LiveZilla Chat Button Link Code (ALWAYS PLACE IN BODY ELEMENT) --><a href="javascript:void(window.open('http://websupplements.net/projects/virtual_labs/chat/chat.php','','width=590,height=610,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))"><img src="http://websupplements.net/projects/virtual_labs/chat/image.php?id=01&amp;type=inlay" width="120" height="30" border="0" alt="LiveZilla Live Help"></a><!-- http://www.LiveZilla.net Chat Button Link Code --><!-- LiveZilla Tracking Code (ALWAYS PLACE IN BODY ELEMENT) --><div id="livezilla_tracking" style="display:none"></div><script type="text/javascript">
var script = document.createElement("script");script.type="text/javascript";var src = "http://websupplements.net/projects/virtual_labs/chat/server.php?request=track&output=jcrpt&nse="+Math.random();setTimeout("script.src=src;document.getElementById('livezilla_tracking').appendChild(script)",1);</script><noscript><img src="http://websupplements.net/projects/virtual_labs/chat/server.php?request=track&amp;output=nojcrpt" width="0" height="0" style="visibility:hidden;" alt=""></noscript><!-- http://www.LiveZilla.net Tracking Code -->
  </div>
  </div>
  <div id="nav_panel">
    <div id="navigation">
      <ul class="nav_links">
        <li><a href="index.php" {if $page_name eq "index"}class="active" {/if}>Home</a></li>
        <li><a href="aboutus.php" {if $page_name eq "about_us"}class="active" {/if}>About Us</a></li>
      
        <li><a href="contributors.php" {if $page_name eq "contributors"}class="active" {/if}>Contributors</a></li>
        <li><a href="experiments.php" {if $page_name eq "experiments"}class="active" {/if}>Experiments</a></li>
        <li><a href="equipments.php" {if $page_name eq "equipments"}class="active" {/if}>Equipments</a></li>
	<li><a href="software.php" {if $page_name eq "software"}class="active" {/if}>Prerequisite S/W</a></li>
        <li><a href="faq.php" {if $page_name eq "faq"}class="active" {/if}>FAQ's</a></li>
        <li><a href="contactus.php" {if $page_name eq "contact_us"}class="active" {/if}>Contact Us</a></li>
        <li><a href="acknowledgement.php" {if $page_name eq "acknowledgement"}class="active" {/if}>Acknowledgement</a></li>
        <li><a href="feedback.php" {if $page_name eq "feedback"}class="active" {/if}>Feedback</a></li>
       </ul>
    </div>
    <div id="login">
      <table width="176" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>{if $is_login  neq 'yes'}<a href="login.php"><img src="images/btn_login.png" alt="" width="87" height="27" /></a>{else}<a href="logout.php"><img src="images/btn_logout.png" alt="" width="89" height="27" /></a>{/if}</td>
          <td>{if $is_login  neq 'yes'}<a href="register.php"><img src="images/btn_signup.png" alt="" width="89" height="27" /></a>{else}<a href="profile.php"><img src="images/btn_profile.png" alt="" width="87" height="27" /></a>{/if}</td>
        </tr>
      </table>
    </div>
  </div>
  <div class="gap">&nbsp;</div>
  <div>