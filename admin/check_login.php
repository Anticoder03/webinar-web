<?php
session_start();

// Dummy credentials (Replace with DB values)
$correct_username = "admin";
$correct_password = "12345";

$username = $_POST['username'];
$password = $_POST['password'];

if($username === $correct_username && $password === $correct_password) {
    $_SESSION['admin_logged_in'] = true;
    $_SESSION['admin_name'] = $username;

    header("Location: index.php");
    exit;
} else {
    header("Location: login.php?error=1");
    exit;
}
?>
