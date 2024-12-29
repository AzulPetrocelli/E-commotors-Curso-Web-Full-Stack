<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Moto extends Model
{
    
    // Define el nombre de la tabla asociada al modelo 
    protected $table = 'moto'; 

    protected $primaryKey = 'id_moto';

    public $timestamps = false;
    
    // Define los atributos que se pueden asignar en masa 
    protected $fillable = [ 'nombre', 
                            'estado', 
                            'precio_moto', 
                            'foto_moto', 
                            'id_categoria', 
                            'id_marca', 
                            'titulo_card', 
                            'descripcion_moto', 
                            'imagenes', 
                            'color' ]; 
    

    public function marca() { 
        return $this->belongsTo(Marca::class, 'id_marca'); 
    } 
    
    public function categoria() {
        return $this->belongsTo(Categoria::class, 'id_categoria'); 
    }
}
