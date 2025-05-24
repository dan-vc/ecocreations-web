<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $primaryKey = 'idcliente';
    public $timestamps = false;


    protected $fillable = [
        'nomcliente',
        'apecliente',
        'numcliente',
        'dircliente',
        'corrcliente',
    ];
}
