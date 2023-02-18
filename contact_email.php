<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set up email
  $to = "Sambryer10@hotmail.com";
  $subject = "New message from contact form";
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  // Send email
  if(mail($to, $subject, $body)) {
    // Redirect to www.sambryerdesign.com
    header("Location: http://www.sambryerdesign.com");
    exit();
  } else {
    echo "There was an error sending your message. Please try again later.";
  }
}
?>
