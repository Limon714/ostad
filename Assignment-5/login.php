<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Retrieve user data from file (for demonstration purposes, please use a database in real applications)
    $users = file("users.txt", FILE_IGNORE_NEW_LINES);

    foreach ($users as $user) {
        list($username, $storedEmail, $storedPassword) = explode("|", $user);
        if ($email === $storedEmail && password_verify($password, $storedPassword)) {
            // User is authenticated, set session and redirect based on role
            session_start();
            $_SESSION["username"] = $username;
            if ($email === "admin@example.com" || "admin@gmail.com") {
                header("Location: admin_dashboard.php");
            } else {
                header("Location: user_dashboard.php");
            }
            exit();
        }
    }
    
    header("Location: index.php"); // Redirect to login page if authentication fails
}
?>



