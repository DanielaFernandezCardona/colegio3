<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Input;
use Redirect;
use DB;


use Illuminate\Support\Collection;
/**
*clase RegisterEmpleadoController
*@autor jhon jaime ramirez cortes -lucerito Alarcon
*/
class RegisterEmpleadoController extends Controller
{
protected $table = 'Empleado';
   
protected $primaryKey = 'idEmpleado';


/**
*devuelve datos a la vista listadoEmpleado
*@return  object $empleado lista de empleado 
*
*/
function index()
    {
    
       
 $empleados=DB::table('Empleado')
            ->join('grado', 'grado.idGrado', '=', 'empleado.Grado_idGrado')
            ->select('empleado.idEmpleado','empleado.documento','empleado.nombre', 'empleado.apellido', 'empleado.cargo','empleado.correo','grado.grado')
            ->get();

        return view('listadoEmpleado',['empleados' => $empleados]);
    }


/**
*Registra datos en la bd del empleado
*@return  string redirecciona a la vista registroEmpleado 
*
*/
public function postRegistrar(Request $request)
{


  $userdata = array(
            'documento' => $request->documento,
            'nombre'=> $request->nombre,
         	'apellido' => $request->apellido,
            'nacionalidad'=> $request->nacionalidad,
        	'telefono' => $request->telefono,
            'correo'=> $request->correo,
        	'direccion' => $request->direccion,
            'fechaNacimiento'=> $request->fechaNacimiento,
			'estudiosRealizados' => $request->estudiosRealizados,
            'nivel'=> $request->nivel,
        	'cargo' => $request->cargo,
            'lugarEstudios'=> $request->lugarEstudios,
			'tiempoTrabajo' => $request->tiempoTrabajo,
            'fechaIngresoTrabajo'=>$request->fechaIngresoTrabajo,
        	'valorNomina' =>$request->valorNomina,
            'estadoCivil'=> $request->estadoCivil,
            'Grado_idGrado'=>$request->grado
        );
Empleado::crearEmpleado($userdata);
return Redirect::to('registroEmpleado')->with('success','Registro Exitoso');

}

<<<<<<< HEAD
/**
*Elimina datos en la bd del empleado
*@param object $idEmpleado a eliminar
*@return string redirecciona a la vista listadoEmpleado 
*
*/
public function destroy($idEmpleado)
{
  Empleado::destroyEmpleado($idEmpleado);
=======
// para eliminar un empleado
public function destroy($idEmple)
{
  Empleado::destroyEmpleado($idEmple);
>>>>>>> 644c878e3a2b5f601fa77d4ca5083c119bc93f83

                return redirect('listadoEmpleado');
 
}

/*


public function search()
{
Empleado::nameRecibo($nombre);

<<<<<<< HEAD
}
*/

/**
*Edita datos en la bd del empleado
*@param integer $idEmpleado a edita
*@return string redirecciona a la vista updateEmpleado 
*
*/
 public function edit($idEmpleado)
=======
 public function edit($idEmple)
>>>>>>> 644c878e3a2b5f601fa77d4ca5083c119bc93f83
 {

$empleado=DB::table('Empleado')
->join('grado', 'grado.idGrado', '=', 'empleado.Grado_idGrado')
->select('empleado.idEmpleado','empleado.documento','empleado.nombre','empleado.apellido', 'empleado.nacionalidad', 'empleado.telefono','empleado.correo','empleado.direccion','empleado.fechaNacimiento','empleado.estudiosRealizados','empleado.nivel','empleado.cargo','empleado.lugarEstudios','empleado.tiempoTrabajo','empleado.fechaIngresoTrabajo','empleado.valorNomina','empleado.estadoCivil','empleado.fechaNacimiento','grado.grado','grado.idGrado')
<<<<<<< HEAD
->where('idEmpleado',$idEmpleado)
=======
->where('idEmpleado',$idEmple)
>>>>>>> 644c878e3a2b5f601fa77d4ca5083c119bc93f83
->first();


 //$empleado = Empleado::find(['idEmpleado' => $id]);
                return \View::make('updateEmpleado',compact('empleado'));
 }


/**
*Actualiza datos en la bd del empleado
*@param  object $request datos del empleado
*@return string redirecciona a la vista listadoEmpleado 
*
*/
public function update(Request $request)
 {
               Empleado::updateEmpleado($request);

                return redirect('listadoEmpleado');
 
 }

}
