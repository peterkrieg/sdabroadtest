<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];
$subject = $_POST['cf_subject'];







$mail_to = 'pkrieg2@gmail.com';

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message."\n";


// $headers = 'From: '.$field_email."\r\n";
// $headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);






// Below stuff isn't completely necessary

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message! We will contact you shortly.');
		window.location = 'http://peterkrieg.com/sdabroadtest'
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to pkrieg2@gmail.com');
		window.location = 'http://peterkrieg.com/sdabroadtest'
	</script>
<?php
}


?>