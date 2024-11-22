<div class="nav-header" id="navHeader">
    <nav class="navbar" id="navbar">
        <a href="<?php echo $pathToWebRoot.'/public/index.php'; ?>" id="logo">
            <img src="<?php echo $pathToWebRoot.'/images/inzaghis-sites-logo-vertical-transparent.png'; ?>" title="Inzaghi&apos;s Sites" height="60px" alt="logo" />
        </a>
        <div class="nav-menu-container">
            <div class="nav-menu">
                <ul>
                    <li><a href="<?php echo $pathToWebRoot.'/public/index.php'; ?>">Home</a></li>
                    <li><a href="https://medium.com/@izzumiposhaf29">Blog</a></li>
                    <li class="dropdown">
                        <div class="nav-dropdown-toggle w-dropdown-toggle">
                        <div class="text-block dropdown-button">
                            <a href="<?php echo $pathToWebRoot.'/page-apps/'; ?>">Page Apps</a>
                            <div class="dropdown-icon">
                                <ion-icon name="chevron-down-outline"></ion-icon>
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
                                <ion-icon name="chevron-down-outline"></ion-icon>
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
                                <a>Switch to Another Site</a>
                                <div class="dropdown-icon">
                                    <ion-icon name="chevron-down-outline"></ion-icon>
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