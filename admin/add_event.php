<?php
include_once '../config/db.php';
include_once '../include/_Header.php';
include_once '../include/_Nav.php';

// Handle form submission
if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $speaker_name = $_POST['speaker_name'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $g_form = $_POST['g_form'];

    // ---------- Upload Event Banner Image ----------
    $event_banner = "";
    if (!empty($_FILES['event_banner']['name'])) {
        $bannerName = time() . "_" . basename($_FILES["event_banner"]["name"]);
        $bannerTarget = "uploads/event_banner/" . $bannerName;

        if (move_uploaded_file($_FILES["event_banner"]["tmp_name"], $bannerTarget)) {
            $event_banner = $bannerTarget;
        }
    }

    // ---------- Upload Speaker Image ----------
    $speaker_image = "";
    if (!empty($_FILES['speaker_image']['name'])) {
        $speakerName = time() . "_" . basename($_FILES["speaker_image"]["name"]);
        $speakerTarget = "uploads/speaker/" . $speakerName;

        if (move_uploaded_file($_FILES["speaker_image"]["tmp_name"], $speakerTarget)) {
            $speaker_image = $speakerTarget;
        }
    }

    // Insert into database
    $sql = "INSERT INTO events (title, description, speaker_name, speaker_image, event_banner, event_date, event_time, g_form)
            VALUES ('$title', '$description', '$speaker_name', '$speaker_image', '$event_banner', '$event_date', '$event_time', '$g_form')";

    if ($conn->query($sql)) {
        echo "<script>alert('Event added successfully!'); window.location='add_event.php';</script>";
    } else {
        echo "<script>alert('Error: Failed to add event');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Event</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="max-w-3xl mx-auto bg-white p-8 mt-10 rounded-xl shadow-lg">
    <h2 class="text-3xl font-bold mb-6 text-emerald-700">Add New Event</h2>

    <form action="" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 gap-6">

        <!-- Title -->
        <div>
            <label class="font-semibold">Event Title</label>
            <input type="text" name="title" required class="w-full border p-3 rounded-lg">
        </div>

        <!-- Description -->
        <div>
            <label class="font-semibold">Short Description</label>
            <textarea name="description" required class="w-full border p-3 rounded-lg" rows="4"></textarea>
        </div>

        <!-- Speaker Name -->
        <div>
            <label class="font-semibold">Speaker Name</label>
            <input type="text" name="speaker_name" required class="w-full border p-3 rounded-lg">
        </div>

        <!-- Speaker Image -->
        <div>
            <label class="font-semibold">Speaker Image</label>
            <input type="file" name="speaker_image" required class="w-full border p-3 bg-white rounded-lg">
        </div>

        <!-- Event Banner -->
        <div>
            <label class="font-semibold">Event Banner Image</label>
            <input type="file" name="event_banner" required class="w-full border p-3 bg-white rounded-lg">
        </div>

        <!-- Date + Time -->
        <div class="grid grid-cols-2 gap-6">
            <div>
                <label class="font-semibold">Event Date</label>
                <input type="date" name="event_date" required class="w-full border p-3 rounded-lg">
            </div>
            <div>
                <label class="font-semibold">Event Time</label>
                <input type="time" name="event_time" class="w-full border p-3 rounded-lg">
            </div>
        </div>

        <!-- Google Form URL -->
        <div>
            <label class="font-semibold">Google Form Link</label>
            <input type="url" name="g_form" placeholder="https://forms.gle/your_form" class="w-full border p-3 rounded-lg">
        </div>

        <!-- Submit -->
        <button type="submit" name="submit" 
            class="bg-emerald-600 hover:bg-emerald-700 text-white py-3 rounded-lg text-lg font-semibold">
            Add Event
        </button>
    </form>
</div>

</body>
</html>
