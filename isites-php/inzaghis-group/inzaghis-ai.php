<?php
	$page_title = "Inzaghi's AI";

  include_once __DIR__ . '/../includes/config.php';
  include('../layouts/header.php');
  include('../components/navbar/navbar.php');
?>
    <div class="container-top"></div>
    <section class="inzaghis-group-pages inzaghisai-slider">
      <div class="page-wrapper inzagroup-pages">
        <h1 class="my-4 page-title">Inzaghi's AI</h1>
        <div class="text-container mb-8">
          <p class="text-description">
            Inzaghi's AI merupakan Platform berbasis Kecerdasan Buatan (AI) yang
            akan tersedia di Inzaghi's Sites (Web) dan Inzaghi's App (Mobile).
            Inzaghi's AI juga menyediakan Chatbot Artificial Intelligence (AI)
            seperti ChatGPT/Gemini, Image Generator berbasis AI, hingga
            Tools/Aplikasi lainnya yang berbasis AI dan menggunakan AI-API Key
            apapun.
          </p>
          <section class="group-button">
            <a href="#" target="_blank" class="main-button">Click here</a>
          </section>
        </div>
        <section class="group-content">
          <div id="hcg-slider-1" class="hcg-slider">
            <div
              class="hcg-slide-container content-description shadow-xl rounded-lg ring-1 ring-yellow-700 m-0"
            >
              <div class="hcg-slider-body">
                <a class="hcg-slides animated" style="display: flex">
                  <img
                    src="../assets/images/inzaghis-ai-by-inzaghis-group-corp.png"
                    alt=""
                  />
                </a>
              </div>
            </div>
          </div>
        </section>
        <div
          class="bg-white shadow-xl rounded-lg p-6 ring-1 ring-yellow-700 p-6"
        >
        </div>
      </div>
    </section>
<?php
	include('../components/footsite/footsite.php');
  include('../layouts/footer.php');
?>