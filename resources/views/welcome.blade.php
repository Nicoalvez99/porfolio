<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('images/favicon.jpg') }}" type="image/x-icon">
    <title>Portfolio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Scripts -->

</head>

<body class="body">
    <div id="particles-js"></div>
    @include('layouts.navigationPortfolio')
    @include('layouts.redes')
    <main class="container-fluid">
        <div class="row inicio py-5 py-sm-0">
            <div class="svg1 col-12 col-sm-6 text-center">
                <img src="{{ asset('images/cohete.svg') }}" class="img-fluid img-inicio float-up-down" width="300" alt="">
            </div>
            <div class="col-12 col-sm-6 my-auto text-center py-3 py-sm-0 text-sm-start">
                <h1 class="nombre">Nicolás Alvez</h1>
                <div class="px-5 p-sm-0">
                    <div class="d-flex">
                        <span class="typed"></span>
                    </div>
                </div>
            </div>
            <div class="svg2 col-12 col-sm-6 text-center">
                <img src="{{ asset('images/cohete.svg') }}" class="img-fluid img-inicio float-up-down" width="300" alt="">
            </div>
        </div>
    </main>


    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    <script src="{{ asset('js/load.js') }}"></script>
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script src="{{ asset('js/app-particles.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>