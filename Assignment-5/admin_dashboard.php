<?php
session_start();
if (!isset($_SESSION["username"]) || $_SESSION["username"] !== "admin") {
    header("Location: index.php"); // Redirect if not authenticated as admin
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
</head>

<body>
    <h1>Welcome, Admin!</h1>
    <h3> Your user info</h3>
    <table border="1">
        <tr>
            <td> Email : user@gmail.com</td>
            <td> Password : 1234</td>
        </tr>
    </table>

    <br>
    <h3> Your Manager info</h3>
    <table border="1">
        <tr>
            <td> Email : manager@gmail.com</td>
            <td> Password : 1234</td>
        </tr>
    </table>
</body>

</html>
