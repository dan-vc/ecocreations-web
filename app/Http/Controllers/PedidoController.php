<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use App\Models\Cliente; // Asegúrate de importar el modelo Cliente
use App\Models\DetallePedido;
use App\Models\Producto; // Asegúrate de importar el modelo Producto

class PedidoController extends Controller
{


    public function thankyou()
    {
        $idpedido = session()->get('idpedido') ?? 1; // Obtener el ID del pedido de la sesión
        // $idpedido = 1; // ID DE PRUEBA

        $pedido = Pedido::find($idpedido); // Buscar el pedido en la base de datos
        $cliente = Cliente::find($pedido->idcliente); // Obtener el cliente asociado al pedido
        $detalles = DetallePedido::where('idpedido', $idpedido)->get(); // Obtener los detalles del pedido
        $productos = [];
        foreach ($detalles as $detalle) {
            $producto = Producto::find($detalle->idproducto); // Obtener el producto asociado al detalle
            $productos[] = [
                'info' => $producto,
                'cantidad' => $detalle->cantidad,
            ];
        }

        return view('thankyou', compact('idpedido', 'pedido', 'cliente', 'productos')); // Pasar los datos a la vista
    }
}
