<?php
    $page_title = "Tech Tutorials";
    include('../layouts/header.php');
    include('../components/navbar/navbar.php');
    $data = json_decode(file_get_contents('../data/portals-data.json'), true);
    $portals = $data['tech_tutorials'];
?>

<div class="container-top"></div>
<section class="apps-portals-wrapper">
  <div class="apps-portals-container">
    <div class="welcome-container">
      <div class="page-title">
        <h1 class="page-title">Tech Tutorials</h1>
      </div>
      <section class="pages">
        <div class="card-apps bg-white shadow-xl flex flex-col justify-between rounded-lg p-6 ring-1 ring-green-500">
          <p class="is-desc">
            <?php
              $query = "Technology Tutorials"; // Ganti dengan nilai sesuai kebutuhan

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
          </p>
          <section class="group-button m-0">
            <a
              href="https://sites.google.com/view/inzaghis-sites/pages/technology-tutorials"
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
