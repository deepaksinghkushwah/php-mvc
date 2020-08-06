<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class MailHelper {
	public static function sendEmail($to = [], $subject, $message, $attachments = []){
		$mail = new PHPMailer(true);
		try {
			if(MAILER_USE_SMTP){
				//Server settings
			    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
			    $mail->isSMTP();                                            // Send using SMTP
			    $mail->Host       = MAILER_HOST;                 // Set the SMTP server to send through
			    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			    $mail->Username   = MAILER_USER;                     // SMTP username
			    $mail->Password   = MAILER_PASSWORD;                               // SMTP password
			    $mail->SMTPSecure = MAILER_ENCTYPTION;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			    $mail->Port       = MAILER_PORT;        // TCP port to connect to, use 465 for 	`PHPMailer::ENCRYPTION_SMTPS` above
			}
		    

		    //Recipients
		    $mail->setFrom(MAILER_FROM_EMAIL, MAILER_FROM_NAME);
		    //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
		    if(count($to) > 0){
		    	foreach($to as $row){
		    		$mail->addAddress($row);               // Name is optional		
		    	}
		    }
		    
		    //$mail->addReplyTo('info@example.com', 'Information');
		    //$mail->addCC('cc@example.com');
		    //$mail->addBCC('bcc@example.com');

		    // Attachments
		    if(count($attachments) > 0){
		    	foreach($attachments as $a){
		    		$mail->addAttachment($a);         // Add attachments		
		    	}
		    }

		    // Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = $subject;
		    ob_start();
		    require "./views/layouts/header-mail.php";
		    echo $message;
		    require "./views/layouts/footer-mail.php";
		    $output = ob_get_contents();
			ob_end_clean();
		    $mail->Body    = $output;
		    $mail->AltBody = strip_tags($message);

		    $mail->send();
		    return true;
		} catch (Exception $e) {
		    Session::addMessage("Message could not be sent. Mailer Error: {$mail->ErrorInfo}","danger");
		    return false;
		}
	}
}