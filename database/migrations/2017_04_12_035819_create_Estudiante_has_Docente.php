<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudianteHasDocente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Estudiante_has_Docente', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->integer('Estudiante_idEstudiantes')->unsigned();
            $table->integer('Docente_idDocentes')->unsigned();
            
            $table->primary('Estudiante_idEstudiantes', ' Docente_idDocentes');
        
            $table->index('Docente_idDocentes','fk_Estudiante_has_Docente_Docente1_idx');
            $table->index('Estudiante_idEstudiantes','fk_Estudiante_has_Docente_Estudiante1_idx');
        
            $table->foreign('Estudiante_idEstudiantes')
                ->references('idEstudiantes')->on('Estudiante');
        
            $table->foreign('Docente_idDocentes')
                ->references('idEmpleado')->on('Empleado');
        
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
        Schema::drop('Estudiante_has_Docente');
    }
}
