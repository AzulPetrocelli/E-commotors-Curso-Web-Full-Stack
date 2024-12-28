<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    // Si el nombre de la tabla en la base de datos no sigue la convención, puedes especificarla aquí
    protected $table = 'marca';

    protected $primaryKey = "id_marca";

    // Si los nombres de las columnas no siguen la convención, puedes especificarlas aquí
    protected $fillable = ['nombre_marca', 'descripcion_marca','estado_marca'];

    
    public function motos()
    {
        return $this->hasMany(Moto::class, 'id_marca');
    }
}
