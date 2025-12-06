<?php
if(!isset($_SESSION)) {
    session_start();
}
?>
<script src="https://cdn.tailwindcss.com"></script>

<!-- Tailwind Navbar -->
<nav class="bg-gray-900 text-white px-6 py-4 shadow-lg">
    <div class="max-w-7xl mx-auto flex items-center justify-between">

        <!-- Left Links -->
        <div class="flex items-center space-x-6">

            <a href="index.php" class="hover:text-blue-400 transition">Dashboard</a>

            <!-- Course Section -->
            <a href="see_courses.php" class="hover:text-blue-400 transition">See Courses</a>
            <a href="add_course.php" class="hover:text-blue-400 transition">Add Course</a>

            <!-- Event Section -->
            <a href="see_events.php" class="hover:text-blue-400 transition">See Events</a>
            <a href="add_event.php" class="hover:text-blue-400 transition">Add Event</a>

        </div>

        <!-- Right User Info -->
        <div class="flex items-center space-x-3">
            <span>
                Logged in as: 
                <strong class="text-blue-300">
                    <?php echo $_SESSION['admin_name']; ?>
                </strong>
            </span>

            <a href="logout.php" 
               class="text-red-400 hover:text-red-500 font-semibold transition">
               Logout
            </a>
        </div>

    </div>
</nav>
