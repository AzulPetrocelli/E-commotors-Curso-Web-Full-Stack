<?php

namespace App\Models;

use App\Models\Repuesto;
use Illuminate\Database\Eloquent\Model;

class TipoRepuesto extends Model
{
    protected $table = 'tipo_de_repuesto'; 

    protected $primaryKey = 'id_repuesto';

    protected $fillable = [ 'nombre_repuesto']; 

    public function accesorios()
    {
        return $this->hasMany(Repuesto::class, 'tipo_de_repuesto', 'id_repuesto');
    }
}
