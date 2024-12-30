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

    <!-- SOMBRA -->
    <div class="pantalla-gris" style="z-index: 10"></div>

    <!-- FORMULARIO PARA AGREGAR PRODUCTO -->
    <form id="form-agregar-producto" class="form-welcome visually-hidden w-50 position-absolute start-50 translate-middle py-4 m-0" style="z-index: 11; padding: 35px 0px; top: 56vh;" action="{{ route('agregarMoto') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label class="w-75">
            <input type="text" placeholder="Nombre" required autocomplete="off" class="input-form" id="nombre" name="nombre" value="{{ old('nombre') }}">
                @error('nombre')
                    <div class="error-message varela text-danger">{{ $message }}</div>
                @enderror
        </label>

        <label class="w-75">
            <input type="text" placeholder="Estado" required autocomplete="off" class="input-form" id="estado" name="estado" value="{{ old('estado', $moto->estado ?? '') }}">
            @error('estado')
                <div class="error-message varela">{{ $message }}</div>
            @enderror
        </label>

        <label class="w-75">
            <input type="number" placeholder="Precio" required autocomplete="off" class="input-form" id="precio_moto" name="precio_moto" autocomplete="off" value="{{ old('precio_moto', $moto->precio_moto ?? '') }}">
            @error('precio_moto')
                <div class="error-message varela">{{ $message }}</div>
            @enderror
        </label>

        <label class="w-75">
            <input type="text" placeholder="Categoría" required class="input-form" id="id_categoria" name="id_categoria" autocomplete="off" value="{{ old('id_categoria') }}">
            @error('id_categoria')
                <div class="error-message varela">{{ $message }}</div>
            @enderror
        </label>

        <label class="w-75">
            <input type="text" placeholder="Marca" required autocomplete="off" class="input-form" id="id_marca" name="id_marca" autocomplete="off" value="{{ old('id_marca') }}">
            @error('id_marca')
                <div class="error-message varela">{{ $message }}</div>
            @enderror
        </label>

        <label class="w-75">
            <input type="text" placeholder="Descripcion" required autocomplete="off" class="input-form" id="descripcion_moto" name="descripcion_moto" autocomplete="off" value="{{ old('descripcion_moto', $moto->descripcion_moto ?? '') }}">
            @error('descripcion_moto')
                <div class="error-message varela">{{ $message }}</div>
            @enderror
        </label>

        <label class="w-75">
            <label for="foto_moto" class="fs-5 varela">Imagen</label>
            <input type="file"  class="form-control" id="foto_moto" name="foto_moto" style="background: var(--color-secundario);color: white; text-aling:center;">
            @error('foto_moto')
                <div class="error-message varela">{{ $message }}</div>
            @enderror
        </label>

        <div class="w-75 d-flex justify-content-end gap-2">
            <a href="#" class="boton-principal show">Cancelar</a>
            <button type="submit" class="boton-principal">Crear Producto</button>
        </div>
    </form>

    <!-- FORMULARIO DE EDICION -->

<form id="form-editar-producto" class="form-welcome visually-hidden w-50 position-absolute start-50 translate-middle py-4 m-0"
    style="z-index: 11; padding: 35px 0px; top: 56vh;" action="" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input type="hidden" name="id_moto" id="edit-id-moto">

    <label class="w-75">
        <input type="text" name="nombre" id="edit-nombre" class="input-form" placeholder="Nombre">
    </label>
    <label class="w-75">
        <input type="text" name="estado" id="edit-estado" class="input-form" placeholder="Estado">
    </label>
    <label class="w-75">
        <input type="number" name="precio_moto" id="edit-precio" class="input-form" placeholder="Precio">
    </label>
    <label class="w-75">
        <input type="text" name="id_categoria" id="edit-categoria" class="input-form" placeholder="Categoría">
    </label>
    <label class="w-75">
        <input type="text" name="id_marca" id="edit-marca" class="input-form" placeholder="Marca">
    </label>
    <label class="w-75">
        <textarea name="descripcion_moto" id="edit-descripcion" class="input-form" placeholder="Descripción"></textarea>
    </label>
    <label class="w-75">
        <label for="edit-foto" class="varela">Cambiar Imagen</label>
        <input type="file" name="foto_moto" id="edit-foto" class="form-control" style="background: var(--color-secundario);color: white; text-aling:center;">
    </label>
    <div class="w-75 d-flex justify-content-end gap-2">
        <button type="button" class="boton-principal cancelar">Cancelar</button>
        <button type="submit" class="btn btn-primary boton-principal">Guardar Cambios</button>
    </div>
</form>


    <!-- Tabla de ABM -->
    <div class="d-flex justify-content-end gap-2 position-relative bg-white" style="margin-top: 75px; padding: 12px; height: 75px;">
        <form action="{{route('busqueda.moto')}}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="busqueda" id="busqueda" autocomplete="off" class="form-control input-form" placeholder="Buscar moto..." style="border: 0.5px solid rgb(102, 101, 101); box-shadow: none;">
                <button type="submit" class="btn btn-outline-secondary boton-principal">Buscar</button>
            </div>
        </form>
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

    <!-- ASIDE DE VERIFICACION -->
    <aside class="confirmacion visually-hidden rounded shadow p-4 w-25 position-fixed top-50 start-50 translate-middle bg-white" style="min-width: 300px; z-index:1000">
        <p class="varela fs-2">¿Está seguro que desea eliminar la moto: <span id="nombre-moto"></span>?</p>
        <div class="d-flex justify-content-end gap-2">
            <form id="form-confirmar-eliminar" action="" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="boton-principal">Aceptar</button>
            </form>
            <button type="button" class="boton-principal cancelar">Cancelar</button>
        </div>
    </aside>

@include('footer')




