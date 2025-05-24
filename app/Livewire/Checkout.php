<?php

namespace App\Livewire;

use Livewire\Component;

class Checkout extends Component
{

    public $carrito = [];
    public $total = 0;
    protected $info = [];

    public function mount()
    {
        // Cargar el carrito desde la sesión
        // Si no existe, inicializarlo como un array vacío
        $this->carrito = session()->get('carrito', []);
    }

    public function render()
    {
        $this->total = collect($this->carrito)->sum(function ($item) {
            return $item['precio'] * $item['cantidad'];
        }); 
        return view('livewire.checkout');
    }
}
