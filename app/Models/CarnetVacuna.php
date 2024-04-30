<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarnetVacuna extends Model
{
    use HasFactory;

    protected $table = 'carnet_vacunas';
    protected $fillable = ['perro_id', 'vacuna', 'fecha_aplicacion'];

    public function perro() {
        return $this->belongsTo(Perro::class);
    }
}
