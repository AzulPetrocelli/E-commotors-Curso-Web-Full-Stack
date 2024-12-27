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

}
