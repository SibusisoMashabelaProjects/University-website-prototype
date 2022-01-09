<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$comment = $_POST['comment'];


$email_from = 'info@universityofpitori.online';

$email_subject = 'New Comment';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User comment: $comment.\n".
               

$to = 'sjmashabela1@gmail.com';

$headers = "From: $email_from\r\n";

$headers .= "Reply-To: $visitors_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: blog.html");
?>
