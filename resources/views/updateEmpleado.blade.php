
<div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">
 {!! Form::model($empleado,['route' => 'empleado/update', 'method' => 'post', 'novalidate']) !!}
            
                {!! Form::hidden('id', $empleado->idEmpleado) !!}
            
                <div class="form-group">
                      {!! Form::label('nombre', 'Nombre') !!}
                      {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                  </div>
 
                  <div class="form-group">
                      {!! Form::label('correo', 'Descripci&oacute;n') !!}
                      {!! Form::text('correo', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                  </div>
            
                <div class="form-group">
                      {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                  </div>
            {!! Form::close() !!}
 </div>
 </div>
</div>
