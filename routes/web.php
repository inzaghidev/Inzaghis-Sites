<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/public', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/disclaimer', function () {
    return view('pages/disclaimer');
});

Route::get('/privacy-policy', function () {
    return view('pages/privacy-policy');
});








// Route::get('/', function () {
//     return view('index', [
//         "title" => "Home"
//     ]);
// });