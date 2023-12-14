<?php
$name = $_REQUEST['name']; // Missing quotation marks
$email = $_REQUEST['email']; // Missing quotation marks
$message = $_REQUEST['message'];

if (empty($name) || empty($email) || empty($message)) {
    echo 'Please fill in all fields.';
} else {
    $to = "anuptwri007@gmail.com";
    $subject = "Test message";
    $headers = "From: $name <$email>"; // No space between '>' and '<'

    // Send the email
    $mailSent = mail($to, $subject, $message, $headers);

    if ($mailSent) {
        echo 'Message sent successfully.';
    } else {
        echo 'Message could not be sent.';
    }
}
?>