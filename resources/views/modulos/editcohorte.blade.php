@extends('home')
@section('content')

<!-- ############ PAGE START-->
<div class="padding">
  
  <div class="row">
     @include('alerts.request')
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2>Editar Cohorte {{$idd->id}}</h2>
       
         
          <small></small>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
          <form role="form" action="{{url('/modicohorte')}}" method="post">
             {!! csrf_field() !!}
              <input type="hidden" name="idc" class="form-control" value="{{$idd->id}}">
              <div class="form-group">
              <label for="exampleInputEmail1">Proyecto</label>
              <select name="proyecto" class="form-control">
                @foreach($proyectos as $proyecto)
                <option value="{{$proyecto->nombre}}" >{{$proyecto->nombre}}</option>
                @endforeach
              </select>
              
            </div>
                        
            <div class="form-group">
              <label for="exampleInputEmail1">Numero</label>
              <input type="text" name="numero" class="form-control" value="{{$idd->numero}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Fecha de Inicio</label>
              <input type="text" id="datepicker" class="form-control" name="fecha_inicio" value="{{$idd->fecha_inicio}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Fecha Culminaci&oacute;n</label>
              <input type="text" id="datepicker2" class="form-control"name="fecha_culminacion" value="{{$idd->fecha_culminacion}}">
            </div>
          
            <div class="form-group">
              <label for="exampleFormControlSelect1">Mes de inicio de la convocatoria</label>
                 <select class="form-control" id="exampleFormControlSelect1" name="mes_inicio">
                    <option>{{$idd->mes_inicio}}</option>
                    <option>Enero</option>
                    <option>Febrero</option>
                    <option>Marzo</option>
                    <option>Abril</option>
                    <option>Mayo</option>
                    <option>Junio</option>
                    <option>Julio</option>
                    <option>Agosto</option>
                    <option>Septiembre</option>
                    <option>Octubre</option>
                    <option>Noviembre</option>
                    <option>Diciembre</option>
                </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Mes de fin de la convocatoria</label>
                 <select class="form-control" id="exampleFormControlSelect1" name="mes_final">
                    <option>{{$idd->mes_final}}</option>
                    <option>Enero</option>
                    <option>Febrero</option>
                    <option>Marzo</option>
                    <option>Abril</option>
                    <option>Mayo</option>
                    <option>Junio</option>
                    <option>Julio</option>
                    <option>Agosto</option>
                    <option>Septiembre</option>
                    <option>Octubre</option>
                    <option>Noviembre</option>
                    <option>Diciembre</option>
                </select>
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Cantidad de planillas recibidas</label>
              <input type="text" name="planillas_recibidas" class="form-control" value="{{$idd->planillas_recibidas}}">
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Personas por entrevistar</label>
              <input type="text" name="personas_entrevistadas" class="form-control" value="{{$idd->personas_entrevistadas}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Personas seleccionadas</label>
              <input type="text" name="personas_seleccionadas" class="form-control" value="{{$idd->personas_seleccionadas}}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Localidad</label>
                 <select class="form-control" id="exampleFormControlSelect1" name="localidad">
                    <option>{{$idd->localidad}}</option>
                    <option value="Bailadores">Bailadores</option>
                    <option value="Barquisimeto">Barquisimeto</option>
                    <option value="Caracas">Caracas</option>
                    <option value="Cumaná">Cumaná</option>
                    <option value="El Paují">El Paují</option>
                    <option value="El Tigre">El Tigre</option>
                    <option value="Guacara">Guacara</option>
                    <option value="Guarenas">Guarenas</option>
                    <option value="Guatire">Guatire</option>
                    <option value="Maracay">Maracay</option>
                    <option value="Mariche">Mariche</option>
                    <option value="Mérida">Mérida</option>
                    <option value="San Antonio">San Antonio</option>
                    <option value="San Félix">San Félix</option>
                    <option value="Valencia">Valencia</option>
                </select>
            </div>
            <button type="submit" class="btn btn-warning btn-block">Modificar</button>
            <a type="button" href="{{url('/cohortes')}}" class="btn btn-danger btn-block">Cancelar</a>
          </form>
        </div>
      </div>
    </div>
    
  </div>
</div>



<!-- ############ PAGE END-->
@endsection

@section('scripts')
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script> 
<script>
  $( function() {
    $( "#datepicker2" ).datepicker();
  } );
  </script>
@endsection