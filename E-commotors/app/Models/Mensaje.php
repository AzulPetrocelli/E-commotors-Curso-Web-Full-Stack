<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    use HasFactory;

    protected $table = 'mensaje'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre_mensaje',
        'tipo_mensaje',
        'descripcion_mensaje',
        'productos_consultados',
    ];
}

