<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Moto;

class MotosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motos = Moto::paginate(6); // Paginación de 6 motos por página
        return view('Productos.motos', ['motos' => $motos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Productos.crearProducto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    // Encuentra la moto por ID o tira error
    $moto = Moto::findOrFail($id);

    // Pasa los datos de la moto a la vista de las cards
    return view('card', compact('moto')); // Usa `compact` para pasar la variable
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
