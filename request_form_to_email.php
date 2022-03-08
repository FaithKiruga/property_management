<?php
//getting values submitted in the form
$fullname = $_POST['name'];
$phoneno = $_POST['phone_no'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//******************composing email message
$email_from = 'faithkiruga5@gmail.com';
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $fullname \n".
    "Here is the message:\n $message \n You can contact $fullname on $phoneno or $visitor_email".

//******************sending the email
    $to = "faithkiruga5@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

if (mail($to,$email_subject,$email_body,$headers)){
// Display the alert box
    echo '<script>alert("Your mail has been sent successfully.")</script>';
} else{
   // echo 'Unable to send email. Please try again.';
    echo '<script>alert("Unable to send email. Please try again.")</script>';
}

