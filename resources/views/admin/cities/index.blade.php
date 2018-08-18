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
                          <td>{{ $city->department ? $city->department->name : '' }}</td>
                          <td>{{ $city->name}}</td>
                          <td>
                            @if($city->state == 1)
                            <i class="icon-check" style="color: green;"></i>
                           @else
                            <i class="icon-remove-circle" style="color: red;"></i>
                           @endif
                          </td>
                          <td>
                             <a href="{{ route('cities.edit', $city->id)}}"class="btn btn-xs btn-warning">
                              <i class="icon-edit"></i></a>
                              
                              {!! Form::open(['route' => ['cities.destroy', $city->id], 'method'=> 'DELETE']) !!}
                                <button class="btn btn-xs  btn-danger" >
                                  <i class="icon-trash"></i>
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
            
@endsection