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
          <div class="welcome-description card bg-white shadow rounded-lg shadow-lg border border-success">
            <ul id="sitemap">
              <?php
                function generateSitemap($dir, $pathToWebRoot = '', $level = 0) {
                    $handle = opendir($dir);

                    if ($handle === false) {
                        return;
                    }

                    while (($file = readdir($handle)) !== false) {
                        if ($file != "." && $file != "..") {
                            $currentPath = $dir . '/' . $file;

                            // Path relatif khusus untuk folder selain /pages/
                            if (strpos($dir, '/public/') !== false) {
                                $relativePath = 'public/' . $file;
                            } elseif (strpos($dir, '/page-apps/') !== false) {
                                $relativePath = 'page-apps/' . $file;
                            } elseif (strpos($dir, '/portals/') !== false) {
                                $relativePath = 'portals/' . $file;
                            } else {
                                $relativePath = $pathToWebRoot . $file; // Default untuk /pages/
                            }

                            echo "<li>";

                            if (is_dir($currentPath)) {
                                echo str_repeat("&nbsp;", $level * 4) . "├── <a href='$relativePath'>$file/</a><br/>";
                                generateSitemap($currentPath, $relativePath . '/', $level + 1); // Rekursi
                            } else {
                                echo str_repeat("&nbsp;", $level * 4) . "├── <a href='$relativePath'>$file</a><br/>";
                            }

                            echo "</li>";
                        }
                    }

                    closedir($handle);
                }

                // Set root direktori
                $webRoot = realpath(dirname(__DIR__)); // Root direktori proyek
                $serverRoot = realpath($_SERVER['DOCUMENT_ROOT']); // Root server web

                // Hitung base URL
                if ($webRoot === $serverRoot) {
                    $baseUrl = "";
                } else {
                    $baseUrl = substr($webRoot, strlen($serverRoot) + 1) . '/';
                }

                // Menampilkan sitemap
                echo "<ul>";
                echo "<li><strong>📁 public</strong></li>";
                generateSitemap($webRoot . '/public', '', 1);

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
