<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});


Route::get('/card', function () {
    return view('card');
});

Route::get('/message', function () {
    return view('message');
});