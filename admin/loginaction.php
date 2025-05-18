<?php
// Start a session to track the logged-in user
session_start();

// Hardcoded admin credentials (replace with database check in a real application)
$admin_username = "admin";
$admin_password = "admin123";

// Get the form data
$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';

// Initialize error message
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate the input
    if (empty($username) || empty($password)) {
        $error_message = "Please fill in all fields.";
    } elseif ($username === $admin_username && $password === $admin_password) {
        // Successful login
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin'] = $username;
        // Redirect to the admin dashboard (adjust the URL as needed)
        header("Location: admin_dashboard.php");
        exit();
    } else {
        // Invalid credentials
        $error_message = "Invalid username or password.";
    }
}
?>