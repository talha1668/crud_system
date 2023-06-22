<?php
// session_start();
require 'config.php';

// Check if the user is not logged in
// if (!isset($_SESSION['email'])) {
//     header('Location: login.php');
//     exit;
// }

// Fetch all student records from the database
$query = "SELECT * FROM students";
$result = mysqli_query($conn, $query);
$students = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Show List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Show List</h1>
    <table>
        <tr>
            <th>RollNo</th>
            <th>Name</th>
            <th>Class</th>
            <th>CGPA</th>
            <th>Percentage</th>
            <th>Operations</th>
        </tr>
        <?php foreach ($students as $student){ ?>
            <tr>
                <td><?php echo $student['roll_no']; ?></td>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['class']; ?></td>
                <td><?php echo $student['cgpa']; ?></td>
                <td><?php echo ($student['cgpa'] / 4) * 100 . '%'; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $student['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $student['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <a href="operations.php">Back to Operations</a>
</body>
</html>
