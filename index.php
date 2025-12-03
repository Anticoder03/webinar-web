<?php
include_once 'include/_Header.php';
include_once 'include/_Nav.php';
?>
<!-- hero section stat -->
<title>Webinae website</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="astra scollers offers high-quality training programs, webinars, and skill development courses designed to help students and professionals grow in their career." />
<meta name="keywords" content="training institute, webinars, online training, skill development, courses, education, coaching center, certification courses" />
<meta name="theme-color" content="#1B5E20" /> <!-- your green tone -->
<link rel="icon" href="/assets/images/favicon.png" type="image/png">
<meta name="language" content="English">

<!-- Hero Section -->
<section 
  class="relative w-full min-h-screen flex items-center bg-cover bg-center bg-no-repeat" 
  style="background-image: url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=1350&q=80');"
>
  <!-- Dark Overlay -->
  <div class="absolute inset-0 bg-black/30"></div>

  <!-- Content -->
  <div class="relative z-10 max-w-7xl mx-auto w-full px-6 py-10 grid md:grid-cols-2 gap-10">



    <!-- Left Content -->
    <div class="text-white flex flex-col justify-center">
      <span class="uppercase text-sm tracking-widest font-semibold bg-white/20 w-max px-3 py-1 rounded">
        Best Clinical Research Institute
      </span>

      <h1 class="text-4xl sm:text-5xl font-bold leading-tight mt-4">
        Learn With Live <br />
        Projects In <span class="text-emerald-400">Clinical Research</span>
      </h1>

      <p class="mt-4 text-lg text-gray-200">
        Upgrade your skill set with modern technologies in the field of Clinical Research & IT.
      </p>

      <!-- Buttons with 3D hover effect -->
      <div class="mt-6 flex flex-wrap gap-4">
        <a href="#" 
           class="px-6 py-3 bg-emerald-500 hover:bg-emerald-600 text-white font-semibold rounded-lg shadow-lg transform hover:-translate-y-1 hover:scale-105 transition-all duration-300">
          <i class="fa-solid fa-rocket"></i> View Courses
        </a>

        <a href="#" 
           class="px-6 py-3 bg-white text-emerald-600 font-semibold rounded-lg border border-emerald-400 hover:bg-emerald-50 shadow-md transform hover:-translate-y-1 hover:scale-105 transition-all duration-300">
          Get Started Free
        </a>
      </div>
    </div>

    <!-- Right Image -->
    <div class="relative flex justify-center items-center">
      <img 
        src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80"
        class="rounded-full shadow-2xl w-80 h-80 object-cover md:w-[450px] md:h-[450px] transform hover:scale-105 transition-transform duration-500"
        alt="Students Learning"
      />
    </div>

  </div>
</section>

<!-- Cards Section -->
<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-6 px-4">

    <!-- Card 1 -->
    <div class="p-8 bg-white rounded-lg shadow hover:shadow-2xl transform hover:-translate-y-2 hover:scale-105 transition-all duration-300">
      <h3 class="text-2xl font-bold mb-3 text-gray-900">Learn The Latest Skills</h3>
      <p class="text-gray-600">Learn Clinical Research, Pharmacovigilance & Clinical Data Analytics</p>
      <a href="#" class="inline-block mt-4 text-emerald-600 font-semibold hover:underline">
        View Courses +
      </a>
    </div>

    <!-- Card 2 (Highlighted) -->
    <div class="p-8 rounded-lg shadow bg-emerald-500 text-white hover:shadow-2xl transform hover:-translate-y-2 hover:scale-105 transition-all duration-300">
      <h3 class="text-2xl font-bold mb-3">Clinical Research Online Courses</h3>
      <p>In high-demand fields like CDM, SAS & Clinical Research.</p>
      <a href="#" class="inline-block mt-4 font-semibold underline">
        View More +
      </a>
    </div>

    <!-- Card 3 (Highlighted) -->
    <div class="p-8 rounded-lg shadow bg-emerald-600 text-white hover:shadow-2xl transform hover:-translate-y-2 hover:scale-105 transition-all duration-300">
      <h3 class="text-2xl font-bold mb-3">Earn a Certificate</h3>
      <p>From a leading organization in Life-sciences, Pharma & Clinical Research.</p>
      <a href="#" class="inline-block mt-4 font-semibold underline">
        View Courses +
      </a>
    </div>

    <!-- Card 4 -->
    <div class="p-8 bg-white rounded-lg shadow hover:shadow-2xl transform hover:-translate-y-2 hover:scale-105 transition-all duration-300">
      <h3 class="text-2xl font-bold mb-3 text-gray-900">Live Project Internship Experience</h3>
      <p class="text-gray-600">Get trained on industry-level safety database software.</p>
      <a href="#" class="inline-block mt-4 text-emerald-600 font-semibold hover:underline">
        View Courses +
      </a>
    </div>

  </div>
</section>


<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Our Courses</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      
      <!-- Course Card -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 hover:scale-105 transition-all duration-300 hover:shadow-2xl">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80" class="w-full h-48 object-cover" alt="Course Image">
          <span class="absolute top-4 left-4 bg-emerald-500 text-white text-sm font-semibold px-3 py-1 rounded">
            Medical Coding Training
          </span>
        </div>
        <div class="p-6">
          <div class="flex items-center mb-4">
            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=40&q=80" class="w-10 h-10 rounded-full mr-3" alt="Instructor">
            <p class="text-gray-700 font-medium">Gratisollabs</p>
          </div>
          <h3 class="text-lg font-semibold mb-2 hover:text-emerald-500 transition-colors duration-300">
            Gratisol Labs Professional Medical Coding Healthcare Certificate Course
          </h3>
              <div class="flex items-center justify-between mt-4">
            <div class="text-yellow-400">
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <span class="text-sm text-gray-500">(0 rating)</span>
          </div>
          <div class="mt-4 flex justify-between items-center">
            <span class="text-gray-600 text-sm">26 Students</span>
            <span class="text-emerald-500 font-bold">Free</span>
          </div>
        </div>
      </div>

      <!-- Course Card 2 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 hover:scale-105 transition-all duration-300 hover:shadow-2xl">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80" class="w-full h-48 object-cover" alt="Course Image">
          <span class="absolute top-4 left-4 bg-pink-500 text-white text-sm font-semibold px-3 py-1 rounded">
            Pharmaceutical CSV
          </span>
        </div>
        <div class="p-6">
          <div class="flex items-center mb-4">
            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=40&q=80" class="w-10 h-10 rounded-full mr-3" alt="Instructor">
            <p class="text-gray-700 font-medium">Gratisollabs</p>
          </div>
          <h3 class="text-lg font-semibold mb-2 hover:text-pink-500 transition-colors duration-300">
            Gratisol Labs – Pharmaceutical Computer System Validation Certification Course
          </h3>
              <div class="flex items-center justify-between mt-4">
            <div class="text-yellow-400">
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <span class="text-sm text-gray-500">(0 rating)</span>
          </div>
          <div class="mt-4 flex justify-between items-center">
            <span class="text-gray-600 text-sm">57 Students</span>
            <span class="text-pink-500 font-bold">Free</span>
          </div>
        </div>
      </div>

      <!-- Course Card 3 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 hover:scale-105 transition-all duration-300 hover:shadow-2xl">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80" class="w-full h-48 object-cover" alt="Course Image">
          <span class="absolute top-4 left-4 bg-orange-500 text-white text-sm font-semibold px-3 py-1 rounded">
            Clinical Research Courses
          </span>
        </div>
        <div class="p-6">
          <div class="flex items-center mb-4">
            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=40&q=80" class="w-10 h-10 rounded-full mr-3" alt="Instructor">
            <p class="text-gray-700 font-medium">Gratisollabs</p>
          </div>
          <h3 class="text-lg font-semibold mb-2 hover:text-orange-500 transition-colors duration-300">
            Industry Program In Clinical Research, Clinical Data Management & Pharmacovigilance
          </h3>
          <div class="flex items-center justify-between mt-4">
            <div class="text-yellow-400">
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <span class="text-sm text-gray-500">(0 rating)</span>
          </div>

          <div class="mt-4 flex justify-between items-center">
            <span class="text-gray-600 text-sm">34 Students</span>
            <span class="text-orange-500 font-bold">Free</span>
          </div>
        </div>
      </div>

      <!-- Repeat for Course 4 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 hover:scale-105 transition-all duration-300 hover:shadow-2xl">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1554224154-22dec7ec8818?auto=format&fit=crop&w=800&q=80" class="w-full h-48 object-cover" alt="Course Image">
          <span class="absolute top-4 left-4 bg-emerald-500 text-white text-sm font-semibold px-3 py-1 rounded">
            Biostatistics
          </span>
        </div>
        <div class="p-6">
          <div class="flex items-center mb-4">
            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=40&q=80" class="w-10 h-10 rounded-full mr-3" alt="Instructor">
            <p class="text-gray-700 font-medium">Gratisollabs</p>
          </div>
          <h3 class="text-lg font-semibold mb-2 hover:text-emerald-500 transition-colors duration-300">
            Biostatistics for Clinical Research
          </h3>
              <div class="flex items-center justify-between mt-4">
            <div class="text-yellow-400">
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <span class="text-sm text-gray-500">(0 rating)</span>
          </div>
          <div class="mt-4 flex justify-between items-center">
            <span class="text-gray-600 text-sm">40 Students</span>
            <span class="text-emerald-500 font-bold">Free</span>
          </div>
        </div>
      </div>

      <!-- Course 5 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 hover:scale-105 transition-all duration-300 hover:shadow-2xl">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1554224154-22dec7ec8818?auto=format&fit=crop&w=800&q=80" class="w-full h-48 object-cover" alt="Course Image">
          <span class="absolute top-4 left-4 bg-purple-500 text-white text-sm font-semibold px-3 py-1 rounded">
            Clinical Trial
          </span>
        </div>
        <div class="p-6">
          <div class="flex items-center mb-4">
            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=40&q=80" class="w-10 h-10 rounded-full mr-3" alt="Instructor">
            <p class="text-gray-700 font-medium">Gratisollabs</p>
          </div>
          <h3 class="text-lg font-semibold mb-2 hover:text-purple-500 transition-colors duration-300">
            Clinical Trial Management Certificate
          </h3>
              <div class="flex items-center justify-between mt-4">
            <div class="text-yellow-400">
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <span class="text-sm text-gray-500">(0 rating)</span>
          </div>
          <div class="mt-4 flex justify-between items-center">
            <span class="text-gray-600 text-sm">30 Students</span>
            <span class="text-purple-500 font-bold">Free</span>
          </div>
        </div>
      </div>

      <!-- Course 6 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 hover:scale-105 transition-all duration-300 hover:shadow-2xl">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1554224154-22dec7ec8818?auto=format&fit=crop&w=800&q=80" class="w-full h-48 object-cover" alt="Course Image">
          <span class="absolute top-4 left-4 bg-red-500 text-white text-sm font-semibold px-3 py-1 rounded">
            Pharmacovigilance
          </span>
        </div>
        <div class="p-6">
          <div class="flex items-center mb-4">
            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=40&q=80" class="w-10 h-10 rounded-full mr-3" alt="Instructor">
            <p class="text-gray-700 font-medium">Gratisollabs</p>
          </div>
          <h3 class="text-lg font-semibold mb-2 hover:text-red-500 transition-colors duration-300">
            Pharmacovigilance Certification Course
          </h3>
              <div class="flex items-center justify-between mt-4">
            <div class="text-yellow-400">
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <span class="text-sm text-gray-500">(0 rating)</span>
          </div>
          <div class="mt-4 flex justify-between items-center">
            <span class="text-gray-600 text-sm">40 Students</span>
            <span class="text-red-500 font-bold">Free</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>




<section class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-6">

    <!-- Heading -->
    <div class="text-left mb-10">
      <h2 class="text-4xl font-bold text-gray-800 border-l-4 border-emerald-500 pl-4">
        Why Choose Us?
      </h2>
    </div>

    <!-- Content -->
    <div class="grid md:grid-cols-3 gap-10 text-center">

      <!-- Box 1 -->
      <div class="p-8 bg-gray-50 rounded-xl shadow hover:shadow-lg transition-all">
        <i class="fas fa-check-circle text-4xl text-emerald-600 mb-4"></i>
        <h3 class="text-xl font-semibold text-gray-800 mb-2">Trusted Courses</h3>
        <p class="text-gray-600">
          Our programs are designed with industry experts to ensure high-quality learning.
        </p>
      </div>

      <!-- Box 2 -->
      <div class="p-8 bg-gray-50 rounded-xl shadow hover:shadow-lg transition-all">
        <i class="fas fa-users text-4xl text-emerald-600 mb-4"></i>
        <h3 class="text-xl font-semibold text-gray-800 mb-2">Expert Instructors</h3>
        <p class="text-gray-600">
          Learn from experienced professionals who know what the real world demands.
        </p>
      </div>

      <!-- Box 3 -->
      <div class="p-8 bg-gray-50 rounded-xl shadow hover:shadow-lg transition-all">
        <i class="fas fa-graduation-cap text-4xl text-emerald-600 mb-4"></i>
        <h3 class="text-xl font-semibold text-gray-800 mb-2">Career Focused</h3>
        <p class="text-gray-600">
          We not only teach, we guide you towards real job-ready skills and opportunities.
        </p>
      </div>

    </div>

  </div>
</section>
<style>
.card {
  position: relative;
  overflow: hidden;
  transition: 0.4s ease;
}

/* sliding overlay */
.card::before {
  content: "";
  position: absolute;
  top: -100%;
  left: 0;
  width: 100%;
  height: 100%;
  transition: 0.4s ease-in-out;
  z-index: 0;
}

/* keep text above */
.card * {
  position: relative;
  z-index: 1;
}

/* hover effect trigger */
.card:hover::before {
  top: 0;
}

/* on hover: text + icon turns white */
.card:hover .icon,
.card:hover .title,
.card:hover .desc {
  color: #fff !important;
  border-color: #fff !important;
}

/* Unique hover colors */
.card-1::before { background: #ef4444; } /* Red */
.card-2::before { background: #10b981; } /* Green */
.card-3::before { background: #f59e0b; } /* Yellow */
</style>


<section class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-6 text-center">
    
    <p class="text-emerald-600 font-semibold mb-2 tracking-wide uppercase">
      GET INDUSTRY READY
    </p>

    <h2 class="text-4xl font-bold text-gray-800 mb-3">
      What We Offer For Growth
    </h2>

    <p class="text-gray-600 mb-12">
      We connect you with the right opportunities for a better future.
    </p>


    <!-- Card Grid -->
    <div class="grid md:grid-cols-3 gap-10">

      <!-- Card 1 -->
      <div class="card card-1 p-10 bg-white rounded-xl shadow-xl cursor-pointer">

        <div class="mb-6 flex justify-center">
          <div class="icon border-2 border-red-500 text-red-500 rounded-full w-20 h-20 flex items-center justify-center text-4xl transition-all">
            <i class="fas fa-users"></i>
          </div>
        </div>

        <h3 class="title text-2xl font-semibold text-gray-800 mb-3 transition-all">Employer</h3>
        <p class="desc text-gray-600 transition-all">
          Hire candidates with industry-ready skills and relevant work experience.
        </p>

      </div>


      <!-- Card 2 -->
      <div class="card card-2 p-10 bg-white rounded-xl shadow-xl cursor-pointer">

        <div class="mb-6 flex justify-center">
          <div class="icon border-2 border-emerald-500 text-emerald-500 rounded-full w-20 h-20 flex items-center justify-center text-4xl transition-all">
            <i class="fas fa-bullseye"></i>
          </div>
        </div>

        <h3 class="title text-2xl font-semibold text-gray-800 mb-3 transition-all">Learner</h3>
        <p class="desc text-gray-600 transition-all">
          Upgrade your skillset with latest technologies and expert guidance.
        </p>

      </div>


      <!-- Card 3 -->
      <div class="card card-3 p-10 bg-white rounded-xl shadow-xl cursor-pointer">

        <div class="mb-6 flex justify-center">
          <div class="icon border-2 border-yellow-500 text-yellow-500 rounded-full w-20 h-20 flex items-center justify-center text-4xl transition-all">
            <i class="fas fa-graduation-cap"></i>
          </div>
        </div>

        <h3 class="title text-2xl font-semibold text-gray-800 mb-3 transition-all">Learning System</h3>
        <p class="desc text-gray-600 transition-all">
          Become future-ready with structured, domain-focused learning modules.
        </p>

      </div>

    </div>
  </div>
</section>





<?php
include_once 'include/_Footer.php';
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "name": "Institute Name",
  "url": "https://yourwebsite.com",
  "logo": "https://yourwebsite.com/assets/images/logo.png",
  "description": "A leading institute offering professional courses and webinars.",
  "sameAs": [
    "https://facebook.com/yourpage",
    "https://instagram.com/yourpage",
    "https://linkedin.com/company/yourpage"
  ]
}
</script>
