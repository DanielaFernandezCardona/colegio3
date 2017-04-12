<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReciboEstudiante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ReciboEstudiante', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('idREcibo');
            $table->integer('TipoPago_idTipoPago')->unsigned();
            $table->integer('idEstudiantes')->unsigned();
            $table->integer('idGrado')->unsigned();
            $table->integer('valorPago');
            $table->integer('pagoAdicional')->nullable();
            $table->string('descripcion', 45)->nullable();
            $table->double('totalPago',15,8)->nullable();
            $table->string('mes_a_pagar', 45)->nullable();
            $table->dateTime('fecha')->nullable();
        
            $table->index('TipoPago_idTipoPago','fk_Recibo_TipoPago1_idx');
            $table->index('idEstudiantes','fk_Recibo_Estudiante1_idx');
            $table->index('idGrado','fk_ReciboEstudiante_Grado1_idx');
        
            $table->foreign('TipoPago_idTipoPago')
                ->references('idTipoPago')->on('TipoPago');
        
            $table->foreign('idEstudiantes')
                ->references('idEstudiantes')->on('Estudiante');
        
            $table->foreign('idGrado')
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
        Schema::drop('ReciboEstudiante');
    }
}
