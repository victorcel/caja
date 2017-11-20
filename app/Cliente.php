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

    public function tarjeta()
    {
        return $this->hasMany(Tarjeta::class);
    }

    public function transaccion()
    {
        return $this->hasMany(Transaccion::class);
    }
}
