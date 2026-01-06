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
      <!-- Konten akan ditambahkan di sini oleh jQuery -->
    </div>
    
    <script>
      $(document).ready(function () {
        // Data aplikasi yang akan ditampilkan
        const apps = [
          // {
          //   name: "Pages",
          //   imgSrc: "../assets/images/pages-by-pages-apps.png",
          //   description:
          //     "Merupakan kumpulan Halaman sebagai bacaan yang dapat diakses di Inzaghi's Sites. Dan juga sebagai kumpulan Materi dan Tutorial Pemrograman.",
          //   link: "../apps/pages.html",
          // },
          // {
          //   name: "Widgets",
          //   imgSrc: "../assets/images/widgets-by-pages-apps.png",
          //   description:
          //     "Merupakan kumpulan Widget Serbaguna untuk Anda yang membutuhkan Informasi seakurat mungkin. Widget di sini juga termasuk yang sedang heboh saat ini.",
          //   link: "../apps/widgets.html",
          // },
          {
            name: "Converters",
            imgSrc: "../assets/images/converters-by-pages-apps.png",
            description:
              "Merupakan portal untuk Aplikasi Konverter seperti Konversi Suhu, Massa (Berat), Panjang, Sistem Bilangan, dan lain-lain. Sebagian dari Aplikasi Konverter ini akan sedikit menggunakan API.",
            link: "../apps/converter.html",
          },
          {
            name: "Calculators",
            imgSrc: "../assets/images/calculators-by-pages-apps.png",
            description:
              "Merupakan kumpulan dari beberapa jenis Kalkulator seperti Kalkulator Sederhana, Ilmiah, Matematika, Kesehatan, Keuangan, hingga Kalkulator untuk Keseharian.",
            link: "../apps/calculators.html",
          },
          {
            name: "Generators",
            imgSrc: "../assets/images/generators-by-pages-apps.png",
            description:
              "Merupakan Aplikasi untuk membuat dan mengenerasi sesuatu seperti Text Generator hingga Image Generator, dan dapat dibuat secara acak.",
            link: "../apps/generators.html",
          },
          {
            name: "Formatters",
            imgSrc: "../assets/images/formatters-by-pages-apps.png",
            description:
              "Merupakan Aplikasi untuk melakukan Formatting seperti XML, JSON, dll, hingga melakukan Pemformatan apapun.",
            link: "../apps/formatters.html",
          },
          {
            name: "File Converter",
            imgSrc: "../assets/images/file-converters-by-pages-apps.png",
            description:
              "Merupakan portal untuk melakukan konversi format File apapun seperti JPG, PNG, DOCX, PDF, PPT, hingga TXT.",
            link: "../apps/file-converter.html",
          },
          {
            name: "Utilities",
            imgSrc: "../assets/images/utilities-by-pages-apps.png",
            description:
              "Merupakan portal untuk berbagai kumpulan Aplikasi untuk Utilitas atau kebutuhan sehari-hari seperti Pencarian IP Address, SSL Checker, Website Status Checker, Find and Replace, dan lainnya.",
            link: "../apps/utilities.html",
          },
          {
            name: "Tester Tools",
            imgSrc: "../assets/images/tester-tools-by-pages-apps.png",
            description:
              "Merupakan Aplikasi untuk Alat Uji Coba dan Simulator Online seperti Keyboard Tester, Mouse Tester, Sound Tester, dan lainnya.",
            link: "../apps/tester-tools.html",
          },
          {
            name: "Coming Soon",
            imgSrc: "https://via.placeholder.com/700x400",
            description:
              "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius adipisci dicta dignissimos neque animi ea, veritatis, provident hic consequatur ut esse! Commodi ea consequatur accusantium, beatae qui deserunt tenetur ipsa.",
            link: "",
          },
        ];
    
        // Ambil elemen kontainer
        const appContainer = $("#app-container");
    
        // Loop melalui setiap aplikasi dan buat elemen HTML-nya
        $.each(apps, function (index, app) {
          // Buat elemen kolom
          const column = $("<div></div>").addClass(
            "col-lg-3 col-md-4 col-sm-6 mb-4"
          );
    
          // Buat elemen card
          const card = $("<div></div>").addClass(
            "card card-apps h-100 border-success shadow"
          );
    
          // Buat elemen link
          const link = $("<a></a>").attr("href", app.link);
    
          // Buat elemen gambar
          const img = $("<img>")
            .addClass("card-img-top card-img-apps")
            .attr({ src: app.imgSrc, alt: "" });
    
          // Masukkan elemen link dan gambar ke dalam struktur yang benar
          link.append(img);
          card.append(link);
    
          // Buat elemen body card
          const cardBody = $("<div></div>").addClass(
            "card-body card-apps-body"
          );
    
          // Buat elemen card-apps
          const cardApps = $("<div></div>").addClass("card-description");
    
          // Buat elemen judul card
          const title = $("<h4></h4>").addClass(
            "card-name card-title page-apps-card"
          );
          const titleLink = $("<a></a>").text(app.name);
          title.append(titleLink);
    
          // Buat elemen deskripsi card
          const description = $("<p></p>")
            .addClass("card-apps-text card-text")
            .text(app.description);
    
          // Buat elemen tombol
          const button = $("<button></button>").addClass(
            "btn btn-primary btn-md apps-button"
          );
          const buttonLink = $("<a></a>")
            .addClass("button-link")
            .attr("href", app.link)
            .text("Click here");
          button.append(buttonLink);
    
          // Masukkan elemen ke dalam struktur yang benar
          cardApps.append(title, description);
          cardBody.append(cardApps, button);
          card.append(cardBody);
          column.append(card);
          appContainer.append(column);
        });
      });
    </script>
  </section>
</section>

@endsection