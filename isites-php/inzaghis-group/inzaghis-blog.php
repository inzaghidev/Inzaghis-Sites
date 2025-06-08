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
      <div class="page-container">
        <h1 class="my-4 page-title">Inzaghi's Blog</h1>
        <div class="page-wrapper">
          <div
            class="card bg-white shadow rounded-lg"
            style="background-color: #fff6f0"
          >
            <div class="card text-white bg-secondary">
              <div class="card-body">
                <h2 class="card-title">Description</h2>
                <p class="card-text is-desc">
                  Inzaghi's Blog merupakan Platform Blogging sebagai tempat untuk
                  berbagi Ilmu Pengetahuan, terutama seputar IT. Inzaghi's Blog
                  lebih menggunakan Platform Blogger, agar lebih mudah dan
                  praktis.
                  <br />
                  Untuk melihat Halaman ini di Google Sites, silakan klik di sini
                  :
                </p>
                <a
                  href="https://sites.google.com/view/inzaghis-sites/blog-page"
                  target="_blank"
                  class="btn btn-outline-light description-button"
                  >Click here</a
                >
              </div>
            </div>
            <div class="page-description">
              <div class="text-black row my-4 -mx-1">
                <h2 class="col-7 col-sm-8 col-md-9 col-lg-10">
                  Inzaghi's Blog (Legacy)
                </h2>
                <section class="group-button col-5 col-sm-4 col-md-3 col-lg-2">
                  <a
                    href="https://inzaghiposuma.blogspot.com"
                    target="_blank"
                    class="btn btn-secondary col-12 col-md-10 col-xl-8"
                    >Klik di sini</a
                  >
                  <br />
                </section>
              </div>
              <div class="text-container">
                <p class="is-desc">
                  Merupakan Blog Lama yang sudah tersedia sejak Tahun 2018,
                  tempat untuk memposting apapun itu.
                </p>
              </div>
              <iframe
                src="https://inzaghiposuma.blogspot.com"
                id="inzaghis-blog-embed"
                title="Inzaghi's Blog Legacy"
              ></iframe>
              <div class="text-black row my-4 -mx-1">
                <h2 class="col-7 col-sm-8 col-md-9 col-lg-10">Teknoblog</h2>
                <section class="group-button col-5 col-sm-4 col-md-3 col-lg-2">
                  <a
                    href="https://enzatech.blogspot.com"
                    target="_blank"
                    class="btn btn-secondary col-12 col-md-10 col-xl-8"
                    >Klik di sini</a
                  >
                  <br />
                </section>
              </div>
              <div class="text-container">
                <p class="is-desc">
                  Merupakan Pindahan dari Blog Lama yang bernama Inzaghi's Blog
                  (Legacy), dan Artikel yang dikhususkan tentang Teknologi.
                </p>
              </div>
              <br />
              <iframe
                src="https://enzatech.blogspot.com"
                id="inzaghis-blog-embed"
                title="Teknoblog"
              ></iframe>
              <div class="text-black row my-4 -mx-1">
                <h2 class="col-7 col-sm-8 col-md-9 col-lg-10">Miniblog</h2>
                <section class="group-button col-5 col-sm-4 col-md-3 col-lg-2">
                  <a
                    href="https://enzashorts.blogspot.com"
                    target="_blank"
                    class="btn btn-secondary col-12 col-md-10 col-xl-8"
                    >Klik di sini</a
                  >
                  <br />
                </section>
              </div>
              <div class="text-container">
                <p class="is-desc">
                  Merupakan Blog khusus Microblogging, terutama untuk menyimpan
                  Postingan Sederhana seperti Kode Program Sederhana, hingga
                  Teks dan Tutorial Singkat.
                </p>
              </div>
              <br />
              <iframe
                src="https://enzashorts.blogspot.com"
                id="inzaghis-blog-embed"
                title="Miniblog"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
	include('../components/footsite/footsite.php');
  include('../layouts/footer.php');
?>

<!-- https://www.w3schools.com/php/func_directory_dir.asp -->