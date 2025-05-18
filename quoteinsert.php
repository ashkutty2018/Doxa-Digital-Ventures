



<?php
// Admin Email Configuration
$admin_email = "info@doxaconnect.au";

// Get POST data
$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

// Step 1: Email validation
$domain = substr(strrchr($email, "@"), 1);
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !checkdnsrr($domain, "MX")) {
    echo "<script>alert('Invalid email address. Please enter a valid email.'); window.history.back();</script>";
    exit;
}

// Step 2: Send email to admin
$mail_subject = "New Inquiry: $subject";
$mail_body = "
    <h2>New Inquiry Received</h2>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Phone:</strong> $phone</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Subject:</strong> $subject</p>
    <p><strong>Message:</strong><br>$message</p>
";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: info@doxaconnect.au\r\n";

// Attempt to send email
if (mail($admin_email, $mail_subject, $mail_body, $headers)) {
    echo "<script>alert('Thank you! Your message has been sent to the admin.'); window.history.back();</script>";
} else {
    echo "<script>alert('Failed to send email to admin.'); window.history.back();</script>";
}
?>
