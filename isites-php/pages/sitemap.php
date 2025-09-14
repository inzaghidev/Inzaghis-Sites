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
      <di class="page-wrapper page-container">
        <div
          class="card-apps bg-white shadow-xl flex flex-col justify-between rounded-lg p-6 ring-1 ring-green-500"
        >
          <p class="is-desc">
            Silakan klik pada Tombol di bawah ini jika ingin melihat Sitemap
            dalam bentuk XML.
          </p>
          <section>
            <a href="#" class="description-button">XML Sitemap</a>
          </section>
        </div>
        <br />
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
                      return;
                  }

                  $items = [];
                  while (($file = readdir($handle)) !== false) {
                      if ($file != "." && $file != "..") {
                          $items[] = $file;
                      }
                  }
                  closedir($handle);
                  sort($items, SORT_NATURAL | SORT_FLAG_CASE);

                  echo "<ul>";
                  foreach ($items as $file) {
                      $currentPath = $dir . '/' . $file;
                      $relativePath = $baseDir . $file;

                      if (is_dir($currentPath)) {
                          // Jika folder -> tampilkan, lalu lakukan rekursi
                          echo "<li><strong><a href='../../$relativePath' class='text-blue-500 hover:text-blue-800' style='margin-left: 20px;'><br>📁 $file/</a></strong>";
                          generateSitemap($currentPath, $baseDir . $file . '/', $level + 1);
                          echo "</li>";
                      } else {
                          // Filter hanya file .php dan .html
                          $ext = pathinfo($file, PATHINFO_EXTENSION);
                          if (in_array(strtolower($ext), ['php','html'])) {
                              echo "<li><a href='../../$relativePath' class='text-blue-500 hover:text-blue-800' style='margin-left: 20px;'>📄 $file</a></li>";
                          }
                      }
                  }
                  echo "</ul>";
              }

              // Set root direktori
              $webRoot = realpath(dirname(__DIR__));

              echo "<h3 class='text-3xl font-bold mb-4 font-[Inter]'>Directory Structure</h3>";
              echo "<ul style='display: table;'>";

              // 📁 public -> bisa diklik
              echo "<li class='folder'><br><strong><a href='../../public/' class='text-blue-500 hover:text-blue-800'>📁 public</a></strong></li>";
              generateSitemap($webRoot . '/public', 'public/', 1);
              echo "</li>";

              // 📁 page-apps -> bisa diklik
              echo "<li class='folder'><br><strong><a href='../../page-apps/' class='text-blue-500 hover:text-blue-800'>📁 page-apps</a></strong></li>";
              generateSitemap($webRoot . '/page-apps', 'page-apps/', 1);
              echo "</li>";

              // 📁 portals -> bisa diklik
              echo "<li class='folder'><br><strong><a href='../../portals/' class='text-blue-500 hover:text-blue-800'>📁 portals</a></strong></li>";
              generateSitemap($webRoot . '/portals', 'portals/', 1);
              echo "</li>";

              // 📁 pages -> tidak diklik
              echo "<li class='folder'><br><strong>📁 pages</strong>";
              generateSitemap($webRoot . '/pages', 'pages/', 1);
              echo "</li>";

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
