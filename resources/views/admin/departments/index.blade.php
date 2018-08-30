@extends('layouts.app')
@section('title', 'Lista de Departamentos')
@section('content')
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="float-left">
          <h4 class="card-title"><i class="mdi mdi-account-multiple"></i> Departamentos</h4>
        </div>
        
        <div class="float-right">
          <a href="{{ route('departments.create')}}" class="btn btn-icons btn-secondary">
            <i class="mdi mdi-plus"></i>
          </a>
        </div>
        <br><br>
        <div class="table-responsive">
          <table class="table table-striped table-hover table-bordered">
            <thead>
              <th>Pais</th>
              <th>Nombre</th>
              <th>Estado</th>
              <th>Accion</th>
            </thead>
            <tbody>
              @foreach($departments as $department)

                 <tr>
                    <td>{{ $department->country->name}}</td>
                    <td>{{ $department->name}}</td>
                    <td>
                      @if($department->state == 1)
                        <i class="mdi mdi-check-circle-outline" style="color: green;"></i>
                      @else
                        <i class="mdi mdi-close-circle-outline" style="color: red;"></i>
                      @endif
                    </td>
                    <td>
                     <a href="{{ route('departments.edit', $department->id)}}"class="btn btn-icons btn-sm btn-warning">
                      <i class="mdi mdi-pencil-box-outline"></i></a>
                      {!! Form::open(['route' => ['departments.destroy', $department->id], 'method'=> 'DELETE']) !!}
                        <button class="btn btn-icons btn-sm  btn-danger" >
                          <i class="mdi mdi-delete"></i>
                        </button>
                        
                      {!! Form::close() !!}
                    </td>
                 </tr>

              @endforeach
            </tbody>
          </table>
          <div class="text-center">
            {!! $departments->render() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection