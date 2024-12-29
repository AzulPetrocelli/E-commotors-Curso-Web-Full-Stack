<h1>VIEW DE CREAR MOTOS</h1>
@include('headeradmin')
<!DOCTYPE html>
<html lang="es">
<body>
    <table class="table" >
        <div class="d-flex justify-content-end gap-2 position-sticky" style="margin-top:40px; margin-right:10px;">
            <a href="{{url('admin')}}" class="boton-principal">Volver</a>
            <a href="{{url('accion-moto/agregar')}}" class="boton-principal">Agregar Producto</a>
        </div>
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
                    <img src="{{ $moto->foto_moto ? asset('images/'.$moto->foto_moto) : asset('images/default-moto.jpg') }}" alt="Foto Moto" style="width: 100px; height: auto;">
                </th>
                <td>{{$moto->nombre}}</td>
                <td>{{$moto->precio_moto}}</td>
                <td>{{$moto->categoria->nombre_categoria}}</td>
                <td>{{$moto->marca->nombre_marca}}</td>
                <td>{{$moto->descripcion_moto}}</td>
                <td class="d-flex flex-nowrap gap-2">
                    <a href="#"><i class="las la-times-circle text-danger fs-2"></i></a>
                    <a href="#"><i class="las la-edit text-primary fs-2"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Paginación personalizada -->
    <<div class="pagination-container d-flex justify-content-center mt-4 w-100">
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

    <!-- FALTA TERMINAR -->
    <aside class="confirmacion aside-oculto rounded shadow p-4 w-25 position-fixed top-50 start-50 translate-middle bg-white" style="min-width: 300px; z-index:1000">
        <p class="varela fs-2">Esta seguro que desea eliminar el producto?</p>
        <div class="d-flex justify-content-end gap-2">
            <a href="#" class="boton-principal filtrar">Aceptar</a>
            <a href="#" class="boton-principal filtrar">Cancelar</a>
        </div>
    </aside>

</body>
</html>

@include('footer')