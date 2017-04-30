<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use PDF;
use DB;

class PdfController extends Controller
{
    



//permite crear la vista 
 public function htmltopdfview(Request $request)
    {
        $empleados = Empleado::all();
        view()->share('empleados',$empleados);
        if($request->has('download')){
            $pdf = PDF::loadView('htmltopdfview');
            return $pdf->download('htmltopdfview.pdf');
        }
        return view('htmltopdfview');
    }


// ver informacion empleado
public function pdf_empleado($id)
{
$user=DB::table('Empleado')
->join('grado', 'grado.idGrado', '=', 'empleado.idEmpleado')
->select('empleado.documento','empleado.nombre','empleado.apellido', 'empleado.nacionalidad', 'empleado.telefono','empleado.correo','empleado.direccion','empleado.fechaNacimiento','empleado.estudiosRealizados','empleado.nivel','empleado.cargo','empleado.lugarEstudios','empleado.tiempoTrabajo','empleado.fechaIngresoTrabajo','empleado.valorNomina','empleado.estadoCivil','empleado.fechaNacimiento','grado.grado')
->where('idEmpleado',$id)
->first();

//var_dump($user);


 //$user = Empleado::where('idEmpleado',$id)->first();
 // var_dump($user);
  $headers = array(
              'Content-Type: application/pdf',
            );

     $pdf = PDF::loadView('pdfvista',['user' => $user]);
return $pdf->download('ResumenInformacion.pdf',$headers);

}



}
