@include('headeradmin')
<br><br><br>

<!DOCTYPE html>
<html lang="es">
<body>
<div style="width: 90%; overflow-x: auto; overflow-y: auto; height:80vh" class="m-auto">
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
                    <td><div class="overflow-hidden" style="height: 200px">{{ $mensaje->nombre_mensaje }}</div></td>
                    <td><div class="overflow-hidden" style="height: 200px">{{ $mensaje->tipo_mensaje }}</div></td>
                    <td><div class="overflow-hidden" style="height: 200px">{{ $mensaje->descripcion_mensaje }}</div></td>
                    <td><div class="overflow-hidden" style="height: 200px">{{ $mensaje->productos_consultados }}</div></td>
                    <td><div class="overflow-hidden" style="height: 200px">{{ $mensaje->respuesta_mensaje ?? 'Sin respuesta' }}</div></td>
                    <td><div class="overflow-hidden" style="height: 200px">{{ $mensaje->created_at->format('d/m/Y H:i') }}</div></td>
                    <th>
                        <div class="overflow-hidden" style="height: 200px; width:300px">
                        <!-- Formulario para responder un mensaje -->
                            <form method="POST" action="{{ url('admin/mensajes/'.$mensaje->id_mensaje.'/responder') }}">
                                @csrf
                                <div class="form-group">
                                    {{--<label for="respuesta">Respuesta</label>--}}
                                    <textarea name="respuesta" placeholder="Respuesta" id="respuesta"  class="input-form" required style="height: 120px"></textarea>
                                </div>
                                <button type="submit" class="boton-principal mt-3">Enviar Respuesta</button>
                            </form>
                        </div>
                    </th>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
</body>
</html>

@include("footer")

