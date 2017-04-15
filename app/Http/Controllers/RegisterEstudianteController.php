<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use Input;
use Redirect;

class RegisterEstudianteController extends Controller
{
    
    //toma los datos del formulario estudiante  
public function postRegistrar()
{


  $userdata = array(
            'documento' => Input::get('documento'),
            'nombre'=> Input::get('nombre'),
         	'apellido' => Input::get('apellido'),
            'fechaNac'=> Input::get('fechaNac'),
        	'expedicion' => Input::get('expedicion'),
            'telefono'=> Input::get('telefono'),
        	'celular' => Input::get('celular'),
            'direccion'=> Input::get('direccion'),
			'peso' => Input::get('peso'),
            'tipoSangre'=> Input::get('tipoSangre'),
        	'anioActual' => Input::get('anioActual'),
            'condicion'=> Input::get('condicion'),
			'religion' => Input::get('religion'),
            'Grado'=> Input::get('grado'),
            'Acudiente_idAcudiente'=> Input::get('documentoAcu')        
        );

$acudientedata = array(
            'documentoPadre' => Input::get('documentoPadre'),
            'nombrePadre'=> Input::get('nombrePadre'),
         	'documentoMadre' => Input::get('documentomadre'),
            'nombremadre'=> Input::get('nombremadre'),
             'apellidoPadre'=> Input::get('apellidoPadre'),
             'apellidoMadre'=> Input::get('apellidoMadre'),
        	'ocupacionMadre' => Input::get('ocupacionMadre'),
            'ocupacionPadre'=> Input::get('ocupacionPadre'),
        	'celularPadre' => Input::get('celularPadre'),
            'celularMadre'=> Input::get('celularMadre'),
			'correoMadre' => Input::get('correoMadre'),
            'correoPadre'=> Input::get('correoPadre'),
        	'estadoCivil' => Input::get('estadoCivil'),
            'nombreAcu'=> Input::get('nombreAcu'),
			'documentoAcu' => Input::get('documentoAcu'),
            'celularAcu'=> Input::get('celularAcu'),
            'ocupacion'=> Input::get('ocupacion'), 
          	'correoAcu'=> Input::get('correoAcu'), 
          	'parentesco'=>Input::get('parentesco')            
        );




Estudiante::crearEstudiante($userdata,$acudientedata);
return Redirect::to('registroEstudiante')->with('success','Registro Exitoso');


}
}
