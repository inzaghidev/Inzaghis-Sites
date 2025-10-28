<?php
	$page_title = "Home";
	include('../layouts/header.php');
	include('../components/navbar/navbar.php');

  $jsonFile = '../data/apps-data.json';
  $jsonData = file_get_contents($jsonFile);
  $appsData = json_decode($jsonData, true);
?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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
                diakses ke semua layanan Inzaghi's Group.
                <br />
                <br />
                Inzaghi's Sites juga memudahkan Anda untuk mengakses Aplikasi
                dan Portal apapun yang berbasis Web seperti yang tersedia pada
                Portals dan Apps seperti Widget, Tutorial Teknologi, Konverter,
                Kalkulator, Generator, dan lain-lainnya.
              </p>
            </p>
              <section class="group-button about-inzaghis-sites-button">
                <a href="../pages/about.php" class="main-button">ABOUT</a>
              </section>
          </div>
        </div>
        <div class="welcome-image-to-inzaghis-sites">
          <img
            src="../assets/images/website-illustration-transparent.png"
            alt="Inzaghi's Sites"
            style="width: 600px"
          />
        </div>
      </div>
    </div>
  </section>
  <section class="banner-info shadow">
    <div class="slider-container">
      <h2 class="title-heading">Branch Subdomains (Another Versions)</h2>
      <p class="centered-subheading">
        Untuk melihat Versi lainnya dari Situs ini, silakan lihat dari
        beberapa Tautan/Link di bawah ini.
      </p>
      <div class="card border shadow-lg rounded-lg border-success">
        <div class="card-header">Versions</div>
        <ul class="list-group list-group-flush rounded-lg">
          <li class="list-group-item card-body">
            <div class="text-black row -mx-1">
              <h3 class="col-7 col-sm-8 col-md-9 col-lg-10">
                🌿 Main Branch (New UI)
              </h3>
              <section class="group-button col-5 col-sm-4 col-md-3 col-lg-2">
                <a
                  href="https://inzaghi.wuaze.com"
                  class="btn btn-primary col-12 col-md-10"
                  >Click here</a
                >
                <br />
              </section>
            </div>
            <p class="card-text is-desc">
              Merupakan Cabang/Branch Utama dari Website Platform ini, yang
              sifatnya Stabil, dan sudah menggunakan Tampilan UI Baru.
            </p>
          </li>
          <li class="list-group-item card-body">
            <div class="text-black row -mx-1">
              <h3 class="col-7 col-sm-8 col-md-9 col-lg-10">
                🚀 Beta Future (Old UI - Temporary)
              </h3>
              <section class="group-button col-5 col-sm-4 col-md-3 col-lg-2">
                <a
                  href="https://preview.inzaghi.wuaze.com"
                  class="btn btn-primary col-12 col-md-10"
                  >Click here</a
                >
                <br />
              </section>
            </div>
            <p class="card-text is-desc">
              Merupakan Cabang/Branch yang didesain untuk melakukan Uji-Coba
              Fitur Baru secara Pratinjau (Preview). Untuk sementara, Branch
              ini masih menggunakan Tampilan UI Lama, hingga dimatangkan akan
              menggunakan Tampilan UI Baru.
            </p>
          </li>
          <li class="list-group-item card-body">
            <div class="text-black row -mx-1">
              <h3 class="col-7 col-sm-8 col-md-9 col-lg-10">
                ⬇️ Master (Old UI)
              </h3>
              <section class="group-button col-5 col-sm-4 col-md-3 col-lg-2">
                <a
                  href="https://old.inzaghi.wuaze.com"
                  class="btn btn-primary col-12 col-md-10"
                  >Click here</a
                >
                <br />
              </section>
            </div>
            <p class="card-text is-desc">
              Merupakan Cabang dari Inzaghi's Sites yang masih menggunakan
              Tampilan UI Lama. Mirip seperti pada Main Branch, hanya saja
              masih menggunakan Tampilan Lama.
            </p>
          </li>
          <li class="list-group-item card-body">
            <div class="text-black row -mx-1">
              <h3 class="col-7 col-sm-8 col-md-9 col-lg-10">
                🛠️ Laravel (Coming Soon)
              </h3>
              <section class="group-button col-5 col-sm-4 col-md-3 col-lg-2">
                <a
                  href="https://github.com/inzaghidev/Inzaghis-Sites/tree/isites-laravel"
                  target="_blank"
                  class="btn btn-primary col-12 col-md-10"
                  >Click here</a
                >
                <br />
              </section>
            </div>
            <p class="card-text is-desc">
              Pada Branch ini, akan dibangun dan dikembangkan ulang dengan
              menggunakan Laravel. Untuk sementara, masih tersedia di dalam
              Branch pada Repository GitHub kami.
            </p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!--section class="banner-info shadow">
    <div class="slider-container">
      <h2 class="title-heading">Switch to New UI</h2>
      <div class="text-container">
        <p class="text-description">
          Mulai Akhir Februari 2025, Inzaghi's Sites telah berganti ke
          Tampilan Baru dengan Tampilan yang lebih Fresh dan Modern! Klik pada
          Tombol di samping untuk melihat Tampilan Baru.
        </p>
        <section class="group-button">
          <a
            href="https://inzaghi.wuaze.com"
            class="main-button"
            >Switch to New UI</a
          >
        </section>
      </div>
      <section class="group-content">
        <div id="hcg-slider-1" class="hcg-slider">
          <div class="hcg-slide-container">
            <div class="hcg-slider-body card border border-success shadow">
              <a class="hcg-slides animated" style="display: flex">
                <img
                  src="../assets/images/inzaghis-sites-ui-refresh-2025.png"
                  alt=""
                />
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section-->
  <section class="slider-carousel shadow">
    <div class="slider-container">
      <h2 class="title-heading">Portals</h2>
      <div class="text-container">
        <p class="text-description">
          Portals merupakan Halaman Portal yang tersedia untuk berbagai
          kebutuhan apapun seperti Widgets, Tutorial Teknologi, Materi
          Pembelajaran, dan lainnya.
        </p>
        <section class="group-button">
          <a href="../pages/portals.php" class="main-button">Click here</a>
        </section>
      </div>
      <section class="group-content">
        <div class="row swiper-container">
          <div class="swiper portals-swiper">
            <div class="swiper-wrapper" id="portalsContainer"></div>
          </div>
          <div class="swiper-button-next portals-swiper-button-next"></div>
          <div class="swiper-button-prev portals-swiper-button-prev"></div>
          <div class="swiper-pagination swiper-pagination-portals"></div>
        </div>
      </section>
    
      <script>
        const portalsData = {
          apps: [
            {
              name: "Widgets",
              imgSrc: "../assets/images/widgets-by-portals.png",
              description:
                "Merupakan kumpulan Widget Serbaguna untuk Anda yang membutuhkan Informasi seakurat mungkin. Widget di sini juga termasuk yang sedang heboh saat ini.",
              link: "../portals/widgets.php",
            },
            {
              name: "Technology Tutorials",
              imgSrc: "../assets/images/tech-tutorials-by-portals.png",
              description:
                "Merupakan kumpulan dari berbagai macam Teknologi apapun dalam bidang IT, dan sebagai Pembelajaran untuk berbagai macam Teknologi IT apapun seperti Pemrograman, Aplikasi, Ilmu Komputer, Analisis Data, dan lainnya.",
              link: "../portals/tech-tutorials.php",
            },
            {
              name: "IT Project Lists",
              imgSrc: "../assets/images/it-project-lists-by-portals.png",
              description:
                "Merupakan kumpulan dari berbagai macam Proyek apapun dalam bidang IT seperti Pemrograman, Aplikasi, UI/UX, Analisis Data, AI/ML, IoT, dan lainnya.",
              link: "../portals/projects.php",
            },
            {
              name: "Career Portal",
              imgSrc: "../assets/images/career-portal-by-portals.png",
              description:
                "Merupakan kumpulan dari pertanyaan-pertanyaan Wawancara seperti Wawancara Kerja, Magang, User Interview, Wawancara Teknis (Technical Interview), dan lain-lain. Portal ini juga menyediakan berbagai macam Pertanyaan untuk persiapan Tugas Akhir seperti Skripsi, Tesis, dan Disertasi.",
              link: "../portals/career-portal.php",
            },
            {
              name: "Learning Materials",
              imgSrc: "../assets/images/learning-materials-by-portals.png",
              description:
                "Merupakan bagian untuk kumpulan Materi Pembelajaran, khususnya untuk Materi Pelajaran Sekolah (Untuk SMA) dan Materi Perkuliahan (Teknik InformatiKa dan Umum/MKDU). Pada Portal ini juga menyediakan berbagai macam Kumpulan Materi dan Pertanyaan untuk persiapan Tugas Akhir seperti Skripsi, Tesis, dan Disertasi.",
              link: "../portals/learning-materials.php",
            },
            {
              name: "Entertainment Portal",
              imgSrc: "../assets/images/entertainment-portal-by-portals.png",
              description:
                "Merupakan Portal untuk Pusat Hiburan seperti Kumpulan Video dan Live Streaming di YouTube, Kumpulan Akun-akun Media Sosial, hingga Kumpulan Playlist Lagu seperti Spotify.",
              link: "../portals/entertainment-portal.php",
            },
            {
              name: "Link Pages",
              imgSrc: "../assets/images/link-pages-by-portals.png",
              description:
                "Merupakan kumpulan dari Tautan/Link yang berasal dari Situs Berita, Link Google, YouTube, GitHub, dan lainnya.",
              link: "../portals/link-pages.php",
            },
            {
              name: "Muslims Portal",
              imgSrc: "../assets/images/muslim-portal-by-portals.png",
              description:
                "Merupakan Portal untuk Kumpulan Pusat Keagamaan dan Peribadatan Islam, seperti Jadwal Shalat & Puasa, Kalender Hijriah, Kompas Arah Kiblat, hingga Al-Qur'an Digital.",
              link: "../portals/muslim-portal.php",
            },
            {
              name: "Miscellaneous",
              imgSrc: "../assets/images/miscellaneous-by-portals.png",
              description:
                "Merupakan Halaman lainnya yang tidak termasuk dari Kategori di Portal ini, dan juga tersedia untuk Halaman apa saja.",
              link: "../portals/miscellaneous.php",
            },
            {
              name: "Lorem Ipsum",
              imgSrc: "https://via.placeholder.com/700x400",
              description:
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius adipisci dicta dignissimos neque animi ea, veritatis, provident hic consequatur ut esse! Commodi ea consequatur accusantium, beatae qui deserunt tenetur ipsa.",
              link: "#",
            },
          ],
        };
      
        const portalsContainer = document.getElementById("portalsContainer");
       
        portalsData.apps.forEach((app) => {
          const slide = document.createElement("div");
          slide.className = "swiper-slide";
          slide.innerHTML = `
          <div class="card card-swiper card-apps h-100 border-success shadow">
            <a href="${app.link}">
              <img
                src="${app.imgSrc}"
                class="card-img-apps card-img-top"
                alt="${app.name}"
              />
            </a>
            <div class="card-body card-apps-body">
              <div class="card-description">
                <h4 class="card-name card-title page-apps-card">
                  <a>${app.name}</a>
                </h4>
                <p class="card-text blog-description">${app.description}</p>
              </div>
              <button type="button" class="btn btn-primary btn-md apps-button">
                <a href="${app.link}" class="button-link">Klik di sini</a>
              </button>
            </div>
          </div>
        `;
          portalsContainer.appendChild(slide);
        });
      </script>
    </div>
    <script src="../js/slider.js"></script>
  </section>
  <section class="slider-carousel shadow">
    <div class="slider-container">
      <h2 class="title-heading">Apps</h2>
      <div class="text-container">
        <p class="text-description">
          Pages Apps merupakan Halaman Aplikasi yang tersedia untuk berbagai
          kebutuhan. Pages Apps menyediakan berbagai Portal seperti Konverter,
          Kalkulator, Generator, Formatter, dan lainnya.
        </p>
        <section class="group-button">
          <a href="../pages/apps.php" class="main-button">Click here</a>
        </section>
      </div>
      <section class="group-content">
        <div class="row swiper-container">
          <div class="swiper apps-swiper">
            <div class="swiper-wrapper" id="appsContainer"></div>
          </div>
          <div class="swiper-button-next apps-swiper-button-next"></div>
          <div class="swiper-button-prev apps-swiper-button-prev"></div>
          <div class="swiper-pagination swiper-pagination-apps"></div>
        </div>
      </section>
    
      <script>
        const appsData = {
          apps: [
            {
              name: "Converters",
              imgSrc: "../assets/images/converters-by-pages-apps.png",
              description:
                "Merupakan portal untuk Aplikasi Konverter seperti Konversi Suhu, Massa (Berat), Panjang, Sistem Bilangan, dan lain-lain. Sebagian dari Aplikasi Konverter ini akan sedikit menggunakan API.",
              link: "../page-apps/converter.php",
            },
            {
              name: "Calculators",
              imgSrc: "../assets/images/calculators-by-pages-apps.png",
              description:
                "Merupakan kumpulan dari beberapa jenis Kalkulator seperti Kalkulator Sederhana, Ilmiah, Matematika, Kesehatan, Keuangan, hingga Kalkulator untuk Keseharian.",
              link: "../page-apps/calculators.php",
            },
            {
              name: "Generators",
              imgSrc: "../assets/images/generators-by-pages-apps.png",
              description:
                "Merupakan Aplikasi untuk membuat dan mengenerasi sesuatu seperti Text Generator hingga Image Generator, dan dapat dibuat secara acak.",
              link: "../page-apps/generators.php",
            },
            {
              name: "Formatters",
              imgSrc: "../assets/images/formatters-by-pages-apps.png",
              description:
                "Merupakan Aplikasi untuk melakukan Formatting seperti XML, JSON, dll, hingga melakukan Pemformatan apapun.",
              link: "../page-apps/formatters.php",
            },
            {
              name: "File Converter",
              imgSrc: "../assets/images/file-converters-by-pages-apps.png",
              description:
                "Merupakan portal untuk melakukan konversi format File apapun seperti JPG, PNG, DOCX, PDF, PPT, hingga TXT.",
              link: "../page-apps/file-converter.php",
            },
            {
              name: "Utilities",
              imgSrc: "../assets/images/utilities-by-pages-apps.png",
              description:
                "Merupakan portal untuk berbagai kumpulan Aplikasi untuk Utilitas atau kebutuhan sehari-hari seperti Pencarian IP Address, SSL Checker, Website Status Checker, Find and Replace, dan lainnya.",
              link: "../page-apps/utilities.php",
            },
            {
              name: "Tester Tools",
              imgSrc: "../assets/images/tester-tools-by-pages-apps.png",
              description:
                "Merupakan Aplikasi untuk Alat Uji Coba dan Simulator Online seperti Keyboard Tester, Mouse Tester, Sound Tester, dan lainnya.",
              link: "../page-apps/tester-tools.php",
            },
          ],
        };
      
        const appsContainer = document.getElementById("appsContainer");
      
        appsData.apps.forEach((app) => {
          const slide = document.createElement("div");
          slide.className = "swiper-slide";
          slide.innerHTML = `
          <div class="card card-swiper card-apps h-100 border-success shadow">
            <a href="${app.link}">
              <img
                src="${app.imgSrc}"
                class="card-img-apps card-img-top"
                alt="${app.name}"
              />
            </a>
            <div class="card-body card-apps-body">
              <div class="card-description">
                <h4 class="card-name card-title page-apps-card">
                  <a>${app.name}</a>
                </h4>
                <p class="card-text blog-description">${app.description}</p>
              </div>
              <button type="button" class="btn btn-primary btn-md apps-button">
                <a href="${app.link}" class="button-link">Klik di sini</a>
              </button>
            </div>
          </div>
        `;
          appsContainer.appendChild(slide);
        });
      </script>
    </div>
    <script src="../js/slider.js"></script>
  </section>
  <section class="inzaghis-blog-slider shadow">
    <div class="inzaghis-blog-container">
      <h2 class="title-heading">Our Blog</h2>
      <div class="text-container">
        <p class="text-description">
          Inzaghi's Blog merupakan Platform Blogging sebagai tempat untuk
          berbagi Ilmu Pengetahuan, terutama seputar IT. Inzaghi's Blog lebih
          menggunakan Platform Blogger, agar lebih mudah dan praktis.
        </p>
        <section class="group-button">
          <a
            href="../inzaghis-group/inzaghis-blog.php"
            target="_blank"
            class="main-button"
            >Click here</a
          >
        </section>
      </div>
      <div class="container inzaghisblog">
        <div class="row">
          <div class="col-md-4 col-sm-6 mb-4">
            <div class="card card-apps h-100 border-0 shadow">
              <img
                src="../assets/images/inzaghis-blog-legacy.png"
                class="card-img-apps card-img-top"
                alt="Inzaghi's Blog Legacy"
              />
              <div class="card-body text-center blog-text">
                <div class="card-description">
                  <h5 class="card-title blog-name">Inzaghi's Blog Legacy</h5>
                  <p class="card-text blog-description">
                    Merupakan Blog Lama yang sudah tersedia sejak Tahun 2018,
                    tempat untuk memposting apapun itu.
                  </p>
                </div>
                <button
                  type="button"
                  class="btn btn-secondary btn-md secondary-button"
                >
                  <a
                    href="https://inzaghiposuma.blogspot.com"
                    target="_blank"
                    class="button-link"
                    >Klik di sini</a
                  >
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 mb-4">
            <div class="card card-apps h-100 border-0 shadow">
              <img
                src="../assets/images/teknoblog-by-inzaghis-blog.png"
                class="card-img-apps card-img-top"
                alt="Teknoblog - Inzaghi's Blog"
              />
              <div class="card-body text-center blog-text">
                <div class="card-description">
                  <h5 class="card-title blog-name">Teknoblog</h5>
                  <p class="card-text blog-description">
                    Merupakan Pindahan dari Blog Lama yang bernama Inzaghi's
                    Blog (Legacy), dan Artikel yang dikhususkan tentang
                    Teknologi.
                  </p>
                </div>
                <button
                  type="button"
                  class="btn btn-secondary btn-md secondary-button"
                >
                  <a
                    href="https://enzatech.blogspot.com"
                    target="_blank"
                    class="button-link"
                    >Klik di sini</a
                  >
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 mb-4">
            <div class="card card-apps h-100 border-0 shadow">
              <img
                src="../assets/images/miniblog-by-inzaghis-blog.png"
                class="card-img-apps card-img-top"
                alt="Miniblog - Inzaghi's Blog"
              />
              <div class="card-body text-center blog-text">
                <div class="card-description">
                  <h5 class="card-title blog-name">Miniblog</h5>
                  <p class="card-text blog-description">
                    Merupakan Blog khusus Microblogging, terutama untuk
                    menyimpan Postingan Sederhana seperti Kode Program
                    Sederhana, hingga Teks dan Tutorial Singkat.
                  </p>
                </div>
                <button
                  type="button"
                  class="btn btn-secondary btn-md secondary-button"
                >
                  <a
                    href="https://enzashorts.blogspot.com"
                    target="_blank"
                    class="button-link"
                    >Klik di sini</a
                  >
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="inzaghis-media-info shadow">
    <div class="inzaghis-media-container">
      <h2 class="title-heading">Our Social Media</h2>
      <div class="text-container">
        <p class="text-description">
          Inzaghi's Media merupakan Platform Layanan untuk Sharing Ilmu,
          terutama seputar IT.
        </p>
        <section class="group-button">
          <a
            href="../inzaghis-group/inzaghis-media.php"
            target="_blank"
            class="main-button"
            >Click here</a
          >
        </section>
      </div>
      <div class="container inzaghismedia">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
              <div class="border-0 h-100 shadow opacity-75 socmed-card">
                <img
                  src="../assets/icons/instagram-logo-icon.png"
                  class="card mt-4 socmed-icon"
                  alt="Instagram Logo"
                />
                <div class="card-body text-center socmed-text">
                  <div class="card-description">
                    <h5 class="card-title socmed-name">Instagram</h5>
                    <p class="card-text socmed-description">
                      Sebagai Postingan berbentuk Gambar Persegi dan sebagai
                      Asisten dari Inzaghi's Blog.
                    </p>
                  </div>
                  <button
                    type="button"
                    class="btn btn-primary btn-md primary-button"
                  >
                    <a
                      href="https://www.instagram.com/enzapost"
                      target="_blank"
                      class="button-link"
                      >@enzapost</a
                    >
                  </button>
                </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="border-0 h-100 shadow opacity-75 socmed-card">
              <img
                src="../assets/icons/tiktok-logo-icon.png"
                class="card mt-4 socmed-icon"
                alt="TikTok Logo"
              />
              <div class="card-body text-center socmed-text">
                <div class="card-description">
                  <h5 class="card-title socmed-name">TikTok</h5>
                  <p class="card-text socmed-description">
                    Sebagai Postingan berbentuk Video Vertikal (Portrait) yang
                    dapat di-Scrolling seperti Video Tutorial/Tips dan
                    Informasi Singkat.
                  </p>
                </div>
                <button
                  type="button"
                  class="btn btn-primary btn-md primary-button"
                >
                  <a
                    href="https://www.tiktok.com/@enzapostmedia"
                    target="_blank"
                    class="button-link"
                    >@enzapostmedia</a
                  >
                </button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="border-0 h-100 shadow opacity-75 socmed-card">
              <img
                src="../assets/icons/youtube-logo-icon.png"
                class="card mt-4 socmed-icon"
                alt="YouTube Logo"
              />
              <div class="card-body text-center socmed-text">
                <div class="card-description">
                  <h5 class="card-title socmed-name">YouTube</h5>
                  <p class="card-text socmed-description">
                    Sebagai sebuah Channel yang berbentuk Video seperti
                    Tutorial, Video Shorts, hingga Demo Aplikasi/Project.
                  </p>
                </div>
                <button
                  type="button"
                  class="btn btn-primary btn-md primary-button"
                >
                  <a
                    href="https://www.youtube.com/@enzavlogpost"
                    target="_blank"
                    class="button-link"
                    >Inzaghi's Media</a
                  >
                </button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="border-0 h-100 shadow opacity-75 socmed-card">
              <img
                src="../assets/icons/twitter-x-logo.png"
                class="card mt-4 socmed-icon"
                alt="Twitter Logo"
              />
              <div class="card-body text-center socmed-text">
                <div class="card-description">
                  <h5 class="card-title socmed-name">X (Twitter)</h5>
                  <p class="card-text socmed-description">
                    Sebagai Postingan berbentuk Repost/Retweet,
                    Utasan/Tulisan, hingga Postingan-postingan dari Inzaghi's
                    Blog.
                  </p>
                </div>
                <button
                  type="button"
                  class="btn btn-primary btn-md primary-button"
                >
                  <a
                    href="https://x.com/InzaTechMedia"
                    target="_blank"
                    class="button-link"
                    >@InzaTechMedia</a
                  >
                </button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="border-0 h-100 shadow opacity-75 socmed-card">
              <img
                src="../assets/icons/threads-logo-icon.png"
                class="card mt-4 socmed-icon"
                alt="Threads Logo"
              />
              <div class="card-body text-center socmed-text">
                <div class="card-description">
                  <h5 class="card-title socmed-name">Threads</h5>
                  <p class="card-text socmed-description">
                    Sama seperti di X, Sebagai Postingan berbentuk Repost,
                    Utasan/Tulisan, hingga Postingan-postingan dari Instagram
                    dan Inzaghi's Blog.
                  </p>
                </div>
                <button
                  type="button"
                  class="btn btn-primary btn-md primary-button"
                >
                  <a
                    href="https://www.threads.net/@enzapost"
                    target="_blank"
                    class="button-link"
                    >@enzapost</a
                  >
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="inzaghis-group-network shadow">
    <div class="inzaghis-group-wrapper">
      <div class="inzaghis-group-network-description">
        <h2 class="inzaghis-group-heading">Inzaghi's Group Network</h2>
        <div class="inzaghis-group-container">
          <img
            src="../assets/icons/inzaghis-group-logo-vertical-transparent.png"
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
          src="../assets/icons/inzaghis-blog-logo-vertical-transparent.png"
          height="60px"
          alt="logo"
        />
        <img
          src="../assets/icons/inzaghis-sites-logo-vertical-transparent.png"
          height="60px"
          alt="logo"
        />
        <img
          src="../assets/icons/inzaghis-media-logo-vertical-transparent.png"
          height="60px"
          alt="logo"
        />
        <img
          src="../assets/icons/inzaghis-dev-logo-vertical-transparent.png"
          height="60px"
          alt="logo"
        />
        <img
          src="../assets/icons/inzaghis-archives-logo-vertical-transparent.png"
          height="60px"
          alt="logo"
        />
        <img
          src="../assets/icons/inzaghis-app-logo-vertical-transparent.png"
          height="60px"
          alt="logo"
        />
        <img
          src="../assets/icons/inzaghis-ai-logo-vertical-transparent.png"
          height="60px"
          alt="logo"
        />
        <img
          src="../assets/icons/inzaghis-shop-logo-vertical-transparent.png"
          height="60px"
          alt="logo"
        />
      </div>
    </div>
  </section>
<?php
  include('../components/footsite/footsite.php');
  include('../layouts/footer.php');
?>

<!-- Multi Item Carousel CSS : -->
<!-- https://bootsnipp.com/snippets/zDQkr -->
<!-- https://www.codingnepalweb.com/responsive-card-slider-javascript -->

<!-- Bootstrap Card with Carousel : -->
<!-- https://gosnippets.com/snippets/bootstrap-carousel-with-cards-in-3-columns -->
<!-- https://www.codeply.com/go/EIOtI7nkP8/bootstrap-carousel-with-multiple-cards -->
<!-- https://freefrontend.com/bootstrap-carousels -->
<!-- https://www.tutorialrepublic.com/snippets/preview.php?topic=bootstrap&file=thumbnail-carousel-with-content -->
<!-- https://www.tutorialrepublic.com/codelab.php?topic=bootstrap&file=thumbnail-carousel-with-content -->
<!-- https://bbbootstrap.com/snippets/ecommerce-recently-viewed-product-carousel-using-owlcarousel2-library-40656175 -->


<!-- https://stackoverflow.com/questions/32537477/how-to-use-dir -->
<!-- https://stackoverflow.com/questions/55026758/php-file-cannot-load-css-or-javascript-files-present-in-another-directory -->
<!-- https://www.phptutorial.net/php-tutorial/php-__dir__ -->

<!-- Create Responsive Card Slider in HTML CSS & JavaScript : -->
<!-- https://www.codingnepalweb.com/create-responsive-card-slider-html-javascript -->

<!-- Create Modals & Popups -->
<!-- https://www.w3schools.com/js/js_popup.asp -->
<!-- https://www.w3schools.com/howto/howto_css_modals.asp -->
<!-- https://www.w3schools.com/bootstrap/bootstrap_modal.asp -->
<!-- https://www.geeksforgeeks.org/how-to-create-modal-using-bootstrap-5 -->
