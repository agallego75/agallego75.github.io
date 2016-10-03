<?php
  $name = $_POST['cf_name'];
  $visitor_email = $_POST['cf_email'];
  $message = $_POST['body'];
?>

<?php
    $email_from = 'agallego75@gmail.com';
 
    $email_subject = "New Form submission";
 
    $email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".
?>

<?php
 
  $to = "agallego75@gmail.com";
 
  $headers = "From: $email_from \r\n";
 
  $headers .= "Reply-To: $visitor_email \r\n";
 
  mail($to,$email_subject,$email_body,$headers);
 
?>



