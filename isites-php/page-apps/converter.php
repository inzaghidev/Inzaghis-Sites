<?php
    $page_title = "Converters";
    include('../layouts/header.php');
    include('../layouts/navbar.php');
?>

<div class="container-top"></div>
<section class="page-apps-wrapper">
  <div class="page-apps-container">
    <div class="welcome-container">
      <div class="welcome-title">
        <h1 class="welcome-title">Converters</h1>
      </div>
      <section class="pages">
        <p class="is-desc">
          Merupakan portal untuk Aplikasi Konverter seperti Konversi Suhu,
          Massa (Berat), Panjang, Sistem Bilangan, dan lain-lain. Sebagian
          dari Aplikasi Konverter ini akan sedikit menggunakan API.
        </p>
           <div class="row">
            <?php
                // Data for the apps
                $apps = [
                    [
                      "title" => "Basic Converters",
                      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.",
                      "link" => "#"
                    ],
                    [
                      "title" => "Engineering Converters",
                      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                      "link" => "#"
                    ],
                    [
                      "title" => "Electricity Converters",
                      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                      "link" => "#"
                    ],
                    [
                      "title" => "Fluid Converters",
                      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.",
                      "link" => "#"
                    ],
                    [
                      "title" => "App 5",
                      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                      "link" => "#"
                    ],
                    [
                      "title" => "App 6",
                      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                      "link" => "#"
                    ],
                    [
                      "title" => "App 7",
                      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.",
                      "link" => "#"
                    ],
                    [
                      "title" => "App 8",
                      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                      "link" => "#"
                    ],
                    [
                      "title" => "App 9",
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
