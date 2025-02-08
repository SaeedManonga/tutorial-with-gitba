<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'saeedmanonga@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Eame: $visitor_email.\n".
              "User Subject: $subject.\n".
               "User Message: $message.\n";

$to = 'manongasaeed@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

$mail ($to,$email_subject,$email_body,$headers);

header(header: "Location: Contact.html");


?>