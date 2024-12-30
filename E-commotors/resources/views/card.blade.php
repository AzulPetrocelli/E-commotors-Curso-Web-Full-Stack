@include('header')

<div class="pantalla-gris"></div>
<aside class="container-show visually-hidden position-fixed top-50 start-50 translate-middle w-75" style="z-index:999;">
    <form action="{{ route('mensaje.store') }}" method="POST" class="formulario-base w-100 d-flex flex-column justify-content-center gap-3">
        @csrf <!-- Token de seguridad de Laravel -->
        <label for=""><input type="text" name="nombre_mensaje" placeholder="Nombre..." class="input-form"></label>
        <label for=""><input type="text" name="tipo_mensaje" placeholder="Tipo de Mensaje..." class="input-form"></label>
        <label for=""><textarea name="descripcion_mensaje" class="input-form" placeholder="Descripción del Mensaje..."></textarea></label>
        <label for=""><textarea name="productos_consultados" class="input-form" placeholder="Productos Consultados..."></textarea></label>

        <div class="d-flex justify-content-end gap-2">
            <a href="#" class="boton-principal show">Cancelar</a>
            <button type="submit" class="boton-principal">Enviar Mensaje</button>
        </div>
    </form>
</aside>

<!-- Mostrar mensaje de éxito si existe -->
@if(session('success'))
    <div class="alert alert-success w-75 mx-auto my-3">
        {{ session('success') }}
    </div>
@endif

<section class="container-card-view">
    <div class="container-images-card-view">
        <img src="{{ asset('images/' . $moto->foto_moto) }}" class="card-image img-fluid" alt="{{ $moto->nombre }}">
    </div>
    <div class="p-2 w-50">
        <h1 class="jaro fs-1">{{ $moto->nombre }}</h1>
        <h2 class="jaro fs-2">Descripcion</h2>
        <p class="varela">
            {{ $moto->descripcion_moto }}
        </p>
        <h3 class="jaro fs-3">Estado: {{ $moto->estado }}</h3>
        <h3 class="jaro fs-3">Categoria: {{ $moto->categoria->nombre_categoria }}</h3>
        <p class="jaro fs-2">Precio: ${{ $moto->precio_moto }}</p>
        <div class="d-flex justify-content-end">
            <a href="#" class="boton-principal m-2 show">Enviar Mensaje</a>
            <a href="#" class="boton-principal m-2">Comprar</a>
        </div>
    </div>
</section>

@include('footer')
