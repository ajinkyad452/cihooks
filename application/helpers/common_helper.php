<?php
/* 
 * Developed By Ajinkya Dube
 */
defined('BASEPATH') OR exit('No direct script access allowed.');

if (!function_exists('send_email')) {
	function send_email($emailid, $mailtype, $actLnk=null, $eventdet=null) {
        $buildsettings = mysql_fetch_array(mysql_query("SELECT * FROM settings WHERE id='1'"));
	
	$fromemail = $buildsettings['sender_email'];
   
   if($mailtype==1)
   {
   	//$body = "Hello,<br>Thank you joining us! Please click the below link to activate your account.<br><a href='".$actLnk."'>$actLnk</a><br><br>Thank You,<br>".PROJECTNAME." Team.";
   	$body = "Hello,<br>Thank you joining us! <br>Your order has been created.<br>Thank You,<br>".PROJ_NAME;
   	$subject = "Registration Email From ".PROJ_NAME;
   }
   else if($mailtype==2) {
   	$subject = "Notification Email From ".PROJ_NAME;
   	$body = "Hello,<br>New order has been created, Please check It.<br><br>Thank You,<br>".PROJ_NAME." Team.";
   }
   else if($mailtype==3){
   	$body = "Welcome to ".PROJ_NAME."<br> Activity Done.";
   	$subject = "Welcome Email From ".PROJ_NAME;
   }else if($mailtype==4){
   	$body = "Welcome to ".PROJ_NAME."<br> Email settings are changed.";
   	$subject = "Notification From ".PROJ_NAME;
   }
   	
	include_once APPPATH.'third_party/phpmailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	
	$mail->From = $fromemail;
	$mail->FromName = 'Support Team';
	$mail->addAddress($emailid, 'Dear User');     // Add a recipient
	$mail->addReplyTo($fromemail, 'Support Team');
	
	$mail->Subject = $subject;
	$mail->Body    = $body;
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	$mail->send();
	/*if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Notification email has been sent.';
	}*/
    }
}