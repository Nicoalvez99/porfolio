<div id="loader" class="row loaderContainer">
    <div style="margin-top: 40vh;" class="col-12 text-center">
        <div class="loader">
            <svg viewBox="0 0 80 80">
                <circle id="test" cx="40" cy="40" r="32"></circle>
            </svg>
        </div>
        <div class="loader triangle">
            <svg viewBox="0 0 86 80">
                <polygon points="43 8 79 72 7 72"></polygon>
            </svg>
        </div>
        <div class="loader">
            <svg viewBox="0 0 80 80">
                <rect x="8" y="8" width="64" height="64"></rect>
            </svg>
        </div>
    </div>
</div>
<header class="container-fluid">
    <nav class="navbar navbar-expand-lg my-1">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i style="color:#fff;" class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav text-center mx-auto">
                    <a class="link-nav px-5" href="{{ route('welcome') }}">Inicio</a>
                    <a class="link-nav px-5" href="{{ route('sobreMi') }}">Sobre mi</a>
                    <a class="link-nav px-5" href="{{ route('proyectos.stack') }}">Proyectos</a>
                    <a class="link-nav px-5" href="{{ route('contacto') }}">Contacto</a>
                </div>
            </div>
        </div>
    </nav>
</header>