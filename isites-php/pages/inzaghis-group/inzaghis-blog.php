<?php
	//$page_title = "Inzaghi's Blog";
  //include_once __DIR__ . '/../includes/config.php';

  //include __DIR__ . '/../components/navbar/navbar.php';
  //include __DIR__ . '/../layouts/header.php';

	$page_title = "Inzaghi's Blog";

  include_once __DIR__ . '/../../includes/config.php';
  include('../../layouts/header.php');
  include('../../components/navbar/navbar.php');
?>
    <div class="container-top"></div>
    <section class="inzaghis-group-pages inzaghisblog-slider">
      <div class="page-container">
        <h1 class="my-4 page-title">Inzaghi's Blog</h1>
        <div class="page-wrapper">
          <div class="card text-white bg-secondary">
            <div class="card-body">
              <h3 class="card-title">Description</h3>
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
                class="btn btn-outline-light main-button"
                >Click here</a
              >
            </div>
          </div>
          <div
            class="card page-wrapper border-dark network-card"
            style="background-color: #fff6f0"
          >
            <div class="page-description">
              <h2 class="my-4">Inzaghi's Blog (Legacy)</h2>
              <div class="text-container">
                <p class="is-desc">
                  Merupakan Blog Lama yang sudah tersedia sejak Tahun 2018,
                  tempat untuk memposting apapun itu.
                </p>
                <section class="group-button">
                  <a
                    href="https://inzaghiposuma.blogspot.com"
                    target="_blank"
                    class="btn btn-secondary"
                    >Klik di sini</a
                  >
                  <br />
                </section>
              </div>
              <iframe
                src="https://inzaghiposuma.blogspot.com"
                id="inzaghis-blog-embed"
                title="Inzaghi's Blog Legacy"
              ></iframe>
              <h2 class="my-4">Teknoblog</h2>
              <div class="text-container">
                <p class="is-desc">
                  Merupakan Pindahan dari Blog Lama yang bernama Inzaghi's Blog
                  (Legacy), dan Artikel yang dikhususkan tentang Teknologi.
                </p>
                <section class="group-button">
                  <a
                    href="https://enzatech.blogspot.com"
                    target="_blank"
                    class="btn btn-secondary"
                    >Klik di sini</a
                  >
                </section>
              </div>
              <br />
              <iframe
                src="https://enzatech.blogspot.com"
                id="inzaghis-blog-embed"
                title="Teknoblog"
              ></iframe>
              <h2 class="my-4">Miniblog</h2>
              <div class="text-container">
                <p class="is-desc">
                  Merupakan Blog khusus Microblogging, terutama untuk menyimpan
                  Postingan Sederhana seperti Kode Program Sederhana, hingga
                  Teks dan Tutorial Singkat.
                </p>
                <section class="group-button">
                  <a
                    href="https://enzashorts.blogspot.com"
                    target="_blank"
                    class="btn btn-secondary"
                    >Klik di sini</a
                  >
                </section>
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
	include('../../components/footsite/footsite.php');
  include('../../layouts/footer.php');
?>

<!-- https://www.w3schools.com/php/func_directory_dir.asp -->