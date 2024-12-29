<?php

namespace App\Http\Controllers;

use App\Models\Accesorio;
use Illuminate\Http\Request;

class AccesoriosController extends Controller
{

    public function index(Request $request)
{
    $query = Accesorio::query(); // Constructor de consulta

    /* if ($request->has('busqueda')) {
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
    } */

    $accesorios = $query->paginate(6); // Paginación de los resultados

    return view('Productos.motos', ['accesorios' => $accesorios]); // Retornar vista
}


    public function create()
    {
        return view('Productos.accionAccesorio');
    }
}
