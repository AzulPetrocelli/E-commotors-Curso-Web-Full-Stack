<?php

namespace App\Http\Controllers;

use App\Models\Accesorio;
use Illuminate\Http\Request;
use App\Models\TipoAccesorio;

class AccesoriosController extends Controller
{

    public function index(Request $request)
{
    $query = Accesorio::query();
    $tipo = null; // Inicializamos el tipo como null por defecto

    // Filtro por categoría (tipo de accesorio)
    if ($request->filled('categoria')) {
        $query->whereHas('tipo', function ($q) use ($request) {
            $q->where('id_tipo', $request->categoria);
        });

        // Obtener el tipo de accesorio seleccionado
        $tipo = TipoAccesorio::find($request->categoria);
    }

    // Filtro por búsqueda dentro del tipo seleccionado (si aplica)
    if ($request->filled('busqueda')) {
        $query->where('nombre_accesorio', 'like', '%' . $request->busqueda . '%');
    }

    // Filtro por precio mínimo
    if ($request->filled('min') && is_numeric($request->min)) {
        $query->where('precio_accesorio', '>=', $request->min);
    }

    // Filtro por precio máximo
    if ($request->filled('max') && is_numeric($request->max)) {
        $query->where('precio_accesorio', '<=', $request->max);
    }

    // Obtenemos los accesorios con paginación
    $accesorios = $query->paginate(6);

    // Obtenemos todos los tipos para el formulario
    $tipos = TipoAccesorio::all();

    // Retornamos la vista
    return view('Productos.accesorios', [
        'accesorios' => $accesorios,
        'tipo' => $tipo, // Pasar el tipo seleccionado para el título dinámico
        'tipos' => $tipos // Pasar todos los tipos para el filtro
    ]);
}


public function filtrarPorTipo($id)
{
    $accesorios = Accesorio::where('id_tipo', $id)->paginate(6);
    $tipo = TipoAccesorio::findOrFail($id);
    $tipos = TipoAccesorio::all(); // Para mantener el menú desplegable
    return view('Productos.accesorios', compact('accesorios','tipo' ,'tipos'));
}


public function show($id)
{
    // Encuentra la moto por ID o tira error
    $accesorio = Accesorio::findOrFail($id);

    // Pasa los datos de la moto a la vista de las cards
    return view('cardAccesorios', compact('accesorio')); // Usa `compact` para pasarle la variable
}


public function showItems()
{

    $accesorios = Accesorio::all();
    return view('Productos.accionAccesorio',['accesorios' => $accesorios]);
}

    public function create()
    {

    }
}
