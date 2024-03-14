<?php
$to = 'recipient@example.com';
$subject = 'Test Mail from PHP Script';
$body = 'This is a test mail sent from a PHP script';
$headers =  'MIME-Version: 1.0' . "\r\n";
$headers .= 'From: Your Name <sender@example.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// send the email
mail($to, $subject, $body, $headers);
?>