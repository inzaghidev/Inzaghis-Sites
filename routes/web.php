<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/index', [
        'page_title' => 'Home'
    ]);
});

Route::get('/public', function () {
    return view('/index', [
        'page_title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('/pages/about', [
        'page_title' => 'About'
    ]);
});

Route::get('/profile', function () {
    return view('/pages/profile', [
        'page_title' => 'Profile'
    ]);
});

Route::get('/contact', function () {
    return view('/pages/contact', [
        'page_title' => 'Contact'
    ]);
});

Route::get('/networks', function () {
    return view('/pages/networks', [
        'page_title' => "Inzaghi's Group Network"
    ]);
});

Route::get('/disclaimer', function () {
    return view('/pages/disclaimer', [
        'page_title' => 'Disclaimer'
    ]);
});

Route::get('/privacy-policy', function () {
    return view('/pages/privacy-policy', [
        'page_title' => 'Privacy Policy'
    ]);
});


Route::get('/apps', function () {
    return view('/apps/index', [
        'page_title' => 'Apps'
    ]);
});

Route::get('/portals', function () {
    return view('/portals/index', [
        'page_title' => 'Portals'
    ]);
});


// Route::get('/apps', function () {
//     $apps = [
//         [
//             "name" => "Converters",
//             "imgSrc" => "../assets/images/converters-by-pages-apps.png",
//             "description" => "Merupakan portal untuk Aplikasi Konverter seperti Konversi Suhu, Massa (Berat), Panjang, Sistem Bilangan, dan lain-lain. Sebagian dari Aplikasi Konverter ini akan sedikit menggunakan API.",
//             "link" => "../page-apps/converter.php"
//         ],
//         [
//             "name" => "Calculators",
//             "imgSrc" => "../assets/images/calculators-by-pages-apps.png",
//             "description" => "Merupakan kumpulan dari beberapa jenis Kalkulator seperti Kalkulator Sederhana, Ilmiah, Matematika, Kesehatan, Keuangan, hinga Kalkulator untuk Keseharian.",
//             "link" => "../page-apps/calculators.php"
//         ],
//         // ...other apps (Generators, Formatters, File Converter, Utilities, Tester Tools, Coming Soon)...
//     ];

//     return view('/apps/index', [
//         'page_title' => 'Apps',
//         'apps' => $apps
//     ]);
// });

// Route::get('/portals', function () {
//     $portals = [
//         [
//             "name" => "Widgets",
//             "imgSrc" => "../assets/images/widgets-by-portals.png",
//             "description" => "Merupakan kumpulan Widget Serbaguna untuk Anda yang membutuhkan Informasi seakurat mungkin. Widget di sini juga termasuk yang sedang heboh saat ini.",
//             "link" => "../portals/widgets.php"
//         ],
//         [
//             "name" => "Technology Tutorials",
//             "imgSrc" => "../assets/images/tech-tutorials-by-portals.png",
//             "description" => "Merupakan kumpulan dari berbagai macam Teknologi apapun dalam bidang IT, dan sebagai Pembelajaran untuk berbagai macam Teknologi IT apapun seperti Pemrograman, Aplikasi, Ilmu Komputer, Analisis Data, dan lainnya.",
//             "link" => "../portals/tech-tutorials.php"
//         ],
//         // ...other portals...
//     ];

//     return view('/portals/index', [
//         'page_title' => 'Portals',
//         'apps' => $portals
//     ]);
// });

