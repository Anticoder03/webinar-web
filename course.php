<?php
include_once 'include/_Nav.php';
include_once 'config/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Courses - Sandes Academy</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

  <!-- Page Header -->
  <section class="bg-emerald-600 text-white py-20 text-center">
    <h1 class="text-4xl md:text-5xl font-bold">Our Courses</h1>
    <p class="text-lg mt-3 opacity-90 max-w-2xl mx-auto">
      Learn from industry experts and build your career with the right skills.
    </p>
  </section>

<!-- Courses Listing -->
<section class="py-16">
  <div class="max-w-7xl mx-auto px-4">

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

      <?php
      $sql = "SELECT * FROM courses ORDER BY course_id DESC";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

          $fullStars = floor($row['ratings']);
          $emptyStars = 5 - $fullStars;
      ?>

      <!-- Dynamic Course Card -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 hover:scale-105 transition-all duration-300 hover:shadow-2xl">
        <div class="relative">
          <img src="./admin/<?php echo $row['banner_image']; ?>" class="w-full h-48 object-cover" alt="Course Image">
          <span class="absolute top-4 left-4 bg-emerald-600 text-white text-sm font-semibold px-3 py-1 rounded">
            <?php echo $row['course_category']; ?>
          </span>
        </div>
        <div class="p-6">
          <div class="flex items-center mb-4">
            <img src="./admin/<?php echo $row['institute_image']; ?>" class="w-10 h-10 rounded-full mr-3">
            <p class="text-gray-700 font-medium"><?php echo $row['institute_name']; ?></p>
          </div>

          <h3 class="text-lg font-semibold mb-2 hover:text-emerald-600 transition-colors duration-300 cursor-pointer">
            <?php echo $row['course_title']; ?>
          </h3>

          <div class="flex items-center justify-between mt-4">
            <div class="text-yellow-400">
              <?php
              for ($i = 0; $i < $fullStars; $i++) {
                echo '<i class="fa-solid fa-star"></i>';
              }
              for ($i = 0; $i < $emptyStars; $i++) {
                echo '<i class="fa-regular fa-star"></i>';
              }
              ?>
            </div>
            <span class="text-sm text-gray-500">(<?php echo $row['total_ratings']; ?> ratings)</span>
          </div>

          <div class="mt-4 flex justify-between items-center">
            <span class="text-gray-600 text-sm"><?php echo $row['students_enrolled']; ?> Students</span>
            <span class="text-emerald-600 font-bold"><?php echo $row['price']; ?></span>
          </div>
        </div>
      </div>

      <?php
        }
      } else {
        echo "<p class='text-center text-gray-600 col-span-3'>No courses found.</p>";
      }
      ?>

    </div>
  </div>
</section>

</body>
</html>




<?php
include_once 'include/_Footer.php';
?>