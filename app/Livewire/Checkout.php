<?php

namespace App\Livewire;

use Livewire\Component;

class Checkout extends Component
{

    public $carrito = [];
    public $total = 0;
    protected $info = [];

    public $nombre;
    public $apellidos;
    public $sexo;
    public $email;
    public $telefono;
    public $direccion;
    public $ciudad;
    public $distrito;
    public $codigo_postal;
    public $referencia;



    public function mount()
    {
        // Cargar el carrito desde la sesión
        // Si no existe, inicializarlo como un array vacío
        $this->carrito = session()->get('carrito', []);
    }

    public function handleFormSubmit()
    {
        // Validar los datos del formulario
        $this->validate([
            'nombre' => 'required|string|min:3',
            'apellidos' => 'required|string|min:3',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:9',
            'direccion' => 'required|string|max:255',
            'ciudad' => 'required|string|max:50',
            'distrito' => 'required|string|max:50',
            'codigo_postal' => 'nullable|string|max:10',
            'referencia' => 'nullable|string|max:255',
        ]);
        
        // Crear cliente si no existe
        $cliente = \App\Models\Cliente::firstOrCreate(
            ['corrcliente' => $this->email],
            [
                'nomcliente' => $this->nombre,
                'apecliente' => $this->apellidos,
                'sexcliente' => $this->sexo,
                'numcliente' => $this->telefono,
                'dircliente' => "{$this->direccion}, {$this->ciudad}, {$this->distrito}. Código Postal: {$this->codigo_postal}. Referencia: {$this->referencia}",
            ]
        );

        // Crear pedido
        $pedido = \App\Models\Pedido::create([
            'idcliente' => $cliente->idcliente,
            'pedtotal' => $this->total,
        ]);

        // Crear detalles del pedido
        foreach ($this->carrito as $item) {
            \App\Models\DetallePedido::create([
                'idpedido' => $pedido->idpedido,
                'idproducto' => $item['id'],
                'cantidad' => $item['cantidad'],
            ]);
        }

        // Limpiar el carrito después de procesar el pedido
        session()->forget('carrito');
        $this->carrito = [];
        return redirect()->to('thankyou')->with('idpedido', $pedido->idpedido);
    }

    public function render()
    {
        $this->total = collect($this->carrito)->sum(function ($item) {
            return $item['precio'] * $item['cantidad'];
        });
        return view('livewire.checkout');
    }
}
