<?php
	$page_title = "Home";
	include('../layouts/header.php');
	include('../components/navbar/navbar.php');

  // Load JSON data
  $jsonData = file_get_contents('../data/apps-data.json');
  $appsData = json_decode($jsonData, true);
?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <section class="welcome">
    <div class="welcome-container">
      <div class="welcome-title">
        <h1>WELCOME TO INZAGHI'S SITES!</h1>
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
            src="../assets/images/website-illustration-transparent-3d.png"
            alt="Inzaghi's Sites"
            style="width: 600px"
          />
        </div>
      </div>
    </div>
  </section>
  <section class="banner-info">
    <div class="slider-container">
      <h2 class="title-heading">Back to Old UI</h2>
      <div class="text-container mb-8">
        <p class="text-description">
          Mulai Akhir Februari 2025, Inzaghi's Sites telah berganti ke
          Tampilan Baru dengan Tampilan yang lebih Fresh dan Modern! Untuk
          kembali ke Tampilan Lama, klik pada Tombol di samping.
        </p>
        <section class="group-button">
          <a
            href="https://old.inzaghi.wuaze.com"
            class="main-button"
            >Back to Old UI</a
          >
        </section>
      </div>
      <section class="group-content">
        <div id="hcg-slider-1" class="hcg-slider">
          <div
            class="hcg-slide-container content-description shadow-xl rounded-lg ring-1 ring-green-400 m-0"
          >
            <div class="hcg-slider-body">
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
  </section>
  <section class="slider-carousel">
    <div class="slider-container">
      <h2 class="title-heading text-green-700">Portals</h2>
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
        <div class="swiper-container flex flex-wrap">
          <div class="swiper portals-swiper">
            <div class="swiper-wrapper" id="portalsContainer"></div>
            <div class="swiper-button-next portals-swiper-button-next"></div>
            <div class="swiper-button-prev portals-swiper-button-prev"></div>
            <div class="swiper-pagination portals-swiper-pagination"></div>
          </div>
        </div>
      </section>
    </div>
  
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
            name: "Interviews & Thesis Prep",
            imgSrc: "../assets/images/intervs-and-thesis-by-portals.png",
            description:
              "Merupakan kumpulan dari pertanyaan-pertanyaan Wawancara seperti Wawancara Kerja, Magang, User Interview, Wawancara Teknis (Technical Interview), dan lain-lain. Portal ini juga menyediakan berbagai macam Pertanyaan untuk persiapan Tugas Akhir seperti Skripsi, Tesis, dan Disertasi.",
            link: "../portals/interviews-and-thesis.php",
          },
          {
            name: "Materi Pembelajaran",
            imgSrc: "../assets/images/learning-materials-by-portals.png",
            description:
              "Merupakan bagian untuk kumpulan Materi Pembelajaran, khususnya untuk Materi Pelajaran Sekolah (Untuk SMA) dan Materi Perkuliahan (Teknik InformatiKa dan Umum/MKDU).",
            link: "../portals/learning-materials.php",
          },
          {
            name: "Video Pages",
            imgSrc: "../assets/images/video-pages-by-portals.png",
            description:
              "Merupakan kumpulan dari Video-video YouTube seperti Live Streaming Video, Daftar Channel Terjemahan Multibahasa, dan Daftar Channel YouTube per Kategori.",
            link: "../portals/video-pages.php",
          },
          {
            name: "Link Pages",
            imgSrc: "../assets/images/link-pages-by-portals.png",
            description:
              "Merupakan kumpulan dari Tautan/Link yang berasal dari Situs Berita, Link Google, YouTube, GitHub, dan lainnya.",
            link: "../portals/link-pages.php",
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
        slide.className = "swiper-slide w-full sm:w-1/2 lg:w-1/3 px-4 mb-4";
        slide.innerHTML = `
          <div class="relative flex flex-col text-gray-700 bg-gray-200 shadow-xl bg-clip-border rounded-xl h-full bg-opacity-50 backdrop-filter backdrop-blur-xl hover:bg-[#f5faf5] ring-1 ring-gray-300">
            <div class="relative mx-4 mt-4 overflow-hidden text-white shadow-md bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
              <a href="${app.link}">
                <img
                  src="${app.imgSrc}"
                  alt="${app.name}"
                  class="w-full h-full object-cover"
                />
              </a>
            </div>
            <div class="p-4 text-center flex flex-col flex-grow justify-between">
              <div class="flex flex-col bg-transparent border border-gray-200 rounded-xl border-gray-300 sm:h-full p-6 sm:p-2 lg:p-4">
                <h5 class="card-name blog-name block mt-2 mb-4 text-2xl sm:text-2xl md:text-3xl antialiased font-semibold leading-snug tracking-normal text-green-700">
                  ${app.name}
                </h5>
                <p class="blog-description m-auto block text-xs md:text-sm text-left antialiased font-light leading-relaxed text-inherit">
                  ${app.description}
                </p>
                <div class="mt-4">
                  <button class="text-white hover:text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-1 py-0.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    <a href="${app.link}" class="button-link px-4 py-2">Klik di sini</a>
                  </button>
                </div>
              </div>
            </div>
          </div>
        `;
        portalsContainer.appendChild(slide);
      });
    </script>
    <script src="../js/slider.js"></script>
  </section>
  <section class="slider-carousel">
    <div class="slider-container">
      <h2 class="title-heading text-green-700">Apps</h2>
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
        <div class="swiper-container flex flex-wrap">
          <div class="swiper apps-swiper">
            <div class="swiper-wrapper" id="appsContainer"></div>
            <div class="swiper-button-next apps-swiper-button-next"></div>
            <div class="swiper-button-prev apps-swiper-button-prev"></div>
            <div class="swiper-pagination apps-swiper-pagination"></div>
          </div>
        </div>
      </section>
    </div>
  
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
        slide.className = "swiper-slide w-full sm:w-1/2 lg:w-1/3 px-4 mb-4";
        slide.innerHTML = `
          <div class="relative flex flex-col text-gray-700 bg-gray-200 shadow-xl bg-clip-border rounded-xl h-full bg-opacity-50 backdrop-filter backdrop-blur-xl hover:bg-[#f5faf5] ring-1 ring-gray-300">
            <div class="relative mx-4 mt-4 overflow-hidden text-white shadow-md bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
              <a href="${app.link}">
                <img
                  src="${app.imgSrc}"
                  alt="${app.name}"
                  class="w-full h-full object-cover"
                />
              </a>
            </div>
            <div class="p-4 text-center flex flex-col flex-grow justify-between">
              <div class="flex flex-col bg-transparent border border-gray-200 rounded-xl border-gray-300 sm:h-full p-6 sm:p-2 lg:p-4">
                <h5 class="card-name blog-name block mt-2 mb-4 text-2xl sm:text-2xl md:text-3xl antialiased font-semibold leading-snug tracking-normal text-green-700">
                  ${app.name}
                </h5>
                <p class="blog-description m-auto block text-xs md:text-sm text-left antialiased font-light leading-relaxed text-inherit">
                  ${app.description}
                </p>
                <div class="mt-4">
                  <button class="text-white hover:text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-1 py-0.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    <a href="${app.link}" class="button-link px-4 py-2">Klik di sini</a>
                  </button>
                </div>
              </div>
            </div>
          </div>
        `;
        appsContainer.appendChild(slide);
      });
    </script>
    <script src="../js/slider.js"></script>
  </section>
  <section class="inzaghis-blog-slider">
    <div class="inzaghis-blog-container">
      <h2 class="title-heading text-yellow-600">Our Blog</h2>
        <div class="text-container mb-8">
          <p class="text-description">
            Inzaghi's Blog merupakan Platform Blogging sebagai tempat untuk
            berbagi Ilmu Pengetahuan, terutama seputar IT. Inzaghi's Blog lebih
            menggunakan Platform Blogger, agar lebih mudah dan praktis.
          </p>
          <section class="group-button">
            <a href="../inzaghis-group/inzaghis-blog.php" class="main-button"
              >Click here</a
            >
          </section>
        </div>
      <div class="container inzaghisblog mx-auto">
        <div class="flex flex-wrap -mx-4 xl:-mx-2">
          <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-4">
            <div
              class="relative flex flex-col text-gray-700 bg-gray-200 shadow-xl bg-clip-border rounded-xl h-full bg-opacity-50 backdrop-filter backdrop-blur-xl hover:bg-[#fff6f0] ring-1 ring-gray-300"
            >
              <div
                class="relative mx-4 mt-4 overflow-hidden text-white shadow-md bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40"
              >
                <img
                  src="../assets/images/inzaghis-blog-legacy.png"
                  alt="Inzaghi's Blog Legacy"
                  class="w-full h-full object-cover"
                />
              </div>
              <div class="p-6 text-center flex flex-col flex-grow justify-between">
                <h5
                  class="blog-name block mb-2 text-3xl sm:text-2xl md:text-3xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900"
                >
                  Inzaghi's Blog Legacy
                </h5>
                <p
                  class="blog-description mb-auto block text-base antialiased font-light leading-relaxed text-inherit"
                >
                  Merupakan Blog Lama yang sudah tersedia sejak Tahun 2018,
                  tempat untuk memposting apapun itu.
                </p>
                <div class="mt-4">
                  <button
                    class="align-middle select-none font-bold text-center uppercase transition-all text-xs px-1 py-1 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none focus:ring-4 focus:outline-none focus:ring-yellow-500"
                  >
                    <a
                      href="https://inzaghiposuma.blogspot.com"
                      target="_blank"
                      class="button-link px-5 py-2"
                      >Klik di sini</a
                    >
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-4">
            <div
              class="relative flex flex-col text-gray-700 bg-gray-200 shadow-xl bg-clip-border rounded-xl h-full bg-opacity-50 backdrop-filter backdrop-blur-xl hover:bg-[#fff6f0] ring-1 ring-gray-300"
            >
              <div
                class="relative mx-4 mt-4 overflow-hidden text-white shadow-md bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40"
              >
                <img
                  src="../assets/images/teknoblog-by-inzaghis-blog.png"
                  alt="Teknoblog - Inzaghi's Blog"
                  class="w-full h-full object-cover"
                />
              </div>
              <div class="p-6 text-center flex flex-col flex-grow justify-between">
                <h5
                  class="blog-name block mb-2 text-3xl sm:text-2xl md:text-3xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900"
                >
                  Teknoblog
                </h5>
                <p
                  class="blog-description mb-auto block text-base antialiased font-light leading-relaxed text-inherit"
                >
                  Merupakan Pindahan dari Blog Lama yang bernama Inzaghi's
                  Blog (Legacy), dan Artikel yang dikhususkan tentang
                  Teknologi.
                </p>
                <div class="mt-4">
                  <button
                    class="align-middle select-none font-bold text-center uppercase transition-all text-xs px-1 py-1 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none focus:ring-4 focus:outline-none focus:ring-yellow-500"
                  >
                    <a
                      href="https://enzatech.blogspot.com"
                      target="_blank"
                      class="button-link px-5 py-2"
                      >Klik di sini</a
                    >
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-4">
            <div
              class="relative flex flex-col text-gray-700 bg-gray-200 shadow-xl bg-clip-border rounded-xl h-full bg-opacity-50 backdrop-filter backdrop-blur-xl hover:bg-[#fff6f0] ring-1 ring-gray-300"
            >
              <div
                class="relative mx-4 mt-4 overflow-hidden text-white shadow-md bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40"
              >
                <img
                  src="../assets/images/miniblog-by-inzaghis-blog.png"
                  alt="Miniblog - Inzaghi's Blog"
                  class="w-full h-full object-cover"
                />
              </div>
              <div class="p-6 text-center flex flex-col flex-grow justify-between">
                <h5
                  class="blog-name block mb-2 text-3xl sm:text-2xl md:text-3xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900"
                >
                  Miniblog
                </h5>
                <p
                  class="blog-description mb-auto block text-base antialiased font-light leading-relaxed text-inherit"
                >
                  Merupakan Blog khusus Microblogging, terutama untuk
                  menyimpan Postingan Sederhana seperti Kode Program
                  Sederhana, hingga Teks dan Tutorial Singkat.
                </p>
                <div class="mt-4">
                  <button
                    class="align-middle select-none font-bold text-center uppercase transition-all text-xs px-1 py-1 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none focus:ring-4 focus:outline-none focus:ring-yellow-500"
                  >
                    <a
                      href="https://enzashorts.blogspot.com"
                      target="_blank"
                      class="button-link px-5 py-2"
                      >Klik di sini</a
                    >
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="inzaghis-media-info">
    <div class="inzaghis-media-container">
      <h2 class="title-heading text-red-600">Our Social Media</h2>
        <div class="text-container mb-8">
          <p class="text-description">
            Inzaghi's Media merupakan Platform Layanan untuk Sharing Ilmu,
            terutama seputar IT.
          </p>
          <section class="group-button">
            <a href="../inzaghis-group/inzaghis-media.php" class="main-button"
              >Click here</a
            >
          </section>
        </div>
      <div class="container inzaghismedia">
        <div class="row -mx-4 sm:-mx-2">
          <div
            class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"
          >
            <div
              class="relative flex flex-col mt-6 text-gray-700 bg-red-100 hover:bg-red-200 shadow-lg bg-clip-border rounded-xl w-full ring-1 ring-slate-600 hover:ring-2 hover:ring-gray-500"
            >
              <div class="p-6 mb-auto">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="44"
                  height="44"
                  fill="none"
                >
                  <defs>
                    <linearGradient
                      id="gradient"
                      x1="0%"
                      y1="0%"
                      x2="100%"
                      y2="100%"
                    >
                      <stop offset="0%" stop-color="#f58529" />
                      <stop offset="30%" stop-color="#dd2a7b" />
                      <stop offset="60%" stop-color="#8134af" />
                      <stop offset="100%" stop-color="#515bd4" />
                    </linearGradient>
                  </defs>
                  <path
                    d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z"
                    stroke="url(#gradient)"
                    stroke-width="1.5"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M16.5 12C16.5 14.4853 14.4853 16.5 12 16.5C9.51472 16.5 7.5 14.4853 7.5 12C7.5 9.51472 9.51472 7.5 12 7.5C14.4853 7.5 16.5 9.51472 16.5 12Z"
                    stroke="url(#gradient)"
                    stroke-width="1.5"
                  />
                  <path
                    d="M17.5078 6.5L17.4988 6.5"
                    stroke="url(#gradient)"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
                <h5
                  class="socmed-name block mb-2 antialiased font-semibold leading-snug tracking-normal text-blue-gray-900 text-3xl"
                >
                  Instagram
                </h5>
                <p
                  class="socmed-description block antialiased leading-relaxed text-inherit"
                >
                  Sebagai Postingan berbentuk Gambar Persegi dan sebagai
                  Asisten dari Inzaghi's Blog.
                </p>
              </div>
              <div class="p-6 pt-0">
                <div class="flex justify-center mt-4">
                  <button
                    class="text-white hover:text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-1 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                  >
                    <a
                      href="https://www.instagram.com/enzapost"
                      target="_blank"
                      class="button-link px-5 py-1.5"
                      >@enzapost</a
                    >
                  </button>
                </div>
              </div>
            </div>
            <div
              class="relative flex flex-col mt-6 text-gray-700 bg-red-100 hover:bg-red-200 shadow-lg bg-clip-border rounded-xl w-full ring-1 ring-slate-600 hover:ring-2 hover:ring-gray-500"
            >
              <div class="p-6 mb-auto">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="44"
                  height="44"
                  fill="none"
                >
                  <defs>
                    <linearGradient
                      id="tiktokGradient"
                      x1="0%"
                      y1="0%"
                      x2="100%"
                      y2="100%"
                    >
                      <stop offset="0%" stop-color="#FE2C55" />
                      <stop offset="100%" stop-color="#25F4EE" />
                    </linearGradient>
                  </defs>
                  <path
                    d="M9.5 22C12.8137 22 15.5 19.3137 15.5 16V8.24537C16.5006 9.04749 17.6981 9.61412 19.0085 9.86122C19.3589 9.92728 19.5341 9.96032 19.7502 9.90446C20.007 9.83809 20.2923 9.6016 20.4051 9.36157C20.5 9.15952 20.5 8.93968 20.5 8.5C20.5 8.04137 20.5 7.81205 20.4499 7.65983C20.3671 7.4079 20.2952 7.31049 20.079 7.15694C19.9483 7.06416 19.6395 6.96876 19.022 6.77796C17.4492 6.29199 16.208 5.05079 15.722 3.47798C15.5312 2.86045 15.4358 2.55169 15.3431 2.42104C15.1895 2.20479 15.0921 2.13294 14.8402 2.05007C14.6879 2 14.4586 2 14 2C13.5341 2 13.3011 2 13.1173 2.07612C12.8723 2.17761 12.6776 2.37229 12.5761 2.61732C12.5 2.80109 12.5 3.03406 12.5 3.5V16C12.5 17.6569 11.1569 19 9.5 19C7.84315 19 6.5 17.6569 6.5 16C6.5 14.8644 7.13101 13.8761 8.06154 13.3667C8.75264 12.9884 9.0982 12.7992 9.19494 12.7057C9.38565 12.5214 9.39434 12.5068 9.46444 12.251C9.5 12.1212 9.5 11.9141 9.5 11.5C9.5 11.0747 9.5 10.8621 9.39825 10.6541C9.28169 10.4159 8.96391 10.1689 8.70429 10.1147C8.47765 10.0674 8.32349 10.1067 8.01518 10.1851C5.41964 10.8459 3.5 13.1988 3.5 16C3.5 19.3137 6.18629 22 9.5 22Z"
                    stroke="url(#tiktokGradient)"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
                <h5
                  class="socmed-name block mb-2 antialiased font-semibold leading-snug tracking-normal text-blue-gray-900 text-3xl"
                >
                  TikTok
                </h5>
                <p
                  class="socmed-description block antialiased leading-relaxed text-inherit"
                >
                  Sebagai Postingan berbentuk Video Vertikal (Portrait) yang
                  dapat di-Scrolling seperti Video Tutorial/Tips dan Informasi
                  Singkat.
                </p>
              </div>
              <div class="p-6 pt-0">
                <div class="flex justify-center mt-4">
                  <button
                    class="text-white hover:text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-1 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                  >
                    <a
                      href="https://www.tiktok.com/@enzapostmedia"
                      target="_blank"
                      class="button-link px-5 py-1.5"
                      >@enzapostmedia</a
                    >
                  </button>
                </div>
              </div>
            </div>
            <div
              class="relative flex flex-col mt-6 text-gray-700 bg-red-100 hover:bg-red-200 shadow-lg bg-clip-border rounded-xl w-full ring-1 ring-slate-600 hover:ring-2 hover:ring-gray-500"
            >
              <div class="p-6 mb-auto">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="44"
                  height="44"
                  fill="none"
                >
                  <path
                    d="M12 20.5C13.8097 20.5 15.5451 20.3212 17.1534 19.9934C19.1623 19.5839 20.1668 19.3791 21.0834 18.2006C22 17.0221 22 15.6693 22 12.9635V11.0365C22 8.33073 22 6.97787 21.0834 5.79937C20.1668 4.62088 19.1623 4.41613 17.1534 4.00662C15.5451 3.67877 13.8097 3.5 12 3.5C10.1903 3.5 8.45489 3.67877 6.84656 4.00662C4.83766 4.41613 3.83321 4.62088 2.9166 5.79937C2 6.97787 2 8.33073 2 11.0365V12.9635C2 15.6693 2 17.0221 2.9166 18.2006C3.83321 19.3791 4.83766 19.5839 6.84656 19.9934C8.45489 20.3212 10.1903 20.5 12 20.5Z"
                    stroke="#FF0000"
                    stroke-width="1.5"
                  />
                  <path
                    d="M15.9621 12.3129C15.8137 12.9187 15.0241 13.3538 13.4449 14.2241C11.7272 15.1705 10.8684 15.6438 10.1728 15.4615C9.9372 15.3997 9.7202 15.2911 9.53799 15.1438C9 14.7089 9 13.8059 9 12C9 10.1941 9 9.29112 9.53799 8.85618C9.7202 8.70886 9.9372 8.60029 10.1728 8.53854C10.8684 8.35621 11.7272 8.82945 13.4449 9.77593C15.0241 10.6462 15.8137 11.0813 15.9621 11.6871C16.0126 11.8933 16.0126 12.1067 15.9621 12.3129Z"
                    stroke="#FF0000"
                    stroke-width="1.5"
                    stroke-linejoin="round"
                  />
                </svg>
                <h5
                  class="socmed-name block mb-2 antialiased font-semibold leading-snug tracking-normal text-blue-gray-900 text-3xl"
                >
                  YouTube
                </h5>
                <p
                  class="socmed-description block antialiased leading-relaxed text-inherit"
                >
                  Sebagai sebuah Channel yang berbentuk Video seperti
                  Tutorial, Video Shorts, hingga Demo Aplikasi/Project.
                </p>
              </div>
              <div class="p-6 pt-0">
                <div class="flex justify-center mt-4">
                  <button
                    class="text-white hover:text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-1 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                  >
                    <a
                      href="https://www.youtube.com/@enzavlogpost"
                      target="_blank"
                      class="button-link px-5 py-1.5"
                      >Inzaghi's Media</a
                    >
                  </button>
                </div>
              </div>
            </div>
            <div
              class="relative flex flex-col mt-6 text-gray-700 bg-red-100 hover:bg-red-200 shadow-lg bg-clip-border rounded-xl w-full ring-1 ring-slate-600 hover:ring-2 hover:ring-gray-500"
            >
              <div class="p-6 mb-auto">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="44"
                  height="44"
                  color="#000000"
                  fill="none"
                >
                  <path
                    d="M3 21L10.5484 13.4516M21 3L13.4516 10.5484M13.4516 10.5484L8 3H3L10.5484 13.4516M13.4516 10.5484L21 21H16L10.5484 13.4516"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
                <h5
                  class="socmed-name block mb-2 antialiased font-semibold leading-snug tracking-normal text-blue-gray-900 text-3xl"
                >
                  X (Twitter)
                </h5>
                <p
                  class="socmed-description block antialiased leading-relaxed text-inherit"
                >
                  Sebagai Postingan berbentuk Infografis, Tweet, hingga
                  Postingan-postingan dari Inzaghi's Blog.
                </p>
              </div>
              <div class="p-6 pt-0">
                <div class="flex justify-center mt-4">
                  <button
                    class="text-white hover:text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-1 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                  >
                    <a
                      href="https://x.com/InzaTechMedia"
                      target="_blank"
                      class="button-link px-5 py-1.5"
                      >@InzaTechMedia</a
                    >
                  </button>
                </div>
              </div>
            </div>
            <div
              class="relative flex flex-col mt-6 text-gray-700 bg-red-100 hover:bg-red-200 shadow-lg bg-clip-border rounded-xl w-full ring-1 ring-slate-600 hover:ring-2 hover:ring-gray-500"
            >
              <div class="p-6 mb-auto">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="44"
                  height="44"
                  color="#000000"
                  fill="none"
                >
                  <path
                    d="M19.25 8.50488C17.6729 2.63804 12.25 3.00452 12.25 3.00452C12.25 3.00452 4.75 2.50512 4.75 12C4.75 21.4949 12.25 20.9955 12.25 20.9955C12.25 20.9955 16.7077 21.2924 18.75 17.0782C19.4167 15.2204 19.25 11.5049 12.75 11.5049C12.75 11.5049 9.75 11.5049 9.75 14.0049C9.75 14.9812 10.75 16.0049 12.25 16.0049C13.75 16.0049 15.4212 14.9777 15.75 13.0049C16.75 7.00488 11.25 6.50488 9.75 9.00488"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  ></path>
                </svg>
                <h5
                  class="socmed-name block mb-2 antialiased font-semibold leading-snug tracking-normal text-blue-gray-900 text-3xl"
                >
                  Threads
                </h5>
                <p
                  class="socmed-description block antialiased leading-relaxed text-inherit"
                >
                  Sama seperti di X, Sebagai Postingan berbentuk Infografis,
                  Tulisan, hingga Postingan-postingan dari Inzaghi's Blog.
                </p>
              </div>
              <div class="p-6 pt-0">
                <div class="flex justify-center mt-4">
                  <button
                    class="text-white hover:text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-1 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                  >
                    <a
                      href="https://www.threads.net/@enzapost"
                      target="_blank"
                      class="button-link px-5 py-1.5"
                      >@enzapost</a
                    >
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="inzaghis-group-network">
    <div class="inzaghis-group-wrapper">
      <div class="inzaghis-group-network-description">
        <h2 class="inzaghis-group-heading">Inzaghi's Group Network</h2>
        <div class="inzaghis-group-container">
          <img
            src="../assets/icons/inzaghis-group-logo-vertical-transparent.png"
            class="logo-icon h-16 w-auto"
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
      <div class="logo-grid grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mt-6">
        <img
          src="../assets/icons/inzaghis-blog-logo-vertical-transparent.png"
          class="logo-icon h-16 w-auto"
          alt="logo"
        />
        <img
          src="../assets/icons/inzaghis-sites-logo-vertical-transparent.png"
          class="logo-icon h-16 w-auto"
          alt="logo"
        />
        <img
          src="../assets/icons/inzaghis-media-logo-vertical-transparent.png"
          class="logo-icon h-16 w-auto"
          alt="logo"
        />
        <img
          src="../assets/icons/inzaghis-dev-logo-vertical-transparent.png"
          class="logo-icon h-16 w-auto"
          alt="logo"
        />
        <img
          src="../assets/icons/inzaghis-archives-logo-vertical-transparent.png"
          class="logo-icon h-16 w-auto"
          alt="logo"
        />
        <img
          src="../assets/icons/inzaghis-app-logo-vertical-transparent.png"
          class="logo-icon h-16 w-auto"
          alt="logo"
        />
        <img
          src="../assets/icons/inzaghis-ai-logo-vertical-transparent.png"
          class="logo-icon h-16 w-auto"
          alt="logo"
        />
        <img
          src="../assets/icons/inzaghis-shop-logo-vertical-transparent.png"
          class="logo-icon h-16 w-auto"
          alt="logo"
        />
      </div>
    </div>
  </section>
<?php
  include('../components/footsite/footsite.php');
  include('../layouts/footer.php');
?>

<!-- Tailwind Card with Carousel : -->
<!-- https://tailwindflex.com/@maximus/carousel-card-slider-swiper-on-alpine-js -->
<!-- https://larainfo.com/blogs/tailwind-css-carousel-slider-examples -->
<!-- https://pagedone.io/docs/carousel -->
<!-- https://www.creative-tim.com/twcomponents/component/card-carousel -->
<!-- https://preline.co/docs/carousel.html -->
<!-- https://tailwindflex.com/@mr-robot/card-grid-section -->
<!-- https://tailwindflex.com/@anonymous/slider -->
<!-- https://codepen.io/karimhossenbux/pen/zYJRbaZ -->

<!-- Create Modals & Popups -->
<!-- https://www.w3schools.com/js/js_popup.asp -->
<!-- https://www.w3schools.com/howto/howto_css_modals.asp -->
<!-- https://www.material-tailwind.com/docs/html/dialog -->
<!-- https://windframe.dev/blog/how-to-create-tailwind-css-modal -->
<!--  -->