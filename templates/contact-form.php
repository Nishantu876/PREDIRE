<?php
$name = $_POST['name']
$user_email = $_POST['u_email']
$subject = $_POST['subj']
$message = $_POST['message']

$email_from = "yashsurve2@gmail.com";
$email_subj = "New Form Submission"
$email_body = "User Name: $name.\n".
                "User Email: $user_email.\n".
                "Subject: $subject.\n".
                "Message: $message.\n";

$to = 'nishantu876@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $user_email \r\n";

mail($to,$email_subj,$email_body,$headers);

header("Location: contactUs.html")

?>