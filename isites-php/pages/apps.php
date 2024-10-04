<?php
  $page_title = "Pages Apps";
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
  // Loop melalui setiap aplikasi dan buat elemen HTML-nya
  foreach ($apps as $app) {
    // Menggunakan isset untuk menghindari error jika kunci tidak ada
    $name = isset($app['name']) ? $app['name'] : 'N/A';
    $imgSrc = isset($app['imgSrc']) ? $app['imgSrc'] : '';
    $description = isset($app['description']) ? $app['description'] : (isset($app['text']) ? $app['text'] : '');
    $link = isset($app['link']) ? $app['link'] : '#';
    ?>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="card h-100 border-success shadow">
            <a href="<?php echo $link; ?>"><img class="card-img-top" src="<?php echo $imgSrc; ?>" alt=""></a>
            <div class="card-body card-apps-body">
                <div class="card-apps">
                    <h4 class="card-title text-title card-name page-apps-card"><a><?php echo $name; ?></a></h4>
                    <p class="card-text"><?php echo $description; ?></p>
                </div>
                <button type="button" class="btn btn-primary btn-md apps-button"><a href="<?php echo $link; ?>" class="blog-link">Click here</a></button>
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
  include('../components/footsite/footsite.php');
  include('../layouts/footer.php');
?>

<!-- https://preline.co/examples/icon-sections.html -->
<!-- https://flowbite.com/docs/components/card -->

<!-- Tools : -->
<!-- https://www.utilities-online.info -->
<!-- https://tools.picsart.com -->