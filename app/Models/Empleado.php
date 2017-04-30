<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DateTime;
use Input;
use DB;

class Empleado extends Model
{

// consulta tabla empleado para traer los valores
 protected $table = 'empleado';
 protected $primaryKey='idEmpleado';

      public function empleado()
      {
        return $this->hasOne('App\Models\Empleado');
      }

	public static function crearEmpleado($data)
	{ 



$documento=$data['documento'];
$nombre=$data['nombre'];
$apellido=$data['apellido'];
$nacionalidad=$data['nacionalidad'];
$telefono=$data['telefono'];
$correo=$data['correo'];
$direccion=$data['direccion'];
$fechaNacimiento=$data['fechaNacimiento'];
$date = new DateTime($fechaNacimiento);

$estudiosRealizados=$data['estudiosRealizados'];
$nivel=$data['nivel'];
$cargo=$data['cargo'];
$lugarEstudios=$data['lugarEstudios'];
$tiempoTrabajo=$data['tiempoTrabajo'];
$fechaIngresoTrabajo=$data['fechaIngresoTrabajo'];
$date2 = new DateTime($fechaIngresoTrabajo);

$valorNomina=$data['valorNomina'];
$estadoCivil=$data['estadoCivil'];
$Grado_idGrado=$data['Grado_idGrado'];


if ($Grado_idGrado=="no_tiene")
{
DB::table('Empleado')->insert(array(
          'documento' => $documento,
            'nombre'=> $nombre,
         	'apellido' => $apellido,
            'nacionalidad'=> $nacionalidad,
        	'telefono' => $telefono,
            'correo'=> $correo,
        	'direccion' => $direccion,
            'fechaNacimiento'=> $date,
			'estudiosRealizados' => $estudiosRealizados,
            'nivel'=> $nivel,
        	'cargo' => $cargo,
            'lugarEstudios'=> $lugarEstudios,
			'tiempoTrabajo' => $tiempoTrabajo,
            'fechaIngresoTrabajo'=> $date2,
        	'valorNomina' => $valorNomina,
            'estadoCivil'=> $estadoCivil            		           
        )); 
}
else
{	

DB::table('Empleado')->insert(array(
          'documento' => $documento,
            'nombre'=> $nombre,
         	'apellido' => $apellido,
            'nacionalidad'=> $nacionalidad,
        	'telefono' => $telefono,
            'correo'=> $correo,
        	'direccion' => $direccion,
            'fechaNacimiento'=> $date,
			'estudiosRealizados' => $estudiosRealizados,
            'nivel'=> $nivel,
        	'cargo' => $cargo,
            'lugarEstudios'=> $lugarEstudios,
			'tiempoTrabajo' => $tiempoTrabajo,
            'fechaIngresoTrabajo'=> $date2,
        	'valorNomina' => $valorNomina,
            'estadoCivil'=> $estadoCivil,
            'Grado_idGrado'=>$Grado_idGrado     
        )); 
	
}//else

	}//function

public static function updateEmpleado($request)
{
$empleado = Empleado::find($request->id);
 /*
 $empleado=DB::table('empleado')->where('idEmpleado', $request->id)->first();
       
 */
 
         $empleado->nombre = $request->nombre;
         $empleado->correo = $request->correo;
 $empleado->save();

}

   

}
