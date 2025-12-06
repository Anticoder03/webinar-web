<?php
session_start();

if(!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

include "_Nav.php";
include_once '../config/db.php';

// Fetch total courses
$result_courses = $conn->query("SELECT COUNT(*) AS total FROM courses");
$total_courses = $result_courses->fetch_assoc()['total'];

// Fetch total events
$result_events = $conn->query("SELECT COUNT(*) AS total FROM events");
$total_events = $result_events->fetch_assoc()['total'];

?>

<script src="https://cdn.tailwindcss.com"></script>

<!-- Dashboard Section -->
<div class="max-w-7xl mx-auto px-6 py-10">

    <h1 class="text-3xl font-bold text-gray-900 mb-6">
        Welcome Back, <span class="text-emerald-600"><?php echo $_SESSION['admin_name']; ?></span>
    </h1>

    <!-- Stats Boxes -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">

        <!-- Courses -->
        <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
            <h2 class="text-xl font-semibold text-gray-800">Total Courses</h2>
            <p class="text-4xl font-bold text-emerald-600 mt-2"><?php echo $total_courses; ?></p>
            <a href="see_courses.php" class="text-emerald-600 mt-3 inline-block hover:underline">
                View Courses →
            </a>
        </div>

        <!-- Events -->
        <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
            <h2 class="text-xl font-semibold text-gray-800">Total Events</h2>
            <p class="text-4xl font-bold text-blue-500 mt-2"><?php echo $total_events; ?></p>
            <a href="see_events.php" class="text-blue-600 mt-3 inline-block hover:underline">
                View Events →
            </a>
        </div>

        <!-- Admin Quick Info -->
        <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
            <h2 class="text-xl font-semibold text-gray-800">Admin Information</h2>
            <p class="text-gray-700 mt-2">Name: <strong><?php echo $_SESSION['admin_name']; ?></strong></p>
            <p class="text-gray-700">Role: Administrator</p>
            <p class="text-gray-700">Last Login: Today</p>
        </div>

    </div>

    <!-- Overview Section -->
    <div class="bg-white shadow rounded-xl p-8 mb-12">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Quick Overview</h2>

        <ul class="text-gray-700 space-y-3 leading-relaxed">
            <li>✔ Manage courses: add, edit, delete, and update course listings.</li>
            <li>✔ Handle events: schedule upcoming events and attach Google Form links.</li>
            <li>✔ Upload images (banner + speaker) with auto-handling.</li>
            <li>✔ Real-time updates shown on the public website.</li>
            <li>✔ Secure admin authentication with session-based login.</li>
            <li>✔ Simple, fast, and clean management interface.</li>
        </ul>
    </div>

    <!-- System Summary -->
    <!-- <div class="bg-white shadow rounded-xl p-8 mb-12">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">System Summary</h2>

        <p class="text-gray-700 mb-3">
            This admin panel allows you to manage all educational content of the platform. 
            Whether it’s uploading new courses, scheduling webinars, or maintaining event details — 
            everything is done from one place.
        </p>

        <p class="text-gray-700">
            Designed for speed and simplicity, powered by <strong>PHP + MySQL</strong>, styled with 
            <strong>TailwindCSS</strong>, and managed by 
            <span class="text-emerald-600 font-semibold">Anticoder03</span>.
        </p>
    </div> -->

</div>

<?php include_once "_Footer.php"; ?>
