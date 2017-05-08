<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\totalAnio;
use DB;


class totalAnioController extends Controller
{

protected $table = 'totalanio';
   
protected $primaryKey = 'idtotalAnio';


    public function index()
    {
$now = new \DateTime();


$sistemas['fecha']= $now->format('d-m-Y');
$sistemas['totalAnio']='vacio';
                                
      return view('totalColegio',['sistemas' => $sistemas]);
    }


public function calcularTotalAnio()
{

 $pagoEstudiante=DB::table('reciboestudiante')
            ->select('reciboestudiante.totalPago')
            ->get();
$sumapagoEstudiante=0;

foreach ($pagoEstudiante as $valor)
{
$sumapagoEstudiante+=$valor->totalPago;
}

 $pagoEmpleado=DB::table('recibonomina')
            ->select('recibonomina.totalPago')
            ->get();

$sumapagoEmpleado=0;

foreach ($pagoEmpleado as $valor2)
{
$sumapagoEmpleado+=$valor2->totalPago;
}





$resultado=$sumapagoEstudiante-$sumapagoEmpleado;

$now = new\DateTime();

$sistemas['fecha']= $now->format('d-m-Y');
$sistemas['totalAnio']=$resultado;
                                
      return view('totalColegio',['sistemas' => $sistemas]);


}

    public function registrarAnioTotal(Request $request)
    {
    

    totalAnio::registrarDatos($request);
$now = new \DateTime();

$sistemas['fecha']= $now->format('d-m-Y');
$sistemas['totalAnio']="registrado";
                                
      return view('totalColegio',['sistemas' => $sistemas]);

    }
}
