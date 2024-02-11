<?php
	$page_title = "Sitemap";
	include('../layouts/header.php');
?>
    <section class="sitemap">
      <div class="welcome-container">
        <div class="welcome-title">
          <h1 class="welcome-title">SITEMAP</h1>
        </div>
        <div class="welcome-wrapper">
          <div class="welcome-to-inzaghis-sites">
            <div class="welcome-description">
              <ul id="sitemap"></ul>
              <?php
                function generateSitemap($dir, $pathToWebRoot = '') {
                    $handle = opendir($dir);
                    echo "<ul>";

                    while (($file = readdir($handle)) !== false) {
                        if ($file != "." && $file != "..") {
                            $currentPath = $dir . '/' . $file;
                            $relativePath = $pathToWebRoot . $file;

                            echo "<li>";

                            if (is_dir($currentPath)) {
                                // If it's a directory, make it a clickable link
                                echo "<a href='$relativePath'>$file</a>";
                                // Recursive call for subdirectories
                                generateSitemap($currentPath, $relativePath . '/');
                            } else {
                                // If it's a file, just display the file name
                                echo $file . '<br/>';
                            }

                            echo "</li>";
                        }
                    }

                    echo "</ul>";
                    closedir($handle);
                }

                // Set the root directory
                $webRoot = realpath(dirname(__DIR__));
                $serverRoot = realpath($_SERVER['DOCUMENT_ROOT']);
                if ($webRoot === $serverRoot) {
                    $pathToWebRoot = "";
                } else {
                    $pathToWebRoot = substr($webRoot, strlen($serverRoot) + 1);
                }

                // Explicitly specify the root directory for sitemap generation
                generateSitemap($webRoot, $pathToWebRoot);
              ?>

              <script src="../js/script.js"></script>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
	include('../layouts/footer.php');
?>