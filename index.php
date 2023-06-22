
<?php
// session_start();
require_once 'config.php';
// require_once 'authentication.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome to the Home Page</h1>
    <nav>
        <a href="index.php">Home</a> |
        <a href="contact.php">Contact Us</a> |
        <!-- <a href="login.php">Login</a> | -->
        <a href="operations.php">Operations</a>
        <a href="register.php">Sign In</a>
    </nav>
</body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
