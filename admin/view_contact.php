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
    <title>View Contacts</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <link href="style.css" type="text/css" rel="stylesheet">
    </style>
</head>
<body>
    <div class="navbar">
        <h2 style="display:inline">Admin Panel</h2>
        <ul style="display:inline">
            <li><a href="view_getquote.php">View GetQuote</a></li>
            <li><a href="view_contact.php">View Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <h1>Contact Submissions</h1>

    <?php
    $sql = "SELECT * FROM contact ORDER BY c_id DESC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                </tr>";
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$i}</td>
                    <td>{$row['cname']}</td>
                    <td>{$row['cemail']}</td>
                    <td>{$row['cphone']}</td>
                    <td>{$row['message']}</td>
                </tr>";
            $i++;
        }
        echo "</table>";
    } else {
        echo "<p>No contact data found.</p>";
    }

    mysqli_close($conn);
    ?>
</body>
</html>
