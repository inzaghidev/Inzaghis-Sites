<?php
    $page_title = "Calculators";
    include('../layouts/header.php');
    include('../components/navbar/navbar.php');
?>

<div class="container-top"></div>
<section class="page-apps-wrapper">
  <div class="page-apps-container">
    <div class="welcome-container">
      <div class="welcome-title">
        <h1 class="welcome-title">Calculators</h1>
      </div>
      <section class="pages">
        <p class="is-desc">
          Merupakan kumpulan dari beberapa jenis Kalkulator seperti Kalkulator
          Sederhana, Ilmiah, Matematika, Kesehatan, Keuangan, hingga
          Kalkulator untuk Keseharian.
        </p>
        <div class="row">
            <?php
                // Data for the apps
                $apps = [
                    [
                      "title" => "Calculations Calculator",
                      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.",
                      "link" => "#"
                    ],
                    [
                      "title" => "Mathematics Calculator",
                      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                      "link" => "#"
                    ],
                    [
                      "title" => "Statistics Calculator",
                      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                      "link" => "#"
                    ],
                    [
                      "title" => "Geometry Calculator",
                      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.",
                      "link" => "#"
                    ],
                    [
                      "title" => "Finance Calculator",
                      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                      "link" => "#"
                    ],
                    [
                      "title" => "Health Calculator",
                      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                      "link" => "#"
                    ],
                    [
                      "title" => "Physics Calculator",
                      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.",
                      "link" => "#"
                    ],
                    [
                      "title" => "Chemistry Calculator",
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
                    echo '  <div class="card h-100 border border-success">';
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
