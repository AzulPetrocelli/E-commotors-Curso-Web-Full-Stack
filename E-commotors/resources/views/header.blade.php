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
  <header>
      <nav class="navbar navbar-expand-sm position-fixed costum-navbar shadow-lg">
          <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">

                  <img src="images/logo.png" alt="Logo" width="60px">
                  <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="">
                      <a class="text-white nav-link jaro fs-3" href="#">Motos</a>
                    </li>
                    <li class="dropdown">
                      <a class="text-white nav-link dropdown-toggle jaro fs-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Accesorios
                      </a>
                      <ul class="dropdown-menu">
                        <!--Agregar foreach-->
                        <li><a class="dropdown-item jaro" href="#">Puños</a></li>
                        <li><a class="dropdown-item jaro" href="#">Another action</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a class="text-white nav-link dropdown-toggle jaro fs-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Repuestos
                      </a>
                      <ul class="dropdown-menu">
                        <!--Agregar foreach-->
                        <li><a class="dropdown-item jaro" href="#">Piñom</a></li>
                        <li><a class="dropdown-item jaro" href="#">Another action</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
          </div>
      </nav>
  </header>