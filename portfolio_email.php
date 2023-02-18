<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $to = 'Sambryer10@hotmail.com'; // Replace with your email address
    $subject = 'NEW PORTFOLIO REQUEST';
    $message = 'PORTFOLIO REQUEST. Email: ' . $_POST['email'];
    // $headers = 'From: sambryerdesign.com';

    if (mail($to, $subject, $message)) {
       // Redirect to www.sambryerdesign.com
        header("Location: http://www.sambryerdesign.com");
        exit();
    } else {
        echo 'Oops! Something went wrong. Please try again later.';
    }
}

?>