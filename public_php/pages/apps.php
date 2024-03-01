<?php
	$page_title = "Pages Apps";
	include('../layouts/header.php');
?>
  <div class="container-top"></div>
  <section class="pages">
    <!-- Page Heading -->
    <h1 class="my-4 title-page">
      Pages Apps
      <small>Beta</small>
    </h1>

    <p class="is-desc">
        Pages Apps merupakan Halaman Aplikasi yang tersedia untuk berbagai
        kebutuhan. Pages Apps menyediakan berbagai Portal seperti Halaman,
        Widget, Konverter, Kalkulator, dan lainnya.
    </p>

    <div class="row" id="app-container">
    <?php
    // Data aplikasi yang akan ditampilkan
    $apps = [
        [
            "name" => "Pages",
            "imgSrc" => "../images/pages-by-pages-apps.png",
            "description" => "Merupakan kumpulan Halaman sebagai bacaan yang dapat diakses di Inzaghi's Sites. Dan juga sebagai kumpulan Materi dan Tutorial Pemrograman.",
            "link" => "../page-apps/pages.php"
        ],
        [
            "name" => "Widgets",
            "imgSrc" => "../images/widgets-by-pages-apps.png",
            "description" => "Merupakan kumpulan Widget Serbaguna untuk Anda yang membutuhkan Informasi seakurat mungkin. Widget di sini juga termasuk yang sedang heboh saat ini.",
            "link" => "../page-apps/widgets.php"
        ],
        [
            "name" => "Converters",
            "imgSrc" => "../images/converters-by-pages-apps.png",
            "description" => "Merupakan portal untuk Aplikasi Konverter seperti Konversi Suhu, Massa (Berat), Panjang, Sistem Bilangan, dan lain-lain. Sebagian dari Aplikasi Konverter ini akan sedikit menggunakan API.",
            "link" => "../page-apps/converter.php"
        ],
        [
            "name" => "Calculators",
            "imgSrc" => "../images/calculators-by-pages-apps.png",
            "description" => "Merupakan kumpulan dari beberapa jenis Kalkulator seperti Kalkulator Sederhana, Ilmiah, Matematika, Kesehatan, Keuangan, hinga Kalkulator untuk Keseharian.",
            "link" => "../page-apps/calculators.php"
        ],
        [
            "name" => "Generators",
            "imgSrc" => "../images/generators-by-pages-apps.png",
            "description" => "Merupakan Aplikasi untuk membuat dan mengenerasi sesuatu seperti Text Generator hingga Image Generator, dan dapat dibuat secara acak.",
            "link" => "../page-apps/generators.php"
        ],
        [
            "name" => "File Converter",
            "imgSrc" => "../images/file-converters-by-pages-apps.png",
            "description" => "Merupakan portal untuk melakukan konversi format File apapun seperti JPG, PNG, DOCX, PDF, PPT, hingga TXT.",
            "link" => "../page-apps/file-converter.php"
        ],
        [
            "name" => "Coming Soon",
            "imgSrc" => "https://via.placeholder.com/700x400",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.",
            "link" => ""
        ],
        [
            "name" => "Coming Soon",
            "imgSrc" => "https://via.placeholder.com/700x400",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius adipisci dicta dignissimos neque animi ea, veritatis, provident hic consequatur ut esse! Commodi ea consequatur accusantium, beatae qui deserunt tenetur ipsa.",
            "link" => ""
        ],
        // Tambahkan data aplikasi lainnya di sini...
    ];

    // Loop melalui setiap aplikasi dan buat elemen HTML-nya
    foreach ($apps as $app) {
        ?>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card h-100 border-success shadow">
                <a href="<?php echo $app['link']; ?>"><img class="card-img-top" src="<?php echo $app['imgSrc']; ?>" alt=""></a>
                <div class="card-body card-apps-body">
                    <div class="card-apps">
                        <h4 class="card-title text-title card-name page-apps-card"><a><?php echo $app['name']; ?></a></h4>
                        <p class="card-text"><?php echo $app['description']; ?></p>
                    </div>
                    <button type="button" class="btn btn-primary btn-md apps-button"><a href="<?php echo $app['link']; ?>" class="blog-link">Click here</a></button>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>

    <!-- /.row -->

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
  </section>
<?php
	include('../layouts/footer.php');
?>