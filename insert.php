<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Get form data safely
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';

$message = isset($_POST['message']) ? trim($_POST['message']) : '';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Invalid email address.'); window.history.back();</script>";
    exit;
}

// Validate phone number (only digits, 10-15 digits)
if (!preg_match('/^[0-9]{10,15}$/', $phone)) {
    echo "<script>alert('Invalid phone number. Only digits allowed (10-15 digits).'); window.history.back();</script>";
    exit;
}
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'doxadigitalventures@gmail.com'; // Your Gmail address
    $mail->Password   = 'vfhwuyagfdlbjxjc';        // Gmail App Password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Recipients
    $mail->setFrom('doxadigitalventures@gmail.com', 'Doxa Contact');
    $mail->addAddress('doxadigitalventures@gmail.com', 'Admin');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Submission';
    $mail->Body    = "
        <h2>New Inquiry</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
      
        <p><strong>Message:</strong><br>" . nl2br($message) . "</p>
    ";

    $mail->send();
    echo "<script>alert('Message sent successfully!'); window.location.href='contact.php';</script>";
} catch (Exception $e) {
    echo "<script>alert('Mailer Error: " . addslashes($mail->ErrorInfo) . "'); window.history.back();</script>";
}
?>
