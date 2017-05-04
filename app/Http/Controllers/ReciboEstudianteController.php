<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\ReciboEstudiante;
use Input;
use Redirect;
use DB;


class ReciboEstudianteController extends Controller
{

function index()
{
$now = new \DateTime();
$recibo=DB::table('reciboEstudiante')
		->select('idREcibo')
		->max('idREcibo');



if(is_null($recibo))
{
$sistemas['fecha']= $now->format('d-m-Y');

$sistemas['recibo']=1;

$sistemas['grado']='vacio';

$sistemas['nombre']='vacio';

}
else
{
$sistemas['fecha']= $now->format('d-m-Y');

$sistemas['recibo']=$recibo+1;

$sistemas['grado']='vacio';

$sistemas['nombre']='vacio';

}
 

      return view('reciboEstudiante',['sistemas' => $sistemas]);
}//funcion index

function search()
{
$userdata = array(
            'nombre' => Input::get('nomEstudiante'),
            );

 $var=Estudiante::nameRecibo($userdata);



foreach ($var as $valor) {
$sistemas['grado']=$valor->grado;
}

$sistemas['nombre']=$userdata['nombre'];


$now = new \DateTime();
$recibo=DB::table('reciboEstudiante')
		->select('idREcibo')
		->max('idREcibo');


if(is_null($recibo))
{
$sistemas['fecha']= $now->format('d-m-Y');

$sistemas['recibo']=1;

}
else
{
$sistemas['fecha']= $now->format('d-m-Y');

$sistemas['recibo']=$recibo+1;


}

if(empty($sistemas))
{
      return view('reciboEstudiante',['sistemas' => $sistemas]);

}
else
{
      return view('reciboEstudiante',['sistemas' => $sistemas]);
}

}//buscar


//registrar
function registrar(Request $request)
{

reciboEstudiante::registrar($request);



}

    
}
