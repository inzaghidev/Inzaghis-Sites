<?php
	$page_title = "Inzaghi's Archives";

  include_once __DIR__ . '/../includes/config.php';
  include('../layouts/header.php');
  include('../components/navbar/navbar.php');
?>
    <div class="container-top"></div>
    <section class="inzaghis-group-pages inzaghisarchives-slider">
      <div class="page-container inzagroup-pages">
        <h1 class="my-4 page-title">Inzaghi's Archives</h1>
        <div class="page-wrapper">
          <div class="text-container">
            <p class="text-description">
              Inzaghi's Archives merupakan Pengarsipan File-file dalam bentuk
              Dokumen seperti Dokumen/Word (.doc), Excel (.xls),
              PowerPoint/Slide/Presentasi/PPT (.ppt), PDF (.pdf), dan File
              berbentuk Zip (.zip dan .rar). File-file Dokumen yang disimpan di
              Inzaghi's Archives untuk ditampilkan beberapa Layanan seperti
              Inzaghi's Blog dan Inzaghi's Sites.
            </p>
            <section class="group-button">
              <a
                href="https://drive.google.com/drive/folders/1gAMLO2AdXqsp75ymexKwXllKbLMTfhxa"
                target="_blank"
                class="main-button"
                >Click here</a
              >
            </section>
          </div>
          <section class="group-content">
            <div id="hcg-slider-1" class="hcg-slider">
              <div class="hcg-slide-container">
                <div class="hcg-slider-body card border border-success shadow">
                  <a class="hcg-slides animated" style="display: flex">
                    <img
                      src="../assets/images/inzaghis-archives-by-inzaghis-group-corp.png"
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