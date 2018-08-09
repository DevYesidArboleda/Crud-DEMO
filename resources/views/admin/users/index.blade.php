@extends('layouts.app')
@section('title', 'Lista de Usuarios')

@section('content')
       
       <a href="{{ route('users.create')}}" class="btn btn-info">Registrar nuevo usuario</a>
       <br><br>
       <table class="table table-bordered">
            <thead>
            	<th>ID</th>
            	<th>Nombre</th>
            	<th>E-Mail</th>
            	<th>Tipo</th>
            	<th>Accion</th>
            </thead>
            <tbody>
            	@foreach($users as $user)

            	   <tr>
            	   	  <td>{{ $user->id}}</td>
            	   	  <td>{{ $user->name}}</td>
            	   	  <td>{{ $user->email}}</td>
            	   	  <td>
                         @if($user->type == 'admin')
                               <span class="label label-danger">{{ $user->type}}</span>
                         @else
                                          
                              <span class="label label-primary">{{ $user->type}}</span>
                         @endif
            	   	  	</td>
            	   	  <td>
                             <a href="{{ route('users.edit', $user->id)}}"class="btn btn-warning">
                              Editar</a>
                              
                              <a href="{{ route('users.destroy', $user->id) }}" onClick="return confirm('¿Seguro
                                    que deseas eliminarlo')"class="btn btn-danger">
                              Eliminar</a></td>
            	   </tr>

            	@endforeach
            </tbody>
       	</table>
            <div class="text-center">
                  {!! $users->render() !!}
            </div>
       	
@endsection