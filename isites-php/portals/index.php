<?php
  $page_title = "Portals";
  include('../layouts/header.php');
  include('../components/navbar/navbar.php');
  $data = json_decode(file_get_contents('../data/apps-data.json'), true);

  if (isset($data['apps'])) {
      $apps = $data['apps'];
  } else {
      $apps = []; // Atau tangani kesalahan dengan lebih baik sesuai kebutuhan Anda
  }
?>
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
                "link" => "#"
            ],
            [
                "name" => "Technology Tutorials",
                "imgSrc" => "../assets/images/tech-tutorials-by-portals.png",
                "description" => "Merupakan kumpulan dari berbagai macam Teknologi apapun dalam bidang IT, dan sebagai Pembelajaran untuk berbagai macam Teknologi IT apapun seperti Pemrograman, Aplikasi, Ilmu Komputer, Analisis Data, dan lainnya.",
                "link" => "#"
            ],
            [
                "name" => "IT Project Lists",
                "imgSrc" => "../assets/images/it-project-lists-by-portals.png",
                "description" => "Merupakan kumpulan dari berbagai macam Proyek apapun dalam bidang IT seperti Pemrograman, Aplikasi, UI/UX, Analisis Data, AI/ML, IoT, dan lainnya.",
                "link" => "#"
            ],
            [
                "name" => "Interviews & Thesis Prep",
                "imgSrc" => "../assets/images/intervs-and-thesis-by-portals.png",
                "description" => "Merupakan kumpulan dari pertanyaan-pertanyaan Wawancara seperti Wawancara Kerja, Magang, User Interview, Wawancara Teknis (Technical Interview), dan lain-lain. Portal ini juga menyediakan berbagai macam Pertanyaan untuk persiapan Tugas Akhir seperti Skripsi, Tesis, dan Disertasi.",
                "link" => "#"
            ],
            [
                "name" => "Materi Pembelajaran",
                "imgSrc" => "../assets/images/learning-materials-by-portals.png",
                "description" => "Merupakan bagian untuk kumpulan Materi Pembelajaran, khususnya untuk Materi Pelajaran Sekolah (Untuk SMA) dan Materi Perkuliahan (Teknik Informatika). Untuk Materi SMA, kebanyakan hanya lebih spesifik ke Jurusan IPA saja. Dan untuk Materi Perkuliahan, hanya hanya tersedia untuk Jurusan Teknik Informatika (TI) saja, dan hanya beberapa Mata Kuliah saja yang juga tersedia untuk Jurusan Sistem Informasi (SI). Untuk Jurusan/Prodi lainnya, hanya tersedia untuk Mata Kuliah Umum (MKDU) saja.",
                "link" => "#"
            ],
            [
                "name" => "Video Pages",
                "imgSrc" => "../assets/images/video-pages-by-portals.png",
                "description" => "Merupakan kumpulan dari Video-video YouTube seperti Live Streaming Video, Daftar Channel Terjemahan Multibahasa, dan Daftar Channel YouTube per Kategori.",
                "link" => "#"
            ],
            [
                "name" => "Link Pages",
                "imgSrc" => "../assets/images/link-pages-by-portals.png",
                "description" => "Merupakan kumpulan dari Tautan/Link yang berasal dari Situs Berita, Link Google, YouTube, GitHub, dan lainnya.",
                "link" => "#"
            ],
            [
                "name" => "Miscellaneous",
                "imgSrc" => "../assets/images/miscellaneous-by-portals.png",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius adipisci dicta dignissimos neque animi ea, veritatis, provident hic consequatur ut esse! Commodi ea consequatur accusantium, beatae qui deserunt tenetur ipsa.",
                "link" => "#"
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
                        <!-- Gambar -->
                        <a href="<?php echo $app['link']; ?>" class="card-img-portals-wrapper">
                            <img
                                class="card-img-portals d-block w-100 h-100"
                                src="<?php echo $app['imgSrc']; ?>"
                                alt="<?php echo $app['name']; ?>"
                            />
                        </a>
                        <!-- Isi Konten -->
                        <div class="card-body card-portals-body">
                            <div class="card-text-container card-body">
                                <!-- Judul -->
                                <h4 class="card-title page-apps-card card-portals-name">
                                    <?php echo $app['name']; ?>
                                </h4>
                                <!-- Deskripsi -->
                                <p class="card-apps-text">
                                    <?php echo $app['description']; ?>
                                </p>
                                <br />
                                <!-- Tombol -->
                                <button class="btn btn-primary btn-md">
                                    <a class="blog-link" href="<?php echo $app['link']; ?>">Click here</a>
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
  </section>
</section>
<?php
  include('../components/footsite/footsite.php');
  include('../layouts/footer.php');
?>