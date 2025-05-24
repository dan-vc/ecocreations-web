<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    protected $table = 'detalle_pedidos';
    protected $primaryKey = 'iddetallepedido';
    public $timestamps = false;

    protected $fillable = [
        'idpedido',
        'idproducto',
        'cantidad',
    ];
}
