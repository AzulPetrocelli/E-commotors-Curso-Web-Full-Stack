<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';

    protected $primaryKey = "id_categoria";

    protected $fillable = ['nombre_categoria', 'estado_categoria'];

    public $timestamps = false;

    public function motos()
    {
        return $this->hasMany(Moto::class, 'id_categoria');
    }
}
