<!DOCTYPE html>
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>Colegio Bello Horizonte</title>

<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/datepicker3.css" rel="stylesheet">
<link href="./css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="./js/lumino.glyphs.js"></script>
<script>
// valida que solo se registren numeros y no letras
  function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
// suma los resultados de las casillas donde se ingresa el valor a pagar
function sumar (valor) {
    var total = 0;  
    valor = parseInt(valor); // Convertir el valor a un entero (número).
  
    total = document.getElementById('total').value;
  
    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    total = (total == null || total == undefined || total == "") ? 0 : total;
  
    /* Esta es la suma. */
    total = (parseInt(total) + parseInt(valor));
  
    // Colocar el resultado de la suma en el control "span".
    document.getElementById('total').value = total;
}



function activar(){
document.getElementById('mitext').readOnly=true;
}
function desactivar(){
document.getElementById('mitext').readOnly=false;
}

//envio datos al controller de pdf
function envia(pag){ 
  if(pag=="vistaEstudiante/1")
  { 
    document.form.setAttribute("target", "_blank");
  
   }
    document.form.action= pag 
    document.form.submit() 

  }

function myFunction()
{
var grado=document.getElementById("grado").value;
var  valorMes=document.getElementById("valorMens").value; 
var valor=grado=="no encontrado";

var valor2=valorMes=="0";

if(valor2)
{
 alert("INGRESE UN VALOR VALIDO EN PAGO A LA MENSUALIDAD")
 return false;
}


if(valor)
{
  alert("NO PUEDE REGISTRAR  GRADO ERRONEO")

return false;
}
else
{
document.form.action= "/registrarReciboEstudiante" 
document.form.submit() 
return true;

}


}

</script>


</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><IMG style="position:absolute; left:0px; top:0px" SRC="./images/RECIBO2.png"  ><span>.......  Colegio Bello Horizonte...</span></a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Elmer <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/salir"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Salir</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
                            
        </div><!-- /.container-fluid -->
    </nav>
        
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        
        <ul class="nav menu">
            <li class="active"><a href="/menu"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-home"></use></svg> Inicio</a></li>

            <li><a href="/alertas"><svg class="glyph stroked calendar"><use xlink:href="#stroked-sound-on"></use></svg> Alertas</a></li>

            <li><a href="./registroEstudiante"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> Registro Estudiante</a></li>

            <li><a href="./registroEmpleado"><svg class="glyph stroked app-window"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>Registro Empleado</a></li>

            <li><a href="./listadoGrado"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Listas por Grados</a></li>

            <li><a href="./listadoEmpleado"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Listas de Empleados</a></li>

            <li><a href="./reciboEstudiante"><svg class="glyph stroked star"><use xlink:href="#stroked-printer"></use></svg> Recibo Estudiante</a></li>

            <li><a href="./reciboEmpleado"><svg class="glyph stroked star"><use xlink:href="#stroked-printer"></use></svg> Recibo Empleado</a></li>
            
            <li><a href="./registroUsuario"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Registro Usuarios</a></li>
          
           <li><a href="./totalColegio"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Total Colegio</a></li>
   <li><a href="./totalColegioMes"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Total Colegio Mes</a></li>
 
            <li role="presentation" class="divider"></li>
           
        </ul>

    </div><!--/.sidebar-->
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Inicio</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Recibo Estudiante</h1>
            </div>
        </div><!--/.row-->
        
        <div class="row">
                  <div class="col-lg-12">
                        <div class="panel panel-default">
               
                              <div class="panel-heading" >Generar Recibo</div>
                              <div class="panel-body">
                                    <div class="col-md-6">

                                      <form role="search" method="post" action="/buscarEstudianteRecibo">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                          <label>Nombre Estudiante</label>
                                          <input class="form-control" name="nomEstudiante" placeholder="nombre Estudiante" required>
                                          
                                          <button type="submit" value="Buscar" class="btn btn-primary">Buscar</button>
                                        </form>


                                          <form role="form" name="form"  action="/registrarReciboEstudiante" method="post" onsubmit="return myFunction()">
              
                                                <div class="form-group" style="border:1px;">
                                                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  
                                                     
                                                {!! Form::label('N° Recibo') !!}
                                                    {!! Form::text('recibo',$sistemas['recibo'], array('class' => 'form-control','readonly'=>'readonly')) !!}

                                                  {!! Form::label('Fecha') !!}
                                                    {!! Form::text('fecha',$sistemas['fecha'], array('class' => 'form-control','readonly'=>'readonly')) !!}

                                                      <div class="form-group">
                                                        <label>Tipo a pagar</label>
                                                        <select name="tipo" class="form-control">
                                                          <option value="matricula">Matricula</option>
                                                          <option value="mensualidad">Mensualidad</option>
                                                          </select>
                                                      </div>



                                                      <div class="form-group">
                                        
                                                    
                                                  {!! Form::label('Nombre Estudiante') !!}
                                                    {!! Form::text('nombre',$sistemas['nombre'], array('class' => 'form-control','readonly'=>'readonly','placeholder'=>'Nombre')) !!}


                                                  {!! Form::label('Grado') !!}
                                                    {!! Form::text('grado',$sistemas['grado'], array('class' => 'form-control','readonly'=>'readonly','placeholder'=>'Grado','id'=>'grado')) !!}



                                                      </div>
                                                      
                                                      <div class="form-group">
                                                        <label>Mes a pagar</label>
                                                        <select name="mes" class="form-control">
                                                          <option value="1">Enero</option>
                                                          <option value="2">Febrero</option>
                                                          <option value="3">Marzo</option>
                                                          <option value="4">Abril</option>
                                                          <option value="5">Mayo</option>
                                                          <option value="6">Junio</option>
                                                          <option value="7">Julio</option>
                                                          <option value="8">Agosto</option>
                                                          <option value="9">Septiembre</option>
                                                          <option value="10">Octubre</option>
                                                          <option value="11">Noviembre</option>
                                                          <option value="12" >Diciembre</option>
                                                        </select>
                                                      </div>


                      


                                                      <div class="form-group">
                                                        <label>Observaciones</label>
                                                        <input class="form-control" type="text" name="Observaciones"  placeholder="Observaciones" value="vacio"  >
                                                      </div>

                                                      <div class="form-group has-success">
                                                        <label>Valor a Pagar Mensualidad $</label>
                                                        <input class="form-control" name="valorMens" id="valorMens" placeholder="Valor a Pagar Mensualidad" onkeypress="return valida(event);"  onchange="sumar(this.value);" value="0" required>
                                                      </div>


                                                        <input type="button" value="Activar pago Extraordinario" onclick="desactivar()" class="btn btn-primary"/>

                                                        <div class="form-group has-success"> 
                                                         <label>Valor a Pagar Extraordinario $</label>
                                                          <input type="text"onkeypress="return valida(event);"  onchange="sumar(this.value);" id="mitext" readonly="readonly" name="valorExtraordinario"  value="0"/>

                                                        </div>

                                                      

                                                      <div class="form-group has-success">
                                                        <label>Total a pagar</label>
                                                     <input type="text" onkeypress="return valida(event);"    id="total" name="total" value="0" readonly />
                                                     
                                                      </div>

                                                  
                                                </div>
                                                                                                
                                                   <input type="button" onClick="envia('vistaEstudiante/1')" class="btn btn-primary btn-xs" value="Vista Previa"> 
                                                  <input type="button" onClick="envia('vistaEstudiante/2')" class="btn btn-primary btn-xs"  value="Descargar" id="descarga"> 
                                  
                        
                                                <button type="submit" value="generarRecibo" class="btn btn-default">Registrar Pago</button>
  
                                               

                                          </div>
                                    </form>

                                       
                              </div>
                        </div>
                  </div><!-- /.col-->
            </div><!-- /.row registros estudiantes-->
    </div>  <!--/.main-->

    <script src="./js/jquery-1.11.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/chart.min.js"></script>
    <script src="./js/chart-data.js"></script>
    <script src="./js/easypiechart.js"></script>
    <script src="./js/easypiechart-data.js"></script>
    <script src="./js/bootstrap-datepicker.js"></script>
    <script>
        

        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
                $(this).find('em:first').toggleClass("glyphicon-minus");      
            }); 
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
          if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
          if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
    </script>   
</body>

</html>
