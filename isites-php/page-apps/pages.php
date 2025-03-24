<?php
  $page_title = "Pages";
  include('../layouts/header.php');
  include('../components/navbar/navbar.php');
  $data = json_decode(file_get_contents('../data/apps-data.json'), true);

  if (isset($data['pages'])) {
      $apps = $data['pages'];
  } else {
      $apps = []; // Atau tangani kesalahan dengan lebih baik sesuai kebutuhan Anda
  }
?>

<div class="container-top"></div>
<section class="page-apps-wrapper">
  <div class="page-apps-container">
    <div class="welcome-container">
      <div class="page-title">
        <h1 class="page-title">Pages</h1>
      </div>
      <section class="pages">
        <p class="is-desc">
          <?php
            $query = "Pages"; // Ganti dengan nilai sesuai kebutuhan

            if (isset($data['apps'])) {
                $appsDesc = $data['apps'];
            } else {
                $appsDesc = []; // Jika tidak ada data, gunakan array kosong
            }

            // Cari deskripsi berdasarkan query
            $foundDescription = 'Deskripsi tidak ditemukan'; // Default jika query tidak ditemukan
            foreach ($appsDesc as $appDesc) {
                if (isset($appDesc['name']) && $appDesc['name'] === $query) {
                    $foundDescription = isset($appDesc['description']) ? $appDesc['description'] : 'Deskripsi tidak tersedia';
                    break; // Berhenti pencarian jika ditemukan
                }
            }

            // Tampilkan deskripsi yang ditemukan
            echo $foundDescription;
          ?>
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <?php
          foreach ($apps as $app) {
            $title = isset($app['title']) ? $app['title'] : 'N/A';
            $text = isset($app['text']) ? $app['text'] : '';
            $link = isset($app['link']) ? $app['link'] : '#';

            echo '<div class="bg-white shadow-xl flex flex-col justify-between rounded-lg p-6 ring-1 ring-green-500">';
            echo '  <h5 class="card-apps-title text-2xl font-bold text-black">' . $title . '</h5>';
            echo '  <p class="card-apps-text text-gray-600 mt-2 !mb-4 mb-auto">' . $text . '</p>';
            echo '  <a href="' . $link . '" class="flex justify-center bg-blue-600 text-white mx-2 py-2 px-4 rounded-lg hover:bg-blue-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">';
            echo '    <button class="inline-block">Click here</button>';
            echo '  </a>';
            echo '</div>';
          }
        ?>
        </div>
      </section>
    </div>
  </div>
</section>

<?php
  include('../components/footsite/footsite.php');
  include('../layouts/footer.php');
?>
