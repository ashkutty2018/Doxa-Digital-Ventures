<?php
// Get form data
$uname = $_POST["name"] ?? '';
$email = $_POST["email"] ?? '';
$phone = $_POST["phone"] ?? '';
$event = $_POST["subject"] ?? '';
$sdate = $_POST["message"] ?? '';

// Basic validation (optional)
if (empty($uname) || empty($email) || empty($phone) || empty($event) || empty($sdate)) {
    die("All fields are required!");
}

// Set admin email
$adminEmail = "info@doxaconnect.com";

// Create email content
$subject = "New Appointment Booked";
$message = "A new appointment has been booked:\n\n";
$message .= "Name: $uname\n";
$message .= "Email: $email\n";
$message .= "Phone: $phone\n";
$message .= "Consultation: $event\n";
$message .= "Selected Time: $sdate\n";

// Send email
$headers = "From: $email\r\n";
if (mail($adminEmail, $subject, $message, $headers)) {
    echo "<script>alert('Thank you! Your appointment has been submitted.'); window.location.href = 'viewprice.php';</script>";
} else {
    echo "<script>alert('Failed to send the email. Please try again later.'); window.history.back();</script>";
}
?>
