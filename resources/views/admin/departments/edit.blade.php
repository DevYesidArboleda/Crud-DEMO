@extends('layouts.app')
@section('title','Editar Departamento '.$department->name)

@section('content')
  
  

  {!! Form::open(['route' => ['departments.update', $department], 'method'=> 'PUT']) !!}
      <div class="form-group">

        {!! Form::label('country_id','Pais') !!}
        {!! Form::select('country_id',$countries,$department->country_id,['class'=>'form-control select-category','required'])!!}
      </div>
      <div class="form-group">
      	 
      	 {!! Form::label('name', 'Nombre')!!}
      	 {!! Form::text('name',$department->name, ['class' => 'form-control', 'placeholder' => 'Nombre completo','required'])!!}

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