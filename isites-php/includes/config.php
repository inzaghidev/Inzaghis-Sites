<?php
    $webRoot = realpath(dirname(__DIR__));
    $serverRoot = realpath($_SERVER['DOCUMENT_ROOT']);
    if ($webRoot === $serverRoot) {
        $pathToWebRoot = "";
    } else {
        $pathToWebRoot = substr($webRoot, strlen($serverRoot) + 1);
    }
    //$pathToWebRoot = '/' . trim($pathToWebRoot, '/');
?>