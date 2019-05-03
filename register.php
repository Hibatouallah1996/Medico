<?php

	require("PhpMailer/PHPMailerAutoload.php");
	
	
				
						//
						$mail = new PHPMailer;
						
						//$mail->SMTPDebug = 4;                               // Enable verbose debug output
						
						$mail->isSMTP();                                      // Set mailer to use SMTP
						$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
						$mail->SMTPAuth = true;                               // Enable SMTP authentication
						$mail->Username = 'hcksi.formt@gmail.com';                 // SMTP username
						$mail->Password = 'hcksiformt@Ai1';                           // SMTP password
						$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
						$mail->Port = 587;  
						$mail->SMTPOptions = array(
						'ssl' => array(
						'verify_peer' => false,
						'verify_peer_name' => false,
						'allow_self_signed' => true
						)
						);                                  // TCP port to connect to
						
						$mail->setFrom('suivi_formation@hck.ma', 'suivi_formation');
						$mail->addAddress('boulsane.1996@gmail.com');     // Add a recipient
						//$mail->addAddress('ellen@example.com');               // Name is optional
						$mail->addReplyTo('info@example.com', 'Information');
						$mail->addCC('cc@example.com');
						$mail->addBCC('bcc@example.com');
						
						//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
						//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
						$mail->isHTML(true);                                  // Set email format to HTML
						
						$mail->Subject = 'Lien d\'activation du compte';
						$mail->Body    = 'hiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii ';
						$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
						
						if(!$mail->send()) {
							echo 'Message could not be sent.';
							echo 'Mailer Error: ' . $mail->ErrorInfo;
							} else {
							echo 'Message has been sent';
							}
							
							//
							
							
							