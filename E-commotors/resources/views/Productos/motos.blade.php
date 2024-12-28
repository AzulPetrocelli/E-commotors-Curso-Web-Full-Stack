@include('header')

<main class="my-5 d-flex flex-column align-items-center w-100">
    <!-- Barra de búsqueda y filtro -->
    <section class="d-flex justify-content-between mt-5 w-75">
        <h1 class="jaro">Motos</h1>
        <div class="d-flex justify-content-end gap-2">
            <input type="text" placeholder="Buscar..." class="input-form jaro w-100"/>
            <button class="boton-principal filtrar">Filtrar</button>
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
                        <p class="card-text varela">${{ $moto->precio_base }}</p>
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
    <section class="position-fixed" style="width: 70vw">
        <div class="d-flex p-2 justify-content-between w-100 position-relative bg-white" style="height: 70px;">
            <h2 class="jaro">Filtros</h2>
            <div class="d-flex gap-2" style="">
                <button class="boton-principal filtrar">Salir</button>
                <button class="boton-principal filtrar">Filtrar</button>
            </div>
        </div>
    </section>

    <div style="margin-top: 70px ">
        <!-- Categorías -->
        <section class="filter-group">
            <h3 class="jaro fs-4 mb-2">Categorías:</h3>
            <div class="d-flex flex-wrap gap-2">
                <a href="#" class="varela fw-bold filter-btn">Calle</a>
                <a href="#" class="varela fw-bold filter-btn">Enduro</a>
                <a href="#" class="varela fw-bold filter-btn">Scooters</a>
                <a href="#" class="varela fw-bold filter-btn">Touring</a>
                <a href="#" class="varela fw-bold filter-btn">Naked</a>
                <a href="#" class="varela fw-bold filter-btn">Retro</a>
            </div>
        </section>

        <!-- Marca -->
        <section class="filter-group">
            <h3 class="jaro fs-4 mb-2">Marca:</h3>
            <div class="d-flex flex-wrap gap-2">
                <a href="#" class="varela fw-bold filter-btn">Zanella</a>
                <a href="#" class="varela fw-bold filter-btn">Motomel</a>
                <a href="#" class="varela fw-bold filter-btn">Gilera</a>
                <a href="#" class="varela fw-bold filter-btn">Yamaha</a>
                <a href="#" class="varela fw-bold filter-btn">Honda</a>
                <a href="#" class="varela fw-bold filter-btn">BMW</a>
                <a href="#" class="varela fw-bold filter-btn">Kawasaki</a>
            </div>
        </section>
    </div>

    <!-- Kilómetros -->
    <section class="filter-group">
        <h3 class="jaro fs-4 mb-2">Kilómetros:</h3>
        <div class="d-flex flex-wrap gap-2">
            <a href="#" class="varela fw-bold filter-btn">0 km</a>
            <a href="#" class="varela fw-bold filter-btn">0 a 4.500 km</a>
            <a href="#" class="varela fw-bold filter-btn">4.500 a 20.000 km</a>
            <a href="#" class="varela fw-bold filter-btn">20.000 a 100.000 km</a>
        </div>
    </section>

    <section class="filter-group">
        <h3 class="jaro fs-4 mb-2">Kilómetros:</h3>
        <div class="d-flex flex-wrap gap-2">
            <a href="#" class="varela fw-bold filter-btn">0 km</a>
            <a href="#" class="varela fw-bold filter-btn">0 a 4.500 km</a>
            <a href="#" class="varela fw-bold filter-btn">4.500 a 20.000 km</a>
            <a href="#" class="varela fw-bold filter-btn">20.000 a 100.000 km</a>
        </div>
    </section>

    <section class="filter-group">
        <h3 class="jaro fs-4 mb-2">Kilómetros:</h3>
        <div class="d-flex flex-wrap gap-2">
            <a href="#" class="varela fw-bold filter-btn">0 km</a>
            <a href="#" class="varela fw-bold filter-btn">0 a 4.500 km</a>
            <a href="#" class="varela fw-bold filter-btn">4.500 a 20.000 km</a>
            <a href="#" class="varela fw-bold filter-btn">20.000 a 100.000 km</a>
        </div>
    </section>

    <section class="filter-group">
        <h3 class="jaro fs-4 mb-2">Kilómetros:</h3>
        <div class="d-flex flex-wrap gap-2">
            <a href="#" class="varela fw-bold filter-btn">0 km</a>
            <a href="#" class="varela fw-bold filter-btn">0 a 4.500 km</a>
            <a href="#" class="varela fw-bold filter-btn">4.500 a 20.000 km</a>
            <a href="#" class="varela fw-bold filter-btn">20.000 a 100.000 km</a>
        </div>
    </section>


    <section class="filter-group">
        <h3 class="jaro fs-4 mb-2">Kilómetros:</h3>
        <div class="d-flex flex-wrap gap-2">
            <a href="#" class="varela fw-bold filter-btn">0 km</a>
            <a href="#" class="varela fw-bold filter-btn">0 a 4.500 km</a>
            <a href="#" class="varela fw-bold filter-btn">4.500 a 20.000 km</a>
            <a href="#" class="varela fw-bold filter-btn">20.000 a 100.000 km</a>
        </div>
    </section>

    <section class="filter-group">
        <h3 class="jaro fs-4 mb-2">Kilómetros:</h3>
        <div class="d-flex flex-wrap gap-2">
            <a href="#" class="varela fw-bold filter-btn">0 km</a>
            <a href="#" class="varela fw-bold filter-btn">0 a 4.500 km</a>
            <a href="#" class="varela fw-bold filter-btn">4.500 a 20.000 km</a>
            <a href="#" class="varela fw-bold filter-btn">20.000 a 100.000 km</a>
        </div>
    </section>

</aside>

@include('footer')
