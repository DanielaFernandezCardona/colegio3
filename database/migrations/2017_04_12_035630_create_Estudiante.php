<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Estudiante', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('idEstudiantes');
            $table->integer('idGrado')->unsigned();
            $table->integer('idDireccion');
            $table->integer('Acudiente_idAcudiente')->unsigned();
            $table->string('nombre', 45)->nullable();
            $table->string('apellido', 45)->nullable();
            $table->date('fechaNac');
            $table->integer('numDocumento')->nullable();
            $table->string('expedicion', 45)->nullable();
            $table->integer('telefono')->nullable();
            $table->integer('celular')->nullable();
            $table->string('direccion', 45)->nullable();
            $table->integer('peso')->nullable();
            $table->string('tipoSangre', 45)->nullable();
            $table->date('oActual')->nullable();
            $table->string('condicion', 45)->nullable();
            $table->string('religion', 45)->nullable();
            $table->string('foto', 45)->nullable();
        
            $table->index('idGrado','fk_Estudiante_Grado1_idx');
            $table->index('Acudiente_idAcudiente','fk_Estudiante_Acudiente1_idx');
        
            $table->foreign('idGrado')
                ->references('idGrado')->on('Grado');
        
            $table->foreign('Acudiente_idAcudiente')
                ->references('idAcudiente')->on('Acudiente');
        
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
        Schema::drop('Estudiante');
    }
}
