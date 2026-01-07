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
    return view('/portals/index');
});








// Route::get('/', function () {
//     return view('index', [
//         "title" => "Home"
//     ]);
// });