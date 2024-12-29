<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoAccesorio extends Model
{
      // Define el nombre de la tabla asociada al modelo 
    protected $table = 'tipo_de_accesorio'; 

    protected $primaryKey = 'id_tipo';
    
    // Define los atributos que se pueden asignar en masa 
    protected $fillable = [ 'nombre_tipo']; 

    public function accesorios()
    {
        return $this->hasMany(Accesorio::class, 'id_tipo', 'id_tipo');
    }
}
