<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // Use your SMTP host
    $mail->SMTPAuth   = true;
    $mail->Username   = 'info@doxaconnect.com'; // Your email
    $mail->Password   = 'doxablesson';   // App-specific password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    //Recipients
    $mail->setFrom('info@doxaconnect.com', 'Website Contact');
    $mail->addAddress('info@doxaconnect.com', 'Admin');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Submission';
    $mail->Body    = "
        <h2>New Inquiry</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Subject:</strong> {$subject}</p>
        <p><strong>Message:</strong><br>" . nl2br($message) . "</p>
    ";

    $mail->send();
    echo "<script>alert('Message sent successfully!'); window.location.href='contact.php';</script>";
} catch (Exception $e) {
    echo "<script>alert('Mailer Error: " . addslashes($mail->ErrorInfo) . "'); window.history.back();</script>";
}
?>
