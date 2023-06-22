<?php
// session_start();
require 'config.php';

// Check if the user is not logged in

// Handle insertion form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize the input data
    $rollNo = $_POST['roll_no'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $cgpa = $_POST['cgpa'];

    // Perform necessary validation and sanitation of the input data

    // Insert the data into the database
    $query = "INSERT INTO students (roll_no, name, class, cgpa) VALUES ('$rollNo', '$name', '$class', '$cgpa')";
    mysqli_query($conn, $query);

    // Redirect to the show.php page after insertion
    header('Location: show.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert</title>
</head>
<body>
    <h1>Insert</h1>
    <form method="POST" action="insert.php">
        <label>Roll No:</label>
        <input type="text" name="roll_no" required><br>
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Class:</label>
        <input type="text" name="class" required><br>
        <label>CGPA:</label>
        <input type="text" name="cgpa" required><br>
        <button type="submit">Insert</button>
    </form>
    <a href="operations.php">Back to Operations</a>
</body>
</html>
