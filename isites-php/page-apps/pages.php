<?php
    $page_title = "Pages";
    include('../layouts/header.php');
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
          <div class="col-md-4 col-sm-6 mb-4">
            <div class="card h-100">
              <div class="card-body card-apps-body">
                <h5 class="card-title">Programming Tutorials</h5>
                <p class="card-text card-apps">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nam viverra euismod odio, gravida pellentesque urna varius
                  vitae.
                </p>
                <a href="https://bit.ly/Tech-and-IT-Tutorials-Notion-Inzaghi" class="btn btn-primary apps-button"
                  >Click here</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 mb-4">
            <div class="card h-100">
              <div class="card-body card-apps-body">
                <h5 class="card-title">Materi Pembelajaran</h5>
                <p class="card-text card-apps">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <a href="https://sites.google.com/view/inzaghis-sites/pages/materi-pembelajaran" class="btn btn-primary apps-button"
                  >Click here</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 mb-4">
            <div class="card h-100">
              <div class="card-body card-apps-body">
                <h5 class="card-title">Video Page</h5>
                <p class="card-text card-apps">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <a href="https://sites.google.com/view/inzaghis-sites/pages/videos" class="btn btn-primary apps-button"
                  >Click here</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>

<?php
    include('../layouts/footer.php');
?>
