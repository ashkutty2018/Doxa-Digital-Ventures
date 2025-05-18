<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // If using Composer

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $file = $_FILES['attachment'];

    if ($file['error'] === 0) {
        $tmpName = $file['tmp_name'];
        $fileName = basename($file['name']);

        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.example.com'; // Replace with your SMTP host
            $mail->SMTPAuth   = true;
            $mail->Username   = 'your_email@example.com'; // Replace
            $mail->Password   = 'your_email_password';    // Replace
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            // Recipients
            $mail->setFrom('your_email@example.com', 'Your Name');
            $mail->addAddress($email);

            // Attach file
            $mail->addAttachment($tmpName, $fileName);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Requested File from Admin';
            $mail->Body    = 'Please find the attached file.';

            $mail->send();
            echo "<script>alert('File sent to $email'); window.history.back();</script>";
        } catch (Exception $e) {
            echo "<script>alert('Mailer Error: {$mail->ErrorInfo}'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('File upload error.'); window.history.back();</script>";
    }
}
?>
