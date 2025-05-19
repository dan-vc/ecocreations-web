<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

<<<<<<< HEAD
Route::get('nosotros', function () {
    return view('nosotros');
});

Route::get('contacto', function () {
    return view('contacto');
=======
Route::get('/detalle',function(){
    return view('detalle_producto');
>>>>>>> Junior_dos
});