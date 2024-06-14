<div class="nav-header" id="navHeader">
    <nav class="navbar" id="navbar">
        <a href="<?php echo $pathToWebRoot.'/public/index.php'; ?>" id="logo">
            <img src="<?php echo $pathToWebRoot.'/images/inzaghis-sites-logo-vertical-transparent.png'; ?>" title="Inzaghi&apos;s Sites" height="60px" alt="logo" />
        </a>
        <div class="nav-menu">
            <ul>
                <li><a href="<?php echo $pathToWebRoot.'/public/index.php'; ?>">Home</a></li>
                <li><a href="https://medium.com/@izzumiposhaf29">Blog</a></li>
                <li><a href="<?php echo $pathToWebRoot.'/pages/apps.php'; ?>">Page Apps</a></li>
                <li><a href="<?php echo $pathToWebRoot.'/pages/contact.php'; ?>">Contact</a></li>
                <li><a href="<?php echo $pathToWebRoot.'/pages/profile.php'; ?>">Profile</a></li>
                <li><a href="<?php echo $pathToWebRoot.'/pages/about.php'; ?>">About</a></li>
                <li><a href="<?php echo $pathToWebRoot.'/pages/networks.php'; ?>">Inzaghi's Group Network</a></li>
                <li class="dropdown">
                    <div class="nav-dropdown-toggle w-dropdown-toggle">
                        <div class="nav-dropdown-icon">
                            <div class="text-block">
                                <a>Switch to Another Site
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                                        <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <nav class="nav-dropdown-list nav-dropdown-list--open">
                            <a href="https://sites.google.com/view/inzaghis-sites" class="dropdown-link">Old Inzaghi's Sites</a>
                            <a href="https://inzaghiposuma.wordpress.com" class="dropdown-link">WordPress Site</a>
                            <a href="https://inzaghi-site.webflow.io" class="dropdown-link">Preview (Webflow)</a>
                        </nav>
                    </div>
                </li>
                <div class="sign-in-button">
                    <a href="<?php echo $pathToWebRoot.'../includes/signin.php'; ?>" class="main-button">Sign in</a>
                </div>
            </ul>
        </div>
        <button class="menu-toggle" id="menu-toggle">
            <span class="fas fa-bars bar"></span>
        </button>
        <div class="cancel-icon">
            <span class="fas fa-times"></span>
        </div>
    </nav>
</div>