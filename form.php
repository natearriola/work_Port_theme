 
<?php 

$name = $POST['name'];
$vistor_email =$POST['email'];
$message =$_POST['message'];

$email_from='nathanielarriola@gmail.com';

$email_subject="New Form Submissions";

$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"User Message: $message.\n";


$to = "nathanielarriola@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply To: $visitor_email \r\n";

mail($to,email_subject,$email_body,$headers);

header("Location: about.html");



?>