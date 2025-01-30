@php
    $webRoot = realpath(dirname(base_path())); // Base path untuk root Laravel project
    $serverRoot = realpath($_SERVER['DOCUMENT_ROOT']);

    if ($webRoot === $serverRoot) {
        $pathToWebRoot = "";
    } else {
        $pathToWebRoot = substr($webRoot, strlen($serverRoot) + 1);
    }
@endphp

@yield('container')

    <!-- Local Scripts -->
    <script src="{{ URL::asset('src/js/script.js') }}"></script>
    <script src="{{ URL::asset('components/navbar/navbar.js') }}"></script>

    {{-- <script src="{{ $pathToWebRoot }}/jquery/jquery-3.7.1.js"></script> --}}
    <!-- External Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>