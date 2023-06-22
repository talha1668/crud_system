<?php
// session_start();

// Establish database connection (replace 'host', 'username', 'password', and 'database' with your actual values)
require 'config.php';

// Handle registration form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];jo phle mekra wo e idhr hm

    // Check if the email already exists in the database
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) { 
        echo "Email already exists. Please try a different email.";
    } else {
        // Insert the new user into the database
        $query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
        mysqli_query($conn, $query);
        echo "Registration successful. You can now login.";
    }
}

// Close the database connection
// mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h1>User Registration</h1>
    <form method="POST" action="register.php">
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Register</button>
    </form>
    <a href="login.php">Login</a>
</body>
</html>
