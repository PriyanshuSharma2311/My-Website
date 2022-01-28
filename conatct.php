<?php
 $name=$_POST['name'];
 $visitor_email= $POST['email'];
 $message=$_POST['message';
 $email_from='priyanshusharma.com';
 $email_subject="New form submit";
 $email_body = "user name: $name.\n". "user email: $visitor_email.\n". "user-message: $message.\n";
$to = "princesharmaji2311@gmail.com";
$headers = "From:$email_from \r\n";
$headers = "Reply_To: $visitor_email \r\n";
mail(($to,$email_subject,$email_body,$headers);)
headers("location: index.html");
?>
