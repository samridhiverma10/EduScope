<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@easy.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n" .
              "User Email: $visitor_email.\n" .
              "Subject: $subject.\n" .
              "User Message: $message.\n";  // Removed the extra period at the end

$to = "samridhiverma01@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";  // Used .= to append headers correctly

mail($to, $email_subject, $email_body, $headers);
header("Location: contact.html");
?>
