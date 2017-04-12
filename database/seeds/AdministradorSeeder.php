<?php

use Illuminate\Database\Seeder;
use App\Models\Administrador;


class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/*
            Administrador::create(array(
            'nombre'=> 'elmer',
            'apellidos'=> 'alarcon',
            'contrasena'=> Hash::make('12345'),
            'telefono' => '3103661957',
            'correo' => 'elmer.47@hotmail.com',
			'nombreUsuario' => 'elmer41',
			'direccion'=>'carrera 52 # 49- 61 Sevilla (Valle del Cauca)'			
            ));
            */
DB::table('Administrador')->insert(array(
          'nombre'=> 'elmer',
            'apellidos'=> 'alarcon',
            'contrasena'=> '12345',
            'telefono' => '3103661957',
            'correo' => 'elmer.47@hotmail.com',
			'nombreUsuario' => 'elmer41',
			'direccion'=>'carrera 52 # 49- 61 Sevilla (Valle del Cauca)'			
        )); 

    }
}
