<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Category;

class ProductoController extends Controller
{
    //
    public function index(){
        $categorias = Category::all(); // Obtiene todas las categorías
        $productos = Producto::paginate(8); // Obtiene todos los productos y los pagina 8 por página
        return view('productos.index', compact('productos', 'categorias')); // Pasa los productos y categorías a la vista 'productos.index'
    }
}
