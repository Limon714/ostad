<?php
session_start();
if (!isset($_SESSION["username"]) || $_SESSION["username"] !== "manager") {
    header("Location: index.php"); // Redirect if not authenticated as admin
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
</head>

<body>
    <h1>Welcome, Manager!</h1>
    <p>Management functionalities are goes in here.</p>
</body>

</html>
