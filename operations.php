<?php
// session_start();
require_once 'config.php';
// require_once 'authentication.php';

// $admin = new Admin();
// $auth = new Authentication();
// Check if the user is logged in, otherwise redirect to the login page
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Operations</title>
</head>
<body>
    <h1>Operations</h1>
    <ul>
        <li><a href="insert.php">Insert</a></li>
        <li><a href="show.php">ShowList</a></li>
        <li><a href="edit.php">Update</a></li>
        <li><a href="delete.php">Delete</a></li>
    </ul>
    <nav>
       
