<div class="navbar bg-opacity-60 shadow-md bg-white fixed w-full z-10" x-data="{ open: false, dropdown: null }">
  <nav class="navbar-container bg-gray-200 bg-opacity-10 backdrop-filter backdrop-blur-lg text-black shadow-md">
    <div class="navbar-wrapper container mx-auto max-w-screen-xl px-4 flex items-center justify-between gap-4 w-full">
      <div class="isites-logo flex items-center">
        <a href="<?php echo $pathToWebRoot.'/public/index.php'; ?>" class="flex items-center py-5 px-2">
          <img src="<?php echo $pathToWebRoot.'/assets/icons/inzaghis-sites-logo-vertical-transparent.png'; ?>" title="Inzaghi&apos;s Sites" class="!h-14" id="logo-nav" alt="Inzaghi's Sites">
        </a>
      </div>
      <div class="button-toggle flex items-center lg:order-2">
        <button class="sign-in-button hidden sm:block relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-200">
          <a class="main-button-nav relative px-5 py-2.5 transition-all ease-in duration-75 bg-gray-900 rounded-md group-hover:bg-opacity-0" href="<?php echo $pathToWebRoot.'/includes/login-page.php'; ?>">
            Sign in
          </a>
        </button>
        <div class="menu-toggle lg:hidden flex items-center hover:bg-gray-300 gap-2 rounded-lg block">
          <button @click="open = !open" class="mobile-menu-button py-3 px-3" aria-label="Toggle Menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <title>Menu Toggle</title>
              <g fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                <path d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"/>
              </g>
            </svg>
          </button>
        </div>
      </div>
      <div id="navigation-menu" :class="open ? 'block' : 'hidden'" class="nav-menu hidden lg:flex lg:flex-row flex-col items-center justify-start lg:space-x-1 pb-3 lg:pb-0">
        <a href="<?php echo $pathToWebRoot.'/public/index.php'; ?>" class="nav-toggle py-2 px-3 hover:bg-[#c1e0d1] gap-2 rounded-lg block">Home</a>
        <div class="relative group" @mouseenter="dropdown = 'blogs'" @mouseleave="dropdown = null">
          <div class="py-3">
            <button @click="dropdown = dropdown === 'blogs' ? null : 'blogs'" class="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] dark-mode:bg-[#203c2e] flex items-center gap-2 rounded-lg">
              <span class="pointer-events-none">Blogs</span>
              <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdown === 'blogs' }">
                <title>chevron-down</title>
                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </button>
          </div>
          <div x-show="dropdown === 'blogs'"
            x-transition:enter="transition ease-out duration-200 transform"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-out duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl dark-mode:bg-[#222522]" style="display: none;"
          >
            <a href="https://medium.com/@izzumiposhaf29" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Inzaghi's Group Blog</a>
            <a href="https://inzaghiposuma.wordpress.com/blog-posts" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">WordPress Blog</a>
          </div>
        </div>
        <div class="relative group" @mouseenter="dropdown = 'portals'" @mouseleave="dropdown = null">
          <div class="py-3">
            <button @click="dropdown = dropdown === 'portals' ? null : 'portals'" class="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] dark-mode:bg-[#203c2e] flex items-center gap-2 rounded-lg">
              <a href="<?php echo $pathToWebRoot.'/portals/'; ?>">Portals</a>
              <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdown === 'portals' }">
                <title>chevron-down</title>
                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </button>
          </div>
          <div x-show="dropdown === 'portals'"
            x-transition:enter="transition ease-out duration-200 transform"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-out duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl dark-mode:bg-[#222522]" style="display: none;"
          >
            <a href="<?php echo $pathToWebRoot.'/portals/widgets.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Widgets</a>
            <a href="<?php echo $pathToWebRoot.'/portals/tech-tutorials.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Technology Tutorials</a>
            <a href="<?php echo $pathToWebRoot.'/portals/projects.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">IT Project Lists</a>
            <a href="<?php echo $pathToWebRoot.'/portals/interviews-and-thesis.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Intervs &amp; Thesis Prep</a>
            <a href="<?php echo $pathToWebRoot.'/portals/learning-materials.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Materi Pembelajaran</a>
            <a href="<?php echo $pathToWebRoot.'/portals/video-pages.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Video Pages</a>
            <a href="<?php echo $pathToWebRoot.'/portals/link-pages.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Link Pages</a>
            <a href="<?php echo $pathToWebRoot.'/portals/miscellaneous.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Miscellaneous</a>
          </div>
        </div>
        <div class="relative group" @mouseenter="dropdown = 'apps'" @mouseleave="dropdown = null">
          <div class="py-3">
            <button @click="dropdown = dropdown === 'apps' ? null : 'apps'" class="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] dark-mode:bg-[#203c2e] flex items-center gap-2 rounded-lg">
              <a href="<?php echo $pathToWebRoot.'/page-apps/'; ?>">Apps</a>
              <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdown === 'apps' }">
                <title>chevron-down</title>
                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </button>
          </div>
          <div x-show="dropdown === 'apps'"
            x-transition:enter="transition ease-out duration-200 transform"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-out duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl dark-mode:bg-[#222522]" style="display: none;"
          >
            <a href="<?php echo $pathToWebRoot.'/page-apps/converter.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Converters</a>
            <a href="<?php echo $pathToWebRoot.'/page-apps/calculators.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Calculators</a>
            <a href="<?php echo $pathToWebRoot.'/page-apps/generators.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Generators</a>
            <a href="<?php echo $pathToWebRoot.'/page-apps/formatters.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Formatters</a>
            <a href="<?php echo $pathToWebRoot.'/page-apps/file-converter.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">File Converter</a>
            <a href="<?php echo $pathToWebRoot.'/page-apps/utilities.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Utilities</a>
            <a href="<?php echo $pathToWebRoot.'/page-apps/tester-tools.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Tester Tools</a>
          </div>
        </div>
        <a href="<?php echo $pathToWebRoot.'/pages/contact.php'; ?>" class="nav-toggle py-2 px-3 hover:bg-[#c1e0d1] gap-2 rounded-lg block">Contact</a>
        <div class="relative group" @mouseenter="dropdown = 'about-profile'" @mouseleave="dropdown = null">
          <div class="py-3">
            <button @click="dropdown = dropdown === 'about-profile' ? null : 'about-profile'" class="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] dark-mode:bg-[#203c2e] flex items-center gap-2 rounded-lg">
              <span class="pointer-events-none">About &amp; Profile</span>
              <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdown === 'about-profile' }">
                <title>chevron-down</title>
                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </button>
          </div>
          <div x-show="dropdown === 'about-profile'"
            x-transition:enter="transition ease-out duration-200 transform"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-out duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl dark-mode:bg-[#222522]" style="display: none;"
          >
            <a href="<?php echo $pathToWebRoot.'/pages/about.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">About</a>
            <a href="<?php echo $pathToWebRoot.'/pages/profile.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Profile</a>
          </div>
        </div>
        <div class="relative group" @mouseenter="dropdown = 'group'" @mouseleave="dropdown = null">
          <div class="py-3">
            <button @click="dropdown = dropdown === 'group' ? null : 'group'" class="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] dark-mode:bg-[#203c2e] flex items-center gap-2 rounded-lg">
              <a href="<?php echo $pathToWebRoot.'/pages/networks.php'; ?>">Inzaghi's Group</a>
              <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdown === 'group' }">
                <title>chevron-down</title>
                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </button>
          </div>
          <div x-show="dropdown === 'group'" 
            x-transition:enter="transition ease-out duration-200 transform"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-out duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl dark-mode:bg-[#222522]" style="display: none;"
          >
            <a href="<?php echo $pathToWebRoot.'/inzaghis-group/inzaghis-blog.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Inzaghi's Blog</a>
            <a href="../inzaghis-group/inzaghis-media.php" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Inzaghi's Media</a>
            <a href="../inzaghis-group/inzaghis-dev.php" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Inzaghi's Dev</a>
            <a href="../inzaghis-group/inzaghis-archives.php" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Inzaghi's Archives</a>
            <a href="../inzaghis-group/inzaghis-app.php" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Inzaghi's App</a>
            <a href="../inzaghis-group/inzaghis-ai.php" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Inzaghi's AI</a>
          </div>
        </div>
        <div class="relative group" @mouseenter="dropdown = 'switch-sites'" @mouseleave="dropdown = null">
          <div class="py-3">
            <button @click="dropdown = dropdown === 'switch-sites' ? null : 'switch-sites'" class="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] dark-mode:bg-[#203c2e] flex items-center gap-2 rounded-lg">
              <span class="pointer-events-none">Switch to</span>
              <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdown === 'switch-sites' }">
                <title>chevron-down</title>
                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </button>
          </div>
          <div x-show="dropdown === 'switch-sites'" 
            x-transition:enter="transition ease-out duration-200 transform"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-out duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl dark-mode:bg-[#222522]" style="display: none;"
          >
            <a href="https://sites.google.com/view/inzaghis-sites" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Old Inzaghi's Sites</a>
            <a href="https://inzaghiposuma.wordpress.com/" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">WordPress Site</a>
            <a href="https://inzaghi-site.webflow.io" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Preview (Webflow)</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div class="lg:invisible navbar-menu fixed inset-0 z-50 bg-gray-900 bg-opacity-50" x-show="open" x-transition="" @click="open = false" style="display: none;">
    <div class="lg:invisible relative bg-white w-auto sm:w-80 max-w-full h-full" @click.stop="">
      <div class="flex items-center justify-between px-4 py-3 bg-gray-200">
        <span class="text-xl font-semibold text-gray-900">
          <a href="<?php echo $pathToWebRoot.'/public/index.php'; ?>" class="relative bg-gray-200 w-auto max-w-full h-full px-2 py-2">
            <img src="<?php echo $pathToWebRoot.'/assets/icons/inzaghis-sites-logo-vertical-transparent.png'; ?>" title="Inzaghi&apos;s Sites" class="!h-14" id="logo-nav" alt="Inzaghi's Sites"> </a></span>
        <div class="menu-toggle lg:hidden flex items-center hover:bg-gray-300 gap-2 rounded-lg block">
          <button @click="open = false" class="mobile-menu-button py-3 px-3" aria-label="Close Menu">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
      </div>
      <nav class="px-3 py-2 space-y-2 overflow-y-auto h-[calc(100%-6rem)] max-h-full">
        <div class="mb-auto pt-4 p-[inherit] font-[Inter] text-sm">
          <div class="pt-1">
            <a href="<?php echo $pathToWebRoot.'/public/index.php'; ?>" class="block text-gray-900 hover:bg-[#c1e0d1] dark-mode:bg-[#203c2e] py-3 px-4 rounded-lg">Home</a>
          </div>
          <div x-data="{ dropdownOpen: false }" class="relative pt-1">
            <button @click="dropdownOpen = !dropdownOpen" class="w-full flex items-center justify-between gap-2 py-3 px-4 rounded-lg text-gray-900 hover:bg-[#c1e0d1] dark-mode:hover:bg-[#c1e0d1]">
              <span>Blogs</span>
              <span
                :class="dropdownOpen 
                  ? 'relative py-1 px-1 inline-flex items-center rounded-md border border-gray-200 bg-gray-100 text-gray-800' 
                  : 'relative py-1 px-1 inline-flex items-center rounded-md'"
                class="transition-colors duration-200"
              >
                <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdownOpen }">
                  <title>chevron-down</title>
                  <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </span>
            </button>
            <div x-show="dropdownOpen" x-transition="" @click.away="dropdownOpen = false" class="nav-drpdwn-list w-full px-2 py-2 mt-2 mb-2 rounded-lg shadow-lg bg-[#dadeda] dark-mode:bg-[#222522]" style="display: none;">
              <a href="https://medium.com/@izzumiposhaf29" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Inzaghi's Group Blog</a>
              <a href="https://inzaghiposuma.wordpress.com/blog-posts" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">WordPress Blog</a>
            </div>
          </div>
          <div x-data="{ dropdownOpen: false }" class="relative pt-1">
            <button @click="dropdownOpen = !dropdownOpen" class="w-full flex items-center justify-between gap-2 py-3 px-4 rounded-lg text-gray-900 hover:bg-[#c1e0d1] dark-mode:hover:bg-[#c1e0d1]">
              <a href="<?php echo $pathToWebRoot.'/portals/'; ?>">Portals</a>
              <span
                :class="dropdownOpen 
                  ? 'relative py-1 px-1 inline-flex items-center rounded-md border border-gray-200 bg-gray-100 text-gray-800' 
                  : 'relative py-1 px-1 inline-flex items-center rounded-md'"
                class="transition-colors duration-200"
              >
                <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdownOpen }">
                  <title>chevron-down</title>
                  <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </span>
            </button>
            <div x-show="dropdownOpen" x-transition="" @click.away="dropdownOpen = false" class="nav-drpdwn-list w-full px-2 py-2 mt-2 mb-2 rounded-lg shadow-lg bg-[#dadeda] dark-mode:bg-[#222522]" style="display: none;">
              <a href="<?php echo $pathToWebRoot.'/portals/widgets.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Widgets</a>
              <a href="<?php echo $pathToWebRoot.'/portals/tech-tutorials.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Technology Tutorials</a>
              <a href="<?php echo $pathToWebRoot.'/portals/projects.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">IT Project Lists</a>
              <a href="<?php echo $pathToWebRoot.'/portals/interviews-and-thesis.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Intervs &amp; Thesis Prep</a>
              <a href="<?php echo $pathToWebRoot.'/portals/learning-materials.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Materi Pembelajaran</a>
              <a href="<?php echo $pathToWebRoot.'/portals/video-pages.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Video Pages</a>
              <a href="<?php echo $pathToWebRoot.'/portals/link-pages.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Link Pages</a>
              <a href="<?php echo $pathToWebRoot.'/portals/miscellaneous.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Miscellaneous</a>
            </div>
          </div>
          <div x-data="{ dropdownOpen: false }" class="relative pt-1">
            <button @click="dropdownOpen = !dropdownOpen" class="w-full flex items-center justify-between gap-2 py-3 px-4 rounded-lg text-gray-900 hover:bg-[#c1e0d1] dark-mode:hover:bg-[#c1e0d1]">
              <a href="<?php echo $pathToWebRoot.'/page-apps/'; ?>">Apps</a>
              <span
                :class="dropdownOpen 
                  ? 'relative py-1 px-1 inline-flex items-center rounded-md border border-gray-200 bg-gray-100 text-gray-800' 
                  : 'relative py-1 px-1 inline-flex items-center rounded-md'"
                class="transition-colors duration-200"
              >
                <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdownOpen }">
                  <title>chevron-down</title>
                  <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </span>
            </button>
            <div x-show="dropdownOpen" x-transition="" @click.away="dropdownOpen = false" class="nav-drpdwn-list w-full px-2 py-2 mt-2 mb-2 rounded-lg shadow-lg bg-[#dadeda] dark-mode:bg-[#222522]" style="display: none;">
              <a href="<?php echo $pathToWebRoot.'/page-apps/converter.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Converters</a>
              <a href="<?php echo $pathToWebRoot.'/page-apps/calculators.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Calculators</a>
              <a href="<?php echo $pathToWebRoot.'/page-apps/generators.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Generators</a>
              <a href="<?php echo $pathToWebRoot.'/page-apps/formatters.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Formatters</a>
              <a href="<?php echo $pathToWebRoot.'/page-apps/file-converter.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">File Converter</a>
              <a href="<?php echo $pathToWebRoot.'/page-apps/utilities.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Utilities</a>
              <a href="<?php echo $pathToWebRoot.'/page-apps/tester-tools.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Tester Tools</a>
            </div>
          </div>
          <div class="pt-1">
            <a href="<?php echo $pathToWebRoot.'/pages/contact.php'; ?>" class="block text-gray-900 hover:bg-[#c1e0d1] dark-mode:bg-[#203c2e] py-3 px-4 rounded-lg">Contact</a>
          </div>
          <div x-data="{ dropdownOpen: false }" class="relative pt-1">
            <button @click="dropdownOpen = !dropdownOpen" class="w-full flex items-center justify-between gap-2 py-3 px-4 rounded-lg text-gray-900 hover:bg-[#c1e0d1] dark-mode:hover:bg-[#c1e0d1]">
              <span>About &amp; Profile</span>
              <span
                :class="dropdownOpen 
                  ? 'relative py-1 px-1 inline-flex items-center rounded-md border border-gray-200 bg-gray-100 text-gray-800' 
                  : 'relative py-1 px-1 inline-flex items-center rounded-md'"
                class="transition-colors duration-200"
              >
                <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdownOpen }">
                  <title>chevron-down</title>
                  <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </span>
            </button>
            <div x-show="dropdownOpen" x-transition="" @click.away="dropdownOpen = false" class="nav-drpdwn-list w-full px-2 py-2 mt-2 mb-2 rounded-lg shadow-lg bg-[#dadeda] dark-mode:bg-[#222522]" style="display: none;">
              <a href="<?php echo $pathToWebRoot.'/pages/about.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">About</a>
              <a href="<?php echo $pathToWebRoot.'/pages/profile.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Profile</a>
            </div>
          </div>
          <div x-data="{ dropdownOpen: false }" class="relative pt-1">
            <button @click="dropdownOpen = !dropdownOpen" class="w-full flex items-center justify-between gap-2 py-3 px-4 rounded-lg text-gray-900 hover:bg-[#c1e0d1] dark-mode:hover:bg-[#c1e0d1]">
              <a href="<?php echo $pathToWebRoot.'/pages/networks.php'; ?>">Inzaghi's Group</a>
              <span
                :class="dropdownOpen 
                  ? 'relative py-1 px-1 inline-flex items-center rounded-md border border-gray-200 bg-gray-100 text-gray-800' 
                  : 'relative py-1 px-1 inline-flex items-center rounded-md'"
                class="transition-colors duration-200"
              >
                <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdownOpen }">
                  <title>chevron-down</title>
                  <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </span>
            </button>
            <div x-show="dropdownOpen" x-transition="" @click.away="dropdownOpen = false" class="nav-drpdwn-list w-full px-2 py-2 mt-2 mb-2 rounded-lg shadow-lg bg-[#dadeda] dark-mode:bg-[#222522]" style="display: none;">
              <a href="<?php echo $pathToWebRoot.'/inzaghis-group/inzaghis-blog.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Inzaghi's Blog</a>
              <a href="../inzaghis-group/inzaghis-media.php" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Inzaghi's Media</a>
              <a href="../inzaghis-group/inzaghis-dev.php" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Inzaghi's Dev</a>
              <a href="../inzaghis-group/inzaghis-archives.php" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Inzaghi's Archives</a>
              <a href="../inzaghis-group/inzaghis-app.php" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Inzaghi's App</a>
              <a href="../inzaghis-group/inzaghis-ai.php" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Inzaghi's AI</a>
            </div>
          </div>
          <div x-data="{ dropdownOpen: false }" class="relative pt-1">
            <button @click="dropdownOpen = !dropdownOpen" class="w-full flex items-center justify-between gap-2 py-3 px-4 rounded-lg text-gray-900 hover:bg-[#c1e0d1] dark-mode:hover:bg-[#c1e0d1]">
              <span>Switch to</span>
              <span
                :class="dropdownOpen 
                  ? 'relative py-1 px-1 inline-flex items-center rounded-md border border-gray-200 bg-gray-100 text-gray-800' 
                  : 'relative py-1 px-1 inline-flex items-center rounded-md'"
                class="transition-colors duration-200"
              >
                <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdownOpen }">
                  <title>chevron-down</title>
                  <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </span>
            </button>
            <div x-show="dropdownOpen" x-transition="" @click.away="dropdownOpen = false" class="nav-drpdwn-list w-full px-2 py-2 mt-2 mb-2 rounded-lg shadow-lg bg-[#dadeda] dark-mode:bg-[#222522]" style="display: none;">
              <a href="https://sites.google.com/view/inzaghis-sites" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Old Inzaghi's Sites</a>
              <a href="https://inzaghiposuma.wordpress.com/" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">WordPress Site</a>
              <a href="https://inzaghi-site.webflow.io" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Preview (Webflow)</a>
            </div>
          </div>
        </div>
        <div class="pt-6 p-[inherit]">
          <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 w-full dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            <a class="button-link relative transition-all ease-in duration-75 rounded-md group-hover:bg-opacity-0" href="<?php echo $pathToWebRoot.'/includes/login-page.php'; ?>">
              Sign in
            </a>
          </button>
        </div>
      </nav>
    </div>
  </div>
</div>

<!---->
<!-- UNDER CONSTRUCTION! -->
<!-- <div
  class="navbar bg-opacity-60 bg-white fixed w-full z-10 transition-all duration-300 shadow-md" x-data="{ open: false, scrolled: false, dropdown: null }"
  x-data="{ open: false, scrolled: false, dropdown: null }"
  @scroll.window="scrolled = window.scrollY > 0"
  :class="scrolled 
    ? 'bg-gray-200 bg-opacity-60 backdrop-blur-lg shadow-md' 
    : 'bg-transparent shadow-none'"
  x-init="$watch('scrolled', (value) => {
    // Update untuk outer navbar
    if (value) {
      $el.classList.add('bg-opacity-45', 'shadow-md');
      $el.classList.remove('bg-opacity-0');
    } else {
      $el.classList.add('bg-opacity-0');
      $el.classList.remove('bg-opacity-45', 'shadow-md');
    }
    // Update untuk inner navbar-container
    const navContainer = document.querySelector('.navbar-container');
    if (navContainer) {
      if (value) {
        // Saat discroll, berikan transparansi 45% (sesuai kebutuhan)
        navContainer.classList.add('bg-opacity-45', 'shadow-md');
        navContainer.classList.remove('bg-opacity-10', 'bg-opacity-0');
      } else {
        // Saat di atas, gunakan opacity awal (misal: 10%)
        navContainer.classList.add('bg-opacity-10');
        navContainer.classList.remove('bg-opacity-45', 'shadow-md');
      }
    }
  })"
  @scroll.window="scrolled = window.scrollY > 0"
>
  <nav class="navbar-container bg-gray-200 bg-opacity-10 backdrop-filter backdrop-blur-lg text-black transition-all duration-300">
    <div class="navbar-wrapper container mx-auto max-w-screen-xl px-4 flex items-center justify-between gap-4 w-full">
      <div class="isites-logo flex items-center">
        <a href="<?php echo $pathToWebRoot.'/public/index.php'; ?>" class="flex items-center py-5 px-2">
          <img src="<?php echo $pathToWebRoot.'/assets/icons/inzaghis-sites-logo-vertical-transparent.png'; ?>" title="Inzaghi&apos;s Sites" class="!h-14" id="logo-nav" alt="Inzaghi's Sites">
        </a>
      </div>
      <div class="button-toggle flex items-center lg:order-2">
        <button class="sign-in-button hidden sm:block relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-200">
          <a class="main-button-nav relative px-5 py-2.5 transition-all ease-in duration-75 bg-gray-900 rounded-md group-hover:bg-opacity-0" href="<?php echo $pathToWebRoot.'/includes/login-page.php'; ?>">
            Sign in
          </a>
        </button>
        <div class="menu-toggle lg:hidden flex items-center hover:bg-gray-300 gap-2 rounded-lg block">
          <button @click="open = !open" class="mobile-menu-button py-3 px-3" aria-label="Toggle Menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <title>Menu Toggle</title>
              <g fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                <path d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"/>
              </g>
            </svg>
          </button>
        </div>
      </div>
      <div id="navigation-menu" :class="open ? 'block' : 'hidden'" class="nav-menu hidden lg:flex lg:flex-row flex-col items-center justify-start lg:space-x-1 pb-3 lg:pb-0">
        <a href="<?php echo $pathToWebRoot.'/public/index.php'; ?>" class="nav-toggle py-2 px-3 hover:bg-[#c1e0d1] gap-2 rounded-lg block">Home</a>
        <div class="relative group" @mouseenter="dropdown = 'blogs'" @mouseleave="dropdown = null">
          <div class="py-3">
            <button @click="dropdown = dropdown === 'blogs' ? null : 'blogs'" class="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] dark-mode:bg-[#203c2e] flex items-center gap-2 rounded-lg">
              <span class="pointer-events-none">Blogs</span>
              <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdown === 'blogs' }">
                <title>chevron-down</title>
                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </button>
          </div>
          <div x-show="dropdown === 'blogs'"
            x-transition:enter="transition ease-out duration-200 transform"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-out duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl dark-mode:bg-[#222522]" style="display: none;"
          >
            <a href="https://medium.com/@izzumiposhaf29" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Inzaghi's Group Blog</a>
            <a href="https://inzaghiposuma.wordpress.com/blog-posts" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">WordPress Blog</a>
          </div>
        </div>
        <div class="relative group" @mouseenter="dropdown = 'portals'" @mouseleave="dropdown = null">
          <div class="py-3">
            <button @click="dropdown = dropdown === 'portals' ? null : 'portals'" class="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] dark-mode:bg-[#203c2e] flex items-center gap-2 rounded-lg">
              <a href="<?php echo $pathToWebRoot.'/portals/'; ?>">Portals</a>
              <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdown === 'portals' }">
                <title>chevron-down</title>
                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </button>
          </div>
          <div x-show="dropdown === 'portals'"
            x-transition:enter="transition ease-out duration-200 transform"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-out duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl dark-mode:bg-[#222522]" style="display: none;"
          >
            <a href="<?php echo $pathToWebRoot.'/portals/widgets.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Widgets</a>
            <a href="<?php echo $pathToWebRoot.'/portals/tech-tutorials.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Technology Tutorials</a>
            <a href="<?php echo $pathToWebRoot.'/portals/projects.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">IT Project Lists</a>
            <a href="<?php echo $pathToWebRoot.'/portals/interviews-and-thesis.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Intervs &amp; Thesis Prep</a>
            <a href="<?php echo $pathToWebRoot.'/portals/learning-materials.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Materi Pembelajaran</a>
            <a href="<?php echo $pathToWebRoot.'/portals/video-pages.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Video Pages</a>
            <a href="<?php echo $pathToWebRoot.'/portals/link-pages.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Link Pages</a>
            <a href="<?php echo $pathToWebRoot.'/portals/miscellaneous.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Miscellaneous</a>
          </div>
        </div>
        <div class="relative group" @mouseenter="dropdown = 'apps'" @mouseleave="dropdown = null">
          <div class="py-3">
            <button @click="dropdown = dropdown === 'apps' ? null : 'apps'" class="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] dark-mode:bg-[#203c2e] flex items-center gap-2 rounded-lg">
              <a href="<?php echo $pathToWebRoot.'/page-apps/'; ?>">Apps</a>
              <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdown === 'apps' }">
                <title>chevron-down</title>
                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </button>
          </div>
          <div x-show="dropdown === 'apps'"
            x-transition:enter="transition ease-out duration-200 transform"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-out duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl dark-mode:bg-[#222522]" style="display: none;"
          >
            <a href="<?php echo $pathToWebRoot.'/page-apps/converter.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Converters</a>
            <a href="<?php echo $pathToWebRoot.'/page-apps/calculators.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Calculators</a>
            <a href="<?php echo $pathToWebRoot.'/page-apps/generators.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Generators</a>
            <a href="<?php echo $pathToWebRoot.'/page-apps/formatters.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Formatters</a>
            <a href="<?php echo $pathToWebRoot.'/page-apps/file-converter.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">File Converter</a>
            <a href="<?php echo $pathToWebRoot.'/page-apps/utilities.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Utilities</a>
            <a href="<?php echo $pathToWebRoot.'/page-apps/tester-tools.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Tester Tools</a>
          </div>
        </div>
        <a href="<?php echo $pathToWebRoot.'/pages/contact.php'; ?>" class="nav-toggle py-2 px-3 hover:bg-[#c1e0d1] gap-2 rounded-lg block">Contact</a>
        <div class="relative group" @mouseenter="dropdown = 'about-profile'" @mouseleave="dropdown = null">
          <div class="py-3">
            <button @click="dropdown = dropdown === 'about-profile' ? null : 'about-profile'" class="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] dark-mode:bg-[#203c2e] flex items-center gap-2 rounded-lg">
              <span class="pointer-events-none">About &amp; Profile</span>
              <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdown === 'about-profile' }">
                <title>chevron-down</title>
                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </button>
          </div>
          <div x-show="dropdown === 'about-profile'"
            x-transition:enter="transition ease-out duration-200 transform"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-out duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl dark-mode:bg-[#222522]" style="display: none;"
          >
            <a href="<?php echo $pathToWebRoot.'/pages/about.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">About</a>
            <a href="<?php echo $pathToWebRoot.'/pages/profile.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Profile</a>
          </div>
        </div>
        <div class="relative group" @mouseenter="dropdown = 'group'" @mouseleave="dropdown = null">
          <div class="py-3">
            <button @click="dropdown = dropdown === 'group' ? null : 'group'" class="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] dark-mode:bg-[#203c2e] flex items-center gap-2 rounded-lg">
              <a href="<?php echo $pathToWebRoot.'/pages/networks.php'; ?>">Inzaghi's Group</a>
              <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdown === 'group' }">
                <title>chevron-down</title>
                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </button>
          </div>
          <div x-show="dropdown === 'group'"
            x-transition:enter="transition ease-out duration-200 transform"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-out duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl dark-mode:bg-[#222522]" style="display: none;"
          >
            <a href="<?php echo $pathToWebRoot.'/inzaghis-group/inzaghis-blog.php'; ?>" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Inzaghi's Blog</a>
            <a href="../inzaghis-group/inzaghis-media.php" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Inzaghi's Media</a>
            <a href="../inzaghis-group/inzaghis-dev.php" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Inzaghi's Dev</a>
            <a href="../inzaghis-group/inzaghis-archives.php" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Inzaghi's Archives</a>
            <a href="../inzaghis-group/inzaghis-app.php" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Inzaghi's App</a>
            <a href="../inzaghis-group/inzaghis-ai.php" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Inzaghi's AI</a>
          </div>
        </div>
        <div class="relative group" @mouseenter="dropdown = 'switch-sites'" @mouseleave="dropdown = null">
          <div class="py-3">
            <button @click="dropdown = dropdown === 'switch-sites' ? null : 'switch-sites'" class="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] dark-mode:bg-[#203c2e] flex items-center gap-2 rounded-lg">
              <span class="pointer-events-none">Switch to</span>
              <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdown === 'switch-sites' }">
                <title>chevron-down</title>
                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </button>
          </div>
          <div x-show="dropdown === 'switch-sites'"
            x-transition:enter="transition ease-out duration-200 transform"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-out duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl dark-mode:bg-[#222522]" style="display: none;"
          >
            <a href="https://sites.google.com/view/inzaghis-sites" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Old Inzaghi's Sites</a>
            <a href="https://inzaghiposuma.wordpress.com/" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">WordPress Site</a>
            <a href="https://inzaghi-site.webflow.io" class="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none focus:shadow-outline">Preview (Webflow)</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div class="lg:invisible navbar-menu fixed inset-0 z-50 bg-gray-900 bg-opacity-50" x-show="open" x-transition="" @click="open = false" style="display: none;">
    <div class="lg:invisible relative bg-white w-auto sm:w-80 max-w-full h-full" @click.stop="">
      <div class="flex items-center justify-between px-4 py-3 bg-gray-200">
        <span class="text-xl font-semibold text-gray-900">
          <a href="<?php echo $pathToWebRoot.'/public/index.php'; ?>" class="relative bg-gray-200 w-auto max-w-full h-full px-2 py-2">
            <img src="<?php echo $pathToWebRoot.'/assets/icons/inzaghis-sites-logo-vertical-transparent.png'; ?>" title="Inzaghi&apos;s Sites" class="!h-14" id="logo-nav" alt="Inzaghi's Sites"> </a></span>
        <div class="menu-toggle lg:hidden flex items-center hover:bg-gray-300 gap-2 rounded-lg block">
          <button @click="open = false" class="mobile-menu-button py-3 px-3" aria-label="Close Menu">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
      </div>
      <nav class="px-3 py-2 space-y-2 overflow-y-auto h-[calc(100%-6rem)] max-h-full">
        <div class="mb-auto pt-4 p-[inherit] font-[Inter] text-sm">
          <div class="pt-1">
            <a href="<?php echo $pathToWebRoot.'/public/index.php'; ?>" class="block text-gray-900 hover:bg-[#c1e0d1] dark-mode:bg-[#203c2e] py-3 px-4 rounded-lg">Home</a>
          </div>
          <div x-data="{ dropdownOpen: false }" class="relative pt-1">
            <button @click="dropdownOpen = !dropdownOpen" class="w-full flex items-center justify-between gap-2 py-3 px-4 rounded-lg text-gray-900 hover:bg-[#c1e0d1] dark-mode:hover:bg-[#c1e0d1]">
              <span>Blogs</span>
              <span
                :class="dropdownOpen 
                  ? 'relative py-1 px-1 inline-flex items-center rounded-md border border-gray-200 bg-gray-100 text-gray-800' 
                  : 'relative py-1 px-1 inline-flex items-center rounded-md'"
                class="transition-colors duration-200"
              >
                <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdownOpen }">
                  <title>chevron-down</title>
                  <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </span>
            </button>
            <div x-show="dropdownOpen" x-transition="" @click.away="dropdownOpen = false" class="nav-drpdwn-list w-full px-2 py-2 mt-2 mb-2 rounded-lg shadow-lg bg-[#dadeda] dark-mode:bg-[#222522]" style="display: none;">
              <a href="https://medium.com/@izzumiposhaf29" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Inzaghi's Group Blog</a>
              <a href="https://inzaghiposuma.wordpress.com/blog-posts" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">WordPress Blog</a>
            </div>
          </div>
          <div x-data="{ dropdownOpen: false }" class="relative pt-1">
            <button @click="dropdownOpen = !dropdownOpen" class="w-full flex items-center justify-between gap-2 py-3 px-4 rounded-lg text-gray-900 hover:bg-[#c1e0d1] dark-mode:hover:bg-[#c1e0d1]">
              <a href="<?php echo $pathToWebRoot.'/portals/'; ?>">Portals</a>
              <span
                :class="dropdownOpen 
                  ? 'relative py-1 px-1 inline-flex items-center rounded-md border border-gray-200 bg-gray-100 text-gray-800' 
                  : 'relative py-1 px-1 inline-flex items-center rounded-md'"
                class="transition-colors duration-200"
              >
                <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdownOpen }">
                  <title>chevron-down</title>
                  <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </span>
            </button>
            <div x-show="dropdownOpen" x-transition="" @click.away="dropdownOpen = false" class="nav-drpdwn-list w-full px-2 py-2 mt-2 mb-2 rounded-lg shadow-lg bg-[#dadeda] dark-mode:bg-[#222522]" style="display: none;">
              <a href="<?php echo $pathToWebRoot.'/portals/widgets.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Widgets</a>
              <a href="<?php echo $pathToWebRoot.'/portals/tech-tutorials.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Technology Tutorials</a>
              <a href="<?php echo $pathToWebRoot.'/portals/projects.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">IT Project Lists</a>
              <a href="<?php echo $pathToWebRoot.'/portals/interviews-and-thesis.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Intervs &amp; Thesis Prep</a>
              <a href="<?php echo $pathToWebRoot.'/portals/learning-materials.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Materi Pembelajaran</a>
              <a href="<?php echo $pathToWebRoot.'/portals/video-pages.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Video Pages</a>
              <a href="<?php echo $pathToWebRoot.'/portals/link-pages.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Link Pages</a>
              <a href="<?php echo $pathToWebRoot.'/portals/miscellaneous.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Miscellaneous</a>
            </div>
          </div>
          <div x-data="{ dropdownOpen: false }" class="relative pt-1">
            <button @click="dropdownOpen = !dropdownOpen" class="w-full flex items-center justify-between gap-2 py-3 px-4 rounded-lg text-gray-900 hover:bg-[#c1e0d1] dark-mode:hover:bg-[#c1e0d1]">
              <a href="<?php echo $pathToWebRoot.'/page-apps/'; ?>">Apps</a>
              <span
                :class="dropdownOpen 
                  ? 'relative py-1 px-1 inline-flex items-center rounded-md border border-gray-200 bg-gray-100 text-gray-800' 
                  : 'relative py-1 px-1 inline-flex items-center rounded-md'"
                class="transition-colors duration-200"
              >
                <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdownOpen }">
                  <title>chevron-down</title>
                  <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </span>
            </button>
            <div x-show="dropdownOpen" x-transition="" @click.away="dropdownOpen = false" class="nav-drpdwn-list w-full px-2 py-2 mt-2 mb-2 rounded-lg shadow-lg bg-[#dadeda] dark-mode:bg-[#222522]" style="display: none;">
              <a href="<?php echo $pathToWebRoot.'/page-apps/converter.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Converters</a>
              <a href="<?php echo $pathToWebRoot.'/page-apps/calculators.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Calculators</a>
              <a href="<?php echo $pathToWebRoot.'/page-apps/generators.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Generators</a>
              <a href="<?php echo $pathToWebRoot.'/page-apps/formatters.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Formatters</a>
              <a href="<?php echo $pathToWebRoot.'/page-apps/file-converter.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">File Converter</a>
              <a href="<?php echo $pathToWebRoot.'/page-apps/utilities.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Utilities</a>
              <a href="<?php echo $pathToWebRoot.'/page-apps/tester-tools.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Tester Tools</a>
            </div>
          </div>
          <div class="pt-1">
            <a href="<?php echo $pathToWebRoot.'/pages/contact.php'; ?>" class="block text-gray-900 hover:bg-[#c1e0d1] dark-mode:bg-[#203c2e] py-3 px-4 rounded-lg">Contact</a>
          </div>
          <div x-data="{ dropdownOpen: false }" class="relative pt-1">
            <button @click="dropdownOpen = !dropdownOpen" class="w-full flex items-center justify-between gap-2 py-3 px-4 rounded-lg text-gray-900 hover:bg-[#c1e0d1] dark-mode:hover:bg-[#c1e0d1]">
              <span>About &amp; Profile</span>
              <span
                :class="dropdownOpen 
                  ? 'relative py-1 px-1 inline-flex items-center rounded-md border border-gray-200 bg-gray-100 text-gray-800' 
                  : 'relative py-1 px-1 inline-flex items-center rounded-md'"
                class="transition-colors duration-200"
              >
                <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdownOpen }">
                  <title>chevron-down</title>
                  <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </span>
            </button>
            <div x-show="dropdownOpen" x-transition="" @click.away="dropdownOpen = false" class="nav-drpdwn-list w-full px-2 py-2 mt-2 mb-2 rounded-lg shadow-lg bg-[#dadeda] dark-mode:bg-[#222522]" style="display: none;">
              <a href="<?php echo $pathToWebRoot.'/pages/about.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">About</a>
              <a href="<?php echo $pathToWebRoot.'/pages/profile.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Profile</a>
            </div>
          </div>
          <div x-data="{ dropdownOpen: false }" class="relative pt-1">
            <button @click="dropdownOpen = !dropdownOpen" class="w-full flex items-center justify-between gap-2 py-3 px-4 rounded-lg text-gray-900 hover:bg-[#c1e0d1] dark-mode:hover:bg-[#c1e0d1]">
              <a href="<?php echo $pathToWebRoot.'/pages/networks.php'; ?>">Inzaghi's Group</a>
              <span
                :class="dropdownOpen 
                  ? 'relative py-1 px-1 inline-flex items-center rounded-md border border-gray-200 bg-gray-100 text-gray-800' 
                  : 'relative py-1 px-1 inline-flex items-center rounded-md'"
                class="transition-colors duration-200"
              >
                <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdownOpen }">
                  <title>chevron-down</title>
                  <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </span>
            </button>
            <div x-show="dropdownOpen" x-transition="" @click.away="dropdownOpen = false" class="nav-drpdwn-list w-full px-2 py-2 mt-2 mb-2 rounded-lg shadow-lg bg-[#dadeda] dark-mode:bg-[#222522]" style="display: none;">
              <a href="<?php echo $pathToWebRoot.'/inzaghis-group/inzaghis-blog.php'; ?>" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Inzaghi's Blog</a>
              <a href="../inzaghis-group/inzaghis-media.php" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Inzaghi's Media</a>
              <a href="../inzaghis-group/inzaghis-dev.php" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Inzaghi's Dev</a>
              <a href="../inzaghis-group/inzaghis-archives.php" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Inzaghi's Archives</a>
              <a href="../inzaghis-group/inzaghis-app.php" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Inzaghi's App</a>
              <a href="../inzaghis-group/inzaghis-ai.php" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Inzaghi's AI</a>
            </div>
          </div>
          <div x-data="{ dropdownOpen: false }" class="relative pt-1">
            <button @click="dropdownOpen = !dropdownOpen" class="w-full flex items-center justify-between gap-2 py-3 px-4 rounded-lg text-gray-900 hover:bg-[#c1e0d1] dark-mode:hover:bg-[#c1e0d1]">
              <span>Switch to</span>
              <span
                :class="dropdownOpen 
                  ? 'relative py-1 px-1 inline-flex items-center rounded-md border border-gray-200 bg-gray-100 text-gray-800' 
                  : 'relative py-1 px-1 inline-flex items-center rounded-md'"
                class="transition-colors duration-200"
              >
                <svg class="w-3 h-3 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'rotate-180': dropdownOpen }">
                  <title>chevron-down</title>
                  <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </span>
            </button>
            <div x-show="dropdownOpen" x-transition="" @click.away="dropdownOpen = false" class="nav-drpdwn-list w-full px-2 py-2 mt-2 mb-2 rounded-lg shadow-lg bg-[#dadeda] dark-mode:bg-[#222522]" style="display: none;">
              <a href="https://sites.google.com/view/inzaghis-sites" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Old Inzaghi's Sites</a>
              <a href="https://inzaghiposuma.wordpress.com/" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">WordPress Site</a>
              <a href="https://inzaghi-site.webflow.io" class="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-gray-200 dark-mode:text-gray-200 hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Preview (Webflow)</a>
            </div>
          </div>
        </div>
        <div class="pt-6 p-[inherit]">
          <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 w-full dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            <a class="button-link relative transition-all ease-in duration-75 rounded-md group-hover:bg-opacity-0" href="<?php echo $pathToWebRoot.'/includes/login-page.php'; ?>">
              Sign in
            </a>
          </button>
        </div>
      </nav>
    </div>
  </div>
</div> -->

<!-- https://tailwindflex.com/tag/navbar -->
<!-- https://tailwindflex.com/@piet-vriend/responsive-navbar -->
<!-- https://tailwindflex.com/@team-tailwindflex/responsive-navbar-with-dark-mode-support -->

<!-- https://tailwindflex.com/@alok/dropdown-select-on-hover -->
<!-- https://cruip.com/build-a-hoverable-dropdown-menu-with-tailwind-css-and-alpine-js -->
<!-- https://readymadeui.com/tailwind/component/tailwind-css-navbar-with-dropdown -->
<!-- https://www.creative-tim.com/twcomponents/component/responsive-navbar-with-dropdown -->

<!-- Alpine JS Scroll Detection | Sticky Navbar | Designed with Tailwindcss -->
<!-- https://www.youtube.com/watch?v=SCNSjNxtsiU -->