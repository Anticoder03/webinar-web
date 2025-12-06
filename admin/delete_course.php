<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

include "../config/db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Get current images
    $q = $conn->query("SELECT banner_image, institute_image FROM courses WHERE course_id = $id");
    $img = $q->fetch_assoc();

    // Delete files
    if ($img) {
        if (!empty($img['banner_image']) && file_exists($img['banner_image'])) {
            unlink($img['banner_image']);
        }
        if (!empty($img['institute_image']) && file_exists($img['institute_image'])) {
            unlink($img['institute_image']);
        }
    }

    // Delete row
    $sql = "DELETE FROM courses WHERE course_id = $id";

    if ($conn->query($sql)) {
        header("Location: see_courses.php?msg=deleted");
    } else {
        header("Location: see_courses.php?msg=error");
    }
}
?>
