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

      <!-- Event Card -->
      <div class="bg-white rounded-xl shadow hover:shadow-2xl transition-all duration-300 overflow-hidden">
        <div class="relative">
          <img 
            src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=800&q=80"
            class="w-full h-56 object-cover"
          />
          <span class="absolute top-4 left-4 bg-emerald-600 text-white px-3 py-1 text-sm font-semibold rounded">
            14 Mar 2025
          </span>
        </div>

        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2 hover:text-emerald-600 cursor-pointer">
            Workshop: Breaking Into Clinical Research
          </h3>

          <p class="text-gray-600 mb-4">
            Learn how to start a career in Clinical Research & understand the real industry requirements.
          </p>

          <div class="flex items-center gap-3">
            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=80&q=80"
                 class="w-10 h-10 rounded-full" />
            <p class="text-gray-700 text-sm">Speaker: Dr. Maya Sharma</p>
          </div>

          <div class="mt-4">
            <a href="#" class="inline-block bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded-lg text-sm font-semibold">
              Register Now
            </a>
          </div>
        </div>
      </div>

      <!-- Event Card -->
      <div class="bg-white rounded-xl shadow hover:shadow-2xl transition-all duration-300 overflow-hidden">
        <div class="relative">
          <img 
            src="https://images.unsplash.com/photo-1553877522-43269d4ea984?auto=format&fit=crop&w=800&q=80"
            class="w-full h-56 object-cover"
          />
          <span class="absolute top-4 left-4 bg-emerald-600 text-white px-3 py-1 text-sm font-semibold rounded">
            20 Mar 2025
          </span>
        </div>

        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2 hover:text-emerald-600 cursor-pointer">
            Live Webinar: Introduction to Pharmacovigilance
          </h3>

          <p class="text-gray-600 mb-4">
            A beginner-friendly webinar explaining core concepts, career paths & certifications.
          </p>

          <div class="flex items-center gap-3">
            <img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e?auto=format&fit=crop&w=80&q=80"
                 class="w-10 h-10 rounded-full" />
            <p class="text-gray-700 text-sm">Speaker: Rahul Patil</p>
          </div>

          <div class="mt-4">
            <a href="#" class="inline-block bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded-lg text-sm font-semibold">
              Register Now
            </a>
          </div>
        </div>
      </div>

      <!-- Event Card -->
      <div class="bg-white rounded-xl shadow hover:shadow-2xl transition-all duration-300 overflow-hidden">
        <div class="relative">
          <img 
            src="https://images.unsplash.com/photo-1560439514-4e9645039924?auto=format&fit=crop&w=800&q=80"
            class="w-full h-56 object-cover"
          />
          <span class="absolute top-4 left-4 bg-emerald-600 text-white px-3 py-1 text-sm font-semibold rounded">
            27 Mar 2025
          </span>
        </div>

        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2 hover:text-emerald-600 cursor-pointer">
            Hands-On Session: Clinical Data Management Tools
          </h3>

          <p class="text-gray-600 mb-4">
            Learn SAS, Oracle RDC, and Medidata basics with hands-on demonstrations.
          </p>

          <div class="flex items-center gap-3">
            <img src="https://images.unsplash.com/photo-1603415526960-f7e0328e110c?auto=format&fit=crop&w=80&q=80"
                 class="w-10 h-10 rounded-full" />
            <p class="text-gray-700 text-sm">Speaker: Priya Nair</p>
          </div>

          <div class="mt-4">
            <a href="#" class="inline-block bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded-lg text-sm font-semibold">
              Register Now
            </a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<?php
include_once 'include/_Footer.php';
?>
