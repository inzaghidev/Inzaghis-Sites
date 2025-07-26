<?php
	$page_title = "Inzaghi's App";

  include_once __DIR__ . '/../includes/config.php';
  include('../layouts/header.php');
  include('../components/navbar/navbar.php');
?>
    <div class="container-top"></div>
    <section class="inzaghis-group-pages inzaghisapp-slider">
      <div class="page-container inzagroup-pages">
        <h1 class="my-4 page-title">Inzaghi's App</h1>
        <div class="page-wrapper">
          <div
            class="card bg-white shadow rounded-lg"
            style="background-color: #fff0f0"
          >
          </div>
        </div>
      </div>
    </section>
<?php
	include('../components/footsite/footsite.php');
  include('../layouts/footer.php');
?>