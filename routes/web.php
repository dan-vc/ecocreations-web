<?php

use App\Http\Controllers\PedidoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController; // Importa el controlador ProductoController
use App\Models\Category;
use App\Models\Producto; // Importa el modelo Producto para hacer peticiones a la base de datos
use Illuminate\Routing\Router;

Route::get('/', function () {
    $categorias = Category::all(); // Obtiene todas las categorías
    $productos = Producto::take(4)->get(); // Obtiene 4 productos
    return view('inicio', compact('productos', 'categorias')); // Pasa los productos y categorías a la vista 'inicio'
});

Route::get('nosotros', function () {
    return view('nosotros');
});

Route::get('contacto', function () {
    return view('contacto');
});

Route::get('productos', [ProductoController::class, 'index']);

Route::get('productos/categoria/{id}', [ProductoController::class, 'productsOfCategory']);

Route::get('productos/{id}', [ProductoController::class, 'show']);

Route::post('productos/buscar', [ProductoController::class, 'searchProducts']);

Route::get('carrito', function (){
    return view('carrito');
});

Route::get('checkout', function (){
    return view('checkout');
});

Route::get('thankyou', [PedidoController::class, 'thankyou']); // Ruta para la página de agradecimiento