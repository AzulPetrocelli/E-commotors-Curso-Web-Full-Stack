@include('header')



<form action="{{ route('mensaje.store') }}" method="POST" class="w-75 mb-5 mx-auto d-flex flex-column justify-content-center gap-3 agregar-margin">
    @csrf <!-- Token de seguridad de Laravel -->
    <label for=""><input type="text" name="nombre_mensaje" placeholder="Nombre..." class="input-form"></label>
    <label for=""><input type="text" name="tipo_mensaje" placeholder="Tipo de Mensaje..." class="input-form"></label>
    <label for=""><textarea name="descripcion_mensaje" cols="30" rows="5" class="input-form" placeholder="Descripción del Mensaje..."></textarea></label>
    <label for=""><textarea name="productos_consultados" cols="30" rows="3" class="input-form" placeholder="Productos Consultados..."></textarea></label>

    <div class="d-flex justify-content-end gap-2">
        <a href="javascript:window.history.back()" class="boton-principal">Cancelar</a>
        <button type="submit" class="boton-principal">Enviar Mensaje</button>
    </div>
</form>

<!-- Mostrar mensaje de éxito si existe -->
@if(session('success'))
    <div class="alert alert-success w-75 mx-auto my-3">
        {{ session('success') }}
    </div>
@endif

@include('footer')