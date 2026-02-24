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
      <h2 class="title-heading">Branch Subdomains (Another Versions)</h2>
      <p class="centered-subheading m-4">
        Untuk melihat Versi lainnya dari Situs ini, silakan lihat dari
        beberapa Tautan/Link di bawah ini.
      </p>
      <div
        class="block relative flex flex-col my-6 bg-white border border-gray-200 rounded-lg shadow-xl w-full mx-auto ring-1 ring-green-500 hover:shadow-2xl"
      >
        <div class="p-4">
          <div class="mb-4 flex items-center justify-between">
            <h5 class="text-slate-800 text-lg font-semibold">Versions</h5>
          </div>
          <hr class="my-2 border-t border-green-500" />
          <div class="divide-y divide-slate-200">
            <div class="items-center justify-between pb-3 pt-3 last:pb-0">
              <div class="flex justify-between flex-wrap gap-2 mb-4 w-full">
                <div class="flex items-center">
                  <img
                    src="../assets/icons/git-branch.svg"
                    alt="Git Branch Icon"
                    width="44"
                    height="44"
                  />
                  <span
                    class="text-2xl ml-3 text-gray-700 font-bold font-[Inter]"
                    >Main Branch (New UI)</span
                  >
                </div>
                <button type="button">
                  <a
                    href="https://inzaghi.wuaze.com"
                    class="inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >Click here</a
                  >
                </button>
              </div>
              <p class="is-desc">
                Merupakan Cabang/Branch Utama dari Website Platform ini, yang
                sifatnya Stabil, dan sudah menggunakan Tampilan UI Baru.
              </p>
              <hr class="my-2 border-t border-gray" />
            </div>
            <div class="items-center justify-between pb-3 pt-3 last:pb-0">
              <div class="flex justify-between flex-wrap gap-2 mb-4 w-full">
                <div class="flex items-center">
                  <img
                    src="../assets/icons/rocket-01.svg"
                    alt="Rocket Icon 1"
                    width="44"
                    height="44"
                  />
                  <span
                    class="text-2xl ml-3 text-gray-700 font-bold font-[Inter]"
                    >Beta Future (Old UI - Temporary)</span
                  >
                </div>
                <button type="button">
                  <a
                    href="https://preview.inzaghi.wuaze.com"
                    class="inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >Click here</a
                  >
                </button>
              </div>
              <p class="is-desc">
                Merupakan Cabang/Branch yang didesain untuk melakukan Uji-Coba
                Fitur Baru secara Pratinjau (Preview). Untuk sementara, Branch
                ini masih menggunakan Tampilan UI Lama, hingga dimatangkan
                akan menggunakan Tampilan UI Baru.
              </p>
              <hr class="my-2 border-t border-gray" />
            </div>
            <div class="items-center justify-between pb-3 pt-3 last:pb-0">
              <div class="flex justify-between flex-wrap gap-2 mb-4 w-full">
                <div class="flex items-center">
                  <img
                    src="../assets/icons/square-arrow-down-double.svg"
                    alt="Square Arrow Down Double"
                    width="44"
                    height="44"
                  />
                  <span
                    class="text-2xl ml-3 text-gray-700 font-bold font-[Inter]"
                    >Master (Old UI)</span
                  >
                </div>
                <button type="button">
                  <a
                    href="https://old.inzaghi.wuaze.com"
                    class="inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >Click here</a
                  >
                </button>
              </div>
              <p class="is-desc">
                Merupakan Cabang dari Inzaghi's Sites yang masih menggunakan
                Tampilan UI Lama. Mirip seperti pada Main Branch, hanya saja
                masih menggunakan Tampilan Lama.
              </p>
              <hr class="my-2 border-t border-gray" />
            </div>
            <div class="items-center justify-between pb-3 pt-3 last:pb-0">
              <div class="flex justify-between flex-wrap gap-2 mb-4 w-full">
                <div class="flex items-center">
                  <img
                    src="../assets/icons/web-design-02.svg"
                    alt="Web Design"
                    width="44"
                    height="44"
                  />
                  <span
                    class="text-2xl ml-3 text-gray-700 font-bold font-[Inter]"
                    >Laravel (Coming Soon)</span
                  >
                </div>
                <button type="button">
                  <a
                    href="https://github.com/inzaghidev/Inzaghis-Sites/tree/isites-laravel"
                    target="_blank"
                    class="inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >Click here</a
                  >
                </button>
              </div>
              <p class="is-desc">
                Pada Branch ini, akan dibangun dan dikembangkan ulang dengan
                menggunakan Laravel. Untuk sementara, masih tersedia di dalam
                Branch pada Repository GitHub kami.
              </p>
            </div>
          </div>
        </div>
      </div>
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
            name: "Career Portal",
            imgSrc: "../assets/images/career-portal-by-portals.png",
            description:
              "Merupakan kumpulan dari pertanyaan-pertanyaan Wawancara seperti Wawancara Kerja, Magang, User Interview, Wawancara Teknis (Technical Interview), dan lain-lain.",
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
  <section class="inzaghis-blog-home">
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
  <section class="inzaghis-media-home">
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
              class="relative flex flex-col mt-6 text-gray-700 bg-red-100 hover:bg-red-200 shadow-lg bg-clip-border rounded-xl w-full ring-1 ring-slate-600 hover:ring-2 hover:ring-gray-500 transition-all duration-400"
            >
              <div class="p-6 mb-auto">
                <img
                  src="../assets/icons/instagram-logo-withcolor.svg"
                  alt="Instagram Logo"
                  width="44"
                  height="44"
                />
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
              class="relative flex flex-col mt-6 text-gray-700 bg-red-100 hover:bg-red-200 shadow-lg bg-clip-border rounded-xl w-full ring-1 ring-slate-600 hover:ring-2 hover:ring-gray-500 transition-all duration-400"
            >
              <div class="p-6 mb-auto">
                <img
                  src="../assets/icons/tiktok-logo-withcolor.svg"
                  alt="TikTok Logo"
                  width="44"
                  height="44"
                />
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
              class="relative flex flex-col mt-6 text-gray-700 bg-red-100 hover:bg-red-200 shadow-lg bg-clip-border rounded-xl w-full ring-1 ring-slate-600 hover:ring-2 hover:ring-gray-500 transition-all duration-400"
            >
              <div class="p-6 mb-auto">
                <img
                  src="../assets/icons/youtube-logo-withcolor.svg"
                  alt="YouTube Logo"
                  width="44"
                  height="44"
                />
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
              class="relative flex flex-col mt-6 text-gray-700 bg-red-100 hover:bg-red-200 shadow-lg bg-clip-border rounded-xl w-full ring-1 ring-slate-600 hover:ring-2 hover:ring-gray-500 transition-all duration-400"
            >
              <div class="p-6 mb-auto">
                <img
                  src="../assets/icons/x-twitter-logo.svg"
                  alt="X Logo"
                  width="44"
                  height="44"
                />
                <h5
                  class="socmed-name block mb-2 antialiased font-semibold leading-snug tracking-normal text-blue-gray-900 text-3xl"
                >
                  X (Twitter)
                </h5>
                <p
                  class="socmed-description block antialiased leading-relaxed text-inherit"
                >
                  Sebagai Postingan berbentuk Repost/Retweet, Utasan/Tulisan,
                  hingga Postingan-postingan dari Inzaghi's Blog.
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
              class="relative flex flex-col mt-6 text-gray-700 bg-red-100 hover:bg-red-200 shadow-lg bg-clip-border rounded-xl w-full ring-1 ring-slate-600 hover:ring-2 hover:ring-gray-500 transition-all duration-400"
            >
              <div class="p-6 mb-auto">
                <img
                  src="../assets/icons/threads-logo.svg"
                  alt="Threads Logo"
                  width="44"
                  height="44"
                />
                <h5
                  class="socmed-name block mb-2 antialiased font-semibold leading-snug tracking-normal text-blue-gray-900 text-3xl"
                >
                  Threads
                </h5>
                <p
                  class="socmed-description block antialiased leading-relaxed text-inherit"
                >
                  Sama seperti di X, Sebagai Postingan berbentuk Repost,
                  Utasan/Tulisan, hingga Postingan-postingan dari Instagram
                  dan Inzaghi's Blog.
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

<!-- https://tailwindflex.com/@rakibhasansohag/hover-effect-card-2 -->
<!-- https://tailwindflex.com/@abhi/card-grid-for-blog-posts-articles -->
<!-- https://tailwindflex.com/@shakti/simple-and-clean-cards -->
<!-- https://tailwindflex.com/@ron-hicks/weather-info-card -->