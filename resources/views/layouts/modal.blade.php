<!-- Modal -->
@foreach($proyectos as $proyecto)
<div class="modal fade" id="exampleModal{{ $proyecto->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content bg-dark">
            <div class="modal-header body">
                <h2 style="color:aliceblue;" class="modal-title fs-5" id="exampleModalLabel">{{ $proyecto->nombre }}</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-dark p-0">
                
                <div id="carouselExample{{ $proyecto->id }}" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="{{ asset('images/proyectos/' . $proyecto->imagen) }}" class="img-fluid" alt="{{ $proyecto->nombre }}">
                        </div>
                        @foreach($imagenes as $imagen)
                        @if($imagen->id_proyecto == $proyecto->id)
                        <div class="carousel-item">
                            <img src="{{ asset('images/proyectos/' . $imagen->ruta) }}" class="d-block w-100" alt="{{ $proyecto->nombre }}">
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample{{ $proyecto->id }}" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample{{ $proyecto->id }}" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="p-3">
                    <p style="color:aliceblue;">{{ $proyecto->descripcion }}</p>
                    <p>Estado: En {{ $proyecto->status }}</p>
                </div>
            </div>
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                @if($proyecto->status == 'Producción')
                <a href="{{ $proyecto->link }}" target="_blank" class="btn btn-primary">Ver online</a>
                @endif

            </div>
        </div>
    </div>
</div>
@endforeach