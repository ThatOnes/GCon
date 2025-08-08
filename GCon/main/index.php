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

      <div class="bg-white py-24 sm:py-10">
        <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
          <h2 class="text-center text-base/7 font-semibold text-indigo-600">Deploy faster</h2>
          <p class="mx-auto mt-2 max-w-lg text-center text-4xl font-semibold tracking-tight text-balance text-gray-950 sm:text-5xl">Everything you need to deploy your app</p>
          <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
            <div class="relative lg:row-span-2">
              <div class="absolute inset-px rounded-lg bg-white lg:rounded-l-4xl"></div>
              <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                  <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Mobile friendly</p>
                  <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</p>
                </div>
                <div class="@container relative min-h-120 w-full grow max-lg:mx-auto max-lg:max-w-sm">
                  <div class="absolute inset-x-10 top-10 bottom-0 overflow-hidden rounded-t-[12cqw] border-x-[2cqw] border-t-[1cqw] border-purple-900 bg-white shadow-2xl">
                    <img src="../image/others/1.png" alt="" class="size-full object-cover object-top" />
                  </div>
                </div>
              </div>
              <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm outline outline-black/5 lg:rounded-l-4xl"></div>
            </div>
            <div class="relative max-lg:row-start-1">
              <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-4xl"></div>
              <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                  <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Performance</p>
                  <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit maiores impedit.</p>
                </div>
                <div class="flex flex-1 items-center justify-center px-8 max-lg:pt-10 max-lg:pb-12 sm:px-10 lg:pb-2">
                  <img src="https://tailwindcss.com/plus-assets/img/component-images/bento-03-performance.png" alt="" class="w-full max-lg:max-w-xs" />
                </div>
              </div>
              <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm outline outline-black/5 max-lg:rounded-t-4xl"></div>
            </div>
            <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
              <div class="absolute inset-px rounded-lg bg-white"></div>
              <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)]">
                <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                  <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Security</p>
                  <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Morbi viverra dui mi arcu sed. Tellus semper adipiscing suspendisse semper morbi.</p>
                </div>
                <div class="@container flex flex-1 items-center max-lg:py-6 lg:pb-2">
                  <img src="https://tailwindcss.com/plus-assets/img/component-images/bento-03-security.png" alt="" class="h-[min(152px,40cqw)] object-cover" />
                </div>
              </div>
              <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm outline outline-black/5"></div>
            </div>
            <!-- GANTI bagian Powerful APIs dengan ini -->
            <div class="relative lg:row-span-2">
              <div class="absolute inset-px rounded-lg bg-white lg:rounded-l-4xl"></div>
              <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                  <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Server Library Games</p>
                  <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</p>
                </div>
                <div class="@container relative min-h-120 w-full grow max-lg:mx-auto max-lg:max-w-sm">
                  <div class="absolute inset-x-10 top-10 bottom-0 overflow-hidden border-x-[2cqw] border-t-[2cqw] border-purple-900 bg-white shadow-2xl">
                    <img src="../image/others/2.jpg" alt="" class="size-full object-cover object-top" />
                  </div>
                </div>
              </div>
              <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm outline outline-black/5 lg:rounded-l-4xl"></div>
            </div>
          </div>
        </div>
      </div>


      <footer class="bg-white text-gray-600 py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
      <!-- Logo dan deskripsi -->
      <div class="md:col-span-1">
        <div class="flex items-center mb-4">
          <!-- Logo -->
          <svg class="w-8 h-8 text-indigo-600" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 0C5.37258 0 0 5.37258 0 12s5.37258 12 12 12 12-5.37258 12-12S18.6274 0 12 0z" />
          </svg>
        </div>
        <p class="text-sm">
          Making the world a better place through <br />
          constructing elegant hierarchies.
        </p>
        <!-- Social Media Icons -->
        <div class="flex space-x-4 mt-4">
          <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fab fa-facebook"></i></a>
          <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fab fa-x-twitter"></i></a>
          <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fab fa-github"></i></a>
          <a href="#" class="text-gray-500 hover:text-gray-700"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <!-- Section Links -->
      <div>
        <h3 class="text-sm font-semibold text-gray-900 mb-4">Solutions</h3>
        <ul class="space-y-2">
          <li><a href="#" class="hover:underline">Marketing</a></li>
          <li><a href="#" class="hover:underline">Analytics</a></li>
          <li><a href="#" class="hover:underline">Automation</a></li>
          <li><a href="#" class="hover:underline">Commerce</a></li>
          <li><a href="#" class="hover:underline">Insights</a></li>
        </ul>
      </div>

      <div>
        <h3 class="text-sm font-semibold text-gray-900 mb-4">Support</h3>
        <ul class="space-y-2">
          <li><a href="#" class="hover:underline">Submit ticket</a></li>
          <li><a href="#" class="hover:underline">Documentation</a></li>
          <li><a href="#" class="hover:underline">Guides</a></li>
        </ul>
      </div>

      <div>
        <h3 class="text-sm font-semibold text-gray-900 mb-4">Company</h3>
        <ul class="space-y-2">
          <li><a href="#" class="hover:underline">About</a></li>
          <li><a href="#" class="hover:underline">Blog</a></li>
          <li><a href="#" class="hover:underline">Jobs</a></li>
          <li><a href="#" class="hover:underline">Press</a></li>
        </ul>
      </div>

      <div>
        <h3 class="text-sm font-semibold text-gray-900 mb-4">Legal</h3>
        <ul class="space-y-2">
          <li><a href="#" class="hover:underline">Terms of service</a></li>
          <li><a href="#" class="hover:underline">Privacy policy</a></li>
          <li><a href="#" class="hover:underline">License</a></li>
        </ul>
      </div>
    </div>

    <!-- Garis pemisah -->
    <div class="mt-10 border-t border-gray-200 pt-6 text-sm text-gray-400 text-center">
      &copy; 2025 Your Company. All rights reserved.
    </div>
  </div>
</footer>   
</body>
</html>
