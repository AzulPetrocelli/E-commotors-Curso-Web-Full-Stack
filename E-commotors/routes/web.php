<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});


Route::get('/hola', function () {
    return view('welcome');
});