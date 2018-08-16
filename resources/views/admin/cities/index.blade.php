@extends('layouts.app')
@section('title', 'Lista de ciudad')

@section('content')
       
       <a href="{{ route('cities.create')}}" class="btn btn-default pull-rigth">
                  <i class="icon-plus"></i>
       </a>
       <br><br>
       <table class="table table-bordered">
            <thead>
                  <th>Departamento</th>
                  <th>Nombre</th>
                  <th>Estado</th>
                  <th>Accion</th>
            </thead>
            <tbody>
                  @foreach($cities as $city)

                     <tr>
                          <td>{{ $city->department->name}}</td>
                          <td>{{ $city->name}}</td>
                          <td>{{ $city->state}}</td>
                          <td>
                             <a href="{{ route('cities.edit', $city->id)}}"class="btn btn-warning">
                              <i class="icon-edit"></i></a>
                              
                              <a href="{{ route('cities.destroy', $city->id) }}" onClick="return confirm('¿Seguro
                                    que deseas eliminarlo')"class="btn btn-danger">
                              <i class="icon-trash"></i></a></td>
                     </tr>

                  @endforeach
            </tbody>
            </table>
            <div class="text-center">
                  {!! $cities->render() !!}
            </div>
            
@endsection