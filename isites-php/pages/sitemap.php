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
                     
                  // Urutkan file dan direktori secara alami
                  $items = [];
                  while (($file = readdir($handle)) !== false) {
                      if ($file != "." && $file != "..") {
                          $items[] = $file;
                      }
                  }
                  closedir($handle);
                  sort($items, SORT_NATURAL | SORT_FLAG_CASE);
                     
                  echo "<ul>"; // Mulai daftar untuk setiap direktori
                  foreach ($items as $file) {
                      $currentPath = $dir . '/' . $file;
                      $relativePath = $baseDir . $file;
                    
                      if (is_dir($currentPath)) {
                          // Jika direktori, tampilkan sebagai judul dengan tag <strong>
                          echo "<li><strong><a href='../../$relativePath' class='text-blue-500 hover:text-blue-800' style='margin-left: 20px;'><br>📁 $file/</a></strong></li>";
                          generateSitemap($currentPath, $baseDir . $file . '/', $level + 1);
                      } else {
                          // Jika file, tampilkan sebagai item daftar
                          echo "<li><a href='../../$relativePath' class='text-blue-500 hover:text-blue-800' style='margin-left: 20px;'>📄 $file</a></li>";
                      }
                  }
                  echo "</ul>"; // Akhiri daftar
              }

              // Set root direktori
              $webRoot = realpath(dirname(__DIR__));

              // Hitung base URL untuk setiap folder
              echo "<h3 class='text-3xl font-bold mb-4 font-[Inter]'>Directory Structure</h3>";
              echo "<ul style='display: table;'>";
              echo "<li><br><strong>📁 public</strong></li>";
              generateSitemap($webRoot . '/public', 'public/', 1);

              echo "<li><br><strong>📁 page-apps</strong></li>";
              generateSitemap($webRoot . '/page-apps', 'page-apps/', 1);

              echo "<li><br><strong>📁 portals</strong></li>";
              generateSitemap($webRoot . '/portals', 'portals/', 1);

              echo "<li><br><strong>📁 pages</strong></li>";
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
