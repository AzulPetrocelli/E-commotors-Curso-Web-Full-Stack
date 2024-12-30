<?php

namespace App\Http\Controllers;

use App\Models\Repuesto;
use App\Models\TipoRepuesto;
use Illuminate\Http\Request;

class RepuestosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // App\Http\Controllers\RepuestoController.php
public function index(Request $request)
{
    $query = Repuesto::query();
    $tipoRepuesto = null;

    // Filtro por tipo de repuesto
    if ($request->filled('tipo_de_repuesto')) {
        $query->where('tipo_de_repuesto', $request->tipo_de_repuesto);

        // Obtener el tipo de repuesto seleccionado
        $tipoRepuesto = TipoRepuesto::find($request->tipo_de_repuesto);
    }

    // Filtro por búsqueda dentro del tipo seleccionado (si aplica)
    if ($request->filled('busqueda')) {
        $query->where('nombre_repuesto', 'like', '%' . $request->busqueda . '%');
    }

    // Filtro por precio mínimo
    if ($request->filled('min') && is_numeric($request->min)) {
        $query->where('precio_repuesto', '>=', $request->min);
    }

    // Filtro por precio máximo
    if ($request->filled('max') && is_numeric($request->max)) {
        $query->where('precio_repuesto', '<=', $request->max);
    }

    // Obtenemos los repuestos con paginación
    $repuestos = $query->paginate(6);

    // Obtenemos todos los tipos de repuestos para el formulario
    $tiposRepuestos = TipoRepuesto::all();

    // Retornamos la vista
    return view('Productos.repuestos', [
        'repuestos' => $repuestos,
        'tipoRepuesto' => $tipoRepuesto, // Pasar el tipo seleccionado para el título dinámico
        'tiposRepuestos' => $tiposRepuestos // Pasar todos los tipos para el filtro
    ]);
}



    public function filtrarPorTipo($id)
{
    // Filtrar repuestos según el tipo seleccionado (tipo_de_repuesto)
    $repuestos = Repuesto::where('tipo_de_repuesto', $id)->paginate(6);

    // Obtener el tipo seleccionado
    $tipoRepuesto = TipoRepuesto::findOrFail($id);

    // Obtener todos los tipos para el menú desplegable
    $tiposRepuestos = TipoRepuesto::all();

    // Retornar la vista con los datos correspondientes
    return view('Productos.repuestos', compact('repuestos', 'tipoRepuesto', 'tiposRepuestos'));
}


    

    /**
     * Show the form for creating a new resource.
     */

    public function show($id)
    {
        // Encuentra la moto por ID o tira error
        $repuesto = Repuesto::findOrFail($id);

        // Pasa los datos de la moto a la vista de las cards
        return view('cardRepuesto', compact('repuesto')); // Usa `compact` para pasarle la variable
    }

    public function showItems()
    {

        $repuestos = Repuesto::all();
        return view('Productos.accionRepuesto',['repuestos' => $repuestos]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    public function busqueda(Request $request)
    {
        $query = Repuesto::query(); // Constructor de consulta
        
    
        if ($request->has('busqueda')) {
            $query->where('nombre_repuesto', 'like', '%' . $request->busqueda . '%'); // Agregar condición
        }
        
        $repuestos = $query->get();
    
        return view('Productos.accionRepuesto', ['repuestos' => $repuestos]); // Retornar vista
    }
}
