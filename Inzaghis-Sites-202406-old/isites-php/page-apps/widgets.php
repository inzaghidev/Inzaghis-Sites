<?php
    $page_title = "Widgets";
    include('../layouts/header.php');
?>

<div class="container-top"></div>
<section class="page-apps-wrapper">
  <div class="page-apps-container">
    <div class="welcome-container">
      <div class="welcome-title">
        <h1 class="welcome-title">Widgets</h1>
      </div>
      <section class="pages">
        <p class="is-desc">
          Merupakan kumpulan Widget Serbaguna untuk Anda yang membutuhkan
          Informasi seakurat mungkin. Widget di sini juga termasuk yang sedang
          heboh saat ini.
        </p>
        <div class="row">
            <?php
                // Data for the apps
                $apps = [
                    [
                        "title" => "Calendar System",
                        "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.",
                        "link" => "https://sites.google.com/view/inzaghis-sites/widgets/calendar-system"
                    ],
                    [
                        "title" => "Date Time",
                        "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                        "link" => "#"
                    ],
                    [
                        "title" => "Weather",
                        "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                        "link" => "#"
                    ],
                    [
                        "title" => "Stocks",
                        "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.",
                        "link" => "#"
                    ],
                    [
                        "title" => "Maps",
                        "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                        "link" => "#"
                    ],
                    [
                        "title" => "Islamic Portal",
                        "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                        "link" => "#"
                    ],
                ];

                // Loop through each app data and create the HTML structure
                foreach ($apps as $app) {
                    echo '<div class="col-md-4 col-sm-6 mb-4">';
                    echo '  <div class="card h-100">';
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
    include('../layouts/footer.php');
?>
