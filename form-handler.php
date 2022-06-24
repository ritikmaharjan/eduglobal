<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'studyinabroadfor@gmail.com';

$email_suject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "User Subject: $subject.\n".
              "User Message: $message.\n";

$to = 'maharjanritik@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email r\n\";

mail($to,$email_suject,$email_body,$headers);

header("Location: contact.html");
?>