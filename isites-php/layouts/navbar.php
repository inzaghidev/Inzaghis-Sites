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
                    <li><a href="<?php echo $pathToWebRoot.'/pages/apps.php'; ?>">Page Apps</a></li>
                    <li><a href="<?php echo $pathToWebRoot.'/pages/contact.php'; ?>">Contact</a></li>
                    <li><a href="<?php echo $pathToWebRoot.'/pages/profile.php'; ?>">Profile</a></li>
                    <li><a href="<?php echo $pathToWebRoot.'/pages/about.php'; ?>">About</a></li>
                    <li><a href="<?php echo $pathToWebRoot.'/pages/networks.php'; ?>">Inzaghi's Group Network</a></li>
                    <div class="dropdown">
                        <div class="nav-dropdown-toggle w-dropdown-toggle">
                            <div class="nav-dropdown-icon">
                                <div class="text-block">
                                    <a>Switch to Another Site
                                        <ion-icon name="chevron-down-outline"></ion-icon>
                                    </a>
                                </div>
                            </div>
                            <nav class="nav-dropdown-list nav-dropdown-list--open">
                                <a href="https://sites.google.com/view/inzaghis-sites" class="dropdown-link">Old Inzaghi's Sites</a>
                                <a href="https://inzaghiposuma.wordpress.com" class="dropdown-link">WordPress Site</a>
                                <a href="https://inzaghi-site.webflow.io" class="dropdown-link">Preview (Webflow)</a>
                            </nav>
                        </div>
                    </div>
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