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

<!-- CARROUSEL DE MOTOS ALEATORIAS: muestra 3 motos aleatorias que se reciben del controller, cambian por cada vez que se carga la pagina -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper justify-content-center">
      <!-- Tarjetas (Cards) -->
      @foreach($motosAleatorias as $moto)

            <div class="swiper-slide mx-3" style="max-width: 300px; margin-right: 20px;">
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
            </div>

            <div class="swiper-slide mx-3" style="max-width: 300px; margin-right: 20px;">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        @endforeach

    </div>

    <!-- Botones de navegación -->
    <div class="swiper-button-next costum-button"></div>
    <div class="swiper-button-prev costum-button"></div>
  </div>

</body>
</html>


<!--FOOTER-->
@include('footer')
