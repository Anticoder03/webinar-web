<?php
session_start();

if(!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}
?>

<?php include "_Nav.php"; ?>

<div class="container" style="display: flex; flex-direction:column; justify-content: center; align-items: center; height: 80vh;">
    <h1 class="text-red-600 text-6xl">Sorry Looks Like There Is A Server Issue</h1>
    <br>
    <h1 class="text-4xl ">Try Again</h1>
</div>
