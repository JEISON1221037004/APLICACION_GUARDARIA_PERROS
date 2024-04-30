<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pqrs extends Model
{
    use HasFactory;

    protected $table = 'pqrs';
    protected $fillable = ['cliente_id', 'tipo', 'descripcion', 'fecha'];

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }
}
