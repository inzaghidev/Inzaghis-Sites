<?php
    $page_title = "Pages";
    include('../layouts/header.php');
?>

<div class="container-top"></div>
<section class="sitemap">
  <div class="welcome-container">
    <div class="welcome-title">
      <h1 class="welcome-title">Pages</h1>
    </div>
    <section class="pages">
      <div class="row">
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="card h-100">
            <div class="card-body card-apps-body">
              <h5 class="card-title">App 1</h5>
              <p class="card-text card-apps">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                viverra euismod odio, gravida pellentesque urna varius
                vitae.
              </p>
              <a href="#" class="btn btn-primary apps-button"
                >Click here</a
              >
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="card h-100">
            <div class="card-body card-apps-body">
              <h5 class="card-title">App 2</h5>
              <p class="card-text card-apps">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
              <a href="#" class="btn btn-primary apps-button"
                >Click here</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>

<?php
    include('../layouts/footer.php');
?>
