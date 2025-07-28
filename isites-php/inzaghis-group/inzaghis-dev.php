<?php
	$page_title = "Inzaghi's Dev";

  include_once __DIR__ . '/../includes/config.php';
  include('../layouts/header.php');
  include('../components/navbar/navbar.php');
?>
    <div class="container-top"></div>
    <section class="inzaghis-group-pages inzaghisdev-slider">
      <div class="page-container inzagroup-pages">
        <h1 class="my-4 page-title">Inzaghi's Dev</h1>
        <div class="page-wrapper">
          <div class="text-container">
            <p class="text-description">
              Inzaghi's Dev merupakan kumpulan Proyek TI untuk menyimpan Kode
              Program seperti Website, Aplikasi Sederhana, Program-program
              Dasar, hingga API.
            </p>
            <section class="group-button">
              <a href="https://github.com/inzaghidev" target="_blank" class="main-button">Click here</a>
            </section>
          </div>
          <section class="group-content">
            <div id="hcg-slider-1" class="hcg-slider">
              <div class="hcg-slide-container">
                <div class="hcg-slider-body card border border-success shadow">
                  <a class="hcg-slides animated" style="display: flex">
                    <img
                      src="../assets/images/inzaghis-dev-by-inzaghis-group-corp.png"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
          </section>
          <div
            class="card bg-white shadow rounded-lg"
            style="background-color: #fff0f0"
          >
            <div class="page-description"></div>
          </div>
        </div>
      </div>
    </section>
<?php
	include('../components/footsite/footsite.php');
  include('../layouts/footer.php');
?>