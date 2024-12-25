<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotosController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\MensajeController;

Route::get('/', function () {
    return view('main');
}) -> name("/");


Route::get('/card', function () {
    return view('card');
});


/* Route::get('/message', function () {
    return view('message');
});
 */

 //ROUTE -> vista de enviar un mensaje
 Route::get('/message', [MensajeController::class, 'index'])->name('message');



/* Route::get('/productos-motos', function () {
    return view('productos');
}); */

 //ROUTE -> vista de Productos/motos
Route::get('/productos-motos', [MotosController::class, 'index'])->name('productos-motos');



//ROUTE -> vista de /terminos-y-condiciones (archivo terminos)
Route::get('/terminos-y-condiciones',[FooterController::class,"terminosYcondiciones"]) -> name('terminosYcondiciones');

//ROUTE -> vista de /politicas-de-envio (archivo politicas)
Route::get('/politicas-de-envio',[FooterController::class,"politicasDeEnvio"]) -> name('politicas');

//ROUTE -> vista de /locales (archivo locale)
Route::get('/locales',[FooterController::class,"locales"]) -> name('locales');

// ROUTE -> DESCARGA DE PDF CONDICIONES
Route::get('/descargar-devoluciones', [FooterController::class, 'descargarDevoluciones'])->name('descargarPDF');