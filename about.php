<?php
    // include 'include/_Header.php';
    include 'include/_Nav.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <style>
    .fade-up {
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.8s ease;
    }
    .fade-up.visible {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>
<body class="bg-gray-50">

<!-- HERO SECTION -->
<section class="relative bg-gradient-to-r from-emerald-500 to-teal-500 text-white py-24 px-6">
  <div class="max-w-6xl mx-auto text-center fade-up">
    <h1 class="text-5xl font-bold mb-4">About Us</h1>
    <p class="text-lg max-w-3xl mx-auto">We’re committed to empowering learners, professionals, and companies with modern, industry-focused knowledge and practical skills that create real opportunities.</p>
  </div>
</section>


<!-- MISSION SECTION -->
<section class="py-20 px-6">
  <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-12 items-center">
    
    <img src="https://images.unsplash.com/photo-1603791440384-56cd371ee9a7" 
         class="rounded-lg shadow-lg fade-up" />

    <div class="fade-up">
      <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Mission</h2>
      <p class="text-gray-600 leading-relaxed">
        We exist to bridge the gap between education and employability. Our programs are engineered
        by industry experts to ensure learners gain real-world experience, hands-on exposure, and the confidence
        to step into the workforce fully prepared.
      </p>
    </div>
  </div>
</section>


<!-- VALUES SECTION -->
<section class="bg-white py-20 px-6">
  <div class="max-w-6xl mx-auto text-center mb-12 fade-up">
    <h2 class="text-3xl font-bold text-gray-800">Our Core Values</h2>
    <p class="text-gray-600 max-w-2xl mx-auto">These principles guide everything we do — from building courses to helping learners grow.</p>
  </div>

  <div class="grid md:grid-cols-3 gap-10 max-w-6xl mx-auto">
    
    <div class="bg-gray-100 hover:bg-emerald-500 hover:text-white transition duration-300 rounded-xl p-8 text-center fade-up shadow">
      <div class="text-4xl mb-3"><i class="fa-solid fa-bullseye"></i></div>
      <h3 class="font-semibold text-xl mb-3">Excellence</h3>
      <p>We don’t settle for average. Everything we create must be meaningful and high-quality.</p>
    </div>

    <div class="bg-gray-100 hover:bg-teal-500 hover:text-white transition duration-300 rounded-xl p-8 text-center fade-up shadow">
      <div class="text-4xl mb-3"><i class="fa-solid fa-handshake"></i></div>
      <h3 class="font-semibold text-xl mb-3">Integrity</h3>
      <p>We build trust by being transparent, consistent, and accountable.</p>
    </div>

    <div class="bg-gray-100 hover:bg-emerald-600 hover:text-white transition duration-300 rounded-xl p-8 text-center fade-up shadow">
      <div class="text-4xl mb-3"><i class="fa-solid fa-rocket"></i></div>
      <h3 class="font-semibold text-xl mb-3">Innovation</h3>
      <p>We evolve with technology to prepare learners for the future, not the past.</p>
    </div>

  </div>
</section>


<!-- TEAM SECTION -->
<section class="py-20 px-6">
  <div class="max-w-5xl mx-auto text-center fade-up mb-14">
    <h2 class="text-3xl font-bold text-gray-800 mb-4">Meet Our Team</h2>
    <p class="text-gray-600 max-w-2xl mx-auto">A group of passionate industry professionals who love building careers.</p>
  </div>

  <div class="grid md:grid-cols-3 gap-10 max-w-6xl mx-auto fade-up">

    <div class="bg-white shadow-lg p-6 rounded-xl text-center hover:scale-105 transition duration-300">
      <img src="https://randomuser.me/api/portraits/men/12.jpg" class="w-28 h-28 rounded-full mx-auto mb-5">
      <h4 class="font-semibold text-xl">John Carter</h4>
      <p class="text-gray-500 text-sm">Founder & CEO</p>
    </div>

    <div class="bg-white shadow-lg p-6 rounded-xl text-center hover:scale-105 transition duration-300">
      <img src="https://randomuser.me/api/portraits/women/20.jpg" class="w-28 h-28 rounded-full mx-auto mb-5">
      <h4 class="font-semibold text-xl">Priya Sharma</h4>
      <p class="text-gray-500 text-sm">Training Lead</p>
    </div>

    <div class="bg-white shadow-lg p-6 rounded-xl text-center hover:scale-105 transition duration-300">
      <img src="https://randomuser.me/api/portraits/men/44.jpg" class="w-28 h-28 rounded-full mx-auto mb-5">
      <h4 class="font-semibold text-xl">Rahul Mehta</h4>
      <p class="text-gray-500 text-sm">Program Director</p>
    </div>

  </div>
</section>


<!-- CTA SECTION -->
<section class="bg-gradient-to-r from-emerald-600 to-teal-600 py-20 px-6 text-center text-white">
  <div class="max-w-4xl mx-auto fade-up">
    <h2 class="text-4xl font-bold mb-4">Let’s Build Something Great Together</h2>
    <p class="text-lg mb-8">Whether you're a learner or an organization — we're ready when you are.</p>
    <button class="bg-white text-emerald-600 px-10 py-3 rounded-lg font-semibold hover:bg-gray-200 transition">
      Contact Us
    </button>
  </div>
</section>


<script>
  // animation trigger
  const elements = document.querySelectorAll(".fade-up");
  window.addEventListener("scroll", () => {
    elements.forEach(el => {
      const position = el.getBoundingClientRect().top;
      if (position < window.innerHeight - 50) {
        el.classList.add("visible");
      }
    });
  });
</script>

</body>
</html>
<?php
    include 'include/_Footer.php';
    ?>