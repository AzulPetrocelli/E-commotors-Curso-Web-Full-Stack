@include('headeradmin')
<br><br><br>

<!DOCTYPE html>
<html lang="es">
<body>
    <table class="table">
        <div class="d-flex justify-content-end gap-2 position-sticky" style="margin-top:40px; margin-right:10px;">
            <a href="{{url('admin')}}" class="boton-principal">Volver</a>
            <a href="{{route('accion-mensaje-sin-responder')}}" class="boton-principal">Mensajes Sin Responder</a>
        </div>
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Tipo</th>
                <th scope="col">Descripción</th>
                <th scope="col">Productos Consultados</th>
                <th scope="col">Respuesta</th>
                <th scope="col">Fecha de Creación</th> 
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Verificar si hay mensajes sin respuesta -->
            @if ($mensajes->isEmpty())
                <tr>
                    <td colspan="7" class="text-center">No hay mensajes sin responder.</td>
                </tr>
            @else
                @foreach($mensajes as $mensaje)
                <tr class="fila-abm">
                    <td>{{ $mensaje->nombre_mensaje }}</td>
                    <td>{{ $mensaje->tipo_mensaje }}</td>
                    <td>{{ $mensaje->descripcion_mensaje }}</td>
                    <td>{{ $mensaje->productos_consultados }}</td>
                    <td>{{ $mensaje->respuesta_mensaje ?? 'Sin respuesta' }}</td>
                    <td>{{ $mensaje->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <!-- Formulario para responder un mensaje -->
                        <form method="POST" action="{{ url('admin/mensajes/'.$mensaje->id_mensaje.'/responder') }}">
                            @csrf
                            <div class="form-group">
                                <label for="respuesta">Respuesta</label>
                                <textarea name="respuesta" id="respuesta" rows="4" class="form-control" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Enviar Respuesta</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</body>
</html>

@include("footer")

