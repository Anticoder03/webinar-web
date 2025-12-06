<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

include "_Nav.php";
include "../config/db.php";

// Fetch event details
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $event = $conn->query("SELECT * FROM events WHERE event_id = $id")->fetch_assoc();
}

if (!$event) {
    die("<h2 class='text-center text-red-600 mt-10'>Event not found!</h2>");
}

// Update logic
if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $speaker_name = $_POST['speaker_name'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $g_form = $_POST['g_form'];

    // ---------- Update Event Banner Image ----------
    $event_banner = $event['event_banner'];
    if (!empty($_FILES['event_banner']['name'])) {

        // delete old file
        if (!empty($event['event_banner']) && file_exists($event['event_banner'])) {
            unlink($event['event_banner']);
        }

        $bannerName = time() . "_" . basename($_FILES["event_banner"]["name"]);
        $bannerTarget = "uploads/event_banner/" . $bannerName;

        if (move_uploaded_file($_FILES["event_banner"]["tmp_name"], $bannerTarget)) {
            $event_banner = $bannerTarget;
        }
    }

    // ---------- Update Speaker Image ----------
    $speaker_image = $event['speaker_image'];
    if (!empty($_FILES['speaker_image']['name'])) {

        if (!empty($event['speaker_image']) && file_exists($event['speaker_image'])) {
            unlink($event['speaker_image']);
        }

        $speakerName = time() . "_" . basename($_FILES["speaker_image"]["name"]);
        $speakerTarget = "uploads/speaker/" . $speakerName;

        if (move_uploaded_file($_FILES["speaker_image"]["tmp_name"], $speakerTarget)) {
            $speaker_image = $speakerTarget;
        }
    }

    // Update query
    $sql = "UPDATE events SET 
                title = '$title',
                description = '$description',
                speaker_name = '$speaker_name',
                speaker_image = '$speaker_image',
                event_banner = '$event_banner',
                event_date = '$event_date',
                event_time = '$event_time',
                g_form = '$g_form'
            WHERE event_id = $id";

    if ($conn->query($sql)) {
        echo "<script>alert('Event updated successfully!'); window.location='see_events.php';</script>";
    } else {
        echo "<script>alert('Failed to update event');</script>";
    }
}
?>

<script src="https://cdn.tailwindcss.com"></script>

<div class="max-w-3xl mx-auto bg-white p-8 mt-10 rounded-xl shadow-lg">

    <h2 class="text-3xl font-bold mb-6 text-blue-600">Edit Event</h2>

    <form action="" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 gap-6">

        <div>
            <label class="font-semibold">Event Title</label>
            <input type="text" name="title" value="<?php echo $event['title']; ?>" required class="w-full border p-3 rounded-lg">
        </div>

        <div>
            <label class="font-semibold">Description</label>
            <textarea name="description" rows="4" required class="w-full border p-3 rounded-lg"><?php echo $event['description']; ?></textarea>
        </div>

        <div>
            <label class="font-semibold">Speaker Name</label>
            <input type="text" name="speaker_name" value="<?php echo $event['speaker_name']; ?>" required class="w-full border p-3 rounded-lg">
        </div>

        <div>
            <label class="font-semibold">Current Speaker Image</label><br>
            <img src="<?php echo $event['speaker_image']; ?>" class="w-20 h-20 rounded-full object-cover mb-2 shadow">
            <input type="file" name="speaker_image" class="w-full border p-3 rounded-lg bg-white">
        </div>

        <div>
            <label class="font-semibold">Current Event Banner</label><br>
            <img src="<?php echo $event['event_banner']; ?>" class="w-32 h-20 rounded object-cover mb-2 shadow">
            <input type="file" name="event_banner" class="w-full border p-3 rounded-lg bg-white">
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="font-semibold">Event Date</label>
                <input type="date" name="event_date" value="<?php echo $event['event_date']; ?>" class="w-full border p-3 rounded-lg" required>
            </div>

            <div>
                <label class="font-semibold">Event Time</label>
                <input type="time" name="event_time" value="<?php echo $event['event_time']; ?>" class="w-full border p-3 rounded-lg">
            </div>
        </div>

        <div>
            <label class="font-semibold">Google Form Link</label>
            <input type="url" name="g_form" value="<?php echo $event['g_form']; ?>" class="w-full border p-3 rounded-lg">
        </div>

        <button type="submit" name="submit"
            class="bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg text-lg font-semibold">
            Update Event
        </button>
    </form>

</div>

<?php include "_Footer.php"; ?>
