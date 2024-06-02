<?php 
  $webRoot = realpath(dirname(__DIR__));
  $serverRoot = realpath($_SERVER['DOCUMENT_ROOT']);
  if ($webRoot === $serverRoot) 
    $pathToWebRoot = "";
  else
    $pathToWebRoot = substr($webRoot, strlen($serverRoot) + 1);
?>

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
                        <li><a href="<?php echo $pathToWebRoot.'/pages/apps.php'; ?>">Apps</a></li>
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
                        <li><a href="<?php echo $pathToWebRoot.'/pages/inzaghis-group/inzaghis-media.php'; ?>">Inzaghi's Media</a></li>
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

//$d = dir(getcwd());
//
//echo "Handle: " . $d->handle . "<br>";
//echo "Path: " . $d->path . "<br>";
//
//echo getcwd() . "<br>";
//
//while (($file = $d->read()) !== false){
//  echo "filename: " . $file . "<br>";
//}

?>