<?php
$page_title = "Portals";
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
        Portals <small class="text-lg text-gray-500">Beta</small>
        </h1>

        <p class="is-desc text-left text-gray-700">
        Portals merupakan Halaman Portal yang tersedia untuk berbagai kebutuhan apapun seperti Widgets, Tutorial Teknologi, Materi Pembelajaran, dan lainnya.
        </p>

        <div class="grid grid-cols-4 md:grid-cols-12 gap-6 justify-center -mx-2 sm:mx-0">
        <?php
        // Data aplikasi yang akan ditampilkan
        $apps = [
            [
                "name" => "Widgets",
                "imgSrc" => "../assets/images/widgets-by-portals.png",
                "description" => "Merupakan kumpulan Widget Serbaguna untuk Anda yang membutuhkan Informasi seakurat mungkin. Widget di sini juga termasuk yang sedang heboh saat ini.",
                "link" => "../portals/widgets.php"
            ],
            [
                "name" => "Technology Tutorials",
                "imgSrc" => "../assets/images/tech-tutorials-by-portals.png",
                "description" => "Merupakan kumpulan dari berbagai macam Teknologi apapun dalam bidang IT, dan sebagai Pembelajaran untuk berbagai macam Teknologi IT apapun seperti Pemrograman, Aplikasi, Ilmu Komputer, Analisis Data, dan lainnya.",
                "link" => "../portals/tech-tutorials.php"
            ],
            [
                "name" => "IT Project Lists",
                "imgSrc" => "../assets/images/it-project-lists-by-portals.png",
                "description" => "Merupakan kumpulan dari berbagai macam Proyek apapun dalam bidang IT seperti Pemrograman, Aplikasi, UI/UX, Analisis Data, AI/ML, IoT, dan lainnya.",
                "link" => "../portals/projects.php"
            ],
            [
                "name" => "Career Portal",
                "imgSrc" => "../assets/images/career-portal-by-portals.png",
                "description" => "Merupakan kumpulan dari pertanyaan-pertanyaan Wawancara seperti Wawancara Kerja, Magang, User Interview, Wawancara Teknis (Technical Interview), dan lain-lain. Portal ini juga menyediakan berbagai macam Pertanyaan untuk persiapan Tugas Akhir seperti Skripsi, Tesis, dan Disertasi.",
                "link" => "../portals/career-portal.php"
            ],
            [
                "name" => "Learning Materials",
                "imgSrc" => "../assets/images/learning-materials-by-portals.png",
                "description" => "Merupakan bagian untuk kumpulan Materi Pembelajaran, khususnya untuk Materi Pelajaran Sekolah (Untuk SMA) dan Materi Perkuliahan (Teknik InformatiKa dan Umum/MKDU). Pada Portal ini juga menyediakan berbagai macam Kumpulan Materi dan Pertanyaan untuk persiapan Tugas Akhir seperti Skripsi, Tesis, dan Disertasi.",
                "link" => "../portals/learning-materials.php"
            ],
            [
                "name" => "Entertainment Portal",
                "imgSrc" => "../assets/images/entertainment-portal-by-portals.png",
                "description" => "Merupakan Portal untuk Pusat Hiburan seperti Kumpulan Video dan Live Streaming di YouTube, Kumpulan Akun-akun Media Sosial, hingga Kumpulan Playlist Lagu seperti Spotify.",
                "link" => "../portals/entertainment-portal.php"
            ],
            [
                "name" => "Link Pages",
                "imgSrc" => "../assets/images/link-pages-by-portals.png",
                "description" => "Merupakan kumpulan dari Tautan/Link yang berasal dari Situs Berita, Link Google, YouTube, GitHub, dan lainnya.",
                "link" => "../portals/link-pages.php"
            ],
            [
                "name" => "Muslims Portal",
                "imgSrc" => "../assets/images/muslim-portal-by-portals.png",
                "description" => "Merupakan Portal untuk Kumpulan Pusat Keagamaan dan Peribadatan Islam, seperti Jadwal Shalat & Puasa, Kalender Hijriah, Kompas Arah Kiblat, hingga Al-Qur'an Digital.",
                "link" => "../portals/muslim-portal.php"
            ],
            [
                "name" => "Miscellaneous",
                "imgSrc" => "../assets/images/miscellaneous-by-portals.png",
                "description" => "Merupakan Halaman lainnya yang tidak termasuk dari Kategori di Portal ini, dan juga tersedia untuk Halaman apa saja.",
                "link" => "../portals/miscellaneous.php"
            ],
            [
                "name" => "Lorem Ipsum",
                "imgSrc" => "https://via.placeholder.com/700x400",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius adipisci dicta dignissimos neque animi ea, veritatis, provident hic consequatur ut esse! Commodi ea consequatur accusantium, beatae qui deserunt tenetur ipsa.",
                "link" => "#"
            ],
            // Tambahkan data aplikasi lainnya di sini...
        ];

        // Loop melalui setiap aplikasi dan buat elemen HTML-nya
        foreach ($apps as $app) {
            ?>
            <div class="bg-gray-300 bg-opacity-20 col-span-8 sm:col-span-12 shadow rounded-lg p-5 mx-auto ring-1 ring-gray-200">
                <div class="flex flex-col sm:flex-row items-stretch bg-white border border-gray-300 bg-gray-200 rounded-lg shadow hover:bg-gray-300 transition-all duration-300">
                    <a href="<?php echo $app['link']; ?>" class="object-cover flex sm:w-[50%] md:w-[40%] lg:w-[30%] sm:h-auto">
                        <img
                            class="w-full rounded-t-lg h-1/4 sm:h-auto sm:rounded-none sm:rounded-s-lg"
                            src="<?php echo $app['imgSrc']; ?>"
                            alt="<?php echo $app['name']; ?>"
                        />
                    </a>
                    <div class="flex flex-col justify-between p-4 md:p-6 sm:w-[50%] md:w-[60%] lg:w-[70%] leading-normal">
                        <h5 class="card-name mb-3 text-3xl font-bold tracking-tight text-gray-900 text-green-700 text-center md:text-left">
                            <?php echo $app['name']; ?>
                        </h5>
                        <p class="card-apps-text mb-3 font-normal text-gray-700 text-gray-600">
                            <?php echo $app['description']; ?>
                        </p>
                        <div class="mt-4 flex justify-center md:justify-start">
                            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                <a href="<?php echo $app['link']; ?>" class="button-link px-6 md:px-4 lg:px-6 py-2">Click here</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        </div>

    </section>
</section>

<?php
  include('../components/footsite/footsite.php');
  include('../layouts/footer.php');
?>
