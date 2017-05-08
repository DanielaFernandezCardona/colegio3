<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocenteHasGrado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Docente_has_Grado', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->integer('Empledo_idEmpleado')->unsigned();
            $table->integer('Grado_idGrado')->unsigned();
            
            $table->primary('Empledo_idEmpleado', ' Grado_idGrado');
        
            $table->index('Grado_idGrado','fk_Empledo_has_Grado_Grado1_idx');
            $table->index('Empledo_idEmpleado','fk_Empledo_has_Grado_Empledo1_idx');
        
            $table->foreign('Empledo_idEmpleado')
                ->references('idEmpleado')->on('Empleado');
        
            $table->foreign('Grado_idGrado')
                ->references('idGrado')->on('Grado');
        
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
        Schema::drop('Docente_has_Grado');
    }
}
