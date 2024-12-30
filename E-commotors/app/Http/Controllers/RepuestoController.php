<?php

namespace App\Http\Controllers;

use App\Models\Repuesto;
use App\Models\TipoRepuesto;
use Illuminate\Http\Request;

class RepuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Repuesto::query();
        $tipoRepuesto = null; // Inicializamos el tipo como null por defecto
    
        // Filtro por categoría (tipo de accesorio)
        if ($request->filled('categoria')) {
                $query->whereHas('tipo', function ($q) use ($request) {
                $q->where('id_repuesto', $request->categoria);
            });
    
            // Obtener el tipo de accesorio seleccionado
            $tipoRepuesto = TipoRepuesto::find($request->categoria);
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
    
        // Obtenemos los accesorios con paginación
        $repuestos = $query->paginate(6);
    
        // Obtenemos todos los tipos para el formulario
        $tiposRepuestos = TipoRepuesto::all();
    
        // Retornamos la vista
        return view('Productos.repuestos', [
            'repuestos' => $repuestos,
            'tipo' => $tipoRepuesto, // Pasar el tipo seleccionado para el título dinámico
            'tipos' => $tiposRepuestos // Pasar todos los tipos para el filtro
        ]);
    }


    public function filtrarPorTipo($id)
    {
        $repuestos = Repuesto::where('id_repuesto', $id)->paginate(6);
        $tipoRepuesto = TipoRepuesto::findOrFail($id);
        $tiposRepuestos = TipoRepuesto::all(); // Para mantener el menú desplegable
        return view('Productos.repuestos', compact('repuestos','tipo' ,'tipos'));
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
