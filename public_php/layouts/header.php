<?php 
  $webRoot = realpath(dirname(__DIR__));
  $serverRoot = realpath($_SERVER['DOCUMENT_ROOT']);
  if ($webRoot === $serverRoot) 
    $pathToWebRoot = "";
  else
    $pathToWebRoot = substr($webRoot, strlen($serverRoot) + 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
      echo "<link rel='stylesheet' href='$pathToWebRoot/css/style.css'>";
      echo "<link rel='stylesheet' href='$pathToWebRoot/css/reset.css'>";
      echo "<link rel='stylesheet' href='$pathToWebRoot/bootstrap/css/bootstrap.min.css'>";
      echo "<script src='$pathToWebRoot/js/script.js'></script>";
      echo "<script src='$pathToWebRoot/jquery/jquery-3.7.1.js'></script>";
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionimages/2.0.1/css/ionicons.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <title><?php echo $page_title; ?></title>
    <link rel="shortcut icon" href="<?php echo $pathToWebRoot.'/images/inzaghis-sites-favicon-36x36-icon-only.png'; ?>" />
</head>
<body>
    <div class="nav-header" id="navHeader">
        <nav class="navbar" id="navbar">
            <a href="<?php echo $pathToWebRoot.'/public/index.php'; ?>" id="logo">
                <img src="<?php echo $pathToWebRoot.'/images/inzaghis-sites-logo-vertical-transparent.png'; ?>" height="60px" alt="logo" />
            </a>
            <button class="menu-toggle" id="menu-toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </button>
            <a href="#" class="main-button sign-in-button">Sign in</a>
            <div class="nav-menu">
                <ul>
                    <li><a href="<?php echo $pathToWebRoot.'/public/index.php'; ?>">Home</a></li>
                    <li><a href="https://medium.com/@izzumiposhaf29">Blog</a></li>
                    <li><a href="<?php echo $pathToWebRoot.'/pages/pages.php'; ?>">Page Apps</a></li>
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
                </ul>
            </div>
        </nav>
    </div>
</body>
</html>