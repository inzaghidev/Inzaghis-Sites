<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Route::get('/', function () {
//     return view('index', [
//         "title" => "Home"
//     ]);
// });