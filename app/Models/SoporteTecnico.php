<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoporteTecnico extends Model
{
    use HasFactory;

    protected $table = 'soporte_tecnico';
    protected $fillable = ['empleado_id', 'descripcion', 'fecha_solicitud', 'estado'];

    public function empleado() {
        return $this->belongsTo(Empleado::class);
    }
}
