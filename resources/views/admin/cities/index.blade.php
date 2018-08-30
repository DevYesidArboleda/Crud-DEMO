@extends('layouts.app')
@section('title', 'Lista de ciudad')

@section('content')
 <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="float-left">
          <h4 class="card-title"><i class="mdi mdi-account-multiple"></i> Ciudades</h4>
        </div>
        
        <div class="float-right">
          <a href="{{ route('cities.create')}}" class="btn btn-icons btn-secondary">
            <i class="mdi mdi-plus"></i>
          </a>
        </div>
        <br><br>
        <div class="table-responsive">
          <table class="table table-striped table-hover table-bordered">
            <thead>
              <th>Departamento</th>
              <th>Nombre</th>
              <th>Estado</th>
              <th>Accion</th>
            </thead>
            <tbody>
              @foreach($cities as $city)

                 <tr>
                    <td>{{ $city->department ? $city->department->name : '' }}</td>
                    <td>{{ $city->name}}</td>
                    <td>
                      @if($city->state == 1)
                        <i class="mdi mdi-check-circle-outline" style="color: green;"></i>
                      @else
                        <i class="mdi mdi-close-circle-outline" style="color: red;"></i>
                      @endif
                    </td>
                    <td>
                     <a href="{{ route('cities.edit', $city->id)}}"class="btn btn-icons btn-sm btn-warning">
                      <i class="mdi mdi-pencil-box-outline"></i></a>
                      {!! Form::open(['route' => ['cities.destroy', $city->id], 'method'=> 'DELETE']) !!}
                        <button class="btn btn-icons btn-sm  btn-danger"" >
                          <i class="mdi mdi-delete"></i>
                        </button>
                        
                      {!! Form::close() !!}
                    </td>
                 </tr>

              @endforeach
            </tbody>
          </table>
          <div class="text-center">
            {!! $cities->render() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection