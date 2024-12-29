<!--HEADER-->
@include('header')

<!--CARRUSEL-->
<div class="costum-carousel position-relative p-5">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" style="background-color: var(--color-secundario)" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" style="background-color: var(--color-secundario)" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" style="background-color: var(--color-secundario)" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/promo.png" class="img-fluid w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/promo.png" class="img-fluid w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/promo.png" class="img-fluid w-100" alt="...">
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <i class="bi bi-caret-left-fill costum-button position-absolute" style="left: 12px"></i>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <i class="bi bi-caret-right-fill costum-button position-absolute" style="right: 12px"></i>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<h2 class="titulo">Los mas vendidos</h2>

<!-- Tarjetas (Cards) -->
    <div class="d-flex flex-wrap m-auto gap-3 w-100 justify-content-center my-4 overflow-hidden p-4">
        @foreach($motosAleatorias as $moto)
            <!-- CARD -->
            <div class="card costum-card" style="min-width: 250px;">
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

<!--FOOTER-->
@include('footer')
