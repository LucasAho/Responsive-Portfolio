<?php

if(isset($POST['submit']))
{
    //This page should not be accessed directly
    echo "error; you need to submit the form!";
}
$name = $_POST['fName'];
$visitor_email = $_POST['emailAdd'];
$message = $_POST['messageIn'];
 
//Validate First
if(empty($name)||empty($visitor_email))
{
    echo "Please fill name and email";
    exit;
}

$email_from = 'aholucas11@gmail.com';
$email_subject = "New form submission";
$email_body = "You have recieved an email from the user $name.\n".
    "email address: $visitor_email\n".
    "Here is the message:\n $message".

$to = "aholucas11@gmail.com";
$headers = "From: $email_from \r\n";

//Send the email
mail($to,$email_subject,$email_body,$headers);

?> 

