<?php
$page_title = "Sitemap";
include('../layouts/header.php');
include('../components/navbar/navbar.php');
?>
<section class="sitemap">
  <div class="container-top"></div>
  <div class="page-background">
    <div class="page-container">
      <div class="page-title">
        <h1 class="page-title">SITEMAP</h1>
      </div>
      <div class="page-wrapper page-container">
        <div class="welcome-to-inzaghis-sites">
          <div class="welcome-description bg-white shadow-xl rounded-lg p-6 ring-1 ring-green-500 p-6">
            <ul id="sitemap">
              <?php
              /**
               * Fungsi untuk menghasilkan sitemap.
               *
               * @param string $dir Direktori yang sedang diproses
               * @param string $baseDir Base direktori untuk URL
               * @param int $level Tingkat kedalaman (untuk indentasi visual)
               */
              function generateSitemap($dir, $baseDir, $level = 0) {
                  $handle = opendir($dir);

                  if ($handle === false) {
                      return; // Jika tidak dapat membuka direktori, hentikan fungsi
                  }

                  while (($file = readdir($handle)) !== false) {
                      if ($file != "." && $file != "..") {
                          $currentPath = $dir . '/' . $file;

                          // Penyesuaian base URL
                          $relativePath = $baseDir . $file;

                          echo "<li>";

                          if (is_dir($currentPath)) {
                              // Jika direktori, tampilkan sebagai link dan lakukan rekursi
                              echo str_repeat("&nbsp;", $level * 4) . "├── <a href='../../$relativePath' class='text-blue-500 hover:text-blue-800'>$file/</a><br/>";
                              generateSitemap($currentPath, $baseDir . $file . '/', $level + 1);
                          } else {
                              // Jika file, tampilkan sebagai link
                              echo str_repeat("&nbsp;", $level * 4) . "├── <a href='../../$relativePath' class='text-blue-500 hover:text-blue-800'>$file</a><br/>";
                          }

                          echo "</li>";
                      }
                  }

                  closedir($handle);
              }

              // Set root direktori
              $webRoot = realpath(dirname(__DIR__));
              $serverRoot = realpath($_SERVER['DOCUMENT_ROOT']);

              // Hitung base URL untuk setiap folder
              echo "<ul>";
              echo "<li><strong>📁 public</strong></li>";
              generateSitemap($webRoot . '/public', 'public/', 1);

              echo "<li><strong>📁 page-apps</strong></li>";
              generateSitemap($webRoot . '/page-apps', 'page-apps/', 1);

              echo "<li><strong>📁 portals</strong></li>";
              generateSitemap($webRoot . '/portals', 'portals/', 1);

              echo "<li><strong>📁 pages</strong></li>";
              generateSitemap($webRoot . '/pages', 'pages/', 1);
              echo "</ul>";
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include('../components/footsite/footsite.php');
include('../layouts/footer.php');
?>
