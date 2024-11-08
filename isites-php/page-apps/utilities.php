<?php
    $page_title = "Utilities";
    include('../layouts/header.php');
    include('../components/navbar/navbar.php');
    $data = json_decode(file_get_contents('../data/apps-data.json'), true);
    $apps = $data['utilities'];
?>

<div class="container-top"></div>
<section class="page-apps-wrapper">
  <div class="page-apps-container">
    <div class="welcome-container">
      <div class="welcome-title">
        <h1 class="welcome-title">Utilities</h1>
      </div>
      <section class="pages">
        <p class="is-desc">
          Merupakan portal untuk berbagai kumpulan Aplikasi untuk Utilitas
          atau kebutuhan sehari-hari seperti Pencarian IP Address, SSL
          Checker, Website Status Checker, Find and Replace, dan lainnya.
        </p>
        <div class="row">
            <?php
                // Loop through each app data and create the HTML structure
                foreach ($apps as $app) {
                  $title = isset($app['title']) ? $app['title'] : 'N/A';
                  $text = isset($app['text']) ? $app['text'] : '';
                  $link = isset($app['link']) ? $app['link'] : '#';

                  echo '<div class="col-md-4 col-sm-6 mb-4">';
                  echo '  <div class="card h-100 shadow border border-success">';
                  echo '    <div class="card-body card-apps-body">';
                  echo '      <h5 class="card-title">' . $app["title"] . '</h5>';
                  echo '      <p class="card-text card-apps">' . $app["text"] . '</p>';
                  echo '      <a href="' . $app["link"] . '" class="btn btn-primary apps-button">Click here</a>';
                  echo '    </div>';
                  echo '  </div>';
                  echo '</div>';
                }
            ?>
        </div>
      </section>
    </div>
  </div>
</section>

<?php
    include('../components/footsite/footsite.php');
    include('../layouts/footer.php');
?>