<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

include "config/db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete event images first
    $q = $conn->query("SELECT event_banner, speaker_image FROM events WHERE event_id = $id");
    $img = $q->fetch_assoc();

    if ($img) {
        if (!empty($img['event_banner']) && file_exists($img['event_banner'])) {
            unlink($img['event_banner']);
        }
        if (!empty($img['speaker_image']) && file_exists($img['speaker_image'])) {
            unlink($img['speaker_image']);
        }
    }

    // Delete event record
    $sql = "DELETE FROM events WHERE event_id = $id";

    if ($conn->query($sql)) {
        header("Location: see_.php?msg=deleted");
    } else {
        header("Location: see_events.php?msg=error");
    }
}
?>
