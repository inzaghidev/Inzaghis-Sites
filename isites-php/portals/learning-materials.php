<?php
    $page_title = "Learning Materials";
    include('../layouts/header.php');
    include('../components/navbar/navbar.php');
    $data = json_decode(file_get_contents('../data/portals-data.json'), true);
    $portals = $data['learning_materials'];
?>

<div class="container-top"></div>
<section class="apps-portals-wrapper">
  <div class="apps-portals-container">
    <div class="welcome-container">
      <div class="page-title">
        <h1 class="page-title">Learning Materials</h1>
      </div>
      <section class="pages">
        <div class="card-apps bg-white shadow-xl flex flex-col justify-between rounded-lg p-6 ring-1 ring-green-500">
          <p class="is-desc">
            <?php
              $query = "Materi Pembelajaran"; // Ganti dengan nilai sesuai kebutuhan

              if (isset($data['portals'])) {
                  $appsDesc = $data['portals'];
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
            <br />
            <br />
            Untuk Materi SMA, kebanyakan hanya lebih spesifik ke Jurusan IPA
            saja. Dan untuk Materi Perkuliahan, hanya hanya tersedia untuk
            Jurusan Teknik Informatika (TI) saja, dan hanya beberapa Mata
            Kuliah saja yang juga tersedia untuk Jurusan Sistem Informasi
            (SI). Untuk Jurusan/Prodi lainnya, hanya tersedia untuk Mata
            Kuliah Umum (MKDU) saja.
          </p>
          <section class="group-button m-0">
            <a
              href="https://sites.google.com/view/inzaghis-sites/pages/materi-pembelajaran"
              target="_blank"
              class="btn btn-outline-light description-button"
              >Click here</a
            >
          </section>
        </div>
        <br />
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <?php
          foreach ($portals as $portal) {
            $title = isset($portal['title']) ? $portal['title'] : 'N/A';
            $text = isset($portal['text']) ? $portal['text'] : '';
            $link = isset($portal['link']) ? $portal['link'] : '#';

            echo '<div class="bg-white shadow-xl flex flex-col justify-between rounded-lg p-6 ring-1 ring-green-500">';
            echo '  <h5 class="card-apps-title text-2xl font-bold text-black">' . $title . '</h5>';
            echo '  <p class="card-apps-text text-gray-600 mt-2 !mb-4 mb-auto">' . $text . '</p>';
            echo '  <a href="' . $link . '" class="flex justify-center bg-blue-600 text-white mx-2 py-2 px-4 rounded-lg hover:bg-blue-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 shadow hover:shadow-lg">';
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
