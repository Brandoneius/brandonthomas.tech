<?php
ini_set('display_errors', 'On');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	echo "Hello!";
  $name = strip_tags(trim($_POST["name"]));
  $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
  $message = trim($_POST["message"]);

  // Set the recipient email address here
  $to = "your-email@example.com";

  // Set the email subject
  $subject = "New Contact Form Submission from $name";

  // Set the email message body
  $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

  // Send the email
  mail($to, $subject, $body);
  echo "Mail Sent";
} else {
	echo "HOw did you get here?";
}

?>