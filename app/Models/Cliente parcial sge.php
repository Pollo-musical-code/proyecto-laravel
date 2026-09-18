<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'telefono',
        'direccion',
    ];

    /**
     * Un cliente tiene muchas mascotas.
     */
    public function mascotas(): HasMany
    {
        return $this->hasMany(Mascota::class);
    }
}
