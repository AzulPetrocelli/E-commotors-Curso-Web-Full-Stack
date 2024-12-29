@include('headeradmin')

    <!-- FORMULARIO PARA AGREGAR PRODUCTO -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="fondo-gris" style="z-index: 10">
    </div>

    <form class="form-welcome w-50 position-absolute top-50 start-50 translate-middle py-4 m-0" style="z-index: 11; padding: 35px 0px;" action="{{ route('agregarProducto') }}" method="POST" enctype="multipart/form-data"><!-- ;-->
        @csrf
        <div class="w-75">
            <input type="text" placeholder="Nombre" class="input-form" id="nombre" name="nombre" required value="{{ old('nombre', $moto->nombre ?? '') }}">
        </div>

        <div class="w-75">
            <input type="text" placeholder="Estado" class="input-form" id="estado" name="estado" required value="{{ old('estado', $moto->estado ?? '') }}">
        </div>

        <div class="w-75">
            <input type="number" placeholder="Precio" class="input-form" id="precio_moto" name="precio_moto" autocomplete="off" required value="{{ old('precio_moto', $moto->precio_moto ?? '') }}">
        </div>

        <div class="w-75">
            <input type="text" placeholder="Categoría" class="input-form" id="id_categoria" name="id_categoria" autocomplete="off" required value="{{ old('id_categoria') }}">
        </div>

        <div class="w-75">
            <input type="text" placeholder="Marca" class="input-form" id="id_marca" name="id_marca" autocomplete="off" required value="{{ old('id_marca') }}">
        </div>

        <div class="w-75">
            <input type="text" placeholder="Descripcion" class="input-form" id="descripcion_moto" name="descripcion_moto" autocomplete="off" required value="{{ old('descripcion_moto', $moto->descripcion_moto ?? '') }}">
        </div>

        <div class="w-75">
            <label for="foto_moto" class="fs-5 varela">Imagen</label>
            <input type="file" class="form-control" id="foto_moto" name="foto_moto" style="background: var(--color-secundario);color: white; text-aling:center;">
        </div>

        <div class="w-75 d-flex justify-content-end gap-2">
            <a href="#" class="boton-principal filtrar">Cancelar</a>
            <button type="submit" class="boton-principal">Crear Producto</button>
        </div>
    </form>


    <!-- Tabla de ABM -->
    <div class="d-flex justify-content-end gap-2 position-relative bg-white" style="margin-top: 75px; padding: 12px; height: 75px;">
        <form action="" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="busqueda" id="busqueda" autocomplete="off" class="form-control input-form" placeholder="Buscar moto..." style="border: 0.5px solid rgb(102, 101, 101); box-shadow: none;">
                <button type="submit" class="btn btn-outline-secondary boton-principal">Buscar</button>
            </div>
        </form>
        <a href="{{url('admin')}}" class="boton-principal">Volver</a>
        <a href="{{url('accion-moto/agregar')}}" class="boton-principal">Agregar Producto</a>
    </div>
    <div style="width: 90%; overflow-x: auto; overflow-y: auto; height:80vh" class="m-auto">
        <table class="table" style="border-collapse: collapse">
            <thead>
                <tr>
                    <th scope="col">Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($motos as $moto)
                <tr>
                    <th scope="row">
                        <img src="{{ $moto->foto_moto ? asset('images/'.$moto->foto_moto) : asset('images/default-moto.jpg') }}" alt="Foto Moto" style="object-fit: cover; width: 100px; height: 80px;">
                    </th>
                    <td><div class="overflow-hidden" style="height: 80px">{{$moto->nombre}}</div></td>
                    <td><div class="overflow-hidden" style="height: 80px">{{$moto->precio_moto}}</div></td>
                    <td><div class="overflow-hidden" style="height: 80px">{{$moto->categoria->nombre_categoria}}</div></td>
                    <td><div class="overflow-hidden" style="height: 80px">{{$moto->marca->nombre_marca}}</div></td>
                    <td><div class="overflow-hidden" style="height: 80px">{{$moto->descripcion_moto}}</div></td>
                    <td class="d-flex flex-nowrap justify-content-center align-items-center gap-3" style="height: 100px">
                        <a href="#"><i class="las la-times-circle text-danger fs-2"></i></a>
                        <a href="#"><i class="las la-edit text-primary fs-2"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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

    <!-- ASIDE DE VERIFICACION -->
    <aside class="confirmacion aside-oculto rounded shadow p-4 w-25 position-fixed top-50 start-50 translate-middle bg-white" style="min-width: 300px; z-index:1000">
        <p class="varela fs-2">Esta seguro que desea eliminar el producto?</p>
        <div class="d-flex justify-content-end gap-2">
            <a href="#" class="boton-principal filtrar">Aceptar</a>
            <a href="#" class="boton-principal filtrar">Cancelar</a>
        </div>
    </aside>

@include('footer')