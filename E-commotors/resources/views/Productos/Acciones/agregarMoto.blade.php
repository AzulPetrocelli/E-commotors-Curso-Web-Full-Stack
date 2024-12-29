<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Estilos Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

        <!--Tipografia-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaro:opsz@6..72&family=Varela+Round&display=swap" rel="stylesheet">

    <!--ICONOS-->
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >

    <!--Estilos CSS-->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <title>Agregar Producto</title>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="form-welcome w-50" action="{{ route('agregarProducto') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="w-75">
            <label for="nombre" class="fs-5 varela">Nombre</label>
            <input type="text" class="input-form" id="nombre" name="nombre" required value="{{ old('nombre', $moto->nombre ?? '') }}">
        </div>

        <div class="w-75">
            <label for="estado" class="fs-5 varela">Estado</label>
            <input type="text" class="input-form" id="estado" name="estado" required value="{{ old('estado', $moto->estado ?? '') }}">
        </div>

        <div class="w-75">
            <label for="precio_moto" class="fs-5 varela">Precio</label>
            <input type="number" class="input-form" id="precio_moto" name="precio_moto" required value="{{ old('precio_moto', $moto->precio_moto ?? '') }}">
        </div>

        <div class="w-75">
            <label for="id_categoria" class="fs-5 varela">Categoría</label>
            <input type="text" class="input-form" id="id_categoria" name="id_categoria" required value="{{ old('id_categoria') }}">
        </div>

        <div class="w-75">
            <label for="id_marca" class="fs-5 varela">Marca</label>
            <input type="text" class="input-form" id="id_marca" name="id_marca" required value="{{ old('id_marca') }}">
        </div>

        <div class="w-75">
            <label for="descripcion_moto" class="fs-5 varela">Descripcion:</label>
            <input type="text" class="input-form" id="descripcion_moto" name="descripcion_moto" required value="{{ old('descripcion_moto', $moto->descripcion_moto ?? '') }}">
        </div>

        <div class="w-75">
            <label for="foto_moto" class="fs-5 varela">Imagen</label>
            <input type="file" class="form-control" id="foto_moto" name="foto_moto" style="background: var(--color-secundario);color: white; text-aling:center;">
        </div>

        <div class="w-75 d-flex justify-content-end">
            <button type="submit" class="boton-principal">Crear Producto</button>
        </div>
    </form>
</body>
</html>

