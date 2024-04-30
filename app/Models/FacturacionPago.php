<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacturacionPago extends Model
{
    use HasFactory;

    protected $table = 'facturacion_pagos';
    protected $fillable = ['reserva_id', 'monto', 'fecha'];

    public function reserva() {
        return $this->belongsTo(Reserva::class);
    }
}
