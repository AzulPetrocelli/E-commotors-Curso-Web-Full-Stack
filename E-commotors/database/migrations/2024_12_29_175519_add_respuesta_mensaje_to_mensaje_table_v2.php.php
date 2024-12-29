<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRespuestaMensajeToMensajeTableV2 extends Migration
{
    public function up()
    {
        Schema::table('mensaje', function (Blueprint $table) {
            // Agregar el campo 'respuesta_mensaje'
            $table->text('respuesta_mensaje')->nullable()->after('productos_consultados');
        });
    }

    public function down()
    {
        Schema::table('mensaje', function (Blueprint $table) {
            // Eliminar el campo 'respuesta_mensaje' en caso de revertir la migración
            $table->dropColumn('respuesta_mensaje');
        });
    }
}

