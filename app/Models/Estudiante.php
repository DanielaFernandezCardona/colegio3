<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DateTime;
use Input;
use DB;


class Estudiante extends Model
{
	//crea un estudiante
    public static function crearEstudiante($data,$acudiente)
	{ 


//insertamos el acudiente 

DB::table('acudiente')->insert(array(
           'documentoPadre' => $acudiente['documentoPadre'],
            'nombrePadre'=> $acudiente['nombrePadre'],
         	'documentoMadre' => $acudiente['documentoMadre'],
            'nombremadre'=> $acudiente['nombremadre'],
             'apellidoPadre'=> $acudiente['apellidoPadre'],
             'apellidoMadre'=> $acudiente['apellidoMadre'],
        	'ocupacionMadre' => $acudiente['ocupacionMadre'],
            'ocupacionPadre'=> $acudiente['ocupacionPadre'],
        	'celularPadre' => $acudiente['celularPadre'],
            'celularMadre'=> $acudiente['celularMadre'],
			'correoMadre' => $acudiente['correoMadre'],
            'correoPadre'=> $acudiente['correoPadre'],
        	'estadoCivil' => $acudiente['estadoCivil'],
            'nombreAcu'=> $acudiente['nombreAcu'],
			'documentoAcu' => $acudiente['documentoAcu'],
            'celularAcu'=> $acudiente['celularAcu'],
            'ocupacion'=> $acudiente['ocupacion'], 
          	'correoAcu'=> $acudiente['correoAcu'], 
          	'parentesco'=>$acudiente['parentesco']   
        )); 

//realizamos una consulta a la tabla para sacar el id del acudiente
$acudientes = DB::table('Acudiente')->get();
$posicion=1;
foreach ($acudientes as $acu) {    
    if($acu->documentoAcu==$acudiente['documentoAcu'] )
        $posicion=$acu->idAcudiente; 
}

//realizamos una consulta a la tabla para sacar el id del grado
$grados=DB::table('Grado')->get();
$posicion2=2;
foreach ($grados as $grado) {  

if($grado->grado==$data['Grado'])
$posicion2=$grado->idGrado;

}

//convertimos  a tipo date
$date = new DateTime($data['fechaNac']);



DB::table('Estudiante')->insert(array(
           'documento' => $data['documento'],
            'nombre'=> $data['nombre'],
         	'apellido' => $data['apellido'],
            'fechaNac'=> $date,
        	'expedicion' => $data['expedicion'],
            'telefono'=> $data['telefono'],
        	'celular' => $data['celular'],
            'direccion'=> $data['direccion'],
			'peso' => $data['peso'],
            'tipoSangre'=> $data['tipoSangre'],
        	'anioActual' => $data['anioActual'],
            'condicion'=> $data['condicion'],
			'religion' => $data['religion'],
            'idGrado'=> $posicion2,
            'Acudiente_idAcudiente'=>$posicion 
        )); 





	}//clase

}
