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
    public function index(Request $request)
{
    $query = Moto::query(); // Constructor de consulta

    if ($request->has('busqueda')) {
        $query->where('nombre', 'like', '%' . $request->busqueda . '%'); // Agregar condición
    }

    if(isset($request->categoria)){
        $query->whereHas('categoria',function($q) use($request){
            $q ->where('id_categoria',$request->categoria);
        });
    }
    if(isset($request->marca)){
        $query->whereHas('marca',function($q) use($request){
            $q ->where('id_marca',$request->marca);
        });
    }

    if (isset($request->min)) {
        // Aplica un filtro de precio mínimo directamente sobre el campo 'precio_base'
        $query->where('precio_base', '>=', $request->min);
    }
    
    if (isset($request->max)) {
        // Aplica un filtro de precio máximo directamente sobre el campo 'precio_base'
        $query->where('precio_base', '<=', $request->max);
    }

    $motos = $query->paginate(6); // Paginación de los resultados

    return view('Productos.motos', ['motos' => $motos]); // Retornar vista
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
