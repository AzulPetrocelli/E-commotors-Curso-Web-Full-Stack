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
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <link rel="icon" href="images/logo.png" type="image/png" />

    <title>Document</title>

</head>

<body>
  <header>
      <nav class="navbar navbar-expand-sm position-fixed costum-navbar shadow-lg">
          <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse w-100" id="navbarScroll">
                  <a href="{{route('/main')}}">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" width="60px">
                  </a>
                  <ul class="navbar-nav w-100 my-2 my-lg-0">
                    <li class="">
                      <a class="text-white nav-link jaro fs-3" href="{{url('productos-motos')}}">Motos</a>
                    </li>
                    <li class="dropdown">
                      <a class="text-white nav-link dropdown-toggle jaro fs-3" href="{{'productos-accesorios'}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Accesorios
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item dropdown-item-custom jaro" href="{{url('productos-accesorios')}}">Todos</a></li>
                        @foreach($tipos as $tipo)
                            <li>
                                <a class="dropdown-item dropdown-item-custom jaro"
                                  href="{{ route('accesorios.filtrar', ['id' => $tipo->id_tipo]) }}">
                                  {{ $tipo->nombre_tipo }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    </li>
                    <li class="dropdown">
                      <a class="text-white nav-link dropdown-toggle jaro fs-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Repuestos
                      </a>

                      <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item dropdown-item-custom jaro" href="{{ url('productos-repuestos') }}">
                                Todos
                            </a>
                        </li>
                        @foreach($tiposRep as $tipoRep)
                            <li>
                                <a class="dropdown-item dropdown-item-custom jaro"
                                  href="{{ route('repuestos.filtrar', ['id' => $tipoRep->id_repuesto]) }}">
                                    {{ $tipoRep->nombre_repuesto }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    </li>
                  </ul>
                </div>
          </div>
      </nav>
  </header>
