<?php 
  $webRoot = realpath(dirname(__DIR__));
  $serverRoot = realpath($_SERVER['DOCUMENT_ROOT']);
  if ($webRoot === $serverRoot) 
    $pathToWebRoot = "";
  else
    $pathToWebRoot = substr($webRoot, strlen($serverRoot) + 1);
?>

<!--DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
      //echo "<link rel='stylesheet' href='$pathToWebRoot/css/style.css'>" . "<br>";
      //echo "<link rel='stylesheet' href='$pathToWebRoot/css/reset.css'>" . "<br>";
      //echo "<link rel='stylesheet' href='$pathToWebRoot/bootstrap/css/bootstrap.min.css'>" . "<br>";
      //echo "<script src='$pathToWebRoot/js/script.js'></script>" . "<br>";
      //echo "<script src='$pathToWebRoot/jquery/jquery-3.7.1.js'></script>" . "<br>";
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionimages/2.0.1/css/ionicons.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Inzaghi's Sites</title>
    <link rel="shortcut icon" href="<?php echo $pathToWebRoot.'/images/inzaghis-sites-favicon-36x36-icon-only.png'; ?>" />
</head-->
<body>
    <section class="footer">
        <section class="footer-wrapper">
            <section class="inzaghis-corp-logo">
                <a href="#" id="logo">
                    <img src="<?php echo $pathToWebRoot.'/images/inzaghis-corp-logo-vertical-transparent.png'; ?>" height="60px" alt="logo" />
                </a>
            </section>
            <section class="special-pages">
                <section class="footer-title">Special Pages</section>
                <nav>
                    <ul>
                        <li><a href="<?php echo $pathToWebRoot.'/pages/about.php'; ?>">About</a></li>
                        <li><a href="<?php echo $pathToWebRoot.'/pages/disclaimer.php'; ?>">Disclaimer</a></li>
                        <li><a href="<?php echo $pathToWebRoot.'/pages/privacy-policy.php'; ?>">Privacy Policy</a></li>
                        <li><a href="<?php echo $pathToWebRoot.'/pages/contact.php'; ?>">Contact</a></li>
                        <li><a href="<?php echo $pathToWebRoot.'/pages/pages.php'; ?>">Apps</a></li>
                        <li><a href="https://medium.com/@izzumiposhaf29" target="_blank">Blog</a></li>
                        <li><a href="<?php echo $pathToWebRoot.'/pages/sitemap.php'; ?>">Sitemap</a></li>
                    </ul>
                </nav>
            </section>
            <section class="network">
                <section class="footer-title">Networks</section>
                <nav>
                    <ul>
                        <li><a href="<?php echo $pathToWebRoot.'/pages/inzaghis-group/inzaghis-blog.php'; ?>">Inzaghi's Blog</a></li>
                        <li><a href="#">Inzaghi's Media</a></li>
                        <li><a href="https://github.com/inzaghidev" target="_blank">Inzaghi's Dev (GitHub)</a></li>
                        <li><a href="https://sites.google.com/view/inzaghis-sites" target="_blank">Inzaghi's Sites (Old)</a></li>
                        <li><a href="#">Inzaghi's Archives</a></li>
                        <li><a href="#">Inzaghi's AI</a></li>
                        <li><a href="<?php echo $pathToWebRoot.'/pages/networks.php'; ?>">Inzaghi's Group Network Lists</a></li>
                    </ul>
                </nav>
            </section>
            <section class="quick-link">
                <section class="footer-title">Quick Link</section>
                <nav>
                    <ul>
                        <li><a href="https://inzaghiposuma.wordpress.com/blog-posts" target="_blank">WordPress Blog</a></li>
                        <li><a href="#">Inzaghi's Sites Blog</a></li>
                        <li><a href="https://linktr.ee/inzaghigroup" target="_blank">Linktree Inzaghi's Group</a></li>
                    </ul>
                </nav>
            </section>
        </section>
        <section class="footer-bottom">
            <div class="footer-copyright">
                © 2024 Inzaghi's Corp. All rights reserved.
            </div>
        </section>
    </section>
</body>
</html>

<?php

$d = dir(getcwd());

echo "Handle: " . $d->handle . "<br>";
echo "Path: " . $d->path . "<br>";

echo getcwd() . "<br>";

while (($file = $d->read()) !== false){
  echo "filename: " . $file . "<br>";
}

?>

<!-- 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" type="text/css" />
    <link rel="stylesheet" href="../css/reset.css" type="text/css" />
    <script src="../js/script.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="../bootstrap/css/bootstrap.min.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ionimages/2.0.1/css/ionicons.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="../jquery/jquery-3.7.1.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Inzaghi's Sites</title>
    <link
      rel="shortcut icon"
      href="../images/inzaghis-sites-favicon-36x36-icon-only.png"
    />
  </head>
<body>
<section class="footer">
      <section class="footer-wrapper">
        <section class="inzaghis-corp-logo">
          <a href="#" id="logo">
            <img
              src="../images/inzaghis-corp-logo-vertical-transparent.png"
              height="60px"
              alt="logo"
            />
          </a>
        </section>
        <section class="special-pages">
          <section class="footer-title">Special Pages</section>
          <nav>
            <ul>
              <li><a href="../pages/about.php">About</a></li>
              <li>
                <a href="../pages/disclaimer.php">Disclaimer</a>
              </li>
              <li>
                <a href="../pages/privacy-policy.php">Privacy Policy</a>
              </li>
              <li><a href="../pages/contact.php">Contact</a></li>
              <li><a href="../pages/pages.php">Apps</a></li>
              <li>
                <a href="https://medium.com/@izzumiposhaf29" target="_blank"
                  >Blog</a
                >
              </li>
              <li><a href="../pages/sitemap.php">Sitemap</a></li>
            </ul>
          </nav>
        </section>
        <section class="network">
          <section class="footer-title">Networks</section>
          <nav>
            <ul>
              <li><a href="#">Inzaghi's Blog</a></li>
              <li><a href="#">Inzaghi's Media</a></li>
              <li>
                <a href="https://github.com/inzaghidev" target="_blank"
                  >Inzaghi's Dev (GitHub)</a
                >
              </li>
              <li>
                <a
                  href="https://sites.google.com/view/inzaghis-sites"
                  target="_blank"
                  >Inzaghi's Sites (Old)</a
                >
              </li>
              <li><a href="#">Inzaghi's Archives</a></li>
              <li><a href="#">Inzaghi's AI</a></li>
              <li>
                <a href="../pages/networks.php"
                  >Inzaghi's Group Network Lists</a
                >
              </li>
            </ul>
          </nav>
        </section>
        <section class="quick-link">
          <section class="footer-title">Quick Link</section>
          <nav>
            <ul>
              <li>
                <a
                  href="https://inzaghiposuma.wordpress.com/blog-posts"
                  target="_blank"
                  >WordPress Blog</a
                >
              </li>
              <li><a href="#">Inzaghi's Sites Blog</a></li>
              <li>
                <a href="https://linktr.ee/inzaghigroup" target="_blank"
                  >Linktree Inzaghi's Group</a
                >
              </li>
            </ul>
          </nav>
        </section>
      </section>
      <section class="footer-bottom">
        <div class="footer-copyright">
          © 2024 Inzaghi's Corp. All rights reserved.
        </div>
      </section>
    </section>
</body>
</html>

-->