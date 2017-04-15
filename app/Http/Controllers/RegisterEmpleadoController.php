<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Input;
use Redirect;

//toma los datos del empleado
class RegisterEmpleadoController extends Controller
{
    //toma los datos del formulario   
public function postRegistrar()
{


  $userdata = array(
            'documento' => Input::get('documento'),
            'nombre'=> Input::get('nombre'),
         	'apellido' => Input::get('apellido'),
            'nacionalidad'=> Input::get('nacionalidad'),
        	'telefono' => Input::get('telefono'),
            'correo'=> Input::get('correo'),
        	'direccion' => Input::get('direccion'),
            'fechaNacimiento'=> Input::get('fechaNacimiento'),
			'estudiosRealizados' => Input::get('estudiosRealizados'),
            'nivel'=> Input::get('nivel'),
        	'cargo' => Input::get('cargo'),
            'lugarEstudios'=> Input::get('lugarEstudios'),
			'tiempoTrabajo' => Input::get('tiempoTrabajo'),
            'fechaIngresoTrabajo'=> Input::get('fechaIngresoTrabajo'),
        	'valorNomina' => Input::get('valorNomina'),
            'estadoCivil'=> Input::get('estadoCivil'),
            'Grado_idGrado'=>Input::get('grado')
        );
Empleado::crearEmpleado($userdata);
return Redirect::to('registroEmpleado')->with('success','Registro Exitoso');


}

}
