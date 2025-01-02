<?php
    echo "<script src='$pathToWebRoot/js/script.js'></script>";
    echo "<script src='$pathToWebRoot/components/navbar/navbar.js'></script>";
    echo "<script src='$pathToWebRoot/jquery/jquery-3.7.1.js'></script>";
?>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../tailwindcss-3.4.14/tailwindcss-cdn-3.4.15.js"></script>
    <script src="<?php echo "$pathToWebRoot/tailwindcss-3.4.14/tailwindcss-cdn-3.4.15.js"; ?>"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

<?php 
  $webRoot = realpath(dirname(__DIR__));
  $serverRoot = realpath($_SERVER['DOCUMENT_ROOT']);
  if ($webRoot === $serverRoot) 
    $pathToWebRoot = "";
  else
    $pathToWebRoot = substr($webRoot, strlen($serverRoot) + 1);
?>