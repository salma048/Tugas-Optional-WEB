<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST

        
    $email_form = 'Salma182c@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
        "User Email: $visitor_email.\n".
        "User Messsage: $message.\n";


    $to = "naminyeon33@gmail.com";

    $heaers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>