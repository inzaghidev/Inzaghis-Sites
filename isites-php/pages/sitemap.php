<?php
    $page_title = "Sitemap";
    include('../layouts/header.php');
?>
<section class="sitemap">
  <div class="container-top"></div>
  <div class="welcome-container">
    <div class="welcome-title">
      <h1 class="welcome-title">SITEMAP</h1>
    </div>
    <div class="welcome-wrapper">
      <div class="welcome-to-inzaghis-sites">
        <div class="welcome-description">
          <ul id="sitemap">
            <?php
              function generateSitemap($dir, $pathToWebRoot = '', $level = 0) {
                  $handle = opendir($dir);

                  if ($handle === false) {
                      return; // Jika opendir gagal, hentikan fungsi
                  }

                  while (($file = readdir($handle)) !== false) {
                      if ($file != "." && $file != "..") {
                          $currentPath = $dir . '/' . $file;
                          $relativePath = $pathToWebRoot . $file;

                          echo "<li>";

                          if (is_dir($currentPath)) {
                              // If it's a directory, make it a clickable link
                              echo str_repeat("&nbsp;", $level * 4) . "├── <a href='$relativePath'>$file/</a><br/>";
                              // Recursive call for subdirectories
                              generateSitemap($currentPath, $relativePath . '/', $level + 1);
                          } else {
                              // If it's a file, just display the file name
                              echo str_repeat("&nbsp;", $level * 4) . "├── <a href='$relativePath'>$file</a><br/>";
                          }

                          echo "</li>";
                      }
                  }

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
              echo "<ul>";
              echo "<li><strong>📁 public</strong></li>";
              generateSitemap($webRoot . '/public/', '', 1);
              echo "<li><strong>📁 page-apps</strong></li>";
              generateSitemap($webRoot . '/page-apps/', '', 1);
              echo "<li><strong>📁 pages</strong></li>";
              generateSitemap($webRoot . '/pages/', '', 1);
              echo "</ul>";
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
    include('../layouts/footer.php');
?>
