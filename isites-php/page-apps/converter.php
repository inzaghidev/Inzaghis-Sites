<!-- UNDER CONSTRUCTION -->

<?php
  $page_title = "Converters";
  include('../layouts/header.php');
  include('../components/navbar/navbar.php');
  $data = json_decode(file_get_contents('../data/apps-data.json'), true);
  $apps = $data['converters'];

  $sections = [
    [
      "section" => "Basic Converters",
      "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
      "columnClass" => "col-md-4 col-sm-6 mb-4",
      "apps" => [
        [
          "title" => "Konversi Panjang",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
        [
          "title" => "Konversi Massa/Berat",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
        [
          "title" => "Konversi Luas",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
        [
          "title" => "Konversi Volume",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
        [
          "title" => "Konversi Waktu",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
        [
          "title" => "Konversi Kecepatan",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
        [
          "title" => "Konversi Suhu",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
        [
          "title" => "App 8",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
        [
          "title" => "App 9",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
      ],
    ],
    [
      "section" => "Engineering Converters",
      "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
      "columnClass" => "col-md-4 col-sm-6 mb-4",
      "apps" => [
        [
          "title" => "App 1",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
        [
          "title" => "App 2",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
        [
          "title" => "App 3",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
      ],
    ],
    [
      "section" => "Electricity Converters",
      "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
      "columnClass" => "col-md-4 col-sm-6 mb-4",
      "apps" => [
        [
          "title" => "App 1",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
        [
          "title" => "App 2",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
        [
          "title" => "App 3",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
        [
          "title" => "App 4",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
        [
          "title" => "App 5",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
        [
          "title" => "App 6",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
      ],
    ],
    [
      "section" => "Light Converters",
      "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
      "columnClass" => "col-md-4 col-sm-6 mb-4",
      "apps" => [
        [
          "title" => "App 1",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
        [
          "title" => "App 2",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
        [
          "title" => "App 3",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
      ],
    ],
    [
      "section" => "Section 5",
      "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
      "columnClass" => "col-md-4 col-sm-6 mb-4",
      "apps" => [
        [
          "title" => "App 1",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
        [
          "title" => "App 2",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
          "link" => "#"
        ],
      ]
    ],
  ];
?>

<div class="container-top"></div>
<section class="apps-portals-wrapper">
  <div class="apps-portals-container">
    <div class="welcome-container">
      <div class="welcome-title">
        <h1 class="welcome-title">Converters</h1>
      </div>
      <section class="pages">
        <p class="is-desc">
          <?php
            $query = "Converters"; // Ganti dengan nilai sesuai kebutuhan

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

          <?php foreach ($sections as $section): ?>
            <div class="card-body card-apps card shadow-lg bg-white mb-4">
              <div class="card-grid-container">
                <h2 class="col"><?= $section['section'] ?></h2>
                <div class="text-container col">
                  <p class="is-desc"><?= $section['description'] ?></p>
                </div>
                <div class="row">
                  <?php
                    foreach ($section['apps'] as $app) {
                      echo '<div class="' . $section['columnClass'] . '">';
                      echo '  <div class="card card-apps h-100 shadow-lg border border-success card-animated">';
                      echo '    <div class="card-body card-apps-body">';
                      echo '      <h5 class="card-apps-title">' . $app["title"] . '</h5>';
                      echo '      <p class="card-text card-apps-text card-description">' . $app["text"] . '</p>';
                      echo '      <a href="' . $app["link"] . '" class="btn btn-primary apps-button">Click here</a>';
                      echo '    </div>';
                      echo '  </div>';
                      echo '</div>';
                    }
                  ?>
                </div>
              </div>
            </div>
          <?php endforeach ?>
      </section>
    </div>
  </div>
</section>

<?php
    include('../components/footsite/footsite.php');
    include('../layouts/footer.php');
?>
