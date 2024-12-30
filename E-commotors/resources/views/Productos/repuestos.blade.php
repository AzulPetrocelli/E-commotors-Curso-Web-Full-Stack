@include('header')

<main class="my-5 d-flex flex-column align-items-center w-100">
    <!-- Barra de búsqueda y filtro -->
    <section class="d-flex flex-wrap justify-content-between mt-5 w-75">

        <h1 class="jaro">
            {{ isset($tipoRepuesto) ? $tipoRepuesto->nombre_repuesto : 'Repuestos' }}
        </h1>

        <div class="d-flex flex-wrap justify-content-end gap-2">

        <form action="{{ url('productos-repuestos') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="busqueda" id="busqueda" autocomplete="off"
                    class="form-control input-form" placeholder="Buscar repuesto..."
                    value="{{ request('busqueda') }}"
                    style="border: 0.5px solid rgb(102, 101, 101); box-shadow: none;">
                <button type="submit" class="btn btn-outline-secondary boton-principal">Buscar</button>
            </div>
        </form>


            <div class="d-flex justify-content-end gap-2" style="height: 50px">
                <button class="boton-principal show">Filtros</button>
                <a class=" boton-principal" href="{{url("/productos-repuestos")}}">Limpiar Filtros</a>
            </div>
        </div>
    </section>

    <!-- LISTADO DE PRODUCTOS -->
    <section class="container-productos my-4 w-75">
        <div class="container-cards d-flex flex-wrap">

            <!-- CARD -->
            <section class="container-productos my-4 w-75">
                <div class="container-cards d-flex flex-wrap">
                    @foreach($repuestos as $repuesto)
                        <div class="card costum-card">
                            <a href="{{ route('repuesto.show', ['id' => $repuesto->id_repuesto]) }}"
                                    style="color:black; text-decoration:none;">
                                <img src="{{ asset('images/' . $repuesto->foto_repuesto) }}"
                                    class="card-img-top shadow-sm"
                                    style="height: 250px"
                                    alt="{{ $repuesto->nombre_repuesto }}">
                                <div class="card-body d-flex flex-column py-2">
                                    <h5 class="card-title jaro">{{ $repuesto->nombre_repuesto }}</h5>
                                    <p class="card-text varela">${{ $repuesto->precio_repuesto }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </section>

        <!-- Paginación personalizada -->
        <div class="pagination-container d-flex justify-content-center mt-4 w-100">
            <nav>
                <ul class="pagination custom-pagination">
                    <!-- Botón Anterior -->
                    @if ($repuestos->onFirstPage())
                    <li class="page-item disabled">
                        <a class="page-link">Anterior</a>
                    </li>
                    @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $repuestos->previousPageUrl() }}">Anterior</a>
                    </li>
                    @endif

                    <!-- Números de Página -->
                    @foreach ($repuestos->getUrlRange(1, $repuestos->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $repuestos->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                    @endforeach

                    <!-- Botón Siguiente -->
                    @if ($repuestos->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $repuestos->nextPageUrl() }}">Siguiente</a>
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
<div class="pantalla-gris"></div>
<aside id="filter-sidebar" class="container-show filter-sidebar visually-hidden w-75 pt-0">
    <form action="{{url('productos-repuestos')}}" method="GET">
        <div class="d-flex py-2 justify-content-between w-100 position-relative bg-white" style="height: 70px;">
            <h2 class="jaro">Filtros</h2>
            <div class="d-flex gap-2">
                {{-- Agregue la clase "salir" para con js hacer que se oculte el aside con ninguna otra accion, porque antes se actualizaba la pagina --}}
                <button type="button" class="boton-principal salir">Salir</button>
                <input type="submit" class="boton-principal" value="Filtrar">
            </div>
        </div>

        <!-- Tipo de Repuesto -->
        @if(!isset($tipoRepuesto))
        <section class="filter-group mt-3">
            <h3 class="jaro fs-4 mb-2">Tipo de Repuesto:</h3>
            <div class="card-body">
                <select name="tipo_de_repuesto" class="form-control">
                    <option value="">Seleccionar Tipo</option>
                    @foreach($tiposRep as $tipoRep)
                        <option value="{{ $tipoRep->id_repuesto }}"
                            {{ request('tipo_de_repuesto') == $tipoRep->id_repuesto ? 'selected' : '' }}>
                            {{ $tipoRep->nombre_repuesto }}
                        </option>
                    @endforeach
                </select>
            </div>
        </section>
        @endif

        <!-- Kilómetros -->
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
