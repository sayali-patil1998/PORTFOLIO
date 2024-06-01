<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
  
      // Compose the email message
      $to = "sayaliapatil.28@gmail.com";
      $subject = "Contact Form Submission - " . $subject;
      $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";
  
      // Send email
      if (mail($to, $subject, $body)) {
          echo "success";
      } else {
          echo "error";
      }
  } else {
      echo "Method Not Allowed";
  }
  ?>
  
