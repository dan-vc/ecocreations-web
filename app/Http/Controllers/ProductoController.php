<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function index()
    {
        $categorias = Category::all(); // Obtiene todas las categorías
        $productos = Producto::paginate(8); // Obtiene todos los productos y los pagina 8 por página
        return view('productos.index', compact('productos', 'categorias')); // Pasa los productos y categorías a la vista 'productos.index'
    }

    public function productsOfCategory($id)
    {
        $categorias = Category::all(); // Obtiene todas las categorías
        $productos = Producto::where('idcategoria', $id)->paginate(8);// Obtiene los productos de la categoría especificada y los pagina 8 por página
        $categoriaSeleccionada = Category::find($id); // Busca la categoría seleccionada por su ID
        return view('productos.index', compact('productos', 'categorias', 'categoriaSeleccionada')); // Pasa los productos y categorías a la vista 'productos.index'
    }

    public function searchProducts(Request $request)
    {
        $search = $request->input('search'); // Obtiene la cadena de búsqueda del request
        $categorias = Category::all(); // Obtiene todas las categorías
        $productos = Producto::where('nomproducto', 'like', "%$search%")->get(); // Busca productos que contengan la cadena de búsqueda en su nombre y los pagina 8 por página
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
