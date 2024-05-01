<?php
$name = $_POST['name'];
$visitor_email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$email_from= 'aruns.ug21.cs@nitp.ac.in';

$email_subject='New form Submission';

$email_body= "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "Subject: $subject.\n".
               "User message: $message.\n".

$to = 'panchal.dhwani9760@gmail.com'
$headers= "Form: $email_from\r\n";
$headers .="Reply-To:$visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);
 header("Location:contact.html");

?>