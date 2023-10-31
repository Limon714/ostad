<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

    // Save user data to a file (for demonstration purposes, please use a database in real applications)
    file_put_contents("users.txt", "$username|$email|$password\n", FILE_APPEND);
    
    header("Location: index.php"); // Redirect to registration page after registration
}
?>
