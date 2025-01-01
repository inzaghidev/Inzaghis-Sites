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

    <br />
    <h4><b>COMING SOON FOR THIS PAGE!</b></h4>

  </section>
</section>
<?php
  include('../components/footsite/footsite.php');
  include('../layouts/footer.php');
?>
