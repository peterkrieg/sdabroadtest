<?php
	// ========== Enter your e-mail address here ========== //
	$to = 'copperkrieg@gmail.com';
	
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$subject = $_REQUEST['subject'];
	
	if($subject==""){
		$subject = 'Question About Summer Destinations';
	}
	
	$message=$_REQUEST['message'];
	
	$body = "Name: \t$name \nEmail: \t$email \n\nMessage: \n\n$message";
	$headers = 'From: '.$name.' <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;
	
	mail($to, $subject, $body, $headers);
?>