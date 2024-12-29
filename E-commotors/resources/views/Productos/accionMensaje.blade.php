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
                    <a href="#" data-bs-toggle="modal" data-bs-target="#responderModal" data-id="{{ $mensaje->id_mensaje }}" class="boton-principal responder-btn">
                        Responder
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@include("footer")