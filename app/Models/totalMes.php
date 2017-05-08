<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DateTime;
use DB;

class totalMes extends Model
{
protected $table = 'totalanio';
   
protected $primaryKey = 'idtotalAnio';



    public static function registrarDatos($datos)
    {  


//convertimos  a tipo date
$date = new DateTime($datos->fecha);

$anio=explode('-',$datos->fecha);

   
    	DB::table('totalmes')->insert(array(
            'mes' => $anio[1],
            'idAdministrador'=>1,
            'fechaGenercion'=> $date->format('Y-m-d'),
         	'idAdministrador' => 1,
            'totalMescol'=> $datos->total
        )); 
	
    }

    
}
