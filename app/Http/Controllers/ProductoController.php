<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Category;

class ProductoController extends Controller
{
    //
    public function index()
    {
        $categorias = Category::all(); // Obtiene todas las categorías
        $productos = Producto::paginate(8); // Obtiene todos los productos y los pagina 8 por página
        return view('productos.index', compact('productos', 'categorias')); // Pasa los productos y categorías a la vista 'productos.index'
    }

    public function show($id)
    {
        $producto = Producto::findOrFail($id); // Busca el producto por su ID

        // Obtiene 3 productos de la misma categoría, excluyendo el actual
        $productosRelacionados = Producto::where('idcategoria', $producto->idcategoria)
            ->where('idproducto', '!=', $producto->idproducto)
            ->take(3)
            ->get();

        return view('productos.show', compact('producto', 'productosRelacionados'));
    }
}
