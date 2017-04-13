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
                <a class="navbar-brand" href="#"><span>Colegio Bello Horizonte...</span>..</a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Usuario <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Perfil</a></li>
                            <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> configuración</a></li>
                            <li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Salir</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
                            
        </div><!-- /.container-fluid -->
    </nav>
        
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Buscar">
            </div>
        </form>
        <ul class="nav menu">
            <li class="active"><a href="/menu"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-home"></use></svg> Inicio</a></li>

            <li><a href="/alertas"><svg class="glyph stroked calendar"><use xlink:href="#stroked-sound-on"></use></svg> Alertas</a></li>

            <li><a href="./registroEstudiante"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> Registro Estudiante</a></li>

            <li><a href="./registroEmpleado"><svg class="glyph stroked app-window"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>Registro Empleado</a></li>

            <li><a href="./listadoGrado"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Listas por Grados</a></li>

            <li><a href="./listadoEmpleado"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Listas de Empleados</a></li>

            <li><a href="icons.html"><svg class="glyph stroked star"><use xlink:href="#stroked-printer"></use></svg> Recibo Estudiante</a></li>

            <li><a href="icons.html"><svg class="glyph stroked star"><use xlink:href="#stroked-printer"></use></svg> Recibo Empleado</a></li>

            <li><a href="./registroUsuario"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Registro Usuarios</a></li>
          
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
                <h1 class="page-header">Registro Estudiante</h1>
            </div>
        </div><!--/.row-->
        
        <div class="row">
                  <div class="col-lg-12">
                        <div class="panel panel-default">
                              <div class="panel-heading">Registro Estudiante</div>
                              <div class="panel-body">
                                    <div class="col-md-6">
                                          <form role="form">
                                          
                                                <div class="form-group">
                                                      <label>DATOS ESTUDIANTE</label>
                                                      <input class="form-control" name=nombre placeholder="Nombre">
                                                      <label>Apellido</label>
                                                      <input class="form-control" type="text" name=  apellido   placeholder="apellido" required>
                                                      <label>Fecha Nacimiento</label>
                                                      <input class="form-control" type="text" name=  fechaNac   placeholder="AAAA/MM/DD" required>
                                                      <label>Documento</label>
                                                      <input class="form-control" type="text" name=  documento  placeholder="documento" required>
                                                      <label>FechaExpedicón</label>
                                                      <input class="form-control" type="text" name=  fechaExp   placeholder="AAAA/MM/DD">
                                                      <label>celular</label>
                                                      <input class="form-control" type="text" name=  celular    placeholder="Celular" required>
                                                      <label>telefono</label>
                                                      <input class="form-control" type="text" name=  telefono   placeholder="telefono" required>
                                                      <label>Dirección</label>
                                                      <input class="form-control" type="text" name=  direccion  placeholder="Dirección" required>
                                                      <label>Grado</label>
                                                      <input class="form-control" type="text" name=  grado  placeholder="Grado" required>
                                                      <label>Peso Estudiante</label>
                                                      <input class="form-control" type="text" name=  pesoEstu   placeholder="Peso Estudiante" required>
                                                      <label>Tipo sangre</label>
                                                      <input class="form-control" type="text" name=  tipoSangre placeholder="tipo Sangre" required>
                                                      <label>Año Actual</label>
                                                      <input class="form-control" type="text" name=  anoActual  placeholder="Año Actual" required>

                                                      <label>Condición</label>
                                                      <input class="form-control" type="text" name=  condicion  placeholder="Condición" required>

                                                      <label>Religión</label>
                                                      <input class="form-control" type="text" name=  religion   placeholder="Religión" required>

                                                      <label>DATOS DEL PADRE</label>
                                                      
                                                      <input class="form-control" type="text" name=  docPadre   placeholder="Documento Padre" required>
                                                      <label>Nombre </label>
                                                      <input class="form-control" type="text" name=  nomPadre   placeholder=" Nombre Padre" required>

                                                      <label>Apellidos </label>
                                                      <input class="form-control" type="text" name=  apellPadre   placeholder="Apellidos Padre" required>

                                                      <label>Ocupación </label>
                                                      <input class="form-control" type="text" name=  ocupPadre   placeholder="Ocupación Padre" required>

                                                      <label>celular</label>
                                                      <input class="form-control" type="text" name=  celuPadre   placeholder="celular" required>

                                                      <label>correo</label>
                                                      <input class="form-control" type="text" name=  correoPadre  placeholder=" Correo Padre" required>

                                                      <label>DATOS DE LA MADRE</label>
                                                      <input class="form-control" type="text" name=  docMadre   placeholder=" Documento Madre" required>

                                                      <label>Nombre</label>
                                                      <input class="form-control" type="text" name=  nomMadre   placeholder="Nombre madre" required>

                                                      <label>Apellido</label>
                                                      <input class="form-control" type="text" name=  apellMadre   placeholder="Apellidos Madre" required>

                                                      <label>Ocupación</label>
                                                      <input class="form-control" type="text" name=  ocupMadre   placeholder="Ocupación Madre" required>

                                                      <label>celular</label>
                                                      <input class="form-control" type="text" name=  celuMadre   placeholder="celular Madre" required>

                                                      <label>correo</label>
                                                      <input class="form-control" type="text" name=  correoMadre  placeholder=" Correo Madre" required>

                                                      


                                                      <div class="form-group">
                                                        <label>Estado Civil de los Padres</label>
                                                        <div class="radio">
                                                            <label>
                                                             <input type="radio" name="estadoCivil" id="optionsRadios1" value="option1" checked>Madre Soltera
                                                           </label>
                                                        </div>
                                                        <div class="radio">
                                                          <label>
                                                           <input type="radio" name="estadoCivil" id="optionsRadios2" value="option2">Divorciados
                                                         </label>
                                                        </div>
                                                        <div class="radio">
                                                          <label>
                                                            <input type="radio" name="estadoCivil" id="optionsRadios3" value="option3">Casados
                                                          </label>
                                                        </div>
                                                        <div class="radio">
                                                          <label>
                                                            <input type="radio" name="estadoCivil" id="optionsRadios3" value="option3">Viudo
                                                          </label>
                                                        </div>
                                                      </div>

                                                      <label>DATOS ACUDIENTE</label>
                                                      <input class="form-control" type="text" name=  docAcudiente placeholder="Documento Acudiente" required>

                                                      <label>nombre</label>
                                                      <input class="form-control" type="text" name=  nomAcudiente placeholder=" Nombre Acudiente" required>

                                                      <label>celular</label>
                                                      <input class="form-control" type="text" name=  celuAcudiente placeholder=" celular Acudiente" required>

                                                      <label>correo</label>
                                                      <input class="form-control" type="text" name=  correoAcudiente  placeholder="Correo Acudiente" required>



                                                </div>
                                                                                                
                                                
                                                <button type="submit" class="btn btn-primary">Editar</button>
                                                <button type="reset" class="btn btn-default">Registrar</button>
                                                <button type="reset" class="btn btn-primary">Borrar</button>
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
