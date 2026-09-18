<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'precio',
        'cantidad_disponible',
    ];

    protected $casts = [
        'precio' => 'decimal:2',
        'cantidad_disponible' => 'integer',
    ];
}
