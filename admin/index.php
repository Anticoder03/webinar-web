<?php
session_start();

if(!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}
?>

<?php include "_Nav.php"; ?>

<!-- Error Page -->
<div class="flex flex-col items-center justify-center h-[80vh] text-center px-6">

    <h1 class="text-7xl font-extrabold text-red-600 drop-shadow-lg">
        500
    </h1>

    <p class="text-2xl md:text-3xl text-gray-800 mt-3 font-semibold">
        Oops... The server just had a breakdown.
    </p>

    <p class="text-lg text-gray-500 mt-2">
        Chill for a moment, it's probably restarting or fixing itself.
    </p>

    <a href="index.php" 
       class="mt-6 bg-gray-600 hover:bg-gray-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition">
        Try Again
    </a>
</div>
