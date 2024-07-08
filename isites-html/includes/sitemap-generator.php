<?php

function generateSitemap($directory)
{
    $files = scandir($directory);
    $sitemapData = [];

    foreach ($files as $file) {
        if ($file != "." && $file != "..") {
            $filePath = $directory . '/' . $file;
            $isDirectory = is_dir($filePath);

            $sitemapData[] = [
                'name' => $file,
                'path' => $filePath,
                'isDirectory' => $isDirectory,
                'children' => $isDirectory ? generateSitemap($filePath) : null,
            ];
        }
    }

    return $sitemapData;
}

$projectDirectory = __DIR__; // Replace with your project directory
$sitemapData = generateSitemap($projectDirectory);

header('Content-Type: application/json');
echo json_encode($sitemapData, JSON_PRETTY_PRINT);

?>