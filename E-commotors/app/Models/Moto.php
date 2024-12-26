<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Moto extends Model
{
    //
    use HasFactory; 
    
    // Define el nombre de la tabla asociada al modelo 
    protected $table = 'moto'; 
    
    // Define los atributos que se pueden asignar en masa 
    protected $fillable = [ 'nombre', 
                            'estado', 
                            'precio_base', 
                            'precio_noche', 
                            'foto_moto', 
                            'id_categoria', 
                            'id_marca', 
                            'knowledge_node', 
                            'descripcion_node', 
                            'imagenes', 
                            'color' ]; 
    
    // Define las relaciones con otros modelos, si es necesario
    public function marca() { 
        return $this->belongsTo(Marca::class, 'id_marca'); 
    } 
    
    public function categoria() {
         return $this->belongsTo(Categoria::class, 'id_categoria'); 
    }
}
