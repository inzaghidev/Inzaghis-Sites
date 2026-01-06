<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/index');
});

Route::get('/public', function () {
    return view('/index');
});

Route::get('/about', function () {
    return view('/pages/about');
});

Route::get('/profile', function () {
    return view('/pages/profile');
});

Route::get('/contact', function () {
    return view('/pages/contact');
});

Route::get('/networks', function () {
    return view('/pages/networks');
});

Route::get('/disclaimer', function () {
    return view('/pages/disclaimer');
});

Route::get('/privacy-policy', function () {
    return view('/pages/privacy-policy');
});

Route::get('/apps', function () {
    return view('/pages/apps');
});

Route::get('/portals', function () {
    return view('/pages/portals');
});








// Route::get('/', function () {
//     return view('index', [
//         "title" => "Home"
//     ]);
// });