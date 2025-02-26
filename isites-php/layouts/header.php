<?php 
  $webRoot = realpath(dirname(__DIR__));
  $serverRoot = realpath($_SERVER['DOCUMENT_ROOT']);
  if ($webRoot === $serverRoot) {
      $pathToWebRoot = "";
  } else {
      $pathToWebRoot = substr($webRoot, strlen($serverRoot) + 1);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
      echo "<link rel='stylesheet' href='$pathToWebRoot/css/style.css'>";
      echo "<link rel='stylesheet' href='$pathToWebRoot/css/reset.css'>";
      echo "<link rel='stylesheet' href='$pathToWebRoot/components/navbar/navbar.css'>";
      echo "<link rel='stylesheet' href='$pathToWebRoot/components/footsite/footsite.css'>";
      echo "<link rel='stylesheet' href='$pathToWebRoot/cdn/swiper@11/swiper-bundle.min.css'>";
    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionimages/2.0.1/css/ionicons.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet"> 
    <script src="https://unpkg.com/feather-icons"></script>
    <title><?php echo $page_title . " - Inzaghi's Sites"; ?></title>
    <link rel="shortcut icon" href="<?php echo $pathToWebRoot.'/assets/icons/inzaghis-sites-favicon-36x36-icon-only.png'; ?>" />
</head>
<body>
