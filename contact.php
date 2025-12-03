<?php
// include_once 'include/_Header.php';
include_once 'include/_Nav.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    .fade-up {
      opacity: 0;
      transform: translateY(20px);
      transition: all .7s ease;
    }
    .fade-up.visible {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>

<body class="bg-gray-50">

<!-- HERO -->
<section class="bg-gradient-to-r from-emerald-600 to-teal-600 py-20 text-center text-white px-6">
  <div class="max-w-5xl mx-auto fade-up">
    <h1 class="text-5xl font-bold mb-4">Get in Touch</h1>
    <p class="text-lg max-w-2xl mx-auto">We’re here to answer questions, guide you, and help you get what you're looking for.</p>
  </div>
</section>


<!-- CONTACT CONTENT -->
<section class="py-20 px-6">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-14">

    <!-- LEFT SIDE -->
    <div class="fade-up">
      <h2 class="text-3xl font-semibold text-gray-800 mb-6">Contact Information</h2>

      <p class="text-gray-600 leading-relaxed mb-8">
        Whether you’re a student, professional, or organization — reach out and a team member will assist you shortly.
      </p>

      <div class="space-y-6">

        <div class="flex items-center gap-4">
          <div class="bg-emerald-500 text-white w-12 h-12 flex justify-center items-center text-2xl rounded-lg"><i class="fa-solid fa-location-crosshairs"></i></div>
          <p class="text-gray-700">Mumbai, Maharashtra, India</p>
        </div>

        <div class="flex items-center gap-4">
          <div class="bg-teal-500 text-white w-12 h-12 flex justify-center items-center text-2xl rounded-lg"><i class="fa-solid fa-phone"></i></div>
          <p class="text-gray-700">+91 99999 12345</p>
        </div>

        <div class="flex items-center gap-4">
          <div class="bg-emerald-600 text-white w-12 h-12 flex justify-center items-center text-2xl rounded-lg"><i class="fa-solid fa-envelope"></i></div>
          <p class="text-gray-700">support@example.com</p>
        </div>

      </div>

      <div class="mt-10">
        <h3 class="text-2xl font-semibold text-gray-800 mb-3">Office Hours</h3>
        <p class="text-gray-600">Mon - Fri: 10:00 AM - 6:00 PM</p>
        <p class="text-gray-600">Sat - Sun: Closed</p>
      </div>
    </div>


    <!-- FORM -->
    <div class="bg-white p-10 rounded-2xl shadow-xl fade-up">
      <h3 class="text-2xl font-bold text-gray-800 mb-6">Send a Message</h3>

      <form class="space-y-6">

        <div>
          <label class="text-gray-600 font-medium">Full Name</label>
          <input type="text" class="w-full mt-2 px-4 py-3 rounded-lg border border-gray-300 focus:border-emerald-500 outline-none" placeholder="Enter your name">
        </div>

        <div>
          <label class="text-gray-600 font-medium">Email</label>
          <input type="email" class="w-full mt-2 px-4 py-3 rounded-lg border border-gray-300 focus:border-emerald-500 outline-none" placeholder="Example@gmail.com">
        </div>

        <div>
          <label class="text-gray-600 font-medium">Phone</label>
          <input type="text" class="w-full mt-2 px-4 py-3 rounded-lg border border-gray-300 focus:border-emerald-500 outline-none" placeholder="+91 XXXXX XXXXX">
        </div>

        <div>
          <label class="text-gray-600 font-medium">Message</label>
          <textarea rows="5" class="w-full mt-2 px-4 py-3 rounded-lg border border-gray-300 focus:border-emerald-500 outline-none" placeholder="Write your message..."></textarea>
        </div>

        <button type="submit" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white py-3 rounded-lg text-lg font-semibold transition-all">
          Send Message
        </button>

      </form>
    </div>

  </div>
</section>


<!-- MAP -->
<section class="py-10 px-6 fade-up">
  <div class="max-w-6xl mx-auto">
    <iframe class="rounded-xl shadow-xl w-full h-96"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.1160997286!2d72.74109882212066!3d19.08219783943066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c63036da19df%3A0xdea30e8e7a1db94e!2sMumbai!5e0!3m2!1sen!2sin!4v1702476000000">
    </iframe>
  </div>
</section>


<script>
  const animatedEls = document.querySelectorAll(".fade-up");
  window.addEventListener("scroll", () => {
    animatedEls.forEach(el => {
      if (el.getBoundingClientRect().top < window.innerHeight - 60) {
        el.classList.add("visible");
      }
    });
  });
</script>

</body>
</html>





<?php 
include_once 'include/_Footer.php';
?>