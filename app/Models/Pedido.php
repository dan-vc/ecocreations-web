<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $primaryKey = 'idpedido';
    public $timestamps = false;

    protected $fillable = [
        'idcliente',
        'pedtotal',
    ];
}
