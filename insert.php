<?php
// Admin email
$admin_email = "info@doxaconnect.com"; // Replace with your admin email

// Get form data
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validate email format and domain
$domain = substr(strrchr($email, "@"), 1);
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !checkdnsrr($domain, "MX")) {
    echo "<script>alert('Invalid email address.'); window.history.back();</script>";
    exit;
}

// Prepare email content
$subject = "New Inquiry from Website";
$body = "
<html>
<head>
  <title>New Contact Message</title>
</head>
<body>
  <h2>New Inquiry Received</h2>
  <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
  <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
  <p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>
  <p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>
</body>
</html>
";

// Email headers
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: Website Contact <info@doxaconnect.com>\r\n";

// Send email
if (mail($admin_email, $subject, $body, $headers)) {
    echo "<script>alert('Thank you! Your message has been sent to the admin.'); window.location.href='contact.php';</script>";
} else {
    echo "<script>alert('Sorry, email failed to send.'); window.history.back();</script>";
}
?>
