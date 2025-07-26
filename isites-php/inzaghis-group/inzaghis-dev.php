<?php
	$page_title = "Inzaghi's Dev";

  include_once __DIR__ . '/../includes/config.php';
  include('../layouts/header.php');
  include('../components/navbar/navbar.php');
?>
    <div class="container-top"></div>
    <section class="inzaghis-group-pages inzaghisdev-slider">
      <div class="page-wrapper inzagroup-pages">
        <h1 class="my-4 page-title">Inzaghi's Dev</h1>
        <div class="text-container">
          <p class="text-description">
            Inzaghi's Dev merupakan kumpulan Proyek TI untuk menyimpan Kode
            Program seperti Website, Aplikasi Sederhana, Program-program Dasar,
            hingga API.
          </p>
          <section class="group-button">
            <a href="https://github.com/inzaghidev" target="_blank" class="main-button">Click here</a>
          </section>
        </div>
        <section class="group-content">
          <div id="hcg-slider-1" class="hcg-slider">
            <div
              class="hcg-slide-container content-description shadow-xl rounded-lg ring-1 ring-purple-400 m-0"
            >
              <div class="hcg-slider-body">
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
          class="bg-white shadow-xl rounded-lg p-6 ring-1 ring-purple-400 p-6"
        >
        </div>
      </div>
    </section>
<?php
	include('../components/footsite/footsite.php');
  include('../layouts/footer.php');
?>