<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Empleado', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('idEmpleado');
            $table->integer('idDireccion');
            $table->string('nombre', 45)->nullable();
            $table->string('apellido', 45)->nullable();
            $table->string('nacionalidad', 45)->nullable();
            $table->string('telefono', 45)->nullable();
            $table->string('correo', 45)->nullable();
            $table->string('direccion', 45)->nullable();
            $table->date('fechaNacimiento')->nullable();
            $table->string('estudiosRealizados', 45)->nullable();
            $table->string('nivel', 45)->nullable();
            $table->string('cargo', 45)->nullable();
            $table->string('lugarEstudios', 45)->nullable();
            $table->string('tiempoTrabajo', 45)->nullable();
            $table->date('fechaIngresoTrabajo')->nullable();
            $table->double('valorNomina',15,8)->nullable();
            $table->string('estadoCivil', 45)->nullable();
            $table->string('foto', 45)->nullable();
        
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::drop('Empleado');
    }
}
