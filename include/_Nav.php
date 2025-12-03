<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    .menu-height-transition {
      transition: height 250ms ease-in-out, opacity 200ms ease-in-out;
      overflow: hidden;
    }
  </style>
</head>

<body class="bg-gray-50">

  <!-- NAVBAR -->
  <header class="bg-white border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">

        <!-- Logo -->
        <div class="flex items-center gap-3">
          <a href="./index.php" class="flex items-center gap-3">
            <svg class="w-9 h-9" viewBox="0 0 48 48" fill="none">
              <rect width="48" height="48" rx="10" fill="#10B981"></rect>
              <path d="M12 28 L20 18 L28 28" stroke="white" stroke-width="3"
                    stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="font-semibold text-gray-800 text-lg select-none">Logo</span>
          </a>
        </div>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex md:items-center md:space-x-8">
          <a href="./index.php" class="text-lg text-green-600 hover:text-gray-900 px-2 py-1">Home</a>
          <a href="./about.php" class="text-lg text-gray-600 hover:text-gray-900 px-2 py-1">About</a>
          <a href="./course.php" class="text-lg text-gray-600 hover:text-gray-900 px-2 py-1">Courses</a>
          <a href="./contact.php" class="text-lg text-gray-600 hover:text-gray-900 px-2 py-1">Contact</a>
        </nav>

        <!-- Right items -->
        <div class="flex items-center gap-4">

          <!-- Join button -->
          <a href="./join.php"
            class="hidden md:inline-flex items-center px-4 py-2 rounded-lg bg-emerald-500 text-white font-medium shadow-sm hover:bg-emerald-600 transition-all">
            Join Now
          </a>

          <!-- Mobile toggle -->
          <button id="menu-toggle" aria-controls="mobile-menu" aria-expanded="false"
                  class="md:hidden p-2 rounded-md text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-emerald-300">

            <svg id="icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>

            <svg id="icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Dropdown -->
    <div id="mobile-menu" class="md:hidden bg-white border-t menu-height-transition" style="height: 0; opacity: 0;">
      <div class="px-4 py-4 space-y-3">

        <div class="flex flex-col items-center gap-2">
          <a href="./index.php" class="w-full text-center py-2 rounded-md text-gray-700 hover:bg-gray-50">Home</a>
          <a href="./about.php" class="w-full text-center py-2 rounded-md text-gray-700 hover:bg-gray-50">About</a>
          <a href="./course.php" class="w-full text-center py-2 rounded-md text-gray-700 hover:bg-gray-50">Courses</a>
          <a href="./contact.php" class="w-full text-center py-2 rounded-md text-gray-700 hover:bg-gray-50">Contact</a>
        </div>

        <div class="pt-2 border-t">
          <a href="#"
             class="block w-full text-center px-4 py-2 rounded-md bg-emerald-500 text-white font-medium hover:opacity-95">
            Join Now
          </a>
        </div>
      </div>
    </div>
  </header>

<script>
  (function () {
    const btn = document.getElementById('menu-toggle');
    const menu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');

    function getMenuFullHeight() {
      // Fix for Safari mobile height bug
      menu.style.visibility = "hidden";
      menu.style.height = "auto";
      menu.style.opacity = "1";

      const fullHeight = menu.scrollHeight + "px";

      menu.style.height = "0";
      menu.style.opacity = "0";
      menu.style.visibility = "visible";

      return fullHeight;
    }

    function openMenu() {
      const fullHeight = getMenuFullHeight();
      btn.setAttribute('aria-expanded', 'true');
      menu.style.height = fullHeight;
      menu.style.opacity = '1';
      iconOpen.classList.add('hidden');
      iconClose.classList.remove('hidden');
      menu.querySelectorAll('a').forEach(el => el.tabIndex = 0);
    }

    function closeMenu() {
      btn.setAttribute('aria-expanded', 'false');
      menu.style.height = '0';
      menu.style.opacity = '0';
      iconOpen.classList.remove('hidden');
      iconClose.classList.add('hidden');
      menu.querySelectorAll('a').forEach(el => el.tabIndex = -1);
    }

    menu.querySelectorAll('a').forEach(el => el.tabIndex = -1);

    btn.addEventListener('click', function () {
      const expanded = btn.getAttribute('aria-expanded') === 'true';
      expanded ? closeMenu() : openMenu();
    });

    window.addEventListener('resize', function () {
      if (window.innerWidth >= 768) {
        menu.style.height = '';
        menu.style.opacity = '';
        btn.setAttribute('aria-expanded', 'false');
        iconOpen.classList.remove('hidden');
        iconClose.classList.add('hidden');
        menu.querySelectorAll('a').forEach(el => el.tabIndex = 0);
      } else {
        closeMenu();
      }
    });
  })();
</script>

</body>
</html>
