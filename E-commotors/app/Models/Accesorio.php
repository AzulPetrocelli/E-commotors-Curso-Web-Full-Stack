<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accesorio extends Model
{
     // Define el nombre de la tabla asociada al modelo 
    protected $table = 'accesorio'; 

    protected $primaryKey = 'id_accesorio';
    
    // Define los atributos que se pueden asignar en masa 
    protected $fillable = [ 'nombre_accesorio', 
                            'precio_accesorio', 
                            'foto_accesorio', 
                            'id_tipo', 
                            'descripcion_accesorio',
                        ]; 
    

    public function tipo()
    {
        return $this->belongsTo(TipoAccesorio::class, 'id_tipo', 'id_tipo');
    }
}
