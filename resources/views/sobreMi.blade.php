<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('images/favicon.jpg') }}" type="image/x-icon">
    <title>Portfolio | Sobre Mi</title>

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

<body class="body">
    @include('layouts.navigationPortfolio')
    @include('layouts.redes')
    <main class="container-fluid p-0">
        <div style="height: 80vh;" class="row p-0">
            <div class="col-12 col-sm-6 my-auto px-5" data-aos="fade-right">
                <div class="d-flex">
                    <h1 class="titulo">Sobre mí</h1>
                    <lord-icon src="https://cdn.lordicon.com/zorvjzqh.json" class="mx-2" trigger="hover" colors="primary:#ffffff,secondary:#08a88a" style="width:80px;height:80px">
                    </lord-icon>
                </div>
                <p>Apasionado de la literatura , el deporte y la tecnología, con principal enfoque en empatía, compromiso y el trabajo en equipo como pilares para lograr los objetivos en cada proyecto. Gran apertura para aprender y formarme en cosas nuevas que requieran un desafío que complementen día a día los conocimientos y experiencias ya adquiridas.</p>
                <a href="{{ route('contacto') }}" class="btn btn-primary my-4">Enviar mensaje</a>
            </div>
            <div class="col-12 col-sm-6 text-center my-auto p-0 foto" data-aos="fade-up">
                <img src="{{ asset('images/perfil.jpg') }}" width="350" style="border-radius: 50%;" alt="">
            </div>
        </div>
        <section>
            <div class="row stack my-3">
                <div class="col-12 d-flex my-3">
                    <lord-icon src="https://cdn.lordicon.com/wlyysmxk.json" trigger="loop" delay="1000" colors="primary:#ffffff,secondary:#08a88a" style="width:50px;height:40px">
                    </lord-icon>
                    <h3 style="color:aliceblue;">Stack tecnológico</h3>
                </div>
                <div class="row px-5">
                    @foreach($stacks as $stack)
                    <div class="col-6 col-sm-2 py-3 text-center" data-aos="fade-up">
                        <div class="p-4 stackItem">
                            <img src="{{ asset('images/stack/' . $stack->imagen) }}" class="img-fluid" width="70" alt="{{ $stack->nombre }}">
                            <p class="py-auto">{{ $stack->nombre }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="row hobbies">
            <div class="col-12 col-sm-6 px-0 px-sm-5 my-3" data-aos="fade-up">
                <div class="row talk">
                    <div class="col-12 text-center">
                        <lord-icon src="https://cdn.lordicon.com/wzrwaorf.json" trigger="hover" style="width:100px;height:100px">
                        </lord-icon>
                        <p>Idiomas</p>
                        <div class="text-center">
                            <ul class="p-0">
                                <li>Español</li>
                                <li>Inglés (Básico)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 px-0 px-sm-5 my-3" data-aos="fade-up">
                <div class=" row talk">
                    <div class="col-12 text-center">
                        <lord-icon src="https://cdn.lordicon.com/lenjvibx.json" trigger="hover" style="width:100px;height:100px">
                        </lord-icon>
                        <p>Hobbies</p>
                        <div class="text-center">
                            <ul class="p-0">
                                <li>Literatura</li>
                                <li>Música</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-flex p-3">
                    <lord-icon src="https://cdn.lordicon.com/ezsjqygj.json" trigger="loop" colors="primary:#ffffff,secondary:#08a88a" style="width:50px;height:50px">
                    </lord-icon>
                    <h3 style="color:aliceblue;">Formación de desarrollo profesional</h3>
                </div>
            </div>
            <div class="col-12 col-sm-6 p-5">
                <div class="formacion d-flex" data-aos="fade-right">
                    <img src="{{ asset('images/images.png') }}" class="img-fluid" alt="DePC">
                    <div class="d-block p-3">
                        <h4>Programación web Full Stack</h4>
                        <p>DePC</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 p-5">
                <div class="formacion d-flex" data-aos="fade-left">
                    <img src="{{ asset('images/UTN_logo.jpg') }}" class="img-fluid" alt="UTN">
                    <div class="d-block p-3">
                        <h4>Experto Universitario en programación web full stack</h4>
                        <p>UTN (Universidad Tecnológica Nacional)</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-flex p-3">
                    <lord-icon src="https://cdn.lordicon.com/wzwygmng.json" trigger="loop" colors="primary:#ffffff,secondary:#08a88a" style="width:50px;height:50px">
                    </lord-icon>
                    <h3 style="color:aliceblue;">Experiencia laboral</h3>
                </div>
                <div class="col-12 col-sm-6 p-5">
                    <div class="experiencia d-flex" data-aos="fade-right">
                        <img src="{{ asset('images/yel.jpg') }}" class="img-fluid" alt="yel">
                        <div class="d-block p-3">
                            <h4>Analísta de Redes</h4>
                            <p>Yel Informática - Septiembre 2022 | Actualidad</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    
                </div>
            </div>
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