@extends('layouts.app')
@section('title','Editar usuario '.$user -> name)

@section('content')
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="col-md-8">
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

               <a href="javascript:history.back()" class="btn btn-secondary">Atras</a>
            </div>


        {!! Form::close()!!}
        </div>
      </div>
    </div>
  </div>
@endsection