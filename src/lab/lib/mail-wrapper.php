<?php
	require_once(LIB_DIR.'phpmailer/class.phpmailer.php');
	function sendmail($msg='',$fromEmail='',$fromName='',$to='',$subject='') {
		if(!DEMO) {
			$mail = new PHPMailer(true);
			$mail->IsHTML(true);
			
			if(USE_MAILER == "SMTP")
			{
				$mail->IsSMTP(); // telling the class to use SMTP 
				$mail->Mailer   = "smtp";
				$mail->SMTPAuth  =  true;
				
				$mail->Host = SMTP_SERVER; // SMTP server 
				$mail->Username = SMTP_USERNAME;
				$mail->Password = SMTP_PASSWORD;
				 //$mail->SMTPDebug = 2; //For Testing
				$mail->SMTPKeepAlive = true; 
				$mail->SMTPSecure = SMTP_SECURITY;
				$mail->Port = SMTP_PORT; 
			}
			$mail->AddReplyTo($fromEmail,$fromName);
			
			$mail->From = $fromEmail;
			$mail->FromName = $fromName;
			$mail->Subject = $subject;
			$mail->MsgHTML($msg);
			//$mail->Body = $msg;
			if($to!='') {
				$mail->AddAddress($to);
				if(!$mail->Send()) {
					
						setMsg("Email not Sent: ".$mail->ErrorInfo);
					
				}
				$mail->ClearAddresses();
				$mail->SmtpClose(); 
			}
		}
		else {
			if(DEBUG) {
				debugMsg("<b>Sent Email: </b></br>".$msg);
			}
		}
	}
?>
