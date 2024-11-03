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

  <div class="grid grid-cols-4 md:grid-cols-12 gap-6 px-4 justify-center">
    <div class="bg-gray-300 bg-opacity-20 col-span-8 md:col-span-12 lg:col-span-6 shadow rounded-lg p-5 mx-auto">
      <a
        class="flex flex-col object-center bg-white border border-gray-200 rounded-lg shadow md:flex-row hover:bg-gray-100 border-gray-300 bg-gray-200 hover:bg-gray-300"
      >
        <img
          class="object-cover w-full rounded-t-lg h-1/4 md:h-auto md:w-52 lg:w-1/2 xl:w-72 md:rounded-none md:rounded-s-lg"
          src="../images/pages-by-pages-apps.png"
          alt=""
        />
        <div class="flex flex-col justify-between p-4 leading-normal">
          <h5
            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-black"
          >
            Pages
          </h5>
          <p class="mb-3 font-normal text-gray-700 text-gray-600">
            Merupakan kumpulan Halaman sebagai bacaan yang dapat diakses di
            Inzaghi's Sites. Dan juga sebagai kumpulan Materi,
            Proyek-proyek, hingga Tutorial Pemrograman.
            <br />
            <br />
            <button
              type="button"
              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
            >
              Click here
            </button>
          </p>
        </div>
      </a>
    </div>
    <div
      class="bg-gray-300 bg-opacity-20 col-span-8 md:col-span-12 lg:col-span-6 shadow rounded-lg p-5 mx-auto"
    >
      <a
        class="flex flex-col object-center bg-white border border-gray-200 rounded-lg shadow md:flex-row hover:bg-gray-100 border-gray-300 bg-gray-200 hover:bg-gray-300"
      >
        <img
          class="object-cover w-full rounded-t-lg h-1/4 md:h-auto md:w-52 lg:w-1/2 xl:w-72 md:rounded-none md:rounded-s-lg"
          src="../images/widgets-by-pages-apps.png"
          alt=""
        />
        <div class="flex flex-col justify-between p-4 leading-normal">
          <h5
            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-black"
          >
            Widgets
          </h5>
          <p class="mb-3 font-normal text-gray-700 text-gray-600">
            Merupakan kumpulan Widget Serbaguna untuk Anda yang membutuhkan
            Informasi seakurat mungkin. Widget di sini juga termasuk yang
            sedang heboh saat ini.
            <br />
            <br />
            <button
              type="button"
              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
            >
              Click here
            </button>
          </p>
        </div>
      </a>
    </div>
    <!-- -->
  </div>

  <div class="row" id="app-container">
  <?php
  // Loop melalui setiap aplikasi dan buat elemen HTML-nya
  //foreach ($apps as $app) {
  //  // Menggunakan isset untuk menghindari error jika kunci tidak ada
  //  $name = isset($app['name']) ? $app['name'] : 'N/A';
  //  $imgSrc = isset($app['imgSrc']) ? $app['imgSrc'] : '';
  //  $description = isset($app['description']) ? $app['description'] : (isset($app['text']) ? $app['text'] : '');
  //  $link = isset($app['link']) ? $app['link'] : '#';
  //  ?>
      <!--div class="col-lg-3 col-md-4 col-sm-6 mb-4">
  //      <div class="card h-100 border-success shadow">
  //          <a href="<?php echo $link; ?>"><img class="card-img-top" src="<?php echo $imgSrc; ?>" alt=""></a>
  //          <div class="card-body card-apps-body">
  //              <div class="card-apps">
  //                  <h4 class="card-title text-title card-name page-apps-card"><a><?php echo $name; ?></a></h4>
  //                  <p class="card-text"><?php echo $description; ?></p>
  //              </div>
  //              <button type="button" class="btn btn-primary btn-md apps-button"><a href="<?php echo $link; ?>" class="blog-link">Click here</a></button>
  //          </div>
  //      </div>
  //  </div-->
      <?php
  //}
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
