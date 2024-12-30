<?php

namespace App\Http\Controllers;

use App\Models\Moto;
use App\Models\Marca;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $query->where('precio_moto', '>=', $request->min);
    }

    if (isset($request->max)) {
        // Aplica un filtro de precio máximo directamente sobre el campo 'precio_base'
        $query->where('precio_moto', '<=', $request->max);
    }

    $motos = $query->paginate(6); // Paginación de los resultados

    return view('Productos.motos', ['motos' => $motos]); // Retornar vista
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $moto = new Moto();
        $categorias = Categoria::all();  // Obtener todas las categorías
        $marcas = Marca::all();          // Obtener todas las marcas
    return view('Productos.Acciones.agregarMoto', compact('categorias', 'marcas','moto'));
    }

    public function showItems()
    {
        //Mando paginado de a 6 y mando la variable moto para que la reciba la view de accionMoto
        $motos = Moto::paginate(6);
        return view('Productos.accionMoto',['motos' => $motos]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'estado' => 'required|string|max:255',
        'precio_moto' => 'required|numeric',
        'id_categoria' => 'required|exists:categoria,nombre_categoria',
        'id_marca' => 'required|exists:marca,nombre_marca',
        'descripcion_moto' => 'required|string',
        'foto_moto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ], [
        'required' => "Campo obligatorio",
        'max' => "Sobrepaso el limite de 255 caracteres",
        'numeric' => "El valor ingresado debe ser un numero",
     ]);

    $moto = new Moto();
    $moto->nombre = $request->nombre;
    $moto->estado = $request->estado;
    $moto->precio_moto = $request->precio_moto;

    // Obtener el ID de la categoría mediante el nombre
    $categoria = Categoria::where('nombre_categoria', $request->id_categoria)->first();
    if ($categoria) {
        $moto->id_categoria = $categoria->id_categoria;
    }

    // Obtener el ID de la marca mediante el nombre
    $marca = Marca::where('nombre_marca', $request->id_marca)->first();
    if ($marca) {
        $moto->id_marca = $marca->id_marca;
    }

    $moto->descripcion_moto = $request->descripcion_moto;

    // Subir la imagen si existe
    if ($request->hasFile('foto_moto')) {
        // Obtener el nombre original del archivo
        $filename = $request->file('foto_moto')->getClientOriginalName();

        // Guardar el archivo con el mismo nombre en la carpeta public/images
        $imagen = $request->file('foto_moto')->storeAs('public/images', $filename);

        // Asignar el nombre del archivo a la propiedad de la moto
        $moto->foto_moto = basename($imagen);  // Guardamos solo el nombre del archivo
    }

    $moto->save();

    return redirect()->route('accionMoto')->with('success', 'Producto creado exitosamente');
}



    /**
     * Display the specified resource.
     */
    public function show($id)
{
    // Encuentra la moto por ID o tira error
    $moto = Moto::findOrFail($id);

    // Pasa los datos de la moto a la vista de las cards
    return view('card', compact('moto')); // Usa `compact` para pasarle la variable
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
