<?php
    $page_title = "Converters";
    include('../layouts/header.php');
    include('../components/navbar/navbar.php');
    $data = json_decode(file_get_contents('../data/apps-data.json'), true);
    $apps = $data['converters'];
?>

<div class="container-top"></div>
<section class="page-apps-wrapper">
  <div class="page-apps-container">
    <div class="welcome-container">
      <div class="welcome-title">
        <h1 class="welcome-title">Converters</h1>
      </div>
      <section class="pages">
        <p class="is-desc">
          Merupakan portal untuk Aplikasi Konverter seperti Konversi Suhu,
          Massa (Berat), Panjang, Sistem Bilangan, dan lain-lain. Sebagian
          dari Aplikasi Konverter ini akan sedikit menggunakan API.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <?php
          foreach ($apps as $app) {
            $title = isset($app['title']) ? $app['title'] : 'N/A';
            $text = isset($app['text']) ? $app['text'] : '';
            $link = isset($app['link']) ? $app['link'] : '#';

            echo '<div class="bg-white shadow-xl flex flex-col justify-between rounded-lg p-6 ring-1 ring-green-400">';
            echo '  <h5 class="text-xl font-bold text-gray-800">' . $title . '</h5>';
            echo '  <p class="text-gray-600 mt-2">' . $text . '</p>';
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
