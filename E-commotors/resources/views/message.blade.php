@include('header')

<form action="" class="w-75 mb-5 mx-auto d-flex flex-column justify-content-center gap-3 agregar-margin">
    <label for=""><input type="text" placeholder="Nombre..." class="input-form"></label>
    <label for=""><input type="text" placeholder="Apellido..." class="input-form"></label>
    <label for=""><input type="text" placeholder="Correo@gmail.com..." class="input-form"></label>
    <label for=""><textarea name="" id="" cols="30" rows="10" class="input-form" placeholder="Mensaje..."></textarea></label>

    <div class="d-flex justify-content-end gap-2">
        <a href="javascript:window.history.back()"class="boton-principal">Cancelar</a>
        <button class="boton-principal">Enviar Mensaje</button>
    </div>
</form>

@include('footer')