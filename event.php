<?php
include_once 'include/_Header.php';
include_once 'include/_Nav.php';
include_once 'config/db.php';
?>

<title>Upcoming Events </title>

<!-- Hero Section -->
<section
  class="relative w-full h-[60vh] flex items-center justify-center bg-cover bg-center"
  style="background-image: url('https://images.unsplash.com/photo-1533228100845-08145b01de14?auto=format&fit=crop&w=1350&q=80');"
>
  <div class="absolute inset-0 bg-black/40"></div>

  <div class="relative z-10 text-center">
    <h1 class="text-5xl font-bold text-white mb-4">Upcoming Events</h1>
    <p class="text-lg text-gray-200 max-w-2xl mx-auto">
      Stay updated with our webinars, workshops, guest lectures, and career-boosting live sessions.
    </p>
  </div>
</section>
<!-- Events Section -->
<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6">

    <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">
      Don’t Miss Our Next Big Events
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

      <?php
      $sql = "SELECT * FROM events ORDER BY event_date ASC";
      $res = $conn->query($sql);

      if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {

          // Convert date to readable format (e.g. 14 Mar 2025)
          $formattedDate = date("d M Y", strtotime($row['event_date']));
      ?>

      <!-- Dynamic Event Card -->
      <div class="bg-white rounded-xl shadow hover:shadow-2xl transition-all duration-300 overflow-hidden">
        <div class="relative">
          
          <!-- Event Banner Image -->
          <img 
            src="./admin/<?php echo $row['event_banner']; ?>" 
            class="w-full h-56 object-cover"
            alt="Event Banner"
          />

          <!-- Date Badge -->
          <span class="absolute top-4 left-4 bg-emerald-600 text-white px-3 py-1 text-sm font-semibold rounded">
            <?php echo $formattedDate; ?>
          </span>
        </div>

        <div class="p-6">
          
          <!-- Event Title -->
          <h3 class="text-xl font-semibold mb-2 hover:text-emerald-600 cursor-pointer">
            <?php echo $row['title']; ?>
          </h3>

          <!-- Event Description -->
          <p class="text-gray-600 mb-4">
            <?php echo $row['description']; ?>
          </p>

          <!-- Speaker Info -->
          <div class="flex items-center gap-3">
            <img 
              src="./admin/<?php echo $row['speaker_image']; ?>" 
              class="w-10 h-10 rounded-full object-cover"
              alt="Speaker Image"
            />
            <p class="text-gray-700 text-sm">Speaker: <?php echo $row['speaker_name']; ?></p>
          </div>

          <div class="mt-4">
            <a 
              href="<?php echo $row['g_form']; ?>" 
              target="_blank"
              class="inline-block bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded-lg text-sm font-semibold"
            >
              Register Now
            </a>
          </div>

        </div>
      </div>

      <?php
        }
      } else {
        echo "<p class='text-center text-gray-600 col-span-3'>No upcoming events available.</p>";
      }
      ?>

    </div>

  </div>
</section>

<?php
include_once 'include/_Footer.php';
?>
