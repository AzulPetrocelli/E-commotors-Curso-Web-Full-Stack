<?php

use App\Models\Moto;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotosController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    $motosAleatorias = Moto::inRandomOrder()->take(3)->get();
    return view('main',['motosAleatorias' => $motosAleatorias]);
}) -> name("/");


Route::get('/card', function () {
    return view('card');
});


Route::get('/inicio', function () {
    return view('welcome');
});

Route::get('/administracion', function () {
    return view('admin');
});

Route::get('/muestra', function () {
    return view('muestra');
});

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

//Route
Route::get('/agregar-moto',[MotosController::class,'create'])->name('agregarMoto');

//ROUTE -> vista de /terminos-y-condiciones (archivo terminos)
Route::get('/terminos-y-condiciones',[FooterController::class,"terminosYcondiciones"]) -> name('terminosYcondiciones');

//ROUTE -> vista de /politicas-de-envio (archivo politicas)
Route::get('/politicas-de-envio',[FooterController::class,"politicasDeEnvio"]) -> name('politicas');

//ROUTE -> vista de /locales (archivo locale)
Route::get('/locales',[FooterController::class,"locales"]) -> name('locales');

// ROUTE -> DESCARGA DE PDF CONDICIONES
Route::get('/descargar-devoluciones', [FooterController::class, 'descargarDevoluciones'])->name('descargarPDF');
