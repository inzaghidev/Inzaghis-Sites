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
      Pages Apps <small class="text-lg text-gray-500">Beta</small>
    </h1>

    <p class="is-desc text-left text-gray-700">
      Pages Apps merupakan Halaman Aplikasi yang tersedia untuk berbagai kebutuhan. Pages Apps menyediakan berbagai Portal seperti Halaman, Widget, Konverter, Kalkulator, dan lainnya.
    </p>

    <div class="grid grid-cols-4 md:grid-cols-12 gap-6 lg:px-16 xl:px-0 justify-center">
      <?php if (is_array($apps) && count($apps) > 0): ?>
        <?php foreach ($apps as $app): ?>
          <?php
            // Mengambil data aplikasi dengan pengecekan isset
            $name = isset($app['name']) ? htmlspecialchars($app['name']) : 'N/A';
            $imgSrc = isset($app['imgSrc']) ? htmlspecialchars($app['imgSrc']) : '';
            $description = isset($app['description']) ? htmlspecialchars($app['description']) : 'Deskripsi tidak tersedia.';
            $link = isset($app['link']) ? htmlspecialchars($app['link']) : '#';
          ?>
          <div class="bg-gray-300 bg-opacity-20 col-span-8 sm:col-span-12 md:col-span-12 lg:col-span-6 shadow rounded-lg p-4 mx-auto ring-1 ring-gray-200">
            <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow sm:flex-row lg:flex-col xl:flex-row hover:bg-gray-100 border-gray-300 hover:bg-gray-300 sm:h-full">
              <img class="w-full rounded-t-lg h-1/4 sm:h-auto sm:w-52 lg:w-full xl:w-72 sm:rounded-l-lg sm:rounded-r-none md:rounded-s-lg lg:rounded-t-lg lg:rounded-b-none xl:rounded-r-none xl:rounded-l-lg" src="<?php echo $imgSrc; ?>" alt="<?php echo $name; ?>">
              <div class="flex flex-col justify-between p-4 leading-normal flex-grow">
                <h5 class="mb-3 text-3xl font-bold text-center md:text-left lg:text-center xl:text-left tracking-tight text-gray-900 text-green-700"><?php echo $name; ?></h5>
                <p class="mb-3 font-normal text-gray-700 text-gray-600"><?php echo $description; ?></p>
                <div class="mt-4 flex justify-center md:justify-start lg:justify-center xl:justify-start">
                  <a href="<?php echo $link; ?>" class="text-white hover:text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Click here
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p class="text-center text-red-500">Failed to load app data.</p>
      <?php endif; ?>
    </div>
  </section>
</section>

<?php
include('../components/footsite/footsite.php');
include('../layouts/footer.php');
?>
