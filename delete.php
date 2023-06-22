<?php
require 'config.php';

// Check if the user is not logged in
// if (!isset($_SESSION['email'])) {
//     header('Location: login.php');
//     exit;
// }

// Check if the student ID is provided in the URL
// if (!isset($_GET['id'])) {
//     header('Location: show.php');
//     exit;
// }

$studentId = $_GET['id'];

// Delete the student record from the database
$query = "DELETE FROM students WHERE id = $studentId";
mysqli_query($conn, $query);

// Redirect to the show.php page after deleting
header('Location: show.php');
exit;
?>
