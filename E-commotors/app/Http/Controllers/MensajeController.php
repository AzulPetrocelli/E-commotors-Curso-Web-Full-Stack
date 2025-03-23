<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('message');
    }

    public function store(Request $request)
    {
        // Validar los datos enviados
        $validatedData = $request->validate([
            'nombre_mensaje' => 'required|string|max:255',
            'tipo_mensaje' => 'required|string|max:255',
            'descripcion_mensaje' => 'required|string|max:5000',
            'productos_consultados' => 'nullable|string|max:5000',
        ]);

        // Crear un nuevo registro en la base de datos
        Mensaje::create($validatedData);

        // Redirigir con mensaje de éxito
        return redirect()->back()->with('success', 'Mensaje enviado correctamente.');
    }


    public function responder(Request $request, $id)
    {
        // Validar la respuesta que se va a guardar
        $request->validate([
            'respuesta' => 'required|string', // Validamos que la respuesta sea obligatoria y de tipo string
        ]);

        // Encontrar el mensaje por su ID
        $mensaje = Mensaje::find($id);

        // Verificar si el mensaje fue encontrado
        if (!$mensaje) {
            // Si no se encuentra el mensaje, redirigimos con un mensaje de error
            return redirect()->route('accion-mensaje')->with('error', 'Mensaje no encontrado.');
        }

        // Actualizar el campo "respuesta_mensaje" con la respuesta enviada
        $mensaje->respuesta_mensaje = $request->respuesta;

        // Guardar los cambios en la base de datos
        $mensaje->save();

        // Redirigir de vuelta con un mensaje de éxito
        return redirect()->route('accion-mensaje')->with('success', 'Respuesta enviada correctamente.');
    }

}


