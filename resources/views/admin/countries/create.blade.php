@extends('layouts.app')
@section('title','Crear Pais')

@section('content')
  
  

  {!! Form::open(['route' => 'countries.store', 'method'=> 'POST']) !!}
      <div class="form-group">
      	 
      	 {!! Form::label('name', 'Nombre')!!}
      	 {!! Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'Nombre completo','required'])!!}

      </div>
      <div class="form-group">
      	{!! Form::label('state', 'Activado')!!}
      	<input type="checkbox" name="state" id="state" 
      		value="1"
      		class="checkbox_state" 		
      		data-on-text="Si"
          data-off-text="No"
					data-size="mini">
      </div>

      <div class="form-group">
      	 
      	 {!! Form::submit('Guardar',['class' => 'btn btn-primary'])!!}

         <a href="javascript:history.back()" class="btn btn-default">Atras</a>
      </div>


  {!! Form::close()!!}

@endsection