<?php
$name = $_POST["name"];
$visitor_email = $_POST["email"];
$messege = $_POST["messege"];

$email_from = "sk5926255@gmail.com";

$email_subject = "New form Submission";

$email_body = "User Name: $name. \n".
                "User Email: $email. \n"
                 "User Messege: $messege. \n";

$to = "ameenkhansk123456@gmail.com";

$headers = "From: $email_from \r\n";
$headers = "Reply To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");



?>