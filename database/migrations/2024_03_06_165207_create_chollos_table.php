<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChollosTable extends Migration
{
    public function up()
    {
        Schema::create('chollos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('url', 1000); // Establecer la longitud máxima a 1000 caracteres
            $table->string('categoria');
            $table->integer('puntuacion');
            $table->decimal('precio', 8, 2);
            $table->decimal('precio_descuento', 8, 2);
            $table->boolean('disponible');
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('chollos');
    }
}
