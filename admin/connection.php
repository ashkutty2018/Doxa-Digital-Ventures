<?php
// Database configuration
$servername = "localhost"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "doxa"; // Replace with your database name
$port="3307";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname,$port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
