@extends('layouts.app')
@section('title','Editar usuario '.$user -> name)

@section('content')
  
  {!! Form::open(['route' => ['users.update', $user], 'method'=> 'PUT']) !!}
      <div class="form-group">
      	 
      	 {!! Form::label('name', 'Nombre')!!}
      	 {!! Form::text('name',$user->name, ['class' => 'form-control', 'placeholder' => 'Nombre completo','required'])!!}

      </div>

       <div class="form-group">
      	 
      	 {!! Form::label('email', 'Correo Electronico')!!}
      	 {!! Form::email('email',$user->email, ['class' => 'form-control', 'placeholder' => 'example@gmail.com','required'])!!}

      </div>

      

       <div class="form-group">
      	 
      	 {!! Form::label('type', 'Tipo')!!}
      	 {!! Form::select('type',['' => 'Seleccione un nivel','miembro' => 'Miembro','admin' => 'Administrador'],
      	 null,['class' => 'form-control'])!!}

      </div>

      <div class="form-group">
      	 
      	 {!! Form::submit('Guardar',['class' => 'btn btn-primary'])!!}

         <a href="javascript:history.back()" class="btn btn-default">Atras</a>
      </div>


  {!! Form::close()!!}

@endsection