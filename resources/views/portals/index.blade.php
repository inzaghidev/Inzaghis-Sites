{{-- UNDER CONSTRUCTION! --}}

@extends('layouts.header')

@section('container')
<div class="container-top"></div>
<section class="pages-background">
  <section class="pages">
    <!-- Page Heading -->
    <h1 class="my-4 title-page">
      Portals
      <small>Beta</small>
    </h1>
    
    <p class="is-desc">
      Portals merupakan Halaman Portal yang tersedia untuk berbagai
      kebutuhan apapun seperti Widgets, Tutorial Teknologi, Materi
      Pembelajaran, dan lainnya.
    </p>

    <!-- Kontainer Aplikasi -->
    <div id="app-container">
      <?php
      // Data aplikasi yang akan ditampilkan
      $apps = [
        [
          "name" => "Widgets",
          "imgSrc" => "../assets/images/widgets-by-portals.png",
          "description" => "Merupakan kumpulan Widget Serbaguna untuk Anda yang membutuhkan Informasi seakurat mungkin. Widget di sini juga termasuk yang sedang heboh saat ini.",
          "link" => "../portals/widgets.php"
        ],
        [
          "name" => "Technology Tutorials",
          "imgSrc" => "../assets/images/tech-tutorials-by-portals.png",
          "description" => "Merupakan kumpulan dari berbagai macam Teknologi apapun dalam bidang IT, dan sebagai Pembelajaran untuk berbagai macam Teknologi IT apapun seperti Pemrograman, Aplikasi, Ilmu Komputer, Analisis Data, dan lainnya.",
          "link" => "../portals/tech-tutorials.php"
        ],
        [
          "name" => "IT Project Lists",
          "imgSrc" => "../assets/images/it-project-lists-by-portals.png",
          "description" => "Merupakan kumpulan dari berbagai macam Proyek apapun dalam bidang IT seperti Pemrograman, Aplikasi, UI/UX, Analisis Data, AI/ML, IoT, dan lainnya.",
          "link" => "../portals/projects.php"
        ],
        [
          "name" => "Career Portal",
          "imgSrc" => "../assets/images/career-portal-by-portals.png",
          "description" => "Merupakan kumpulan dari pertanyaan-pertanyaan Wawancara seperti Wawancara Kerja, Magang, User Interview, Wawancara Teknis (Technical Interview), dan lain-lain. Portal ini juga menyediakan berbagai macam Pertanyaan untuk persiapan Tugas Akhir seperti Skripsi, Tesis, dan Disertasi.",
          "link" => "../portals/career-portal.php"
        ],
        [
          "name" => "Learning Materials",
          "imgSrc" => "../assets/images/learning-materials-by-portals.png",
          "description" => "Merupakan bagian untuk kumpulan Materi Pembelajaran, khususnya untuk Materi Pelajaran Sekolah (Untuk SMA) dan Materi Perkuliahan (Teknik InformatiKa dan Umum/MKDU). Pada Portal ini juga menyediakan berbagai macam Kumpulan Materi dan Pertanyaan untuk persiapan Tugas Akhir seperti Skripsi, Tesis, dan Disertasi.",
          "link" => "../portals/learning-materials.php"
        ],
        [
          "name" => "Entertainment Portal",
          "imgSrc" => "../assets/images/entertainment-portal-by-portals.png",
          "description" => "Merupakan Portal untuk Pusat Hiburan seperti Kumpulan Video dan Live Streaming di YouTube, Kumpulan Akun-akun Media Sosial, hingga Kumpulan Playlist Lagu seperti Spotify.",
          "link" => "../portals/entertainment-portal.php"
        ],
        [
          "name" => "Link Pages",
          "imgSrc" => "../assets/images/link-pages-by-portals.png",
          "description" => "Merupakan kumpulan dari Tautan/Link yang berasal dari Situs Berita, Link Google, YouTube, GitHub, dan lainnya.",
          "link" => "../portals/link-pages.php"
        ],
        [
          "name" => "Muslims Portal",
          "imgSrc" => "../assets/images/muslim-portal-by-portals.png",
          "description" => "Merupakan Portal untuk Kumpulan Pusat Keagamaan dan Peribadatan Islam, seperti Jadwal Shalat & Puasa, Kalender Hijriah, Kompas Arah Kiblat, hingga Al-Qur'an Digital.",
          "link" => "../portals/muslim-portal.php"
        ],
        [
          "name" => "Miscellaneous",
          "imgSrc" => "../assets/images/miscellaneous-by-portals.png",
          "description" => "Merupakan Halaman lainnya yang tidak termasuk dari Kategori di Portal ini, dan juga tersedia untuk Halaman apa saja.",
          "link" => "../portals/miscellaneous.php"
        ],
        [
          "name" => "Lorem Ipsum",
          "imgSrc" => "https://via.placeholder.com/700x400",
          "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius adipisci dicta dignissimos neque animi ea, veritatis, provident hic consequatur ut esse! Commodi ea consequatur accusantium, beatae qui deserunt tenetur ipsa.",
          "link" => "#"
        ],
        // Tambahkan data aplikasi lainnya di sini...
      ];
      
      // Loop melalui setiap aplikasi dan buat elemen HTML-nya
      foreach ($apps as $app) {
          ?>
          <div class="mb-4">
              <div class="card-portals card h-100 border-success shadow">
                  <div class="card-portals-wrapper row">
                      <a href="<?php echo $app['link']; ?>" class="card-img-portals-wrapper">
                          <img
                              class="card-img-portals d-block w-100 h-100"
                              src="<?php echo $app['imgSrc']; ?>"
                              alt="<?php echo $app['name']; ?>"
                          />
                      </a>
                      <div class="card-body card-portals-body">
                          <div class="card-text-container card-body">
                              <h4 class="card-title page-apps-card card-portals-name">
                                  <?php echo $app['name']; ?>
                              </h4>
                              <p class="card-apps-text">
                                  <?php echo $app['description']; ?>
                              </p>
                              <br />
                              <button class="btn btn-primary btn-md">
                                  <a class="button-link" href="<?php echo $app['link']; ?>">Click here</a>
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <?php
      }
      ?>
    </div>
    
    <!--div id="app-container">
      <div class="mb-4">
        <div class="card-portals card h-100 border-success shadow">
          <div class="card-portals-wrapper row">
            <a href="#" class="card-img-portals-wrapper">
              <img
                class="card-img-portals d-block w-100 h-100"
                src="../assets/images/widgets-by-portals.png"
                alt=""
            /></a>
            <div class="card-body card-portals-body">
              <div class="card-text-container card-body">
                <h4 class="card-title page-apps-card card-portals-name">
                  Widgets
                </h4>
                <p class="card-apps-text">
                  Merupakan kumpulan Widget Serbaguna untuk Anda yang
                  membutuhkan Informasi seakurat mungkin. Widget di sini
                  juga termasuk yang sedang heboh saat ini.
                </p>
                <br />
                <button class="btn btn-primary btn-md">
                  <a class="button-link" href="#">Click here</a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mb-4">
        <div class="card-portals card h-100 border-success shadow">
          <div class="card-portals-wrapper row">
            <a href="#" class="card-img-portals-wrapper">
              <img
                class="card-img-portals d-block w-100 h-100"
                src="../assets/images/tech-tutorials-by-portals.png"
                alt=""
            /></a>
            <div class="card-body card-portals-body">
              <div class="card-text-container card-body">
                <h4 class="card-title page-apps-card card-portals-name">
                  Technology Tutorials
                </h4>
                <p class="card-apps-text">
                  Merupakan kumpulan dari berbagai macam Teknologi apapun
                  dalam bidang IT, dan sebagai Pembelajaran untuk berbagai
                  macam Teknologi IT apapun seperti Pemrograman, Aplikasi,
                  Ilmu Komputer, Analisis Data, dan lainnya.
                </p>
                <br />
                <button class="btn btn-primary btn-md">
                  <a class="button-link" href="#">Click here</a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mb-4">
        <div class="card-portals card h-100 border-success shadow">
          <div class="card-portals-wrapper row">
            <a href="#" class="card-img-portals-wrapper">
              <img
                class="card-img-portals d-block w-100 h-100"
                src="../assets/images/it-project-lists-by-portals.png"
                alt=""
            /></a>
            <div class="card-body card-portals-body">
              <div class="card-text-container card-body">
                <h4 class="card-title page-apps-card card-portals-name">
                  IT Project Lists
                </h4>
                <p class="card-apps-text">
                  Merupakan kumpulan dari berbagai macam Proyek apapun dalam
                  bidang IT seperti Pemrograman, Aplikasi, UI/UX, Analisis
                  Data, AI/ML, IoT, dan lainnya.
                </p>
                <br />
                <button class="btn btn-primary btn-md">
                  <a class="button-link" href="#">Click here</a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mb-4">
        <div class="card-portals card h-100 border-success shadow">
          <div class="card-portals-wrapper row">
            <a href="#" class="card-img-portals-wrapper">
              <img
                class="card-img-portals d-block w-100 h-100"
                src="../assets/images/career-portal-by-portals.png"
                alt=""
            /></a>
            <div class="card-body card-portals-body">
              <div class="card-text-container card-body">
                <h4 class="card-title page-apps-card card-portals-name">
                  Career Portal
                </h4>
                <p class="card-apps-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Eius adipisci dicta dignissimos neque animi ea, veritatis,
                  provident hic consequatur ut esse! Commodi ea consequatur
                  accusantium, beatae qui deserunt tenetur ipsa.
                </p>
                <br />
                <button class="btn btn-primary btn-md">
                  <a class="button-link" href="#">Click here</a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div-->
  </section>
</section>

@endsection