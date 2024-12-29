@include('headeradmin')
<br>
<br>
<br>
<!DOCTYPE html>
<html lang="es">
<body>
    <table class="table">
        <div class="d-flex justify-content-end gap-2 position-sticky" style="margin-top:40px; margin-right:10px;">
            <a href="{{url('admin')}}" class="boton-principal">Volver</a>
        </div>
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Tipo</th>
                <th scope="col">Descripción</th>
                <th scope="col">Productos Consultados</th>
                <th scope="col">Fecha de Creación</th> 
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mensajes as $mensaje)
            <tr class="fila-abm">
                <td>{{ $mensaje->nombre_mensaje }}</td>
                <td>{{ $mensaje->tipo_mensaje }}</td>
                <td>{{ $mensaje->descripcion_mensaje }}</td>
                <td>{{ $mensaje->productos_consultados }}</td>
                <td>{{ $mensaje->created_at->format('d/m/Y H:i') }}</td>
                <td class="d-flex flex-nowrap gap-2">
                    <!-- Opción para responder el mensaje -->
                    <a href="#responderModal" data-bs-toggle="modal" data-id="{{ $mensaje->id_mensaje }}" class="boton-principal responder-btn">
                        Responder
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

     <!-- Modal para responder mensaje -->
     <div class="modal fade" id="responderModal" tabindex="-1" aria-labelledby="responderModalLabel" aria-hidden="true">
        <br>
        <br>
        <br>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="responderModalLabel">Responder Mensaje</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ url('admin/mensajes/'.$mensaje->id_mensaje.'/responder') }}">
                        @csrf
                        <div class="form-group">
                            <label for="respuesta">Respuesta</label>
                            <textarea name="respuesta" id="respuesta" rows="4" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Enviar Respuesta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

@include("footer")
