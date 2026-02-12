<!-- UNDER CONSTRUCTION! -->

<?php
  $page_title = "Pages";
  include('../layouts/header.php');
  include('../components/navbar/navbar.php');
  $data = json_decode(file_get_contents('../data/apps-data.json'), true);

  $sections = [
    [
      "section" => "Section 1",
      "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
      "icon" => "../assets/icons/ico-icon.svg",
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
        ]
      ]
    ],
    [
      "section" => "Section 2",
      "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
      "icon" => "../assets/icons/ico-icon.svg",
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
        ]
      ]
    ]
  ];
?>

<div class="container-top"></div>
<section class="apps-portals-wrapper">
  <div class="apps-portals-container">
    <div class="welcome-container">
      <div class="page-title">
        <h1 class="page-title">Pages</h1>
      </div>
      <section class="pages">
        <p class="is-desc -mx-4 sm:mx-0">
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
        <?php foreach ($sections as $section): ?>
          <div class="card-apps bg-gray-300 rounded-md bg-clip-padding backdrop-filter backdrop-blur-lg bg-opacity-30 border border-gray-100 shadow-xl flex flex-col justify-between p-6 mb-8 ring-1 ring-green-500">
            <div class="card-grid-container">
              <div class="flex justify-between flex-wrap gap-2 mb-4 w-full">
                <div class="flex items-center">
                  <img src="<?= $section['icon'] ?>" width="44" height="44" />
                  <span class="text-3xl ml-3 text-gray-700 font-bold font-[Inter]">
                    <?= $section['section'] ?>
                  </span>
                </div>
              </div>
              <div class="text-container">
                <p class="is-desc">
                  <?= $section['description'] ?>
                </p>
              </div>
              <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <?php
                  foreach ($section['apps'] as $app) {
                    echo '<div class="bg-white hover:bg-green-50 shadow-md flex flex-col justify-between rounded-lg p-6 ring-1 ring-green-500 border border-indigo-100 rounded-lg shadow hover:shadow-xl transition-all transition transform hover:-translate-y-1 duration-500">';
                    echo '  <h5 class="card-apps-title text-2xl font-bold text-black">' . $app["title"] . '</h5>';
                    echo '  <p class="card-apps-text text-gray-600 mt-2 !mb-4 mb-auto">' . $app["text"] . '</p>';
                    echo '  <a href="' . $app["link"] . '" class="flex justify-center bg-blue-600 text-white mx-2 py-2 px-4 rounded-lg hover:bg-blue-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 shadow hover:shadow-lg">Click here</a>';
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
