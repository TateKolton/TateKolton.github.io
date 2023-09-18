<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "tatekolton@gmail.com";
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";

    // You can add more headers or modify the email content as needed.

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully. Thank you for your message!";
    } else {
        echo "Error: Unable to send email.";
    }
} else {
    echo "Error: Invalid request.";
}
?>
