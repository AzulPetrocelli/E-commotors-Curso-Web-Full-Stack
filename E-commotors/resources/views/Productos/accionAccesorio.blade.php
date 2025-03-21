   <!-- ERROR VALIDACION -->

    @include('headeradmin')

    <!-- SOMBRA -->
    <div class="pantalla-gris {{ $errors->any() ? '' : 'visually-hidden' }}" style="z-index: 10"></div>


    <!-- FORMULARIO PARA AGREGAR PRODUCTO -->
    <form action="{{ route('agregarAccesorio') }}" method="POST" enctype="multipart/form-data" id="form-agregar-producto"
        class=" {{ $errors->any() ? '' : 'visually-hidden' }} form-welcome centrar-fixed py-5" style="z-index: 1000;">
        @csrf

        <label class="w-75">
            <input type="text" value="{{ old('nombre_accesorio') }}" name="nombre_accesorio" id="nombre_accesorio" class="input-form" placeholder="Nombre" autocomplete="off" >
                @error('nombre_accesorio')
                    <span class="error-message varela">{{ $message }}</span>
                @enderror
        </label>

        <label class="w-75">
            <input type="number" value="{{ old('precio_accesorio', $accesorio->precio_accesorio ?? '') }}" name="precio_accesorio" id="precio_accesorio" class="input-form" placeholder="Precio" autocomplete="off">
            @error('precio_accesorio')
                <span class="error-message varela">{{ $message }}</span>
            @enderror
        </label>

        <label class="w-75">
            <input type="text" value="{{ old('id_tipo') }}" name="id_tipo" id="id_tipo" class="input-form" placeholder="Tipo" autocomplete="off">
            @error('id_tipo')
                <span class="error-message varela">{{ $message }}</span>
            @enderror
        </label>


        <label class="w-75">
            <input type="text" value="{{ old('descripcion_accesorio', $accesorio->descripcion_accesorio ?? '') }}" name="descripcion_accesorio"  id="descripcion_accesorio" class="input-form" placeholder="Descripcion" autocomplete="off">
            @error('descripcion_accesorio')
                <span class="error-message varela">{{ $message }}</span>
            @enderror
        </label>

        <label class="w-75">
            <label for="foto_accesorio" class="fs-5 varela">Imagen</label>
            <input type="file" class="form-control" name="foto_accesorio" id="foto_accesorio" style="background: var(--color-secundario);color: white; text-aling:center;">
            @error('foto_accesorio')
                <span class="error-message varela">{{ $message }}</span>
            @enderror
        </label>

        <div class="w-75 d-flex justify-content-end gap-2">
            <a href="#" class="boton-principal show">Cancelar</a>
            <button class="boton-principal">Crear Producto</button>
        </div>
    </form>

    <!-- FORMULARIO DE EDICION -->

<form action="" method="POST" enctype="multipart/form-data" id="form-editar-producto"
    class="form-welcome form-welcome centrar-fixed py-5 visually-hidden" style="z-index: 11;">
    @csrf
    @method('PUT')

    <input type="hidden" name="id_accesorio" id="edit-id-accesorio">

    <label class="w-75">
        <input type="text" name="nombre_accesorio" id="edit-nombre" class="input-form" placeholder="Nombre">
    </label>

    <label class="w-75">
        <input type="number" name="precio_accesorio" id="edit-precio" class="input-form" placeholder="Precio">
    </label>
    <label class="w-75">
        <input type="text" name="id_tipo" id="edit-tipo" class="input-form" placeholder="Tipo">
    </label>
    <label class="w-75">
        <textarea name="descripcion_accesorio" id="edit-descripcion" class="input-form" placeholder="Descripción"></textarea>
    </label>
    <label class="w-75">
        <label for="edit-foto" class="varela">Cambiar Imagen</label>
        <input type="file" name="foto_accesorio" id="edit-foto" class="form-control" style="background: var(--color-secundario);color: white; text-aling:center;">
    </label>
    <div class="w-75 d-flex justify-content-end gap-2">
        <button type="button" class="boton-principal cancelar">Cancelar</button>
        <button type="submit" class="btn btn-primary boton-principal">Guardar Cambios</button>
    </div>
</form><form id="form-editar-producto" class="form-welcome visually-hidden w-50 position-absolute start-50 translate-middle py-4 m-0"
style="z-index: 11; padding: 35px 0px; top: 56vh;" action="" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')

<input type="hidden" name="id_accesorio" id="edit-id-accesorio">

<label class="w-75">
    <input type="text" name="nombre_accesorio" id="edit-nombre" class="input-form" placeholder="Nombre">
</label>

<label class="w-75">
    <input type="number" name="precio_accesorio" id="edit-precio" class="input-form" placeholder="Precio">
</label>

<label class="w-75">
    <input type="text" name="id_tipo" id="edit-tipo" class="input-form" placeholder="Tipo">
</label>

<label class="w-75">
    <textarea name="descripcion_accesorio" id="edit-descripcion" class="input-form" placeholder="Descripción"></textarea>
</label>

<label class="w-75">
    <label for="edit-foto" class="varela">Cambiar Imagen</label>
    <input type="file" name="foto_accesorio" id="edit-foto" class="form-control"
        style="background: var(--color-secundario);color: white; text-align:center;">
</label>

<div class="w-75 d-flex justify-content-end gap-2">
    <button type="button" class="boton-principal cancelar">Cancelar</button>
    <button type="submit" class="btn btn-primary boton-principal">Guardar Cambios</button>
</div>
</form>



    <!-- Tabla de ABM -->
    <div class="d-flex justify-content-end gap-2 position-relative bg-white" style="margin-top: 75px; padding: 12px; height: 75px;">
        <form action="{{route('busqueda.accesorio')}}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="busqueda" id="busqueda" autocomplete="off" class="form-control input-form" placeholder="Buscar accesorio..." style="border: 0.5px solid rgb(102, 101, 101); box-shadow: none;">
                <button type="submit" class="btn btn-outline-secondary boton-principal">Buscar</button>
            </div>
        </form>
        <a href="{{url('admin')}}" class="boton-principal">Volver</a>
        <a href="#" class="boton-principal" id="agregar-producto">Agregar Producto</a> {{--{{url('accion-accesorio/agregar')}}--}}
    </div>
    <div style="width: 90%; overflow-x: auto; overflow-y: auto; height:80vh" class="m-auto mb-5">
        <table class="table" style="border-collapse: collapse">
            <thead>
                <tr>
                    <th scope="col">Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($accesorios as $accesorio)
                <tr>
                    <th scope="row">
                        <img src="{{ $accesorio->foto_accesorio ? asset('images/'.$accesorio->foto_accesorio) : asset('images/default-accesorio.jpg') }}" alt="Foto Accesorio" style="object-fit: cover; width: 100px; height: 80px;">
                    </th>
                    <td><div class="overflow-hidden" style="height: 80px">{{$accesorio->nombre_accesorio}}</div></td>
                    <td><div class="overflow-hidden" style="height: 80px">$ {{$accesorio->precio_accesorio}}</div></td>
                    <td><div class="overflow-hidden" style="height: 80px">{{$accesorio->tipo->nombre_tipo}}</div></td>
                    <td><div class="overflow-hidden" style="height: 80px">{{$accesorio->descripcion_accesorio}}</div></td>
                    <td class="d-flex justify-content-center align-items-center gap-3">
                        <div class="overflow-hidden" style="padding:20px;">
                            <a href="#"
                                class="btn confirmar-eliminacion"
                                data-id="{{ $accesorio->id_accesorio }}"
                                data-nombre="{{ $accesorio->nombre_accesorio }}">
                                <i class="las la-times-circle text-danger fs-1"></i>
                            </a>
                            <a href="#"
                                class="btn editar-accesorio"
                                data-id="{{ $accesorio->id_accesorio }}"
                                data-nombre="{{ $accesorio->nombre_accesorio }}"
                                data-precio="{{ $accesorio->precio_accesorio }}"
                                data-tipo="{{ $accesorio->tipo->nombre_tipo ?? '' }}"
                                data-descripcion="{{ $accesorio->descripcion_accesorio }}">
                                <i class="las la-edit text-primary fs-1"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- ASIDE DE VERIFICACION -->
    <aside class="confirmacion visually-hidden rounded shadow p-4 w-25 position-fixed top-50 start-50 translate-middle bg-white" style="min-width: 300px; z-index:1000">
        <p class="varela fs-2">¿Está seguro que desea eliminar el accesorio: <span id="nombre-accesorio"></span>?</p>
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





