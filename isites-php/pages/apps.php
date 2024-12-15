<?php
  $page_title = "Apps";
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
    <h1 class="my-4 title-page text-4xl font-bold text-left">
      Pages Apps <small class="text-lg text-gray-500">Beta</small>
    </h1>

    <p class="is-desc text-left text-gray-700">
      Pages Apps merupakan Halaman Aplikasi yang tersedia untuk berbagai kebutuhan. Pages Apps menyediakan berbagai Portal seperti Halaman, Widget, Konverter, Kalkulator, dan lainnya.
    </p>

    <div class="grid grid-cols-4 md:grid-cols-12 gap-6 lg:px-16 xl:px-0 justify-center">
      <div
        class="bg-gray-300 bg-opacity-20 col-span-8 sm:col-span-12 md:col-span-12 lg:col-span-6 shadow rounded-lg p-4 mx-auto ring-1 ring-gray-200"
      >
        <div
          class="flex flex-col bg-white border border-gray-200 rounded-lg shadow sm:flex-row lg:flex-col xl:flex-row hover:bg-gray-100 border-gray-300 hover:bg-gray-300 sm:h-full"
        >
          <img
            class="w-full rounded-t-lg h-1/4 sm:h-auto sm:w-52 lg:w-full xl:w-72 sm:rounded-l-lg sm:rounded-r-none md:rounded-s-lg lg:rounded-t-lg lg:rounded-b-none xl:rounded-r-none xl:rounded-l-lg"
            src="../images/pages-by-pages-apps.png"
            alt=""
          />
          <div class="flex flex-col justify-between p-4 leading-normal flex-grow">
            <h5
              class="mb-3 text-3xl font-bold text-center md:text-left lg:text-center xl:text-left tracking-tight text-gray-900 text-green-700"
            >
              Pages
            </h5>
            <p class="mb-3 font-normal text-gray-700 text-gray-600">
              Merupakan kumpulan Halaman sebagai bacaan yang dapat diakses di
              Inzaghi's Sites. Dan juga sebagai kumpulan Materi,
              Proyek-proyek, hingga Tutorial Pemrograman.
            </p>
            <div
              class="mt-4 flex justify-center md:justify-start lg:justify-center xl:justify-start"
            >
              <a
                href="../page-apps/pages.php"
                class="text-white hover:text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
              >
                Click here
              </a>
            </div>
          </div>
        </div>
      </div>
      <div
        class="bg-gray-300 bg-opacity-20 col-span-8 sm:col-span-12 md:col-span-12 lg:col-span-6 shadow rounded-lg p-4 mx-auto ring-1 ring-gray-200"
      >
        <div
          class="flex flex-col bg-white border border-gray-200 rounded-lg shadow sm:flex-row lg:flex-col xl:flex-row hover:bg-gray-100 border-gray-300 hover:bg-gray-300 sm:h-full"
        >
          <img
            class="w-full rounded-t-lg h-1/4 sm:h-auto sm:w-52 lg:w-full xl:w-72 sm:rounded-l-lg sm:rounded-r-none md:rounded-s-lg lg:rounded-t-lg lg:rounded-b-none xl:rounded-r-none xl:rounded-l-lg"
            src="../images/widgets-by-pages-apps.png"
            alt=""
          />
          <div class="flex flex-col justify-between p-4 leading-normal flex-grow">
            <h5
              class="mb-3 text-3xl font-bold text-center md:text-left lg:text-center xl:text-left tracking-tight text-gray-900 text-green-700"
            >
              Widgets
            </h5>
            <p class="mb-3 font-normal text-gray-700 text-gray-600">
              Merupakan kumpulan Widget Serbaguna untuk Anda yang membutuhkan
              Informasi seakurat mungkin. Widget di sini juga termasuk yang
              sedang heboh saat ini.
            </p>
            <div
              class="mt-4 flex justify-center md:justify-start lg:justify-center xl:justify-start"
            >
              <a
                href="../page-apps/widgets.php"
                class="text-white hover:text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
              >
                Click here
              </a>
            </div>
          </div>
        </div>
      </div>
      <div
        class="bg-gray-300 bg-opacity-20 col-span-8 sm:col-span-12 md:col-span-12 lg:col-span-6 shadow rounded-lg p-4 mx-auto ring-1 ring-gray-200"
      >
        <div
          class="flex flex-col bg-white border border-gray-200 rounded-lg shadow sm:flex-row lg:flex-col xl:flex-row hover:bg-gray-100 border-gray-300 hover:bg-gray-300 sm:h-full"
        >
          <img
            class="w-full rounded-t-lg h-1/4 sm:h-auto sm:w-52 lg:w-full xl:w-72 sm:rounded-l-lg sm:rounded-r-none md:rounded-s-lg lg:rounded-t-lg lg:rounded-b-none xl:rounded-r-none xl:rounded-l-lg"
            src="../images/converters-by-pages-apps.png"
            alt=""
          />
          <div class="flex flex-col justify-between p-4 leading-normal flex-grow">
            <h5
              class="mb-3 text-3xl font-bold text-center md:text-left lg:text-center xl:text-left tracking-tight text-gray-900 text-green-700"
            >
              Converters
            </h5>
            <p class="mb-3 font-normal text-gray-700 text-gray-600">
              Merupakan kumpulan Widget Serbaguna untuk Anda yang membutuhkan
              Informasi seakurat mungkin. Widget di sini juga termasuk yang
              sedang heboh saat ini.
            </p>
            <div
              class="mt-4 flex justify-center md:justify-start lg:justify-center xl:justify-start"
            >
              <a
                href="../page-apps/converter.php"
                class="text-white hover:text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
              >
                Click here
              </a>
            </div>
          </div>
        </div>
      </div>
      <div
        class="bg-gray-300 bg-opacity-20 col-span-8 sm:col-span-12 md:col-span-12 lg:col-span-6 shadow rounded-lg p-4 mx-auto ring-1 ring-gray-200"
      >
        <div
          class="flex flex-col bg-white border border-gray-200 rounded-lg shadow sm:flex-row lg:flex-col xl:flex-row hover:bg-gray-100 border-gray-300 hover:bg-gray-300 sm:h-full"
        >
          <img
            class="w-full rounded-t-lg h-1/4 sm:h-auto sm:w-52 lg:w-full xl:w-72 sm:rounded-l-lg sm:rounded-r-none md:rounded-s-lg lg:rounded-t-lg lg:rounded-b-none xl:rounded-r-none xl:rounded-l-lg"
            src="../images/calculators-by-pages-apps.png"
            alt=""
          />
          <div class="flex flex-col justify-between p-4 leading-normal flex-grow">
            <h5
              class="mb-3 text-3xl font-bold text-center md:text-left lg:text-center xl:text-left tracking-tight text-gray-900 text-green-700"
            >
              Calculators
            </h5>
            <p class="mb-3 font-normal text-gray-700 text-gray-600">
              Merupakan kumpulan Widget Serbaguna untuk Anda yang membutuhkan
              Informasi seakurat mungkin. Widget di sini juga termasuk yang
              sedang heboh saat ini.
            </p>
            <div
              class="mt-4 flex justify-center md:justify-start lg:justify-center xl:justify-start"
            >
              <a
                href="../page-apps/calculators.php"
                class="text-white hover:text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
              >
                Click here
              </a>
            </div>
          </div>
        </div>
    </div>
      <!-- -->
    </div>
    <div class="row" id="app-container">
    <?php
    //  // Loop melalui setiap aplikasi dan buat elemen HTML-nya
    //  foreach ($apps as $app) {
    //    // Menggunakan isset untuk menghindari error jika kunci tidak ada
    //    $name = isset($app['name']) ? $app['name'] : 'N/A';
    //    $imgSrc = isset($app['imgSrc']) ? $app['imgSrc'] : '';
    //    $description = isset($app['description']) ? $app['description'] : (isset($app['text']) ? $app['text'] : '');
    //    $link = isset($app['link']) ? $app['link'] : '#';
    //    ?>
      <!--div class="col-lg-3 col-md-4 col-sm-6 mb-4">
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
      </div-->
      <?php
    //  }
    //  ?>
    </div>

    <!-- /.row -->
  </section>
</section>
<?php
  include('../components/footsite/footsite.php');
  include('../layouts/footer.php');
?>

<!-- https://preline.co/examples/icon-sections.php -->
<!-- https://flowbite.com/docs/components/card -->

<!-- Tools : -->
<!-- https://www.utilities-online.info -->
<!-- https://tools.picsart.com -->