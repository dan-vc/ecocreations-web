<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Producto;

class Carrito extends Component
{

    public $carrito = [];
    public $total = 0;
    public $productosRecomendados = [];

    public function mount()
    {
        // Cargar el carrito desde la sesión
        // Si no existe, inicializarlo como un array vacío
        $this->carrito = session()->get('carrito', []);
    }

    public function agregar($id)
    {
        // Verificar si el producto ya está en el carrito
        if (isset($this->carrito[$id])) {
            $this->carrito[$id]['cantidad']++; // Incrementar la cantidad
        } else {
            $producto = Producto::find($id); // Buscar el producto por su ID
            if ($producto) {
                $this->carrito[$id] = [
                    'id' => $producto->idproducto,
                    'nombre' => $producto->nomproducto,
                    'precio' => $producto->preproducto,
                    'imagen' => $producto->imgproducto,
                    'descripcion' => $producto->desproducto,
                    'cantidad' => 1,
                ];
            }
        }
        session()->put('carrito', $this->carrito); // Guardar el carrito en la sesión
    }

    public function eliminar($id)
    {
        // Verificar si el producto está en el carrito
        if (isset($this->carrito[$id])) {
            unset($this->carrito[$id]); // Eliminar el producto del carrito
            session()->put('carrito', $this->carrito); // Actualizar el carrito en la sesión
        }
    }

    public function actualizarCantidad($id, $cantidad)
    {
        // Verificar si el producto está en el carrito
        if (isset($this->carrito[$id])) {
            if ($cantidad <= 0) {
                $this->eliminar($id); // Eliminar el producto si la cantidad es menor o igual a 0
            } else {
                $this->carrito[$id]['cantidad'] = $cantidad; // Actualizar la cantidad del producto
                session()->put('carrito', $this->carrito); // Actualizar el carrito en la sesión
            }
        }
    }

    public function render()
    {
        $this->total = collect($this->carrito)->sum(function ($item) {
            return $item['precio'] * $item['cantidad'];
        });        
        // Cargar productos recomendados
        // Ignorar los que ya están en el carrito
        $idsEnCarrito = array_keys($this->carrito);
        $this->productosRecomendados = Producto::whereNotIn('idproducto', $idsEnCarrito)
            ->take(4)
            ->get();
        return view('livewire.carrito');
    }
}
