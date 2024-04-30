<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
    use HasFactory;

    protected $table = 'perros';
    protected $fillable = ['nombre', 'raza', 'fecha_nacimiento', 'genero', 'color', 'notas_especiales', 'cliente_id'];

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function carnetVacunas() {
        return $this->hasMany(CarnetVacuna::class);
    }
}
