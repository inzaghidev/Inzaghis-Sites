@php
    $webRoot = realpath(dirname(base_path())); // Laravel: base_path untuk root project
    $serverRoot = realpath($_SERVER['DOCUMENT_ROOT']);

    if ($webRoot === $serverRoot) {
        $pathToWebRoot = "";
    } else {
        $pathToWebRoot = substr($webRoot, strlen($serverRoot) + 1);
    }
@endphp

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{ URL::asset('src/css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('src/css/reset.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('components/navbar/navbar.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('components/footsite/footsite.css') }}">
        {{-- <link rel="stylesheet" href="{{ $pathToWebRoot }}/components/footsite/footsite.css">
        <link rel="stylesheet" href="{{ $pathToWebRoot }}/bootstrap/css/bootstrap.min.css"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionimages/2.0.1/css/ionicons.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet"> 

        <!-- Feather Icons -->
        <script src="https://unpkg.com/feather-icons"></script>

        <title>{{ $page_title ?? 'Default Title' }} - Inzaghi's Sites</title>
        {{-- <link rel="shortcut icon" href="{{ $pathToWebRoot }}/images/inzaghis-sites-favicon-36x36-icon-only.png" /> --}}
    </head>
    <body>
        @include('components.navbar.navbar')
        @yield('container')
        @include('components.footsite.footsite')