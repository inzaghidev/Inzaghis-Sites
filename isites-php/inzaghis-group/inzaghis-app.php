<?php
	$page_title = "Inzaghi's App";

  include_once __DIR__ . '/../includes/config.php';
  include('../layouts/header.php');
  include('../components/navbar/navbar.php');
?>
    <div class="container-top"></div>
    <section class="inzaghis-group-pages inzaghisapp-slider">
      <div class="page-wrapper inzagroup-pages">
        <h1 class="my-4 page-title">Inzaghi's App</h1>
        <div class="text-container mb-8">
          <p class="text-description">
            Inzaghi's App merupakan Aplikasi Konten-konten yang menyajikan
            apapun dengan Tampilan Versi Mobile dari Inzaghi's Sites, seperti
            Inzaghi's Blog, Inzaghi's Media, dan Inzaghi's Group. Nantinya,
            Inzaghi's App akan tersedia dalam Versi Android dan iOS.
          </p>
          <section class="group-button">
            <a
              href="#"
              target="_blank"
              class="main-button"
              >Click here</a
            >
          </section>
        </div>
        <section class="group-content">
          <div id="hcg-slider-1" class="hcg-slider">
            <div
              class="hcg-slide-container content-description shadow-xl rounded-lg ring-1 ring-blue-400 m-0"
            >
              <div class="hcg-slider-body">
                <a class="hcg-slides animated" style="display: flex">
                  <img
                    src="../assets/images/inzaghis-app-by-inzaghis-group-corp.png"
                    alt=""
                  />
                </a>
              </div>
            </div>
          </div>
        </section>
        <div
          class="bg-white shadow-xl rounded-lg p-6 ring-1 ring-blue-400 p-6"
        >
        </div>
      </div>
    </section>
<?php
	include('../components/footsite/footsite.php');
  include('../layouts/footer.php');
?>