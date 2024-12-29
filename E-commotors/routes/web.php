<?php

use App\Models\Moto;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MotosController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\AccesoriosController;

Route::get('/main', function () {
    $motosAleatorias = Moto::inRandomOrder()->take(3)->get();
    return view('main',['motosAleatorias' => $motosAleatorias]);
}) -> name("/main");


Route::get('/card', function () {
    return view('card');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/administracion', function () {
    return view('admin');
}) -> name('admin');

 //ROUTE -> vista de enviar un mensaje
Route::get('/message', [MensajeController::class, 'index'])->name('message');

 //ROUTE -> vista de admin
Route::get('admin',function(){
    return view('admin');
});

/* Route::get('/productos-motos', function () {
    return view('productos');
}); */

 //ROUTE -> vista de Productos/motos
//Route::get('/productos-motos', [MotosController::class, 'index'])->name('productos-motos');
Route::get('/productos-motos', [MotosController::class, 'index'])->name('productos-motos');
Route::get('/motos/productos-motos', [MotosController::class, 'index'])->name('productos-motos');
// Ruta para mostrar card de una moto específica
Route::get('/card{id}', [MotosController::class, 'show'])->name('motos.show');


//Route -> muestro items
Route::get('/accion-moto',[MotosController::class,'showItems'])->name('accionMoto');

//Route -> form para agregar un producto
Route::get('/accion-moto/agregar', [MotosController::class, 'create'])->name('accionMotoCreate');

//Route -> Agregar Producto
Route::post('/accion-moto/agregar', [MotosController::class, 'store'])->name('agregarProducto');



//Route -> muestro items
Route::get('/accion-accesorio',[AccesoriosController::class,'showItems'])->name('accionAccesorio');

//Route -> accion repuesto
Route::get('/accion-repuesto',[AccesoriosController::class,'create'])->name('accionAccesorio');

//Route -> ver mensaje
Route::get('/accion-repuesto',[AccesoriosController::class,'create'])->name('accionAccesorio');


//Route -> vista de las motos filtradas
Route::post('/productos-motos#', [MotosController::class, 'filtrar']);




//-----------------------------------------------------------------------------------------------------------------------
// ROUTES DE FOOTER

//ROUTE -> vista de /terminos-y-condiciones (archivo terminos)
Route::get('/terminos-y-condiciones',[FooterController::class,"terminosYcondiciones"]) -> name('terminosYcondiciones');

//ROUTE -> vista de /politicas-de-envio (archivo politicas)
Route::get('/politicas-de-envio',[FooterController::class,"politicasDeEnvio"]) -> name('politicas');

//ROUTE -> vista de /locales (archivo locale)
Route::get('/locales',[FooterController::class,"locales"]) -> name('locales');

// ROUTE -> DESCARGA DE PDF CONDICIONES
Route::get('/descargar-devoluciones', [FooterController::class, 'descargarDevoluciones'])->name('descargarPDF');

// ROUTE ENVIAR MENSAJE
Route::post('/enviar-mensaje', [MensajeController::class, 'store'])->name('mensaje.store');

//ROUTE LOGUIN
Route::post('/login', [AuthController::class, 'login'])->name('login');
