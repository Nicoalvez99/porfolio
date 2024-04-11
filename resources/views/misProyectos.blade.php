<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('images/favicon.jpg') }}" type="image/x-icon">
        <title>Portfolio | Mis Proyectos</title>

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
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- Scripts -->
        <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    </head>
</head>

<body class="body">
    @include('layouts.navigationPortfolio')
    @include('layouts.redes')
    @include('layouts.modal')
    <main class="container-fluid">
        <div class="row">
            <div class="col-12 my-3 p-3">
                <div class="d-flex">
                    <h1 class="titulo">Mis Proyectos</h1>
                    <lord-icon src="https://cdn.lordicon.com/xynjytfp.json" trigger="loop" class="mt-2 mx-2" colors="primary:#ffffff,secondary:#08a88a" style="width:70px;height:70px">
                    </lord-icon>
                </div>
                <p>Estos son algunos de los proyectos que he realizado.</p>
            </div>
        </div>
        <div class="row">
            @foreach($proyectos as $proyecto)
            <div class="col-12 col-sm-4">
                <div class="card text-bg-dark mx-auto my-3" style="width: 18rem;">
                    <img src="{{ asset('images/proyectos/' . $proyecto->imagen) }}" class="card-img-top" alt="{{ $proyecto->nombre }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $proyecto->nombre }}</h5>
                        <p class="card-text">{{ $proyecto->resumen }}</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $proyecto->id }}">Ver detalles</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'load', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 400, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: false, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

        });
    </script>
    <script src="{{ asset('js/load.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>