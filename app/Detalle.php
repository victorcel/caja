<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    public function tarjeta(){
        return $this->belongsTo(Tarjeta::class);
    }
    public function transaccion(){
        return $this->belongsTo(Transaccion::class);
    }
}
