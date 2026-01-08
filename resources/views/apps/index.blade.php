{{-- UNDER CONSTRUCTION! --}}

@extends('layouts.header')

@section('container')
<div class="container-top"></div>
<section class="pages-background">
  <section class="pages">
    <!-- Page Heading -->
    <h1 class="my-4 title-page">
      Pages Apps
      <small>Beta</small>
    </h1>
    
    <p class="is-desc">
      Pages Apps merupakan Halaman Aplikasi yang tersedia untuk berbagai
      kebutuhan. Pages Apps menyediakan berbagai Portal seperti Konverter,
      Kalkulator, Generator, Formatter, dan lainnya.
    </p>

    <div class="row" id="app-container">
    <?php
    // Data aplikasi yang akan ditampilkan
    $apps = [
      [
        "name" => "Converters",
        "imgSrc" => "../assets/images/converters-by-pages-apps.png",
        "description" => "Merupakan portal untuk Aplikasi Konverter seperti Konversi Suhu, Massa (Berat), Panjang, Sistem Bilangan, dan lain-lain. Sebagian dari Aplikasi Konverter ini akan sedikit menggunakan API.",
        "link" => "../page-apps/converter.php"
      ],
      [
        "name" => "Calculators",
        "imgSrc" => "../assets/images/calculators-by-pages-apps.png",
        "description" => "Merupakan kumpulan dari beberapa jenis Kalkulator seperti Kalkulator Sederhana, Ilmiah, Matematika, Kesehatan, Keuangan, hinga Kalkulator untuk Keseharian.",
        "link" => "../page-apps/calculators.php"
      ],
      [
        "name" => "Generators",
        "imgSrc" => "../assets/images/generators-by-pages-apps.png",
        "description" => "Merupakan Aplikasi untuk membuat dan mengenerasi sesuatu seperti Text Generator hingga Image Generator, dan dapat dibuat secara acak.",
        "link" => "../page-apps/generators.php"
      ],
      [
        "name" => "Formatters",
        "imgSrc" => "../assets/images/formatters-by-pages-apps.png",
        "description" => "Merupakan Aplikasi untuk melakukan Formatting seperti XML, JSON, dll, hingga melakukan Pemformatan apapun.",
        "link" => "../page-apps/formatters.php"
      ],
      [
        "name" => "File Converter",
        "imgSrc" => "../assets/images/file-converters-by-pages-apps.png",
        "description" => "Merupakan portal untuk melakukan konversi format File apapun seperti JPG, PNG, DOCX, PDF, PPT, hingga TXT.",
        "link" => "../page-apps/file-converter.php"
      ],
      [
        "name" => "Utilities",
        "imgSrc" => "../assets/images/utilities-by-pages-apps.png",
        "description" => "Merupakan portal untuk berbagai kumpulan Aplikasi untuk Utilitas atau kebutuhan sehari-hari seperti Pencarian IP Address, SSL Checker, Website Status Checker, Find and Replace, dan lainnya.",
        "link" => "../page-apps/utilities.php"
      ],
      [
        "name" => "Tester Tools",
        "imgSrc" => "../assets/images/tester-tools-by-pages-apps.png",
        "description" => "Merupakan Aplikasi untuk Alat Uji Coba dan Simulator Online seperti Keyboard Tester, Mouse Tester, Sound Tester, dan lainnya.",
        "link" => "../page-apps/tester-tools.php"
      ],
      [
        "name" => "Coming Soon",
        "imgSrc" => "https://via.placeholder.com/700x400",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius adipisci dicta dignissimos neque animi ea, veritatis, provident hic consequatur ut esse! Commodi ea consequatur accusantium, beatae qui deserunt tenetur ipsa.",
        "link" => ""
      ]
      // Tambahkan data aplikasi lainnya di sini...
    ];
         
    // Loop melalui setiap aplikasi dan buat elemen HTML-nya
    foreach ($apps as $app) {
      ?>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="card card-description h-100 border-success shadow">
              <a href="<?php echo $app['link']; ?>"><img class="card-img-top card-img-apps" src="<?php echo $app['imgSrc']; ?>" alt=""></a>
              <div class="card-body card-description-body">
                  <div class="card-description">
                      <h4 class="card-name card-title page-apps-card"><a><?php echo $app['name']; ?></a></h4>
                      <p class="card-apps-text card-text"><?php echo $app['description']; ?></p>
                  </div>
                  <button type="button" class="btn btn-primary btn-md apps-button"><a href="<?php echo $app['link']; ?>" class="button-link">Click here</a></button>
              </div>
          </div>
      </div>
      <?php
    }
    ?>
    </div>
  </section>
</section>

@endsection