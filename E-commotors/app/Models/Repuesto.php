<?php

namespace App\Models;

use App\Models\TipoRepuesto;
use Illuminate\Database\Eloquent\Model;

class Repuesto extends Model
{
    protected $table = 'repuesto'; 

    protected $primaryKey = 'id_repuesto';

    protected $fillable = [ 'nombre_repuesto', 
                            'precio_repuesto', 
                            'foto_repuesto', 
                            'descripcion_accesorio',
                            'tipo_de_repuesto',
    ]; 

    public function tipo()
    {
        return $this->belongsTo(TipoRepuesto::class, 'tipo_de_repuesto', 'id_repuesto');
    }

    
}
