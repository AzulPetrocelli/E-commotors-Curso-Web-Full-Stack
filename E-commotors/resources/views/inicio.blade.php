<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Estilos Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <!--Tipografia-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaro:opsz@6..72&family=Varela+Round&display=swap" rel="stylesheet">
    
    <!--ICONOS-->
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    
    <!--Estilos CSS-->
    <link rel="stylesheet" href="css/main.css">

    <title>Document</title>

</head>

<body>
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

    <section class="container-productos">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>