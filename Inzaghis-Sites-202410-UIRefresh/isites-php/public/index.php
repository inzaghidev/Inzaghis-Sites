<?php
	$page_title = "Home";
	include('../layouts/header.php');
	include('../components/navbar/navbar.php');
?>
  <section class="welcome">
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
            <section class="group-button about-inzaghis-sites-button">
              <a href="../pages/about.html" class="main-button">ABOUT</a>
            </section>
          </div>
        </div>
        <div class="welcome-image-to-inzaghis-sites">
          <img
            src="../images/website-illustration-transparent-3d.png"
            alt="Inzaghi's Sites"
            style="width: 600px"
          />
        </div>
      </div>
    </div>
  </section>
  <section class="page-apps">
    <div class="page-apps-container">
      <h2 class="title-heading">Page Apps</h2>
      <div class="text-container">
        <p class="text-description">
          Pages Apps merupakan Halaman Aplikasi yang tersedia untuk berbagai
          kebutuhan. Pages Apps menyediakan berbagai Portal seperti Halaman,
          Widget, Konverter, Kalkulator, dan lainnya.
        </p>
        <section class="group-button">
          <a href="../pages/apps.html" class="main-button">Click here</a>
        </section>
      </div>
      <section class="group-content">
        <div id="hcg-slider-1" class="hcg-slider">
          <div class="hcg-slide-container content-description shadow-xl rounded-lg ring-1 ring-green-400 m-0">
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
        <section
          class="content-description bg-white shadow-xl rounded-lg p-6 ring-1 ring-green-400"
        >
          <h2 class="group-title">Pages</h2>
          <p class="left-subheading">
            Merupakan kumpulan Halaman sebagai bacaan yang dapat diakses di
            Inzaghi's Sites. Dan juga sebagai kumpulan Materi, Proyek-proyek,
            hingga Tutorial Pemrograman.
          </p>
          <div class="btn flex justify-center mt-4">
            <a
              href="../page-apps/pages.html"
              class="focus:ring-4 focus:outline-none focus:ring-green-300 inline-flex items-center justify-center font-bold text-center uppercase transition-all text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none hover:text-white"
            >
              Click here
            </a>
          </div>
        </section>
      </section>
    </div>
    <script src="../js/slider.js"></script>
  </section>
  <section class="inzaghis-blog-slider">
    <div class="inzaghis-blog-container">
      <h2 class="title-heading text-yellow-600">Our Blog</h2>
      <p class="centered-subheading">
        Inzaghi's Blog merupakan Platform Blogging sebagai tempat untuk
        berbagi Ilmu Pengetahuan, terutama seputar IT. Inzaghi's Blog lebih
        menggunakan Platform Blogger, agar lebih mudah dan praktis.
      </p>
      <div class="container inzaghisblog mx-auto">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-4">
            <div
              class="relative flex flex-col text-gray-700 bg-gray-200 shadow-xl bg-clip-border rounded-xl h-full"
            >
              <div
                class="relative mx-4 mt-4 overflow-hidden text-white shadow-md bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40"
              >
                <img
                  src="../images/inzaghis-blog-legacy.png"
                  alt="Inzaghi's Blog Legacy"
                  class="w-full h-full object-cover"
                />
              </div>
              <div class="p-6 text-center">
                <h5
                  class="blog-name block mb-2 text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900"
                >
                  Inzaghi's Blog Legacy
                </h5>
                <p
                  class="blog-description block text-base antialiased font-light leading-relaxed text-inherit"
                >
                  Merupakan Blog Lama yang sudah tersedia sejak Tahun 2018,
                  tempat untuk memposting apapun itu.
                </p>
                <div class="mt-4">
                  <button
                    class="align-middle select-none font-bold text-center uppercase transition-all text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                  >
                    <a
                      href="https://inzaghiposuma.blogspot.com"
                      target="_blank"
                      class="blog-link"
                      >Klik di sini</a
                    >
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-4">
            <div
              class="relative flex flex-col text-gray-700 bg-gray-200 shadow-xl bg-clip-border rounded-xl h-full"
            >
              <div
                class="relative mx-4 mt-4 overflow-hidden text-white shadow-md bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40"
              >
                <img
                  src="../images/teknoblog-by-inzaghis-blog.png"
                  alt="Teknoblog - Inzaghi's Blog"
                  class="w-full h-full object-cover"
                />
              </div>
              <div class="p-6 text-center">
                <h5
                  class="blog-name block mb-2 text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900"
                >
                  Teknoblog
                </h5>
                <p
                  class="blog-description block text-base antialiased font-light leading-relaxed text-inherit"
                >
                  Merupakan Pindahan dari Blog Lama yang bernama Inzaghi's
                  Blog (Legacy), dan Artikel yang dikhususkan tentang
                  Teknologi.
                </p>
                <div class="mt-4">
                  <button
                    class="align-middle select-none font-bold text-center uppercase transition-all text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                  >
                    <a
                      href="https://enzatech.blogspot.com"
                      target="_blank"
                      class="blog-link"
                      >Klik di sini</a
                    >
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-4">
            <div
              class="relative flex flex-col text-gray-700 bg-gray-200 shadow-xl bg-clip-border rounded-xl h-full"
            >
              <div
                class="relative mx-4 mt-4 overflow-hidden text-white shadow-md bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40"
              >
                <img
                  src="../images/miniblog-by-inzaghis-blog.png"
                  alt="Miniblog - Inzaghi's Blog"
                  class="w-full h-full object-cover"
                />
              </div>
              <div class="p-6 text-center">
                <h5
                  class="blog-name block mb-2 text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900"
                >
                  Miniblog
                </h5>
                <p
                  class="blog-description block text-base antialiased font-light leading-relaxed text-inherit"
                >
                  Merupakan Blog khusus Microblogging, terutama untuk
                  menyimpan Postingan Sederhana seperti Kode Program
                  Sederhana, hingga Teks dan Tutorial Singkat.
                </p>
                <div class="mt-4">
                  <button
                    class="align-middle select-none font-bold text-center uppercase transition-all text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                  >
                    <a
                      href="https://enzashorts.blogspot.com"
                      target="_blank"
                      class="blog-link"
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
      <p class="centered-subheading">
        Inzaghi's Media merupakan Platform Layanan untuk Sharing Ilmu,
        terutama seputar IT.
      </p>
      <div class="container inzaghismedia">
        <div class="row">
          <div
            class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"
          >
            <div
              class="relative flex flex-col mt-6 text-gray-700 bg-red-100 shadow-lg bg-clip-border rounded-xl w-full ring-1 ring-slate-600"
            >
              <div class="p-6">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="44"
                  height="44"
                  color="#000000"
                  fill="none"
                >
                  <path
                    d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M16.5 12C16.5 14.4853 14.4853 16.5 12 16.5C9.51472 16.5 7.5 14.4853 7.5 12C7.5 9.51472 9.51472 7.5 12 7.5C14.4853 7.5 16.5 9.51472 16.5 12Z"
                    stroke="currentColor"
                    stroke-width="1.5"
                  />
                  <path
                    d="M17.5078 6.5L17.4988 6.5"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
                <h5
                  class="socmed-name block mb-2 antialiased font-semibold leading-snug tracking-normal text-blue-gray-900"
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
                <a
                  href="https://www.instagram.com/enzapost"
                  target="_blank"
                  class="flex justify-center"
                >
                  <button
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button"
                  >
                    @enzapost
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      class="w-4 h-4"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                      ></path>
                    </svg>
                  </button>
                </a>
              </div>
            </div>
            <div
              class="relative flex flex-col mt-6 text-gray-700 bg-red-100 shadow-lg bg-clip-border rounded-xl w-full ring-1 ring-slate-600"
            >
              <div class="p-6">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="44"
                  height="44"
                  color="#000000"
                  fill="none"
                >
                  <path
                    d="M9.5 22C12.8137 22 15.5 19.3137 15.5 16V8.24537C16.5006 9.04749 17.6981 9.61412 19.0085 9.86122C19.3589 9.92728 19.5341 9.96032 19.7502 9.90446C20.007 9.83809 20.2923 9.6016 20.4051 9.36157C20.5 9.15952 20.5 8.93968 20.5 8.5C20.5 8.04137 20.5 7.81205 20.4499 7.65983C20.3671 7.4079 20.2952 7.31049 20.079 7.15694C19.9483 7.06416 19.6395 6.96876 19.022 6.77796C17.4492 6.29199 16.208 5.05079 15.722 3.47798C15.5312 2.86045 15.4358 2.55169 15.3431 2.42104C15.1895 2.20479 15.0921 2.13294 14.8402 2.05007C14.6879 2 14.4586 2 14 2C13.5341 2 13.3011 2 13.1173 2.07612C12.8723 2.17761 12.6776 2.37229 12.5761 2.61732C12.5 2.80109 12.5 3.03406 12.5 3.5V16C12.5 17.6569 11.1569 19 9.5 19C7.84315 19 6.5 17.6569 6.5 16C6.5 14.8644 7.13101 13.8761 8.06154 13.3667C8.75264 12.9884 9.0982 12.7992 9.19494 12.7057C9.38565 12.5214 9.39434 12.5068 9.46444 12.251C9.5 12.1212 9.5 11.9141 9.5 11.5C9.5 11.0747 9.5 10.8621 9.39825 10.6541C9.28169 10.4159 8.96391 10.1689 8.70429 10.1147C8.47765 10.0674 8.32349 10.1067 8.01518 10.1851C5.41964 10.8459 3.5 13.1988 3.5 16C3.5 19.3137 6.18629 22 9.5 22Z"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
                <h5
                  class="socmed-name block mb-2 antialiased font-semibold leading-snug tracking-normal text-blue-gray-900"
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
                <a
                  href="https://www.tiktok.com/@enzapostmedia"
                  target="_blank"
                  class="flex justify-center"
                >
                  <button
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button"
                  >
                    @enzapostmedia
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      class="w-4 h-4"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                      ></path>
                    </svg>
                  </button>
                </a>
              </div>
            </div>
            <div
              class="relative flex flex-col mt-6 text-gray-700 bg-red-100 shadow-lg bg-clip-border rounded-xl w-full ring-1 ring-slate-600"
            >
              <div class="p-6">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="44"
                  height="44"
                  color="#000000"
                  fill="none"
                >
                  <path
                    d="M12 20.5C13.8097 20.5 15.5451 20.3212 17.1534 19.9934C19.1623 19.5839 20.1668 19.3791 21.0834 18.2006C22 17.0221 22 15.6693 22 12.9635V11.0365C22 8.33073 22 6.97787 21.0834 5.79937C20.1668 4.62088 19.1623 4.41613 17.1534 4.00662C15.5451 3.67877 13.8097 3.5 12 3.5C10.1903 3.5 8.45489 3.67877 6.84656 4.00662C4.83766 4.41613 3.83321 4.62088 2.9166 5.79937C2 6.97787 2 8.33073 2 11.0365V12.9635C2 15.6693 2 17.0221 2.9166 18.2006C3.83321 19.3791 4.83766 19.5839 6.84656 19.9934C8.45489 20.3212 10.1903 20.5 12 20.5Z"
                    stroke="currentColor"
                    stroke-width="1.5"
                  />
                  <path
                    d="M15.9621 12.3129C15.8137 12.9187 15.0241 13.3538 13.4449 14.2241C11.7272 15.1705 10.8684 15.6438 10.1728 15.4615C9.9372 15.3997 9.7202 15.2911 9.53799 15.1438C9 14.7089 9 13.8059 9 12C9 10.1941 9 9.29112 9.53799 8.85618C9.7202 8.70886 9.9372 8.60029 10.1728 8.53854C10.8684 8.35621 11.7272 8.82945 13.4449 9.77593C15.0241 10.6462 15.8137 11.0813 15.9621 11.6871C16.0126 11.8933 16.0126 12.1067 15.9621 12.3129Z"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linejoin="round"
                  />
                </svg>
                <h5
                  class="socmed-name block mb-2 antialiased font-semibold leading-snug tracking-normal text-blue-gray-900"
                >
                  YouTube
                </h5>
                <p
                  class="socmed-description block antialiased leading-relaxed text-inherit"
                >
                  Sebagai sebuah Channel yang berbentuk Video seperti
                  Tutorial.
                </p>
              </div>
              <div class="p-6 pt-0">
                <a
                  href="https://www.youtube.com/@enzavlogpost"
                  target="_blank"
                  class="flex justify-center"
                >
                  <button
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button"
                  >
                    Inzaghi's Media
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      class="w-4 h-4"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                      ></path>
                    </svg>
                  </button>
                </a>
              </div>
            </div>
            <div
              class="relative flex flex-col mt-6 text-gray-700 bg-red-100 shadow-lg bg-clip-border rounded-xl w-full ring-1 ring-slate-600"
            >
              <div class="p-6">
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
                  class="socmed-name block mb-2 antialiased font-semibold leading-snug tracking-normal text-blue-gray-900"
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
                <a
                  href="https://x.com/InzaTechMedia"
                  target="_blank"
                  class="flex justify-center"
                >
                  <button
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button"
                  >
                    @InzaTechMedia
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      class="w-4 h-4"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                      ></path>
                    </svg>
                  </button>
                </a>
              </div>
            </div>
            <div
              class="relative flex flex-col mt-6 text-gray-700 bg-red-100 shadow-lg bg-clip-border rounded-xl w-full ring-1 ring-slate-600"
            >
              <div class="p-6">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="44"
                  height="44"
                  color="#000000"
                  fill="none"
                >
                  <path
                    d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M17 9.58944C15.9124 5.54334 12.1724 5.79609 12.1724 5.79609C12.1724 5.79609 7 5.45167 7 11.9999C7 18.5481 12.1724 18.2036 12.1724 18.2036C12.1724 18.2036 15.2467 18.4084 16.6552 15.5021C17.1149 14.2208 17 11.6584 12.5172 11.6584C12.5172 11.6584 10.4483 11.6584 10.4483 13.3825C10.4483 14.0559 11.1379 14.7619 12.1724 14.7619C13.2069 14.7619 14.3594 14.0534 14.5862 12.6929C15.2759 8.55496 11.4828 8.21013 10.4483 9.93427"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  />
                </svg>
                <h5
                  class="socmed-name block mb-2 antialiased font-semibold leading-snug tracking-normal text-blue-gray-900"
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
                <a
                  href="https://www.threads.net/@enzapost"
                  target="_blank"
                  class="flex justify-center"
                >
                  <button
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button"
                  >
                    @enzapost
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      class="w-4 h-4"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                      ></path>
                    </svg>
                  </button>
                </a>
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
            src="../images/inzaghis-group-logo-vertical-transparent.png"
            class="h-16 w-auto"
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
      <div class="logo-grid grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
        <img
          src="../images/inzaghis-blog-logo-vertical-transparent.png"
          class="h-16 w-auto"
          alt="logo"
        />
        <img
          src="../images/inzaghis-sites-logo-vertical-transparent.png"
          class="h-16 w-auto"
          alt="logo"
        />
        <img
          src="../images/inzaghis-media-logo-vertical-transparent.png"
          class="h-16 w-auto"
          alt="logo"
        />
        <img
          src="../images/inzaghis-dev-logo-vertical-transparent.png"
          class="h-16 w-auto"
          alt="logo"
        />
        <img
          src="../images/inzaghis-archives-logo-vertical-transparent.png"
          class="h-16 w-auto"
          alt="logo"
        />
        <img
          src="../images/inzaghis-app-logo-vertical-transparent.png"
          class="h-16 w-auto"
          alt="logo"
        />
        <img
          src="../images/inzaghis-ai-logo-vertical-transparent.png"
          class="h-16 w-auto"
          alt="logo"
        />
        <img
          src="../images/inzaghis-shop-logo-vertical-transparent.png"
          class="h-16 w-auto"
          alt="logo"
        />
      </div>
    </div>
  </section>
<?php
  include('../components/footsite/footsite.php');
  include('../layouts/footer.php');
?>