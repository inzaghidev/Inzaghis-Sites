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
      <div class="welcome-title">
        <h1 class="welcome-title">Pages</h1>
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
        <div class="row">
            <?php
                // Loop through each page data and create the HTML structure
                foreach ($apps as $app) {
                  $title = isset($app['title']) ? $app['title'] : 'N/A';
                  $text = isset($app['text']) ? $app['text'] : '';
                  $link = isset($app['link']) ? $app['link'] : '#';

                  echo '<div class="col-md-4 col-sm-6 mb-4">';
                  echo '  <div class="card card-apps h-100 shadow border border-success">';
                  echo '    <div class="card-body card-apps-body">';
                  echo '      <h5 class="card-apps-title">' . $title . '</h5>';
                  echo '      <p class="card-text card-description">' . $text . '</p>';
                  echo '      <a href="' . $link . '" class="btn btn-primary apps-button">Click here</a>';
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
