<?php
require_once 'connection.php';
?>
<?php
session_start();
// Optional: Check if admin is logged in
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View GetQuote</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>

<div class="navbar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="view_getquote.php">View GetQuote</a></li>
            <li><a href="view_contact.php">View Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>


<h1>Get Quote Submissions</h1>

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Service</th>
        <th>Subject</th>
        <th>Send File</th>
    </tr>

<?php
$query = "SELECT * FROM getquote";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['email']}</td>";
        echo "<td>{$row['phoneno']}</td>";
        echo "<td>{$row['subject']}</td>";
        echo "<td>{$row['subject']}</td>";
        echo "<td>
                <form action='send_file.php' method='post' enctype='multipart/form-data'>
                    <input type='hidden' name='email' value='{$row['email']}'>
                    <input type='file' name='attachment' required>
                    <button type='submit'>Send</button>
                </form>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No data found.</td></tr>";
}

mysqli_close($conn);
?>

</table>

</body>
</html>
