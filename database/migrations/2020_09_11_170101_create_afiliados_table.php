<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfiliadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afiliados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('sexo');
            $table->string('image_ine');
            $table->string('estado_civil');
            $table->date('fecha_nacimiento');
            $table->string('lugar_nacimiento');
            $table->string('estado_vivienda');
            $table->string('tiempo_viviendo');
            $table->string('calle');
            $table->string('colonia');
            $table->boolean('dep_menores');
            $table->boolean('dep_tecera_edad');
            $table->boolean('Vivienda_compartida');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('afiliados');
    }
}
