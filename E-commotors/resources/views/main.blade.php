<!--HEADER-->
@include('header')

<!--CARRUSEL-->
<div class="costum-carousel">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/promo.png" class="img-fluid w-100" alt="...">
            </div>
            <!--ACA VA UN FOREACH PARA CADA IMAGEN DE LAS PROMOS-->
            <div class="carousel-item">
                <img src="images/promo.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <i class="bi bi-caret-left-fill costum-button"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <i class="bi bi-caret-right-fill costum-button"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- LISTADO DE MOTOS ALEATORIAS: muestra 3 motos aleatorias que se reciben del controller, cambian por cada vez que se carga la pagina -->

<section class="container-productos my-4">
    <div class="container-cards flex-nowrap">
        @foreach($motosAleatorias as $moto)
            <!-- CARD -->
            <div class="card costum-card">
                <img src="{{ asset('images/' . $moto->foto_moto) }}" class="card-img-top shadow-sm" style="height: 250px" alt="{{ $moto->nombre }}">
                <div class="card-body pb-4">
                    <h5 class="card-title">{{ $moto->nombre }}</h5>
                    <p class="card-text">${{ $moto->precio_base }}</p>
                    <div class="d-flex justify-content-end w-100">
                        <a href="#" class="boton-principal align-bottom">Comprar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<!--FOOTER-->
@include('footer')
