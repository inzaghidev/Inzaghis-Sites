<?php
	$page_title = "Inzaghi's Media";

  include_once __DIR__ . '/../includes/config.php';
  include('../layouts/header.php');
  include('../components/navbar/navbar.php');
?>
    <div class="container-top"></div>
    <section class="inzaghis-group-pages inzaghismedia-slider">
      <div class="page-wrapper inzagroup-pages">
        <h1 class="my-4 page-title">Inzaghi's Media</h1>
        <div class="bg-white shadow-xl rounded-lg p-6 ring-1 ring-red-400 p-6">
          <div class="card-apps">
            <h2 class="text-4xl font-bold mb-4 font-[Inter]">Description</h2>
            <p class="text-black text-sm font-[Inter]">
              Inzaghi's Media merupakan Platform Layanan untuk Sharing Ilmu,
              terutama seputar IT.
            </p>
            <br />
            <hr class="my-6 border-t border-gray-500" />
          </div>
          <br />
          <div class="mb-6">
            <div class="flex justify-between flex-wrap gap-2 mb-4 w-full">
              <div class="flex items-center">
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
                  ></path>
                  <path
                    d="M16.5 12C16.5 14.4853 14.4853 16.5 12 16.5C9.51472 16.5 7.5 14.4853 7.5 12C7.5 9.51472 9.51472 7.5 12 7.5C14.4853 7.5 16.5 9.51472 16.5 12Z"
                    stroke="currentColor"
                    stroke-width="1.5"
                  ></path>
                  <path
                    d="M17.5078 6.5L17.4988 6.5"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
                <span class="text-3xl ml-3 text-gray-700 font-bold font-[Inter]"
                  >Instagram</span
                >
              </div>
              <button type="button">
                <a
                  href="https://www.instagram.com/enzapost"
                  target="_blank"
                  class="inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                  >@enzapost</a
                >
              </button>
            </div>
            <p class="mt-2 text-gray-600 text-sm font-[Inter]">
              Sebagai Postingan berbentuk Gambar Persegi dan sebagai Asisten
              dari Inzaghi's Blog.
            </p>
            <br />
            <div class="sk-instagram-feed" data-embed-id="25485818"></div>
            <script
              src="https://widgets.sociablekit.com/instagram-feed/widget.js"
              async
              defer
            ></script>
          </div>
          <div class="mb-6">
            <div class="flex justify-between flex-wrap gap-2 mb-4 w-full">
              <div class="flex items-center">
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
                  ></path>
                </svg>
                <span class="text-3xl ml-3 text-gray-700 font-bold font-[Inter]"
                  >TikTok</span
                >
              </div>
              <button type="button">
                <a
                  href="https://www.tiktok.com/@enzapostmedia"
                  target="_blank"
                  class="inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                  >@enzapostmedia</a
                >
              </button>
            </div>
            <p class="mt-2 text-gray-600 text-sm font-[Inter]">
              Sebagai Postingan berbentuk Video Vertikal (Portrait) yang dapat
              di-Scrolling seperti Video Tutorial/Tips dan Informasi Singkat.
            </p>
            <br />
            <div class="sk-tiktok-feed" data-embed-id="25485777"></div>
            <script
              src="https://widgets.sociablekit.com/tiktok-feed/widget.js"
              async
              defer
            ></script>
          </div>
          <div class="mb-6">
            <div class="flex justify-between flex-wrap gap-2 mb-4 w-full">
              <div class="flex items-center">
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
                  ></path>
                  <path
                    d="M15.9621 12.3129C15.8137 12.9187 15.0241 13.3538 13.4449 14.2241C11.7272 15.1705 10.8684 15.6438 10.1728 15.4615C9.9372 15.3997 9.7202 15.2911 9.53799 15.1438C9 14.7089 9 13.8059 9 12C9 10.1941 9 9.29112 9.53799 8.85618C9.7202 8.70886 9.9372 8.60029 10.1728 8.53854C10.8684 8.35621 11.7272 8.82945 13.4449 9.77593C15.0241 10.6462 15.8137 11.0813 15.9621 11.6871C16.0126 11.8933 16.0126 12.1067 15.9621 12.3129Z"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linejoin="round"
                  ></path>
                </svg>
                <span class="text-3xl ml-3 text-gray-700 font-bold font-[Inter]"
                  >YouTube</span
                >
              </div>
              <button type="button">
                <a
                  href="https://www.youtube.com/@enzavlogpost"
                  target="_blank"
                  class="inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                  >Inzaghi's Media</a
                >
              </button>
            </div>
            <p class="mt-2 text-gray-600 text-sm font-[Inter]">
              Sebagai sebuah Channel yang berbentuk Video seperti Tutorial,
              Video Shorts, hingga Demo Aplikasi/Project.
            </p>
            <br />
            <div
              class="sk-ww-youtube-channel-videos"
              data-embed-id="25487921"
            ></div>
            <script
              src="https://widgets.sociablekit.com/youtube-channel-videos/widget.js"
              async
              defer
            ></script>
          </div>
          <div class="mb-6">
            <div class="flex justify-between flex-wrap gap-2 mb-4 w-full">
              <div class="flex items-center">
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
                  ></path>
                </svg>
                <span class="text-3xl ml-3 text-gray-700 font-bold font-[Inter]"
                  >Twitter/X</span
                >
              </div>
              <button type="button">
                <a
                  href="https://x.com/InzaTechMedia"
                  target="_blank"
                  class="inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                  >@InzaTechMedia</a
                >
              </button>
            </div>
            <p class="mt-2 text-gray-600 text-sm font-[Inter]">
              Sebagai Postingan berbentuk Infografis, Tweet, hingga
              Postingan-postingan dari Inzaghi's Blog.
            </p>
            <br />
            <div class="sk-ww-twitter-feed" data-embed-id="25488132"></div>
            <script
              src="https://widgets.sociablekit.com/twitter-feed/widget.js"
              async
              defer
            ></script>
          </div>
          <div class="mb-6">
            <div class="flex justify-between flex-wrap gap-2 mb-4 w-full">
              <div class="flex items-center">
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
                  ></path>
                  <path
                    d="M17 9.58944C15.9124 5.54334 12.1724 5.79609 12.1724 5.79609C12.1724 5.79609 7 5.45167 7 11.9999C7 18.5481 12.1724 18.2036 12.1724 18.2036C12.1724 18.2036 15.2467 18.4084 16.6552 15.5021C17.1149 14.2208 17 11.6584 12.5172 11.6584C12.5172 11.6584 10.4483 11.6584 10.4483 13.3825C10.4483 14.0559 11.1379 14.7619 12.1724 14.7619C13.2069 14.7619 14.3594 14.0534 14.5862 12.6929C15.2759 8.55496 11.4828 8.21013 10.4483 9.93427"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  ></path>
                </svg>
                <span class="text-3xl ml-3 text-gray-700 font-bold font-[Inter]"
                  >Threads</span
                >
              </div>
              <button type="button">
                <a
                  href="https://www.threads.net/@enzapost"
                  target="_blank"
                  class="inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                  >@enzapost</a
                >
              </button>
            </div>
            <p class="mt-2 text-gray-600 text-sm font-[Inter]">
              Sama seperti di X, Sebagai Postingan berbentuk Infografis,
              Tulisan, hingga Postingan-postingan dari Inzaghi's Blog.
            </p>
            <br />
            <div class="sk-ww-threads-posts" data-embed-id="25488134"></div>
            <script
              src="https://widgets.sociablekit.com/threads-posts/widget.js"
              async
              defer
            ></script>
          </div>
        </div>
      </div>
    </section>
<?php
	include('../components/footsite/footsite.php');
  include('../layouts/footer.php');
?>
