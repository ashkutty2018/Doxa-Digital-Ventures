<?php
// Set admin email
$admin_email = "info@doxaconnect.com"; // Replace with your email

// Get form data
$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? 'Website Inquiry';
$message = $_POST['message'] ?? '';

// Step 1: Validate email
$domain = substr(strrchr($email, "@"), 1);
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !checkdnsrr($domain, "MX")) {
    echo "<script>alert('Invalid email address.'); window.history.back();</script>";
    exit;
}

// Step 2: Send Email to Admin
$mail_subject = "New Contact Form Submission";
$mail_body = "
<html>
<head>
  <title>New Inquiry</title>
</head>
<body>
  <h2>New Inquiry Received</h2>
  <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
  <p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>
  <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
  <p><strong>Subject:</strong> " . htmlspecialchars($subject) . "</p>
  <p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>
</body>
</html>
";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: Website Form <info@doxaconnect.com>\r\n"; // Replace with your domain email

// Send the email
if (mail($admin_email, $mail_subject, $mail_body, $headers)) {
    echo "<script>alert('Thank you! Your message has been sent.'); window.location.href='contact.php';</script>";
} else {
    echo "<script>alert('Failed to send email.'); window.history.back();</script>";
}
?>
