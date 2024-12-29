@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('agregarProducto') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required value="{{ old('nombre', $moto->nombre ?? '') }}">
    </div>
    <div class="mb-3">
        <label for="estado" class="form-label">Estado</label>
        <input type="text" class="form-control" id="estado" name="estado" required value="{{ old('estado', $moto->estado ?? '') }}">
    </div>
    <div class="mb-3">
        <label for="precio_moto" class="form-label">Precio</label>
        <input type="number" class="form-control" id="precio_moto" name="precio_moto" required value="{{ old('precio_moto', $moto->precio_moto ?? '') }}"> 
    </div>
    <div class="mb-3">
        <label for="id_categoria" class="form-label">Categoría</label>
        <input type="text" class="form-control" id="id_categoria" name="id_categoria" required value="{{ old('id_categoria') }}">
    </div>
    
    <div class="mb-3">
        <label for="id_marca" class="form-label">Marca</label>
        <input type="text" class="form-control" id="id_marca" name="id_marca" required value="{{ old('id_marca') }}">
    </div>
    <div class="mb-3">
        <label for="descripcion_moto" class="form-label">Descripcion:</label>
        <input type="text" class="form-control" id="descripcion_moto" name="descripcion_moto" required value="{{ old('descripcion_moto', $moto->descripcion_moto ?? '') }}">
    </div>
    <div class="mb-3">
        <label for="foto_moto" class="form-label">Imagen</label>
        <input type="file" class="form-control" id="foto_moto" name="foto_moto">
    </div>
    <button type="submit" class="btn btn-primary">Crear Producto</button>
</form>