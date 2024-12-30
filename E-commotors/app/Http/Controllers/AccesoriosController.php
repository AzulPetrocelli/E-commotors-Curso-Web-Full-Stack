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

    public function busqueda(Request $request)
{
    $query = Accesorio::query(); // Constructor de consulta
    

    if ($request->has('busqueda')) {
        $query->where('nombre_accesorio', 'like', '%' . $request->busqueda . '%'); // Agregar condición
    }
    
    $accesorios = $query->get();

    return view('Productos.accionAccesorio', ['accesorios' => $accesorios]); // Retornar vista
}

public function destroy($id)
{
    $accesorio = Accesorio::find($id);

    if (!$accesorio) {
        return redirect()->route('accionAccesorio')->with('error', 'El accesorio no existe.');
    }

    // Eliminar la imagen asociada si existe
    if ($accesorio->foto_accesorio && file_exists(public_path('images/' . $accesorio->foto_accesorio))) {
        unlink(public_path('images/' . $accesorio->foto_accesorio));
    }

    $accesorio->delete();

    return redirect()->route('accionAccesorio')->with('success', 'Accesorio eliminado exitosamente.');
}

public function store(Request $request)
{
    $request->validate(
        [
            'nombre_accesorio' => 'required|string|max:255',
            'precio_accesorio' => 'required|numeric',
            'id_tipo' => 'required|exists:tipo_de_accesorio,nombre_tipo',
            'descripcion_accesorio' => 'required|string',
            'foto_accesorio' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],
        [
            'nombre_accesorio.required' => 'El campo "Nombre" es obligatorio.',
            'precio_accesorio.required' => 'El campo "Precio" es obligatorio.',
            'precio_accesorio.numeric' => 'El precio debe ser un número válido.',
            'id_tipo.required' => 'El campo "Tipo" es obligatorio.',
            'id_tipo.exists' => 'El tipo seleccionado no es válido.',
            'descripcion_accesorio.required' => 'El campo "Descripción" es obligatorio.',
            'foto_accesorio.image' => 'La imagen debe ser un archivo válido.',
        ]
    );

    $accesorio = new Accesorio();
    $accesorio->nombre_accesorio = $request->nombre_accesorio;
    $accesorio->precio_accesorio = $request->precio_accesorio;

    // Obtener el ID del tipo mediante el nombre
    $tipo = TipoAccesorio::where('nombre_tipo', $request->id_tipo)->first();
    if ($tipo) {
        $accesorio->id_tipo = $tipo->id_tipo;
    }

    $accesorio->descripcion_accesorio = $request->descripcion_accesorio;

    // Subir la imagen si existe
    if ($request->hasFile('foto_accesorio')) {
        // Obtener el nombre original del archivo
        $filename = $request->file('foto_accesorio')->getClientOriginalName();

        // Guardar el archivo con el mismo nombre en la carpeta public/images
        $imagen = $request->file('foto_accesorio')->storeAs('public/images', $filename);

        // Asignar el nombre del archivo a la propiedad del accesorio
        $accesorio->foto_accesorio = basename($imagen);  // Guardamos solo el nombre del archivo
    }

    $accesorio->save();
    return redirect()->route('accionAccesorio')->with('success', 'Accesorio creado exitosamente');
}

public function update(Request $request, $id)
{
    // Validación de datos
    $request->validate([
        'nombre_accesorio' => 'required|string|max:255',
        'precio_accesorio' => 'required|numeric',
        'id_tipo' => 'required|string',
        'descripcion_accesorio' => 'required|string',
        'foto_accesorio' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ],
    [
        'nombre_accesorio.required' => 'El campo "Nombre" es obligatorio.',
        'precio_accesorio.required' => 'El campo "Precio" es obligatorio.',
        'precio_accesorio.numeric' => 'El precio debe ser un número válido.',
        'id_tipo.required' => 'El campo "Tipo" es obligatorio.',
        'descripcion_accesorio.required' => 'El campo "Descripción" es obligatorio.',
        'foto_accesorio.image' => 'La imagen debe ser un archivo válido.',
    ]);

    // Buscar el accesorio
    $accesorio = Accesorio::findOrFail($id);

    // Actualizar los datos
    $accesorio->nombre_accesorio = $request->nombre_accesorio;
    $accesorio->precio_accesorio = $request->precio_accesorio;

    // Asignar el tipo de accesorio
    $tipo = TipoAccesorio::where('nombre_tipo', $request->id_tipo)->first();
    if ($tipo) {
        $accesorio->id_tipo = $tipo->id_tipo;
    }

    $accesorio->descripcion_accesorio = $request->descripcion_accesorio;

    // Actualizar la imagen si se subió una nueva
    if ($request->hasFile('foto_accesorio')) {
        // Eliminar la imagen anterior
        if ($accesorio->foto_accesorio && file_exists(public_path('images/' . $accesorio->foto_accesorio))) {
            unlink(public_path('images/' . $accesorio->foto_accesorio));
        }

        // Subir la nueva imagen
        $filename = $request->file('foto_accesorio')->getClientOriginalName();
        $request->file('foto_accesorio')->storeAs('public/images', $filename);
        $accesorio->foto_accesorio = $filename;
    }

    // Guardar los cambios
    $accesorio->save();

    return redirect()->route('accionAccesorio')->with('success', 'Accesorio actualizado exitosamente.');
}

}
