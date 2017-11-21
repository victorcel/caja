<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'cedula',
        'nombres',
        'apellidos'
    ];

    public function tarjetas()
    {
        return $this->hasMany(Tarjeta::class);
    }

    public function transacciones()
    {
        return $this->hasMany(Transaccion::class);
    }
}
