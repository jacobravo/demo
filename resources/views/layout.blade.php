<!doctype html>
<html lang="es">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <script src="{{ asset('js/sweetalert2.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('/jquery-ui-1.12.1/jquery-ui.min.css') }}">
        <script src="{{ asset('/js/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('/js/jquery-modal.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('/css/jquery-modal.css') }}" />
        <link rel="stylesheet" href="css/app.css">
        <title>Sistema de tickets</title>
        <link rel="favicon" type="image/png" href="">
    </head>
    <body>
        <div class="container" style="width: 80%">
            @yield('content')
        </div>
    </body>
</html>

