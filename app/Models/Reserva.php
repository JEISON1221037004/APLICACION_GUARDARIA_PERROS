<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas';
    protected $fillable = ['cliente_id', 'perro_id', 'empleado_id', 'fecha_inicio', 'fecha_fin', 'tipo_servicio'];

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function perro() {
        return $this->belongsTo(Perro::class);
    }

    public function empleado() {
        return $this->belongsTo(Empleado::class);
    }

    public function facturacionPagos() {
        return $this->hasMany(FacturacionPago::class);
    }
}

