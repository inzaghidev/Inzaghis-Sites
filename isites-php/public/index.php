<?php
	$page_title = "Home";
	include('../layouts/header.php');
	include('../layouts/navbar.php');
?>
  <section class="welcome shadow">
    <div class="welcome-container">
      <div class="welcome-title">
        <h1 class="welcome-title">WELCOME TO INZAGHI'S SITES!</h1>
      </div>
      <div class="welcome-wrapper">
        <div class="welcome-to-inzaghis-sites">
          <div class="welcome-description">
            <p class="inzaghis-sites-description">
                Inzaghi's Sites merupakan Platform Layanan Situs Web untuk dapat
                diakses ke semua layanan Inzaghi's Group. Kini, Inzaghi's Sites
                telah hadir dengan menggunakan Layanan Hosting yang akan
                tersedia mulai September 2023, dan sebagai Pengganti Situs lama
                kami di Google Sites.
                <br />
                <br />
                Inzaghi's Sites juga memudahkan Anda untuk mengakses Aplikasi
                apapun yang berbasis Web seperti yang tersedia pada Pages Apps
                seperti Halaman, Widget, Konverter, Kalkulator, dan
                lain-lainnya.
              </p>
            </p>
              <section class="group-button about-inzaghis-sites-button">
                <a href="../pages/about.php" class="main-button">ABOUT</a>
              </section>
          </div>
        </div>
        <div class="welcome-image-to-inzaghis-sites">
          <img
            src="../images/website-illustration-transparent.png"
            alt="Inzaghi's Sites"
            style="width: 600px"
          />
        </div>
      </div>
    </div>
  </section>
    <section class="page-apps shadow">
      <div class="page-apps-container">
        <h2 class="title-heading">Page Apps</h2>
        <div class="text-container">
          <p class="text-description">
            Pages Apps merupakan Halaman Aplikasi yang tersedia untuk berbagai
            kebutuhan. Pages Apps menyediakan berbagai Portal seperti Halaman,
            Widget, Konverter, Kalkulator, dan lainnya.
          </p>
          <section class="group-button">
            <a href="../pages/apps.php" class="main-button"
              >Click here</a
            >
          </section>
        </div>
        <section class="group-content">
          <div id="hcg-slider-1" class="hcg-slider">
            <div class="hcg-slide-container">
              <div class="hcg-slider-body">
                <a class="hcg-slides animated" style="display: flex">
                  <span class="hcg-slide-number">1/6</span>
                  <img src="../images/pages-by-pages-apps.png" alt="" />
                  <span class="hcg-slide-text">Pages</span>
                </a>
              </div>
              <a href="#" id="hcg-slide-prev">&#10094;</a>
              <a href="#" id="hcg-slide-next">&#10095;</a>
            </div>
            <div class="hcg-slide-dot-control"></div>
          </div>
          <section class="content-description">
            <h2 class="group-title">Pages</h2>
            <p class="left-subheading">
              Merupakan kumpulan Halaman sebagai bacaan yang dapat diakses di
              Inzaghi's Sites. Dan juga sebagai kumpulan Materi dan Tutorial
              Pemrograman.
            </p>
            <button type="button" class="btn btn-primary btn-md">
              <a href="../page-apps/pages.php" class="blog-link">Click here</a>
            </button>
            <!--button type="button" class="btn btn-primary btn-md">
              <a class="blog-link">Click here</a>
            </button-->
          </section>
        </section>
      </div>
      <script src="../js/slider.js"></script>
    </section>
  <section class="inzaghis-blog-slider shadow">
    <div class="inzaghis-blog-container">
      <h2 class="title-heading">Our Blog</h2>
      <p class="centered-subheading">
        Inzaghi's Blog merupakan Platform Blogging sebagai tempat untuk
        berbagi Ilmu Pengetahuan, terutama seputar IT. Inzaghi's Blog lebih
        menggunakan Platform Blogger, agar lebih mudah dan praktis.
      </p>
      <section class="inzaghisblog">
        <section class="inzaghis-blog-legacy">
          <img
            src="../images/inzaghis-blog-legacy.png"
            alt="Inzaghi's Blog Legacy"
          />
          <section class="blog-text">
            <h3 class="blog-name">Inzaghi's Blog Legacy</h3>
            <button class="btn btn-secondary" id="button">
              <a
                href="https://inzaghiposuma.blogspot.com"
                class="blog-link"
                target="_blank"
                >Klik di sini</a
              >
            </button>
            <section class="blog-description">
              Merupakan Blog Lama yang sudah tersedia sejak Tahun 2018, tempat
              untuk memposting apapun itu.
            </section>
          </section>
        </section>
        <section class="teknoblog-inzaghis-blog">
          <img
            src="../images/teknoblog-by-inzaghis-blog.png"
            alt="Teknoblog - Inzaghi's Blog"
          />
          <section class="blog-text">
            <h3 class="blog-name">Teknoblog</h3>
            <button class="btn btn-secondary" id="button">
              <a
                href="https://enzatech.blogspot.com"
                class="blog-link"
                target="_blank"
                >Klik di sini</a
              >
            </button>
            <section class="blog-description">
              Merupakan Pindahan dari Blog Lama yang bernama Inzaghi's Blog
              (Legacy), dan Artikel yang dikhususkan tentang Teknologi.
            </section>
          </section>
        </section>
        <section class="miniblog-inzaghis-blog">
          <img
            src="../images/miniblog-by-inzaghis-blog.png"
            alt="Miniblog - Inzaghi's Blog"
          />
          <section class="blog-text">
            <h3 class="blog-name">Miniblog</h3>
            <button class="btn btn-secondary" id="button">
              <a
                href="https://enzashorts.blogspot.com"
                class="blog-link"
                target="_blank"
                >Klik di sini</a
              >
            </button>
            <section class="blog-description">
              Merupakan Blog khusus Microblogging, terutama untuk menyimpan
              Postingan Sederhana seperti Kode Program Sederhana, hingga Teks
              dan Tutorial Singkat.
            </section>
          </section>
        </section>
      </section>
    </div>
  </section>
  <section class="inzaghis-media-info shadow">
    <div class="inzaghis-media-container">
      <h2 class="title-heading">Our Social Media</h2>
      <p class="centered-subheading">
        Inzaghi's Media merupakan Platform Layanan untuk Sharing Ilmu,
        terutama seputar IT.
      </p>
      <section class="inzaghismedia">
        <section class="instagram">
          <img
            src="../images/instagram-logo-icon.png"
            alt="Instagram Logo"
            class="socmed-icon"
          />
          <section class="socmed-text">
            <h3 class="socmed-name">Instagram</h3>
            <button class="btn btn-primary" id="button">
              <a
                href="https://www.instagram.com/enzapost"
                class="blog-link"
                target="_blank"
                >@enzapost</a
              >
            </button>
            <section class="socmed-description">
              Sebagai Postingan berbentuk Gambar Persegi dan sebagai Asisten
              dari Inzaghi's Blog.
            </section>
          </section>
        </section>
        <section class="tiktok">
          <img
            src="../images/tiktok-logo-icon.png"
            alt="TikTok Logo"
            class="socmed-icon"
          />
          <section class="socmed-text">
            <h3 class="socmed-name">TikTok</h3>
            <button class="btn btn-primary" id="button">
              <a
                href="https://www.tiktok.com/@enzapostmedia"
                class="blog-link"
                target="_blank"
                >@enzapostmedia</a
              >
            </button>
            <section class="socmed-description">
              Sebagai Postingan berbentuk Video Vertikal (Portrait) yang dapat
              di-Scrolling seperti Video Tutorial/Tips dan Informasi Singkat.
            </section>
          </section>
        </section>
        <section class="youtube">
          <img
            src="../images/youtube-logo-icon.png"
            alt="YouTube Logo"
            class="socmed-icon"
          />
          <section class="socmed-text">
            <h3 class="socmed-name">YouTube</h3>
            <button class="btn btn-primary" id="button">
              <a
                href="https://www.youtube.com/@enzavlogpost"
                class="blog-link"
                target="_blank"
                >Inzaghi's Media</a
              >
            </button>
            <section class="socmed-description">
              Sebagai sebuah Channel yang berbentuk Video seperti Tutorial.
            </section>
          </section>
        </section>
        <section class="twitter">
          <img
            src="../images/twitter-x-logo.png"
            alt="Twitter Logo"
            class="socmed-icon"
          />
          <section class="socmed-text">
            <h3 class="socmed-name">X (Twitter)</h3>
            <button class="btn btn-primary" id="button">
              <a
                href="https://x.com/iposhaf2917"
                class="blog-link"
                target="_blank"
                >@iposhaf2917</a
              >
            </button>
            <section class="socmed-description">
              Sebagai Postingan berbentuk Infografis, Tweet, hingga
              Postingan-postingan dari Inzaghi's Blog.
            </section>
          </section>
        </section>
      </section>
    </div>
  </section>
  <section class="inzaghis-group-network shadow">
    <div class="inzaghis-group-wrapper">
      <div class="inzaghis-group-network-description">
        <h2 class="inzaghis-group-heading">Inzaghi's Group Network</h2>
        <div class="inzaghis-group-container">
          <img
            src="../images/inzaghis-group-logo-vertical-transparent.png"
            height="60px"
            alt="logo"
          />
          <p class="inzaghis-group-description">
            Inzaghi's Group (Inzaghi's Corp) merupakan Layanan Konten yang
            berbasis Teknologi dan Sains yang memudahkan Anda untuk mengakses
            Informasi yang bermanfaat.
          </p>
            <section class="group-button inzaghis-group-button">
              <a href="../pages/networks.php" class="main-button">DETAILS</a>
            </section>
        </div>
      </div>
      <div class="logo-grid">
        <img
          src="../images/inzaghis-blog-logo-vertical-transparent.png"
          height="60px"
          alt="logo"
        />
        <img
          src="../images/inzaghis-sites-logo-vertical-transparent.png"
          height="60px"
          alt="logo"
        />
        <img
          src="../images/inzaghis-media-logo-vertical-transparent.png"
          height="60px"
          alt="logo"
        />
        <img
          src="../images/inzaghis-dev-logo-vertical-transparent.png"
          height="60px"
          alt="logo"
        />
        <img
          src="../images/inzaghis-archives-logo-vertical-transparent.png"
          height="60px"
          alt="logo"
        />
        <img
          src="../images/inzaghis-app-logo-vertical-transparent.png"
          height="60px"
          alt="logo"
        />
        <img
          src="../images/inzaghis-ai-logo-vertical-transparent.png"
          height="60px"
          alt="logo"
        />
        <img
          src="../images/inzaghis-shop-logo-vertical-transparent.png"
          height="60px"
          alt="logo"
        />
      </div>
    </div>
  </section>
<?php
	include('../layouts/footer.php');
?>


<!-- https://stackoverflow.com/questions/32537477/how-to-use-dir -->
<!-- https://stackoverflow.com/questions/55026758/php-file-cannot-load-css-or-javascript-files-present-in-another-directory -->
<!-- https://www.phptutorial.net/php-tutorial/php-__dir__ -->