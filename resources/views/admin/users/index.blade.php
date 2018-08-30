@extends('layouts.app')
@section('title', 'Lista de Ususarios')
@section('content')
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="float-left">
          <h4 class="card-title"><i class="mdi mdi-account-multiple"></i> Usuarios</h4>
        </div>
        
        <div class="float-right">
          <a href="{{ route('users.create')}}" class="btn btn-icons btn-secondary">
            <i class="mdi mdi-plus"></i>
          </a>
        </div>
        <br><br>
        <div class="table-responsive">
          <table class="table table-striped table-hover table-bordered">
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
                     <a href="{{ route('users.edit', $user->id)}}"class="btn btn-icons btn-sm btn-warning">
                      <i class="mdi mdi-pencil-box-outline"></i></a>
                      
                      {!! Form::open(['route' => ['users.destroy', $user->id], 'method'=> 'DELETE']) !!}
                        <button class="btn btn-icons btn-sm  btn-danger" >
                          <i class="mdi mdi-delete"></i>
                        </button>
                        <!--<a href="{{ route('users.destroy', $user->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo')" class="btn btn-danger">
                          
                        </a>-->
                      {!! Form::close() !!}
                      
                    </td>
                 </tr>

              @endforeach
            </tbody>
          </table>
          <div class="text-center">
            {!! $users->render() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection