@include('header')

<main class="my-5 d-flex flex-column align-items-center w-100">
    <!-- Barra de búsqueda y filtro -->
    <section class="d-flex flex-wrap justify-content-between mt-5 w-75">

        <h1 class="jaro">
            {{ isset($tipo) ? $tipo->nombre_tipo : 'Accesorios' }}
        </h1>

        <div class="d-flex flex-wrap justify-content-end gap-2">

            <form action="{{ url('productos-accesorios') }}" method="GET" class="mb-4">
                <div class="input-group">

                    <input type="text" name="busqueda" id="busqueda" autocomplete="off"
                        class="form-control input-form" placeholder="Buscar accesorio..."
                        style="border: 0.5px solid rgb(102, 101, 101); box-shadow: none;">

                    <button type="submit" class="btn btn-outline-secondary boton-principal">Buscar</button>

                </div>
            </form>


            <div class="d-flex justify-content-end gap-2" style="height: 50px">
                <button class="boton-principal show">Filtros</button>
                <a class=" boton-principal" href="{{url("/productos-accesorios")}}">Limpiar Filtros</a>
            </div>
        </div>
    </section>

    <!-- LISTADO DE PRODUCTOS -->
    <section class="container-cards my-4">

            <!-- CARDS -->
            @foreach($accesorios as $accesorio)
                <div class="card costum-card">
                    <a href="{{ route('accesorios.show', ['id' => $accesorio->id_accesorio]) }}" style="color:black; text-decoration:none;">

                        <!-- IMAGEN -->
                        <img src="{{ asset('images/' . $accesorio->foto_accesorio) }}"
                             alt="{{ $accesorio->nombre_accesorio }}"
                             class="card-img-top shadow-sm" style="height: 250px">

                        <!-- CUERPO -->
                        <div class="card-body d-flex flex-column py-2">
                            <h5 class="card-title jaro">{{ $accesorio->nombre_accesorio }}</h5>
                            <p class="card-text varela">${{ $accesorio->precio_accesorio }}</p>
                        </div>

                    </a>
                </div>
            @endforeach
    </section>

    <!-- Paginación personalizada -->
    <nav class="pagination-container">
        <ul class="pagination custom-pagination">
            <!-- Botón Anterior -->
            @if ($accesorios->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link">Anterior</a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $accesorios->previousPageUrl() }}">Anterior</a>
                </li>
            @endif

            <!-- Números de Página -->
            @foreach ($accesorios->getUrlRange(1, $accesorios->lastPage()) as $page => $url)
                <li class="page-item {{ $page == $accesorios->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
            @endforeach

            <!-- Botón Siguiente -->
            @if ($accesorios->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $accesorios->nextPageUrl() }}">Siguiente</a>
                </li>
            @else
                <li class="page-item disabled">
                    <a class="page-link">Siguiente</a>
                </li>
            @endif
        </ul>
    </nav>
</main>

<!-- FILTRO -->
<div class="pantalla-gris"></div>
<aside class="confirmacion container-show filter-sidebar visually-hidden w-75 pt-0">
    <form action="{{url('productos-accesorios')}}" method="GET">
        <div class="d-flex py-2 justify-content-between w-100 position-relative bg-white" style="height: 70px;">
            <h2 class="jaro">Filtros</h2>
            <div class="d-flex gap-2">
                <button type="button" class="boton-principal salir">Salir</button>
                <input type="submit" class="boton-principal show" value="Filtrar">
            </div>
        </div>
            </section>

        <!-- Tipo de Accesorio -->
        @if(isset($tipos) && $tipo==null)
            <section class="filter-group mt-3">
                <h3 class="jaro fs-4 mb-2">Tipo de Accesorio:</h3>
                <div class="card-body">
                    <select name="categoria" class="input-form bg-danger">
                        <option value="">Seleccionar Tipo</option>
                        @foreach($tipos as $tipo)
                            <option class="varela w-50" value="{{ $tipo->id_tipo }}"
                                {{ request('categoria') == $tipo->id_tipo ? 'selected' : '' }}>
                                {{ $tipo->nombre_tipo }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </section>
        @endif

        <!-- Minimo y Maximo precio -->
        <section class="filter-group">
            <h3 class="jaro fs-4 mb-2">Precio:</h3>
                <div class="card-body">
                    <div class="form-row d-flex gap-2">
                        <div class="form-group col-md-6">
                            <label class="varela fs-3">Minimo</label>
                            <input type="number" class="input-form" placeholder="0" name="min">
                        </div>
                        <div class="form-group text-right col-md-6">
                            <label class="varela fs-3">Maximo</label>
                            <input type="number" class="input-form" placeholder="100000" name="max">
                        </div>
                    </div>
                </div>
        </section>
    </form>
</aside>




@include('footer')
