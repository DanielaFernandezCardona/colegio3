<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Colegio Bello Horizonte</title>

<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/datepicker3.css" rel="stylesheet">
<link href="./css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="./js/lumino.glyphs.js"></script>


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
                <h1 class="page-header">LISTADO DE EMPLEADOS</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Listado de empleados</div>
                    <div class="panel-body">
                        <table data-toggle="table" >
                            <thead>
                            <tr>
                                <th data-field="id" data-align="right">Documento</th>
                                <th data-field="name">Nombre</th>
                                <th data-field="apellido">Apellido</th>
                                <th data-field="grado"> Grado</th>
                                <th data-field="cargo">Cargo</th>
                                <th data-field="correo"> Correo</th>
                                <th data-field="ver"> Ver Información</th>
                                <th data-field="accion">Acción</th> 
                                
                             </tr>
                            </thead>
                             <tr>
    @foreach($empleados as $empleado)
     <td>{{$empleado->documento}}</td>
    <td>{{$empleado->nombre}}</td>
    <td>{{$empleado->apellido}}</td>
    <td>{{$empleado->grado}}</td>    
    <td>{{$empleado->cargo}}</td>
    <td>{{$empleado->correo}}</td>
  <!--  <td><button style="border-radius: 5px;" id="{{$empleado->idEmpleado}}">Ver</button></td>-->
  <td><a href="/hojavida/{{$empleado->idEmpleado}}"><button style="border-radius: 5px;" id="{{$empleado->idEmpleado}}">Ver</button></a></td>
    
     <td>
                        <a class="btn btn-primary btn-xs" href="{{ route('empleado/edit',['id' =>$empleado->idEmpleado ] )}}" >Editar</a> 
                        <a class="btn btn-danger btn-xs" href="{{ route('empleado/destroy',['id' =>$empleado->idEmpleado] )}}" onclick="return confirm('¿Seguro desea eliminarlo?')" >Eliminar</a>
                    </td>   


        </tr>
             @endforeach
                        </table>
                    
                    </div>
                </div>

                </div>    
            </div>
        </div><!--/.LISTADOS tabla row-->  
                       
        
    </div>  <!--/.main-->

    <script src="./js/jquery-1.11.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/chart.min.js"></script>
    <script src="./js/chart-data.js"></script>
    <script src="./js/easypiechart.js"></script>
    <script src="./js/easypiechart-data.js"></script>
    <script src="./js/bootstrap-datepicker.js"></script>
    <script src="js/bootstrap-table.js"></script>
     
</body>

</html>
