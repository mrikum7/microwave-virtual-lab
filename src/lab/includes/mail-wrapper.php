<?php
	require_once(LIB_DIR.'phpmailer/class.phpmailer.php');
	function sendmail($msg='',$fromEmail='',$fromName='',$to='',$subject='') {
		if(!DEMO) {
			$mail = new PHPMailer();
			$mail->IsHTML(true);
			$mail->From = $fromEmail;
			$mail->FromName = $fromName;
			$mail->Subject = $subject;
			$mail->Body = $msg;
			if($to!='') {
				$mail->AddAddress($to);
				if(!$mail->Send()) {
					if(DEBUG) {
						debugMsg("Email not Sent: ".$mail->ErrorInfo);
					}
				}
				$mail->ClearAddresses();
			}
		}
		else {
			if(DEBUG) {
				debugMsg("<b>Sent Email: </b></br>".$msg);
			}
		}
	}
?>
