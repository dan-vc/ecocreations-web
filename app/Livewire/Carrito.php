<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Producto;

class Carrito extends Component
{

    public $carrito = [];

    protected $listeners = ['agregarAlCarrito' => 'agregar'];

    public function mount()
    {
        // Cargar el carrito desde la sesión
        // Si no existe, inicializarlo como un array vacío
        $this->carrito = session()->get('carrito', []);
    }

    public function agregar($id)
    {
        dd($id);
        // Buscar el producto por ID en la base de datos
        $producto = Producto::find($id);

        // Si el producto no existe, no hacer nada
        if (!$producto) return;

        // Verificar si el producto ya está en el carrito
        if (isset($this->carrito[$id])) {
            $this->carrito[$id]['cantidad']++; // Incrementar la cantidad

        } else {
            // Si no está en el carrito, agregarlo
            $this->carrito[$id] = [
                'id' => $producto->idproducto,
                'nombre' => $producto->nomproducto,
                'precio' => $producto->preproducto,
                'imagen' => $producto->imgproducto,
                'descripcion' => $producto->desproducto,
                'cantidad' => 1,
            ];
        }

        // Guardar el carrito en la sesión
        session()->put('carrito', $this->carrito);
    }

    public function eliminar($id)
    {
        // Verificar si el producto está en el carrito
        if (isset($this->carrito[$id])) {
            unset($this->carrito[$id]); // Eliminar el producto del carrito
            session()->put('carrito', $this->carrito); // Actualizar el carrito en la sesión
        }
    }

    public function render()
    {
        $total = collect($this->carrito)->sum(function ($item) {
            return $item['precio'] * $item['cantidad'];
        });
        return view('livewire.carrito', compact('total'));
    }
}
