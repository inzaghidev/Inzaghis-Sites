<?php
	$page_title = "Inzaghi's Media";

  include_once __DIR__ . '/../../includes/config.php';
  include('../../layouts/header.php');
  include('../../components/navbar/navbar.php');
?>
    <div class="container-top"></div>
    <section class="inzaghis-group-pages inzaghismedia-slider">
      <div class="page-container">
        <h1 class="my-4 page-title">Inzaghi's Media</h1>
        <div class="page-wrapper">
          <div
            class="card bg-white shadow rounded-lg"
            style="background-color: #fff0f0"
          >
            <div class="card text-white bg-secondary">
              <div class="card-body">
                <h3 class="card-title">Description</h3>
                <p class="card-text is-desc">
                  Inzaghi's Media merupakan Platform Layanan untuk Sharing Ilmu,
                  terutama seputar IT.
                </p>
              </div>
            </div>
            <div class="page-description">
              <h2 class="my-4">Instagram</h2>
              <div class="text-container">
                <p class="is-desc">
                  Sebagai Postingan berbentuk Gambar Persegi dan sebagai Asisten
                  dari Inzaghi's Blog.
                </p>
                <section class="group-button">
                  <a
                    href="https://www.instagram.com/enzapost"
                    target="_blank"
                    class="btn btn-primary"
                    >@enzapost</a
                  >
                  <br />
                </section>
              </div>
              <iframe
                src="https://widgets.sociablekit.com/instagram-feed/iframe/25485818"
                frameborder="0"
                width="100%"
                height="1000"
              ></iframe>
              <script async src="//www.instagram.com/embed.js"></script>
              <h2 class="my-4">TikTok</h2>
              <div class="text-container">
                <p class="is-desc">
                  Sebagai Postingan berbentuk Video Vertikal (Portrait) yang
                  dapat di-Scrolling seperti Video Tutorial/Tips dan Informasi
                  Singkat.
                </p>
                <section class="group-button">
                  <a
                    href="https://www.tiktok.com/@enzapostmedia"
                    target="_blank"
                    class="btn btn-primary"
                    >@enzapostmedia</a
                  >
                  <br />
                </section>
              </div>
              <div class="sk-tiktok-feed" data-embed-id="25485777"></div>
              <script
                src="https://widgets.sociablekit.com/tiktok-feed/widget.js"
                async
                defer
              ></script>
              <h2 class="my-4">YouTue</h2>
              <div class="text-container">
                <p class="is-desc">
                  Sebagai sebuah Channel yang berbentuk Video seperti Tutorial.
                </p>
                <section class="group-button">
                  <a
                    href="https://www.youtube.com/@enzavlogpost"
                    target="_blank"
                    class="btn btn-primary"
                    >Inzaghi's Media</a
                  >
                  <br />
                </section>
              </div>
              <iframe
                src="https://www.youtube.com/@enzavlogpost"
                id="inzaghis-media-embed"
                title="Inzaghi's Media YouTube"
              ></iframe>
              <h2 class="my-4">X (Twitter)</h2>
              <div class="text-container">
                <p class="is-desc">
                  Sebagai Postingan berbentuk Infografis, Tweet, hingga
                  Postingan-postingan dari Inzaghi's Blog.
                </p>
                <section class="group-button">
                  <a
                    href="https://x.com/lPosumA0209"
                    target="_blank"
                    class="btn btn-primary"
                    >@lPosumA0209</a
                  >
                  <br />
                </section>
              </div>
              <iframe
                src="https://x.com/lPosumA0209"
                id="inzaghis-media-embed"
                title="Inzaghi's Media Twitter"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
	include('../../components/footsite/footsite.php');
  include('../../layouts/footer.php');
?>
