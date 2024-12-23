    <!--HEADER-->
    @include('header')

    <!--CARRUSEL-->
    <div id="carouselExample" class="carousel slide costum-carousel">
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

    <!--LISTADO DE PRODUCTOS-->

    <section class="container-productos mb-4">
        <!--CONTENEDOR DE CARDS-->
        <div class="container-cards">
            
            <!--CARD-->
            <div class="card costum-card" style="width: 200px;">
                <img src="images/moto1.jpg" class="card-img-top shadow-sm" alt="moto">
                <div class="card-body pb-4">
                  <h5 class="card-title">Moto</h5>
                  <p class="card-text">$Precio</p>
                  <div class="d-flex justify-content-end w-100">
                      <a href="#" class="boton-principal align-bottom">Comprar</a>
                  </div>
                </div>
            </div>

            <div class="card costum-card" style="width: 200px;">
                <img src="images/moto1.jpg" class="card-img-top shadow-sm" alt="moto">
                <div class="card-body pb-4">
                  <h5 class="card-title">Moto</h5>
                  <p class="card-text">$Precio</p>
                  <div class="d-flex justify-content-end w-100">
                      <a href="#" class="boton-principal align-bottom">Comprar</a>
                  </div>
                </div>
            </div>

            <div class="card costum-card" style="width: 200px;">
                <img src="images/moto1.jpg" class="card-img-top shadow-sm" alt="moto">
                <div class="card-body pb-4">
                  <h5 class="card-title">Moto</h5>
                  <p class="card-text">$Precio</p>
                  <div class="d-flex justify-content-end w-100">
                      <a href="#" class="boton-principal align-bottom">Comprar</a>
                  </div>
                </div>
            </div>

            <div class="card costum-card" style="width: 200px;">
                <img src="images/moto1.jpg" class="card-img-top shadow-sm" alt="moto">
                <div class="card-body pb-4">
                  <h5 class="card-title">Moto</h5>
                  <p class="card-text">$Precio</p>
                  <div class="d-flex justify-content-end w-100">
                      <a href="#" class="boton-principal align-bottom">Comprar</a>
                  </div>
                </div>
            </div>

        </div>

        <!--BOTON DE CARGAR MAS-->
        <a href="#" class="boton-principal m-auto">Cargar mas</a>
    </section>

    <!--FOOTER-->
    @include('footer')
