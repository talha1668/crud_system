<?php
// session_start();

// Establish database connection (replace 'host', 'username', 'password', and 'database' with your actual values)
require 'config.php';

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email and password match the database records
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) { 
        $_SESSION['user'] = $email;
        header("Location: operations.php");
        exit();
    } else {
        echo "Invalid email or password.";
    }
}

// Close the database connection
// mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
</head>
<body>
    <h1>User Login</h1>
    <form method="POST" action="login.php">
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Login</button>
