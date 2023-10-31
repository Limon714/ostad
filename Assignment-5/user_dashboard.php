<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php"); // Redirect if not authenticated
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">

</head>

<body>
    <h1>Welcome, <?php echo $_SESSION["username"]; ?>!</h1>
    <p>User-specific content and functionalities go here.</p>
</body>

</html>
