<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>Testing</title>
		<link rel="stylesheet" href="../lib/openwysiwyg/docs/style.css" type="text/css">
		
		<!-- 
			Include the WYSIWYG javascript files
		-->
		<script type="text/javascript" src="../lib/openwysiwyg/scripts/wysiwyg.js"></script>
		<script type="text/javascript" src="../lib/openwysiwyg/scripts/wysiwyg-settings.js"></script>
		<!-- 
			Attach the editor on the textareas
		-->
		<script type="text/javascript">
			// Use it to attach the editor to all textareas with full featured setup
			//WYSIWYG.attach('all', full);
			
			// Use it to attach the editor directly to a defined textarea
			WYSIWYG.attach('content_description'); // default setup
			
			// Use it to display an iframes instead of a textareas
			//WYSIWYG.display('all', full);  
		</script>
		
	</head>
	<body>
    <form action="test_exec.php" method="post" name="formAdd" id="formAdd">
    <table cellspacing="5" cellpadding="5" width="100%" border="0px">
                <tr>
                  <td align="center" colspan="2">{$msg}</td>
                </tr>
                <tr>
                  <td align="center"> Title*: </td>
                  <td><input type="text" id="content_title" name="content_title" value="{$arr.content_title}" /></td>
                </tr>
                <tr>
                  <td align="center"> Description*: </td>
                  <td><textarea id="content_description" name="content_description" rows="8" cols="30" >{$arr.content_description}</textarea></td>
                </tr>
                <tr>
                <td><input type="hidden" name=" content_id" value="1"  /></td>
                <td ><input name="" type="submit" id="submit" value="submit" /></td>
                </tr>
              </table>
              
              </form>
              </body>
              </html>