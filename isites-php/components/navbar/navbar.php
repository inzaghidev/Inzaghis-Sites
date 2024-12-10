<div class="nav-header" id="navHeader">
    <nav class="navbar" id="navbar">
        <a href="<?php echo $pathToWebRoot.'/public/index.php'; ?>" id="logo">
            <img src="<?php echo $pathToWebRoot.'/images/inzaghis-sites-logo-vertical-transparent.png'; ?>" title="Inzaghi&apos;s Sites" height="60px" alt="logo" />
        </a>
        <div class="nav-menu-container">
            <div class="nav-menu">
                <ul>
                    <li><a href="<?php echo $pathToWebRoot.'/public/index.php'; ?>">Home</a></li>
                    <li class="dropdown">
                        <div class="nav-dropdown-toggle w-dropdown-toggle">
                            <div class="text-block dropdown-button">
                                <a>Blogs</a>
                                <div class="dropdown-icon">
                                    <svg class="angle-down-icon pointer-events-none" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24">
                                        <title>chevron-down-outline</title>
                                        <g fill="none">
                                            <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <nav class="nav-dropdown-list nav-dropdown-list--open">
                                <a href="https://medium.com/@izzumiposhaf29" class="dropdown-link">Inzaghi's Group Blog</a>
                                <a href="https://inzaghiposuma.wordpress.com/blog-posts" class="dropdown-link">WordPress Blog</a>
                            </nav>
                        </div>
                    </li>
                    <li class="dropdown">
                        <div class="nav-dropdown-toggle w-dropdown-toggle">
                        <div class="text-block dropdown-button">
                            <a href="<?php echo $pathToWebRoot.'/page-apps/'; ?>">Apps</a>
                            <div class="dropdown-icon">
                                <svg class="angle-down-icon pointer-events-none" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24">
                                    <title>chevron-down-outline</title>
                                    <g fill="none">
                                        <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <nav class="nav-dropdown-list nav-dropdown-list--open">
                            <a href="<?php echo $pathToWebRoot.'/page-apps/converter.php'; ?>" class="dropdown-link">Converters</a>
                            <a href="<?php echo $pathToWebRoot.'/page-apps/calculators.php'; ?>" class="dropdown-link">Calculators</a>
                            <a href="<?php echo $pathToWebRoot.'/page-apps/generators.php'; ?>" class="dropdown-link">Generators</a>
                            <a href="<?php echo $pathToWebRoot.'/page-apps/formatters.php'; ?>" class="dropdown-link">Formatters</a>
                            <a href="<?php echo $pathToWebRoot.'/page-apps/file-converter.php'; ?>" class="dropdown-link">File Converter</a>
                            <a href="<?php echo $pathToWebRoot.'/page-apps/utilities.php'; ?>" class="dropdown-link">Utilities</a>
                            <a href="<?php echo $pathToWebRoot.'/page-apps/tester-tools.php'; ?>" class="dropdown-link">Tester Tools</a>
                        </nav>
                        </div>
                    </li>
                    <li><a href="<?php echo $pathToWebRoot.'/pages/contact.php'; ?>">Contact</a></li>
                    <li><a href="<?php echo $pathToWebRoot.'/pages/profile.php'; ?>">Profile</a></li>
                    <li><a href="<?php echo $pathToWebRoot.'/pages/about.php'; ?>">About</a></li>
                    <!--li><a href="<?php //echo $pathToWebRoot.'/pages/networks.php'; ?>">Inzaghi's Group</a></li-->
                    <li class="dropdown">
                        <div class="nav-dropdown-toggle w-dropdown-toggle">
                        <div class="text-block dropdown-button">
                            <a href="<?php echo $pathToWebRoot.'/pages/networks.php'; ?>">Inzaghi's Group</a>
                            <div class="dropdown-icon">
                                <svg class="angle-down-icon pointer-events-none" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24">
                                    <title>chevron-down-outline</title>
                                    <g fill="none">
                                        <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <nav class="nav-dropdown-list nav-dropdown-list--open">
                            <a href="<?php echo $pathToWebRoot.'/inzaghis-group/inzaghis-blog.php'; ?>" class="dropdown-link">Inzaghi's Blog</a>
                            <a href="<?php echo $pathToWebRoot.'/inzaghis-group/inzaghis-media.php'; ?>" class="dropdown-link">Inzaghi's Media</a>
                        </nav>
                        </div>
                    </li>
                    <li class="dropdown">
                        <div class="nav-dropdown-toggle w-dropdown-toggle">
                            <div class="text-block dropdown-button">
                                <a>Switch to</a>
                                <div class="dropdown-icon">
                                    <svg class="angle-down-icon pointer-events-none" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24">
                                        <title>chevron-down-outline</title>
                                        <g fill="none">
                                            <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <nav class="nav-dropdown-list nav-dropdown-list--open">
                                <a href="https://sites.google.com/view/inzaghis-sites" class="dropdown-link">Old Inzaghi's Sites</a>
                                <a href="https://inzaghiposuma.wordpress.com" class="dropdown-link">WordPress Site</a>
                                <a href="https://inzaghi-site.webflow.io" class="dropdown-link">Preview (Webflow)</a>
                            </nav>
                        </div>
                    </li>
                </ul>
                <div class="sign-in-button">
                    <a href="<?php echo $pathToWebRoot.'../includes/signin.php'; ?>" class="main-button">Sign in</a>
                </div>
            </div>
        </div>
        <button class="menu-toggle" id="menu-toggle">
            <span class="fas fa-bars bar"></span>
        </button>
        <div class="cancel-icon">
            <span class="fas fa-times cross"></span>
        </div>
    </nav>
</div>

<!-- Responsive Dropdown and Mega Menu using HTML & CSS : -->
<!-- https://codepen.io/fadzrinmadu/pen/bGqrJjB -->

<!-- Responsive Dropdown and Mega Menu using Tailwind CSS : -->
<!-- https://pagedone.io/docs/mega-menu -->
<!-- https://flowbite.com/docs/components/mega-menu -->

<!-- Responsive Navbar Menu using Tailwind CSS : -->
<!-- https://freefrontend.com/tailwind-navbars -->
<!-- https://www.creative-tim.com/twcomponents/component/navbar-hamburger-menu -->
<!-- https://www.creative-tim.com/twcomponents/component/navbar-using-css-only -->
<!--  -->
<!--  -->