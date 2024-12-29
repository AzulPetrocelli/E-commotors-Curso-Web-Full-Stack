<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function create()
    {
        return view('Productos.agregarAccesorio');
    }

    public function mensajes(){
        $mensajes = Mensaje::all();
        return view('Productos.accionMensaje',compact('mensajes'));
    }

    public function mensajesSinResponder(){
        $mensajes = Mensaje::whereNull('respuesta_mensaje') -> get();
        return view('Productos.accionMensaje',compact('mensajes'));
    }
}
