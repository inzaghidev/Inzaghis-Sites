<?php
$page_title = "Apps";
include('../layouts/header.php');
include('../components/navbar/navbar.php');

// Memuat data JSON dan mendekode menjadi array
$json_data = file_get_contents('../data/apps-data.json');
$data = json_decode($json_data, true);

// Jika `apps` tidak ada di data JSON, inisialisasi dengan array kosong
$apps = isset($data['apps']) ? $data['apps'] : [];
?>
<div class="container-top"></div>

<section class="pages-background">
  <section class="pages">
    <!-- Judul Halaman -->
    <h1 class="my-4 title-page text-4xl font-bold text-left">
      Portals <small class="text-lg text-gray-500">Beta</small>
    </h1>

    <p class="is-desc text-left text-gray-700">
      Portals merupakan Halaman Portal yang tersedia untuk berbagai kebutuhan apapun seperti Widgets, Tutorial Teknologi, Materi Pembelajaran, dan lainnya.
    </p>

    <br />
    <h4 class="my-4 title-page text-2xl font-bold text-left">COMING SOON FOR THIS PAGE!</h4>

  </section>
</section>

<?php
include('../components/footsite/footsite.php');
include('../layouts/footer.php');
?>
