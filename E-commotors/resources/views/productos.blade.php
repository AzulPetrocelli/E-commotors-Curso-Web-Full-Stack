@include('header')

<main class="my-5 d-flex flex-column align-items-center w-100">
    <!-- Barra de búsqueda y filtro -->
    <section class="d-flex justify-content-between mt-5 w-75">
        <h1 class="jaro">Motos</h1>
        <div class="d-flex justify-content-end gap-2">
            <input type="text" placeholder="Buscar..." class="input-form jaro w-100"/>
            <button class="boton-principal">Filtrar</button>
        </div>
    </section>
  
    <!--LISTADO DE PRODUCTOS-->

    <section class="container-productos my-4 w-75">
        <div class="container-cards">
            
            <!--CARD-->
            <div class="card costum-card">
                <img src="images/moto1.jpg" class="card-img-top shadow-sm" alt="moto">
                <div class="card-body pb-4">
                  <h5 class="card-title">Moto</h5>
                  <p class="card-text">$Precio</p>
                  <div class="d-flex justify-content-end w-100">
                      <a href="#" class="boton-principal align-bottom">Comprar</a>
                  </div>
                </div>
            </div>

            <div class="card costum-card">
                <img src="images/moto1.jpg" class="card-img-top shadow-sm" alt="moto">
                <div class="card-body pb-4">
                  <h5 class="card-title">Moto</h5>
                  <p class="card-text">$Precio</p>
                  <div class="d-flex justify-content-end w-100">
                      <a href="#" class="boton-principal align-bottom">Comprar</a>
                  </div>
                </div>
            </div>

            <div class="card costum-card">
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
    </section>
  
    <!-- Paginación -->
    <nav class="paginacion d-flex flex-wrap justify-content-start gap-1">
      <button class="boton-principal fs-3 px-4">1</button>
      <button class="boton-principal fs-3 px-4">2</button>
      <button class="boton-principal fs-3 px-4">3</button>
      <button class="boton-principal fs-3 px-4">4</button>
      <button class="boton-principal fs-3 px-4">5</button>
      <button class="boton-principal fs-3 px-4">6</button>
      <button class="boton-principal fs-3 px-4">7</button>
      <button class="boton-principal fs-3 px-4">8</button>
      <button class="boton-principal fs-3 px-4">...</button>
    </nav>
  </main>


@include('footer')