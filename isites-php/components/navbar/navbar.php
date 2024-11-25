<div class="navbar bg-white bg-opacity-60 fixed w-full z-10 shadow-md" id="navbar" data-state="closed">
  <nav class="bg-gray-100 bg-opacity-10 backdrop-filter backdrop-blur-lg text-black shadow-md">
    <div class="container mx-auto px-4 lg:flex items-center justify-center gap-6 w-full">
      <!-- Logo -->
      <div class="flex items-center justify-between lg:w-auto w-full">
        <a href="<?php echo $pathToWebRoot.'/public/index.php'; ?>" id="logo" class="flex items-center py-5 px-2">
          <img src="<?php echo $pathToWebRoot.'/images/inzaghis-sites-logo-vertical-transparent.png'; ?>" title="Inzaghi's Sites" class="h-12" alt="logo" />
        </a>
        <!-- Mobile Menu Button -->
        <div class="lg:hidden flex items-center hover:bg-gray-300 gap-2 rounded-lg block">
          <button class="mobile-menu-button py-3 px-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <title>bars-3-bottom-left</title>
              <g fill="none">
                <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </g>
            </svg>
          </button>
        </div>
      </div>

      <!-- Primary Navigation -->
      <div id="navigation-menu" class="hidden lg:flex lg:flex-row flex-col items-center justify-start lg:space-x-1 navigation-menu pb-3 lg:pb-0 navigation-menu">
        <a href="<?php echo $pathToWebRoot.'/public/index.php'; ?>" class="py-2 py-2 px-3 hover:bg-gray-300 gap-2 rounded-lg block">Home</a>
        <a href="https://medium.com/@izzumiposhaf29" class="py-2 py-2 px-3 hover:bg-gray-300 gap-2 rounded-lg block">Blog</a>
        <div class="hover:bg-gray-300 gap-2 rounded-lg block group">
          <button
            class="dropdown-toggle py-2 px-3 hover:bg-gray-300 flex items-center gap-2 rounded-lg">
            <a href="<?php echo $pathToWebRoot.'/page-apps/'; ?>">Page Apps</a>
            <svg
              class="w-3 h-3 pointer-events-none"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24">
              <title>chevron-down</title>
              <g fill="none">
                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </g>
            </svg>
          </button>
          <div
            class="nav-drpdwn-list dropdown-menu lg:absolute hidden bg-opacity-95 bg-gray-300 text-white rounded-lg py-2 shadow-xl lg:group-hover:block">
            <a href="<?php echo $pathToWebRoot.'/page-apps/converter.php'; ?>" class="block px-6 py-2 text-black hover:bg-gray-200">Converters</a>
            <a href="<?php echo $pathToWebRoot.'/page-apps/calculators.php'; ?>" class="block px-6 py-2 text-black hover:bg-gray-200">Calculators</a>
            <a href="<?php echo $pathToWebRoot.'/page-apps/generators.php'; ?>" class="block px-6 py-2 text-black hover:bg-gray-200">Generators</a>
            <a href="<?php echo $pathToWebRoot.'/page-apps/formatters.php'; ?>" class="block px-6 py-2 text-black hover:bg-gray-200">Formatters</a>
            <a href="<?php echo $pathToWebRoot.'/page-apps/file-converter.php'; ?>" class="block px-6 py-2 text-black hover:bg-gray-200">File Converter</a>
            <a href="<?php echo $pathToWebRoot.'/page-apps/utilities.php'; ?>" class="block px-6 py-2 text-black hover:bg-gray-200">Utilities</a>
            <a href="<?php echo $pathToWebRoot.'/page-apps/tester-tools.php'; ?>" class="block px-6 py-2 text-black hover:bg-gray-200">Tester Tools</a>
          </div>
        </div>
        <a href="<?php echo $pathToWebRoot.'/pages/contact.php'; ?>" class="py-2 py-2 px-3 hover:bg-gray-300 gap-2 rounded-lg block">Contact</a>
        <a href="<?php echo $pathToWebRoot.'/pages/profile.php'; ?>" class="py-2 py-2 px-3 hover:bg-gray-300 gap-2 rounded-lg block">Profile</a>
        <a href="<?php echo $pathToWebRoot.'/pages/about.php'; ?>" class="py-2 py-2 px-3 hover:bg-gray-300 gap-2 rounded-lg block">About</a>
        <div class="hover:bg-gray-300 gap-2 rounded-lg block group">
          <button
            class="dropdown-toggle py-2 px-3 hover:bg-gray-300 flex items-center gap-2 rounded-lg">
            <a href="<?php echo $pathToWebRoot.'/pages/networks.php'; ?>">Inzaghi's Group</a>
            <svg
              class="w-3 h-3 pointer-events-none"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24">
              <title>chevron-down</title>
              <g fill="none">
                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </g>
            </svg>
          </button>
          <div
            class="nav-drpdwn-list dropdown-menu lg:absolute hidden bg-opacity-95 bg-gray-300 text-white rounded-lg py-2 shadow-xl lg:group-hover:block">
            <a href="<?php echo $pathToWebRoot.'/inzaghis-group/inzaghis-blog.php'; ?>" class="block px-6 py-2 text-black hover:bg-gray-200">Inzaghi's Blog</a>
            <a href="<?php echo $pathToWebRoot.'/inzaghis-group/inzaghis-media.php'; ?>" class="block px-6 py-2 text-black hover:bg-gray-200">Inzaghi's Media</a>
          </div>
        </div>
        <!-- Dropdown Menu -->
        <div class="hover:bg-gray-300 gap-2 rounded-lg block group">
          <button class="dropdown-toggle py-2 px-3 hover:bg-gray-300 flex items-center gap-2 rounded-lg">
            <span class="pointer-events-none">Switch to Another Site</span>
            <svg class="w-3 h-3 pointer-events-none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <title>chevron-down</title>
              <g fill="none">
                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </g>
            </svg>
          </button>
          <div class="nav-drpdwn-list dropdown-menu lg:absolute hidden bg-opacity-95 bg-gray-300 text-white rounded-lg py-2 shadow-xl lg:group-hover:block">
            <a href="https://sites.google.com/view/inzaghis-sites" class="block px-6 py-2 text-black hover:bg-gray-200">Old Inzaghi's Sites</a>
            <a href="https://inzaghiposuma.wordpress.com" class="block px-6 py-2 text-black hover:bg-gray-200">WordPress Site</a>
            <a href="https://inzaghi-site.webflow.io" class="block px-6 py-2 text-black hover:bg-gray-200">Preview (Webflow)</a>
          </div>
        </div>
        
        <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-200">
          <a class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-gray-900 rounded-md group-hover:bg-opacity-0" href="">
            Sign in
          </a>
        </button>
      </div>
    </div>
  </nav>
</div>

<!-- https://tailwindflex.com/tag/navbar -->
<!-- https://tailwindflex.com/@piet-vriend/responsive-navbar -->
<!-- https://tailwindflex.com/@team-tailwindflex/responsive-navbar-with-dark-mode-support -->
<!-- https://www.creative-tim.com/twcomponents/component/responsive-navbar-with-dropdown -->