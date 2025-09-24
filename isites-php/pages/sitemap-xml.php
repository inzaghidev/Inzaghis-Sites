<?php
header("Content-Type: application/xml; charset=UTF-8");

/**
 * Fungsi untuk generate daftar URL dari direktori.
 *
 * @param string $dir Direktori
 * @param string $basePath Base path relatif
 * @param string $baseUrl Domain situs
 * @return array
 */
function generateSitemapXML($dir, $basePath) {
    global $baseUrl;

    $urls = [];
    $handle = opendir($dir);
    if ($handle === false) {
        return $urls;
    }

    $items = [];
    while (($file = readdir($handle)) !== false) {
        if ($file != "." && $file != "..") {
            $items[] = $file;
        }
    }
    closedir($handle);

    // Urutkan alfabet
    sort($items, SORT_NATURAL | SORT_FLAG_CASE);

    foreach ($items as $file) {
        $currentPath = $dir . '/' . $file;
        $relativePath = $basePath . $file;

        if (is_dir($currentPath)) {
            // Rekursi untuk direktori
            $urls = array_merge($urls, generateSitemapXML($currentPath, $relativePath . '/'));
        } else {
            // Hanya proses file .php dan .html
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (in_array($ext, ['php', 'html'])) {
                $url = rtrim($baseUrl, '/') . '/' . ltrim($relativePath, '/');
                $lastMod = date('Y-m-d', filemtime($currentPath));

                $urls[] = [
                    'loc' => $url,
                    'lastmod' => $lastMod,
                    'changefreq' => 'weekly',
                    'priority' => '0.8'
                ];
            }
        }
    }

    return $urls;
}

// Atur root direktori dan base URL Anda
$webRoot = realpath(dirname(__DIR__));
$baseUrl = "https://inzaghi.wuaze.com/"; // ganti dengan domain Anda

// Generate untuk beberapa folder utama
$allUrls = [];
$allUrls = array_merge($allUrls, generateSitemapXML($webRoot . '/public', 'public/'));
$allUrls = array_merge($allUrls, generateSitemapXML($webRoot . '/page-apps', 'page-apps/'));
$allUrls = array_merge($allUrls, generateSitemapXML($webRoot . '/portals', 'portals/'));
$allUrls = array_merge($allUrls, generateSitemapXML($webRoot . '/pages', 'pages/'));

// Cetak XML
echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

foreach ($allUrls as $url) {
    echo '  <url>' . PHP_EOL;
    echo '    <loc>' . htmlspecialchars($url['loc']) . '</loc>' . PHP_EOL;
    echo '    <lastmod>' . $url['lastmod'] . '</lastmod>' . PHP_EOL;
    echo '    <changefreq>' . $url['changefreq'] . '</changefreq>' . PHP_EOL;
    echo '    <priority>' . $url['priority'] . '</priority>' . PHP_EOL;
    echo '  </url>' . PHP_EOL;
}

echo '</urlset>';
?>