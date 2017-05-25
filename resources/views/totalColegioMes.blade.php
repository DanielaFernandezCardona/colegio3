<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Colegio Bello Horizonte</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/datepicker3.css" rel="stylesheet">
<link href="./css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="./js/lumino.glyphs.js"></script>

<script>
        
function envio(pag)
{

document.form.action= pag 
    document.form.submit() 
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
                <a class="navbar-brand" href="#"><IMG style="position:absolute; left:0px; top:0px" SRC="./images/RECIBO2.png"  >    <span>       &#160   &#160 Colegio Bello <p> &#160 &#160 &#160 &#160 Horizonte</p></span>

                </a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>{{Auth::user()->nombre}} <span class="caret"></span></a> 
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
            <li role="presentation" class="divider"></li>
            <li class="active"><a href="./menu"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-home"></use></svg> Inicio</a></li>

            <li><a href="./alertas"><svg class="glyph stroked calendar"><use xlink:href="#stroked-sound-on"></use></svg> Alertas</a></li>

            <li class="parent ">
                <a href="#">
                    <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Registros 
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li>
                        <a class="" href="./registroEstudiante">
                            <svg class="glyph stroked line-graph"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> Registrar Estudiante
                        </a>
                    </li>
                    <li>
                        <a class="" href="./registroEmpleado">
                            <svg class="glyph stroked app-window"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> Registrar Empleado
                        </a>
                    </li>
                    <li>
                        <a class="" href="./registroUsuario">
                            <svg class="glyph stroked app-window"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> Registrar Administrador
                        </a>
                    </li>
                   
                </ul>
            </li>

            <li class="parent ">
                <a href="#">
                    <span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> 
                    Listados 
                </a>
                <ul class="children collapse" id="sub-item-2">
                    <li>
                        <a class="" href="./listadoGrado">
                            <svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Listado de Pagos Estudiantes
                        </a>
                    </li>
                     <li>
                        <a class="" href="./listadoEstudiantes">
                            <svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Listado de Estudiantes
                        </a>
                    </li>
                    <li>
                        <a class="" href="./listadoEmpleado">
                            <svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Listado de empleados
                        </a>
                    </li>
                   
                </ul>
            </li>
            <li class="parent ">
                <a href="#">
                    <span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> 
                    Generar Recibos 
                </a>
                <ul class="children collapse" id="sub-item-3">
                    <li>
                        <a class="" href="./reciboEstudiante">
                            <svg class="glyph stroked star"><use xlink:href="#stroked-printer"></use></svg> Recibo Estudiante
                        </a>
                    </li>
                    <li>
                        <a class="" href="./reciboEmpleado">
                            <svg class="glyph stroked star"><use xlink:href="#stroked-printer"></use></svg> Recibo empleado
                        </a>
                    </li>
                   
                </ul>
            </li>
            <li class="parent ">
                <a href="#">
                    <span data-toggle="collapse" href="#sub-item-4"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> 
                    Caja 
                </a>
                <ul class="children collapse" id="sub-item-4">
                    <li>
                        <a class="" href="./totalColegio">
                            <svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Ingresos y Egresos Año
                        </a>
                    </li>
                    <li>
                        <a class="" href="./totalColegioMes">
                            <svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Ingresos y Egresos Mes
                        </a>
                    </li>
                   
                </ul>
            </li>

            <li role="presentation" class="divider"></li>
           
        </ul>

    </div><!--/.sidebar-->
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href=""></use></a></li>
                
            </ol>
        </div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">INGRESOS Y EGRESOS POR MES</h1>
            </div>
        </div><!--/.row-->


        <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"><svg class="glyph stroked email"></svg> TOTAL MES</div>
                    <div class="panel-body">
                
                        <form name="form" class="form-horizontal" action="/registarTotalMesColegio" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  
                                                <div class="form-group">
                                                        <label>Mes a calcular</label>
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
                            <fieldset>
                                
                                 {!! Form::label('Fecha') !!}
                                 {!! Form::text('fecha',$sistemas['fecha'], array('class' => 'form-control','readonly'=>'readonly')) !!}

                                  {!! Form::label('Entrada Estudiante:') !!}
                                  {!! Form::text('totalEstudiante',$sistemas['totalEstudiante'], array('class' => 'form-control','readonly'=>'readonly','placeholder'=>'Total')) !!}

                                  {!! Form::label('Salida Empleado:') !!}
                                  {!! Form::text('totalEmpleado',$sistemas['totalEmpleado'], array('class' => 'form-control','readonly'=>'readonly','placeholder'=>'Total')) !!}


                                
                                  {!! Form::label('Total Mes:') !!}
                                  {!! Form::text('total',$sistemas['totalMes'], array('class' => 'form-control','readonly'=>'readonly','placeholder'=>'Total')) !!}

                                

                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 widget-right">

                                        <input type="button" onClick="envio('calcularMesColegio')" class="btn btn-primary" value="Calcular">

                                        <button type="submit" class="btn btn-default btn-md pull-right">Registrar</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>




                    </div>
                </div>
            </div>
        
    </div>  <!--/.main-->

    <script src="./js/jquery-1.11.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/chart.min.js"></script>
    <script src="./js/chart-data.js"></script>
    <script src="./js/easypiechart.js"></script>
    <script src="./js/easypiechart-data.js"></script>
    <script src="./js/bootstrap-datepicker.js"></script>
    <script>
        
function envio(pag)
{
document.form.action= pag 
    document.form.submit() 

}



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
