<?php
header("Content-Type: application/xml; charset=UTF-8");

/**
 * Fungsi untuk generate XML Sitemap.
 *
 * @param string $dir Direktori
 * @param string $baseDir Base URL relative
 * @param string $baseUrl Domain situs
 */
function generateSitemapXML($dir, $baseDir, $baseUrl) {
    $urls = [];

    $handle = opendir($dir);
    if ($handle === false) {
        return $urls;
    }

    while (($file = readdir($handle)) !== false) {
        if ($file != "." && $file != "..") {
            $currentPath = $dir . '/' . $file;

            if (is_dir($currentPath)) {
                // Rekursi ke folder
                $urls = array_merge(
                    $urls,
                    generateSitemapXML($currentPath, $baseDir . $file . '/', $baseUrl)
                );
            } else {
                // Hanya file .php dan .html
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, ['php','html'])) {
                    $relativePath = $baseDir . $file;
                    $urls[] = [
                        'loc' => $baseUrl . $relativePath,
                        'lastmod' => date("Y-m-d", filemtime($currentPath))
                    ];
                }
            }
        }
    }
    closedir($handle);

    return $urls;
}

// Atur root direktori dan base URL Anda
$webRoot = realpath(dirname(__DIR__));
$baseUrl = "https://inzaghi.wuaze.com/"; // ganti dengan domain Anda

// Generate untuk beberapa folder utama
$allUrls = [];
$allUrls = array_merge($allUrls, generateSitemapXML($webRoot . '/public', 'public/', $baseUrl));
$allUrls = array_merge($allUrls, generateSitemapXML($webRoot . '/page-apps', 'page-apps/', $baseUrl));
$allUrls = array_merge($allUrls, generateSitemapXML($webRoot . '/portals', 'portals/', $baseUrl));
$allUrls = array_merge($allUrls, generateSitemapXML($webRoot . '/pages', 'pages/', $baseUrl));

// Cetak XML
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
foreach ($allUrls as $url) {
    echo '<url>';
    echo '<loc>' . htmlspecialchars($url['loc']) . '</loc>';
    echo '<lastmod>' . $url['lastmod'] . '</lastmod>';
    echo '</url>';
}
echo '</urlset>';
?>
