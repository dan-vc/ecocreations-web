<?php

namespace App\Livewire;

use Livewire\Component;

class BotonAgregarCarrito extends Component
{
    public $producto;

    public function mount($producto)
    {
        // Inicializamos el producto
        $this->producto = $producto;
    }

    public function agregar()
    {
        dd('agregar al carrito');
        // Emitimos/Despachamos el evento para agregar al carrito
        // Este evento será escuchado por el componente Carrito
        $this->dispatch('agregarAlCarrito', $this->producto->idproducto);

    }

    public function render()
    {
        return view('livewire.boton-agregar-carrito');
    }
}
