<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $to = 'Sambryer10@hotmail.com'; // Replace with your email address
    $subject = 'New email from portfolio modal';
    $message = 'Portfolio REQUEST. Email: ' . $_POST['email'];
    // $headers = 'From: tobyking13@gmail.com';

    if (mail($to, $subject, $message, $headers)) {
       // Redirect to www.sambryerdesign.com
        header("Location: http://www.sambryerdesign.com");
        exit();
    } else {
        echo 'Oops! Something went wrong. Please try again later.';
    }
}

?>