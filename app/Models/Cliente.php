<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $fillable = ['nombre', 'telefono', 'email', 'direccion'];

    public function perros() {
        return $this->hasMany(Perro::class);
    }

    public function reservas() {
        return $this->hasMany(Reserva::class);
    }

    public function pqrs() {
        return $this->hasMany(Pqrs::class);
    }
}
