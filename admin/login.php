<?php
session_start();

// If user already logged in, send to dashboard
if(isset($_SESSION['admin_logged_in'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="w-full max-w-sm bg-white p-8 rounded-xl shadow-md border border-gray-200">
      <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Admin Login</h2>

      <form action="check_login.php" method="POST" class="space-y-4">

          <div>
              <label class="block text-gray-700 mb-1">Username</label>
              <input type="text" name="username" 
                  class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                  required>
          </div>

          <div>
              <label class="block text-gray-700 mb-1">Password</label>
              <input type="password" name="password"
                  class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                  required>
          </div>

          <button type="submit" 
              class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-lg transition">
              Login
          </button>
      </form>

      <?php
      if(isset($_GET['error'])) {
          echo "<p class='text-red-600 text-center mt-4 font-medium'>Invalid username or password!</p>";
      }
      ?>
  </div>

</body>
</html>
