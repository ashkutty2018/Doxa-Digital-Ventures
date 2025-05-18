<?php
// CONFIGURE ADMIN EMAIL
$admin_email = "info@doxaconnect"; // replace with actual admin email

// Get POST values
$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? 'No Subject';
$message = $_POST['message'] ?? '';

// Step 1: Email Validation
$domain = substr(strrchr($email, "@"), 1);
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !checkdnsrr($domain, "MX")) {
    echo "<script>alert('Invalid email address.'); window.history.back();</script>";
    exit;
}

// Step 2: Send Email to Admin
$to = $admin_email;
$subject_mail = "New Inquiry: $subject";
$body = "
    <h2>New Inquiry Received</h2>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Phone:</strong> $phone</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Subject:</strong> $subject</p>
    <p><strong>Message:</strong><br>$message</p>
";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: info@doxaconnect\r\n"; // Replace with your domain email

if (mail($to, $subject_mail, $body, $headers)) {
    echo "<script>alert('Thank you! Your message has been sent.'); window.location.href='contact.php';</script>";
} else {
    echo "<script>alert('Failed to send email. Please try again later.'); window.history.back();</script>";
}
?>
