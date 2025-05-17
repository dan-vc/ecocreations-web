<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('inicio');
});

Route::get('nosotros', function () {
    return view('nosotros');
});

Route::get('contacto', function () {
    return view('contacto');
});

Route::get('productos', [ProductoController::class, 'index']);