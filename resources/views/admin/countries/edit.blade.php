@extends('layouts.app')
@section('title','Editar Pais '.$country->name)

@section('content')
  
  

  {!! Form::open(['route' => ['countries.update', $country], 'method'=> 'PUT']) !!}
      <div class="form-group">
      	 
      	 {!! Form::label('name', 'Nombre')!!}
      	 {!! Form::text('name',$country->name, ['class' => 'form-control', 'placeholder' => 'Nombre completo','required'])!!}

      </div>

      <div class="form-group">
      	 
      	 {!! Form::submit('Guardar',['class' => 'btn btn-primary'])!!}

         <a href="javascript:history.back()" class="btn btn-default">Atras</a>
      </div>


  {!! Form::close()!!}

@endsection