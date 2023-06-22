<?php
// session_start();
require 'config.php';

// Check if the user is not logged in


// Check if the student ID is provided in the URL
if (!isset($_GET['id'])) {
    header('Location: show.php');
    exit;
}

$studentId = $_GET['id'];

// Fetch the student record from the database
$query = "SELECT * FROM students WHERE id = $studentId";
$result = mysqli_query($conn, $query);
$student = mysqli_fetch_assoc($result);

// Handle update form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize the updated input data
    $rollNo = $_POST['roll_no'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $cgpa = $_POST['cgpa'];

    // Perform necessary validation and sanitation of the updated input data

    // Update the student record in the database
    $query = "UPDATE students SET roll_no = '$rollNo', name = '$name', class = '$class', cgpa = '$cgpa' WHERE id = $studentId";
    mysqli_query($conn, $query);

    // Redirect to the show.php page after updating
    header('Location: show.php');
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
</head>
<body>
    <h1>Edit</h1>
    <form method="POST" action="edit.php?id=<?php echo $studentId; ?>">
        <label>Roll No:</label>
        <input type="text" name="roll_no" value="<?php echo $student['roll_no']; ?>" required><br>
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $student['name']; ?>" required><br>
        <label>Class:</label>
        <input type="text" name="class" value="<?php echo $student['class']; ?>" required><br>
        <label>CGPA:</label>
        <input type="text" name="cgpa" value="<?php echo $student['cgpa']; ?>" required><br>
        <button type="submit">Update</button>
    </form>
    <a href="show.php">Back to Show List</a>
</body>
</html>
