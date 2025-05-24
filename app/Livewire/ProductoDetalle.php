<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Producto; // Importa el modelo Producto para hacer peticiones a la base de datos

class ProductoDetalle extends Component
{
    public $producto;
    public $productosRelacionados = [];
    public $cantidad = 1;


    public function mount($id)
    {
        $this->producto = Producto::findOrFail($id); // Busca el producto por su ID

        // Obtiene 3 productos de la misma categoría, excluyendo el actual
        $this->productosRelacionados = Producto::where('idcategoria', $this->producto->idcategoria)
            ->where('idproducto', '!=', $this->producto->idproducto)
            ->take(3)
            ->get();
    }

    public function agregarAlCarrito()
    {
        $carrito = session()->get('carrito', []);

        $id = $this->producto->idproducto;

        if (isset($carrito[$id])) {
            $carrito[$id]['cantidad'] += $this->cantidad;
        } else {
            $carrito[$id] = [
                'id' => $this->producto->idproducto,
                'nombre' => $this->producto->nomproducto,
                'precio' => $this->producto->preproducto,
                'imagen' => $this->producto->imgproducto,
                'descripcion' => $this->producto->desproducto,
                'cantidad' => $this->cantidad,
            ];
        }

        session()->put('carrito', $carrito);

        $this->dispatch('alerta', 'Producto agregado al carrito');
        return redirect()->to('carrito');
    }

    public function aumentarCantidad()
    {
        $this->cantidad++;
    }

    public function disminuirCantidad()
    {
        if ($this->cantidad > 1) {
            $this->cantidad--;
        }
    }

    public function render()
    {
        return view('livewire.producto-detalle');
    }
}
