<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\totalMes;
use DB;

class totalMesController extends Controller
{
   
protected $table = 'totalmes';
   
protected $primaryKey = 'idtotalMes';


    public function index()
    {
$now = new \DateTime();
$sistemas['fecha']= $now->format('d-m-Y');
$sistemas['totalMes']='vacio';
$sistemas['totalEstudiante']='vacio';
$sistemas['totalEmpleado']='vacio';

                                
      return view('totalColegioMes',['sistemas' => $sistemas]);
    }


public function calcularTotalMes(Request $request)
{

 $pagoEstudiante=DB::table('reciboestudiante')
            ->select('reciboestudiante.totalPago')
            ->where('reciboestudiante.mes_a_pagar',$request->mes)
            ->get();

$sumapagoEstudiante=0;

foreach ($pagoEstudiante as $valor)
{
$sumapagoEstudiante+=$valor->totalPago;
}

 $pagoEmpleado=DB::table('recibonomina')
            ->select('recibonomina.totalPago')
            ->where('recibonomina.mes_a_pagar',$request->mes)
            ->get();

$sumapagoEmpleado=0;

foreach ($pagoEmpleado as $valor2)
{
$sumapagoEmpleado+=$valor2->totalPago;
}

$resultado=$sumapagoEstudiante-$sumapagoEmpleado;

$now = new\DateTime();

$sistemas['fecha']= $now->format('d-m-Y');
$sistemas['totalMes']=$resultado;
$sistemas['totalEstudiante']=$sumapagoEstudiante;
$sistemas['totalEmpleado']=$sumapagoEmpleado;

                                
      return view('totalColegioMes',['sistemas' => $sistemas]);


}

    public function registrarMesTotal(Request $request)
    {
    
 totalMes::registrarDatos($request);
$now = new \DateTime();

$sistemas['fecha']= $now->format('d-m-Y');
$sistemas['totalMes']="registrado";
$sistemas['totalEstudiante']="registrado";
$sistemas['totalEmpleado']="registrado";
                                
      return view('totalColegioMes',['sistemas' => $sistemas]);

    }

}
