<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../js/main/script.js"></script>
    <link href="../css/style.css" rel="stylesheert"/>
    <title>GCon</title>
</head>
<body class="bg-gradient-to-br from-purple-100 to-indigo-200 min-h-screen">

<?php include ('component/navbar.php'); ?>

<!-- Konten utama -->
<div class="w-full max-w-6xl mx-auto px-4 pt-40">
    <!-- Hero Title -->
    <div class="text-center mb-10">
        <h1 class="text-4xl sm:text-5xl font-extrabold text-purple-900 mb-2">Discover & Join the Coolest Servers</h1>
        <p class="text-lg text-purple-600">Explore communities, meet new people, and start your journey today!</p>
    </div>

    <!-- Search Bar -->
    <div class="mb-6">
        <input
            type="text"
            placeholder="Search servers..."
            onclick="document.getElementById('contact-panel').classList.remove('hidden')"
            class="w-full px-4 py-3 rounded-xl border border-purple-300 focus:outline-none focus:ring-2 focus:ring-purple-500"
        />
    </div>

      <!-- Contact Panel (hidden by default) -->
      <div id="contact-panel" class="bg-white rounded-xl overflow-hidden flex border border-purple-200 hidden">
          <!-- Sidebar: Popular Servers -->
          <div class="w-1/3 border-r border-purple-200 bg-purple-50 p-4">
              <p class="text-xs text-black font-semibold mb-3">Popular Servers</p>

              <ul class="space-y-2">
                  <li class="flex items-center justify-between p-2 bg-white rounded-lg hover:bg-purple-100 transition">
                      <div class="flex items-center gap-2">
                          <img class="w-6 h-6 rounded-full border border-black" src="../image/others/random-fun-hand-drawn-doodle-pattern-background_1048-19869.avif" alt="servers">
                          <span class="text-sm font-medium text-black">The Simps Server</span>
                      </div>
                      <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                      </svg>
                  </li>
                  <li class="flex items-center gap-2 p-2 rounded-lg hover:bg-purple-100 transition">
                      <img class="w-6 h-6 rounded-full border border-black" src="../image/others/images.png" alt="Courtney Henry">
                      <span class="text-sm text-black">Mama Bear</span>
                  </li>
              </ul>
          </div>

          <!-- Detail Panel -->
          <div class="w-2/3 p-6">
              <div class="flex flex-col items-center text-center">
                  <img class="w-20 h-20 rounded-full mb-4 border-2 border-black" src="../image/others/random-fun-hand-drawn-doodle-pattern-background_1048-19869.avif" alt="Server Icon">
                  <h3 class="text-xl font-bold text-black">The Simps Server</h3>
                  <p class="text-sm text-black italic">A place where we simp & play together 🎮💜</p>
              </div>
              <div class="mt-6 space-y-2 text-sm text-black">
                  <div class="flex items-center justify-between">
                      <span class="font-semibold">Server Owner:</span>
                      <span>@Touch me</span>
                  </div>
                  <div class="flex items-center justify-between">
                      <span class="font-semibold">Members:</span>
                      <span>6,832</span>
                  </div>
                  <div class="flex items-center justify-between">
                      <span class="font-semibold">Created On:</span>
                      <span>Jan 20, 2023</span>
                  </div>
                  <div class="flex items-center justify-between">
                      <span class="font-semibold">Invite Link:</span>
                      <a href="#" class="text-black hover:underline">https://simps.gg/invite</a>
                  </div>
                    <div class="mt-6 flex justify-center">
                      <button class="px-4 py-2 text-sm font-semibold text-white bg-purple-600 rounded-md hover:bg-purple-700 transition">
                        Join Server
                      </button>
                    </div>
              </div>
          </div>
      </div>

      <div class="bg-white">
        <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-5 lg:px-8">
          <div class="bg-white px-6 pt-16 sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:items-center lg:px-24 lg:pt-0">
            <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
              <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                Boost your productivity.<br>
                Start using our app today.
              </h2>
              <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
                <a href="#" class="rounded-md bg-purple-600 px-5 py-3 text-sm font-semibold text-white hover:bg-purple-700 transition">
                  Get started
                </a>
                <a href="#" class="text-sm font-semibold text-gray-900 hover:text-gray-700">
                  Learn more <span aria-hidden="true">→</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

</body>
</html>
