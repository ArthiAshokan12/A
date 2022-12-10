<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


    /*website email id*/
    
    $email_from = 'arthiasohokan2001@gmail.com';

    /*Form Submission*/
    
$email_subject ='New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";
    
    /*email id where we want to receive the enquiry email id*/

$to = 'arthiashok12@gmail.com';
$headers = "From: $email_from \r\n";

$headers .= "Reply-To:"$visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers)
header("Location: contact.html");



?>