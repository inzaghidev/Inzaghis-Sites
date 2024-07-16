<?php
    $page_title = "Pages";
    include('../layouts/header.php');
    include('../components/navbar/navbar.php');
?>

<div class="container-top"></div>
<section class="page-apps-wrapper">
  <div class="page-apps-container">
    <div class="welcome-container">
      <div class="welcome-title">
        <h1 class="welcome-title">Pages</h1>
      </div>
      <section class="pages">
        <p class="is-desc">
            Merupakan kumpulan Halaman sebagai bacaan yang dapat diakses di
            Inzaghi's Sites. Dan juga sebagai kumpulan Materi dan Tutorial
            Pemrograman.
        </p>
        <div class="row">
            <?php
                // Data for the apps
                $apps = [
                    [
                      "title" => "Technology Tutorials",
                      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.",
                      "link" => "https://bit.ly/Tech-and-IT-Tutorials-Notion-Inzaghi"
                    ],
                    [
                      "title" => "Materi Pembelajaran",
                      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                      "link" => "https://sites.google.com/view/inzaghis-sites/pages/materi-pembelajaran"
                    ],
                    [
                      "title" => "Video Page",
                      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                      "link" => "https://sites.google.com/view/inzaghis-sites/pages/videos"
                    ],
                    [
                      "title" => "Link Page",
                      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.",
                      "link" => "https://bit.ly/Bookmark-Manager-Links-Notion-Inzaghi"
                    ],
                    [
                      "title" => "Programming Codes & UI Elements",
                      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                      "link" => "https://inzaghi-poshaf.notion.site/Programming-Codes-UI-Elements-a99dadc9f4e84480b705f05e35e67270"
                    ],
                    [
                      "title" => "App 6",
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
    include('../components/footsite/footsite.php');
    include('../layouts/footer.php');
?>
