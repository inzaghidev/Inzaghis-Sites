<?php
    $page_title = "IT Project Lists";
    include('../layouts/header.php');
    include('../components/navbar/navbar.php');
    $data = json_decode(file_get_contents('../data/portals-data.json'), true);
    $portals = $data['it_projects'];
?>

<div class="container-top"></div>
<section class="apps-portals-wrapper">
  <div class="apps-portals-container">
    <div class="welcome-container">
      <div class="welcome-title">
        <h1 class="welcome-title">IT Project Lists</h1>
      </div>
      <section class="pages">
        <div class="card-body card-apps card shadow border border-success">
          <p class="is-desc">
            <?php
              $query = "IT Project Lists"; // Ganti dengan nilai sesuai kebutuhan

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
          <section>
            <a
              href="#"
              target="_blank"
              class="description-button"
              >Click here</a
            >
          </section>
        </div>
        <br />
        <div class="row">
            <?php
                foreach ($portals as $portal) {
                  $title = isset($portal['title']) ? $portal['title'] : 'N/A';
                  $text = isset($portal['text']) ? $portal['text'] : '';
                  $link = isset($portal['link']) ? $portal['link'] : '#';

                  echo '<div class="col-md-4 col-sm-6 mb-4">';
                  echo '  <div class="card card-apps h-100 shadow border border-success">';
                  echo '    <div class="card-body card-apps-body">';
                  echo '      <h5 class="card-apps-title">' . $portal["title"] . '</h5>';
                  echo '      <p class="card-text card-apps-text card-description">' . $portal["text"] . '</p>';
                  echo '      <a href="' . $portal["link"] . '" class="btn btn-primary apps-button">Click here</a>';
                  echo '    </div>';
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
