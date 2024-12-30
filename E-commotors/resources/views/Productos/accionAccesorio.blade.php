@include('headeradmin')
<!DOCTYPE html>
<html lang="es">
<body>

    <!-- Tabla de ABM -->
    <div class="d-flex justify-content-end gap-2 position-relative bg-white" style="margin-top: 75px; padding: 12px; height: 75px;">
        {{--
            <form action="" method="GET" class="mb-4">
                <div class="input-group">
                    <input type="text" name="busqueda" id="busqueda" autocomplete="off" class="form-control input-form" placeholder="Buscar moto..." style="border: 0.5px solid rgb(102, 101, 101); box-shadow: none;">
                    <button type="submit" class="btn btn-outline-secondary boton-principal">Buscar</button>
                </div>
            </form>
        --}}
        <a href="{{url('admin')}}" class="boton-principal">Volver</a>
        <a href="#" class="boton-principal" id="agregar-producto">Agregar Producto</a>{{--{{url('accion-moto/agregar')}}--}}
    </div>

    <div style="width: 90%; overflow-x: auto; overflow-y: auto; height:80vh" class="m-auto">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($accesorios as $accesorio)
                <tr class="fila-abm">
                    <th scope="row">
                        <img src="{{ $accesorio->foto_accesorio ? asset('images/'.$accesorio->foto_accesorio) : asset('images/default-accesorio.jpg') }}" alt="Foto Accesorio" class="img-abm">
                    </th>
                    <td><div class="overflow-hidden" style="height: 80px">{{$accesorio->nombre_accesorio}}</div></td>
                    <td><div class="overflow-hidden" style="height: 80px">{{$accesorio->precio_accesorio}}</div></td>
                    <td><div class="overflow-hidden" style="height: 80px">{{$accesorio->tipo->nombre_tipo}}</div></td>
                    <td><div class="overflow-hidden" style="height: 80px">{{$accesorio->descripcion_accesorio}}</div></td>
                    <td class="d-flex flex-nowrap justify-content-center align-items-center gap-3" style="height: 100px">
                        <a href="#" class="eliminar"><i class="las la-times-circle text-danger fs-2"></i></a>
                        <a href="#" class="editar"><i class="las la-edit text-primary fs-2"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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
