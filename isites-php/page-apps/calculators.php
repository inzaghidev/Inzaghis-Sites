<?php
    $page_title = "Calculators";
    include('../layouts/header.php');
    include('../components/navbar/navbar.php');
    $data = json_decode(file_get_contents('../data/apps-data.json'), true);
    $apps = $data['calculators'];
?>

<div class="container-top"></div>
<section class="page-apps-wrapper">
  <div class="page-apps-container">
    <div class="welcome-container">
      <div class="page-title">
        <h1 class="page-title">Calculators</h1>
      </div>
      <section class="pages">
        <p class="is-desc">
          <?php
            $query = "Calculators"; // Ganti dengan nilai sesuai kebutuhan

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

            echo '<div class="bg-white shadow-xl flex flex-col justify-between rounded-lg p-6 ring-1 ring-green-400">';
            echo '  <h5 class="card-apps-title text-2xl font-bold text-gray-800">' . $title . '</h5>';
            echo '  <p class="text-gray-600 mt-2 mb-auto">' . $text . '</p>';
            echo '  <div class="flex justify-center">';
            echo '    <a href="' . $link . '" class="inline-block mt-4 bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">Click here</a>';
            echo '  </div>';
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
