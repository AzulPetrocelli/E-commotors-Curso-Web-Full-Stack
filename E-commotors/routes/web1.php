<?php

use App\Models\Moto;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MotosController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\RepuestosController;
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
})->name('login');

Route::get('/administracion', function () {
    return view('admin');
}) -> name('admin');

 //ROUTE -> vista de enviar un mensaje
Route::get('/message', [MensajeController::class, 'index'])->name('message');

 //ROUTE -> vista de admin
Route::get('admin',function(){
    return view('admin');
})->middleware("auth");


 //ROUTE -> vista de Productos/motos
Route::get('/productos-motos', [MotosController::class, 'index'])->name('productos-motos');

Route::get('/productos-accesorios', [AccesoriosController::class, 'index'])->name('productos-accesorios');


// Ruta para mostrar card de una moto específica
Route::get('/card/{id}', [MotosController::class, 'show'])->name('motos.show');

Route::get('/cardAccesorios/{id}', [AccesoriosController::class, 'show'])->name('accesorios.show');

Route::get('/accesorios/tipo/{id}', [AccesoriosController::class, 'filtrarPorTipo'])->name('accesorios.filtrar');

Route::get('/repuestos/tipo/{id}', [RepuestosController::class, 'filtrarPorTipo'])->name('repuestos.filtrar');


//Route -> muestro items
Route::get('/accion-moto', [MotosController::class, 'showItems'])->name('accionMoto')->middleware("auth");

//Route -> busco items
Route::get('/accion-moto/search',[MotosController::class,'busqueda'])->name('busqueda.moto');

//Route -> muestro items
Route::get('/accion-accesorios',[AccesoriosController::class,'busqueda'])->name('busqueda.accesorio');

Route::delete('/accesorios/{id}', [AccesoriosController::class, 'destroy'])->name('eliminarAccesorio');

//Route -> Agregar Producto
Route::post('/accion-accesorio/agregar', [AccesoriosController::class, 'store'])->name('agregarAccesorio');

//Route -> form para agregar un producto
Route::get('/accion-moto/agregar', [MotosController::class, 'create'])->name('accionMotoCreate');

//Route -> Agregar Producto
Route::post('/accion-moto/agregar', [MotosController::class, 'store'])->name('agregarMoto');

//Route -> Editar Producto
Route::put('/motos/{id}', [MotosController::class, 'update'])->name('editarMoto');

Route::put('/accesorios/{id}', [AccesoriosController::class, 'update'])->name('editarAccesorio');

Route::delete('/motos/{id}', [MotosController::class, 'destroy'])->name('motos.destroy');

Route::put('/motos/{id}', [MotosController::class, 'update'])->name('editarMoto');


//Route -> muestro items
Route::get('/accion-accesorio',[AccesoriosController::class,'showItems'])->name('accionAccesorio')->middleware("auth");

//Route -> accion repuesto
Route::get('/accion-repuesto',[RepuestosController::class,'showItems'])->name('accionRepuesto')->middleware("auth");

//Route -> vista de las motos filtradas
Route::post('/productos-motos#', [MotosController::class, 'filtrar']);


//ROUTE -> vista de mensajes recibidos
Route::get('/accion-mensaje',[AdminController::class,'mensajes']) -> name('accion-mensaje')->middleware("auth");

//
Route::get('/accion-mensaje-sin_responder',[AdminController::class,'mensajesSinResponder']) -> name('accion-mensaje-sin-responder');

// ROUTE ->  responder mensaje
Route::post('/admin/mensajes/{id}/responder', [MensajeController::class, 'responder'])->name('admin-mensajes-responder');




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
Route::post('/login', [AuthController::class, 'login'])->name('log');


//ROUTES PARA REPUESTOS
Route::get('/productos-repuestos', [RepuestosController::class, 'index'])->name('repuestos.index');
Route::get('/productos-repuestos/{id}', [RepuestosController::class, 'show'])->name('repuesto.show');
Route::get('/productos-repuestos/filtrar/{id}', [RepuestosController::class, 'filtrarPorTipo'])->name('repuestos.filtrarPorTipo');
Route::get('/productos-repuestos/buscar', [RepuestosController::class, 'busqueda'])->name('repuestos.busqueda');
