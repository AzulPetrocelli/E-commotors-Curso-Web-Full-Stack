@include('header')

<main class="my-5 d-flex flex-column align-items-center w-100">
    <!-- Barra de búsqueda y filtro -->
    <section class="d-flex justify-content-between mt-5 w-75">
        <h1 class="jaro">Motos</h1>
        <div class="d-flex justify-content-end gap-2">
          <form action="" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="busqueda" id="busqueda" autocomplete="off" class="form-control" placeholder="Buscar moto..." style="border: 0.5px solid rgb(102, 101, 101); box-shadow: none;">
                <button type="submit" class="btn btn-outline-secondary">Buscar</button>
            </div>
        </form>
            <button class="boton-principal filtrar">Filtrar</button>
            <a class="boton-principal" href="{{url("/productos-motos")}}">Limpiar Filtros</a>
        </div>
    </section>

    <!-- LISTADO DE PRODUCTOS -->
    <section class="container-productos my-4 w-75">
        <div class="container-cards d-flex flex-wrap">

            <!-- CARD -->
            @foreach($motos as $moto)
            <div class="card costum-card">
                <a href="{{ route('motos.show', ['id' => $moto->id_moto]) }}">
                    <img src="{{ asset('images/' . $moto->foto_moto) }}" class="card-img-top shadow-sm" style="height: 250px" alt="{{ $moto->nombre }}">
                </a>
                    <div class="card-body d-flex flex-column py-2">
                        <h5 class="card-title jaro">{{ $moto->nombre }}</h5>
                        <p class="card-text varela">${{ $moto->precio_moto }}</p>
                    </div>
                    <div class="d-flex justify-content-end w-100 p-2">
                        <a href="#" class="boton-principal align-bottom">Comprar</a>
                    </div>
            </div>
            @endforeach
        </div>

        <!-- Paginación personalizada -->
        <div class="pagination-container d-flex justify-content-center mt-4 w-100">
            <nav>
                <ul class="pagination custom-pagination">
                    <!-- Botón Anterior -->
                    @if ($motos->onFirstPage())
                    <li class="page-item disabled">
                        <a class="page-link">Anterior</a>
                    </li>
                    @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $motos->previousPageUrl() }}">Anterior</a>
                    </li>
                    @endif

                    <!-- Números de Página -->
                    @foreach ($motos->getUrlRange(1, $motos->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $motos->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                    @endforeach

                    <!-- Botón Siguiente -->
                    @if ($motos->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $motos->nextPageUrl() }}">Siguiente</a>
                    </li>
                    @else
                    <li class="page-item disabled">
                        <a class="page-link">Siguiente</a>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>
    </section>
</main>


<!-- FILTRO -->
<aside class="filter-sidebar aside-oculto w-75 pt-0">
    <form action="{{url('productos-motos')}}" method="GET">
        <section class="position-fixed" style="width: 70vw">
            <div class="d-flex p-2 justify-content-between w-100 position-relative bg-white" style="height: 70px; margin-top: -70px;">
                <h2 class="jaro">Filtros</h2>
                <div class="d-flex gap-2" style="">
                    <button class="boton-principal filtrar">Salir</button>
                    <input type="submit" class="boton-principal filtrar"></button>
                </div>
            </div>
        </section>
        
        <div style="margin-top: 90px ">
            <!-- Categorías -->
            <section class="filter-group">
                <h3 class="jaro fs-4 mb-2">Categoría:</h3>
                <div class="d-flex flex-wrap gap-2">
                    @foreach($categorias as $categoria)
                    <input type="checkbox" href="#" class="varela fw-bold filter-btn" name="categoria[]" value="{{$categoria->id_categoria}}">{{$categoria->nombre_categoria}}</input>
                    @endforeach
                </div>
            </section>

            <!-- Marca -->
            <section class="filter-group">
                <h3 class="jaro fs-4 mb-2">Marca:</h3>
                <div class="d-flex flex-wrap gap-2">
                    @foreach($marcas as $marca)
                        <input type="checkbox" href="#" class="varela fw-bold filter-btn" name="marca[]" value="{{$marca->id_marca}}">{{$marca->nombre_marca}}</input>
                    @endforeach
                </div>
            </section>


        <!-- Kilómetros -->
        <section class="filter-group">
            <h3 class="jaro fs-4 mb-2">Precio:</h3>
            <div class="filter-content collapse show" id="collapse_3">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Min</label>
                            <input type="number" class="form-control" placeholder="0" name="min">
                        </div>
                        <div class="form-group text-right col-md-6">
                            <label>Max</label>
                            <input type="number" class="form-control" placeholder="100000" name="max">
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </form>
</aside>

@include('footer')
