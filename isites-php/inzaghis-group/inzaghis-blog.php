<?php
	//$page_title = "Inzaghi's Blog";
  //include_once __DIR__ . '/../includes/config.php';

  //include __DIR__ . '/../components/navbar/navbar.php';
  //include __DIR__ . '/../layouts/header.php';

	$page_title = "Inzaghi's Blog";

  include_once __DIR__ . '/../includes/config.php';
  include('../layouts/header.php');
  include('../components/navbar/navbar.php');
?>
    <div class="container-top"></div>
    <section class="inzaghis-group-pages inzaghisblog-slider">
      <div class="page-wrapper inzagroup-pages">
        <h1 class="my-4 page-title">Inzaghi's Blog</h1>
        <div
          class="bg-white shadow-xl rounded-lg p-6 ring-1 ring-yellow-500 p-6"
        >
          <div class="card-apps">
            <h2 class="text-4xl font-bold mb-4 font-[Inter]">Description</h2>
            <p class="text-black text-sm font-[Inter]">
              Inzaghi's Blog merupakan Platform Blogging sebagai tempat untuk
              berbagi Ilmu Pengetahuan, terutama seputar IT. Inzaghi's Blog lebih
              menggunakan Platform Blogger, agar lebih mudah dan praktis. Untuk
              melihat Halaman ini di Google Sites, silakan klik di sini :
            </p>
            <br />
            <section class="group-button">
              <a
                href="https://sites.google.com/view/inzaghis-sites/blog-page"
                target="_blank"
                class="btn btn-outline-light description-button"
                >Click here</a
              >
            </section>
            <hr class="my-6 border-t border-gray-500" />
          </div>
          <br />
          <div class="mb-6">
            <div class="flex justify-between flex-wrap gap-2 mb-4 w-full">
              <span class="text-3xl text-gray-700 font-bold font-[Inter]"
                >Inzaghi's Blog (Legacy)</span
              >
              <button type="button">
                <a
                  href="https://inzaghiposuma.blogspot.com"
                  target="_blank"
                  class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                  >Klik di sini</a
                >
              </button>
            </div>
            <p class="mt-2 text-gray-600 text-sm font-[Inter]">
              Merupakan Blog Lama yang sudah tersedia sejak Tahun 2018, tempat
              untuk memposting apapun itu.
            </p>
            <br />
            <iframe
              src="https://inzaghiposuma.blogspot.com"
              id="inzaghis-blog-embed"
              title="Inzaghi's Blog Legacy"
            ></iframe>
          </div>
          <div class="mb-6">
            <div class="flex justify-between flex-wrap gap-2 mb-4 w-full">
              <span class="text-3xl text-gray-700 font-bold font-[Inter]">Teknoblog</span>
              <button type="button">
                <a
                  href="https://enzatech.blogspot.com"
                  target="_blank"
                  class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                  >Klik di sini</a
                >
              </button>
            </div>
            <p class="mt-2 text-gray-600 text-sm font-[Inter]">
              Merupakan Pindahan dari Blog Lama yang bernama Inzaghi's Blog
              (Legacy), dan Artikel yang dikhususkan tentang Teknologi.
            </p>
            <br />
            <iframe
              src="https://enzatech.blogspot.com"
              id="inzaghis-blog-embed"
              title="Teknoblog"
            ></iframe>
          </div>
          <div class="mb-6">
            <div class="flex justify-between flex-wrap gap-2 mb-4 w-full">
              <span class="text-3xl text-gray-700 font-bold font-[Inter]">Miniblog</span>
              <button type="button">
                <a
                  href="https://enzashorts.blogspot.com"
                  target="_blank"
                  class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                  >Klik di sini</a
                >
              </button>
            </div>
            <p class="mt-2 text-gray-600 text-sm font-[Inter]">
              Merupakan Blog khusus Microblogging, terutama untuk menyimpan
              Postingan Sederhana seperti Kode Program Sederhana, hingga Teks
              dan Tutorial Singkat.
            </p>
            <br />
            <iframe
              src="https://enzashorts.blogspot.com"
              id="inzaghis-blog-embed"
              title="Miniblog"
            ></iframe>
          </div>
        </div>
      </div>
    </section>
<?php
	include('../components/footsite/footsite.php');
  include('../layouts/footer.php');
?>

<!-- https://www.w3schools.com/php/func_directory_dir.asp -->