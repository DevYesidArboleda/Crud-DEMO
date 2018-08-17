@extends('layouts.app')
@section('title', 'Lista de Departamento')

@section('content')
       
       <a href="{{ route('departments.create')}}" class="btn btn-default pull-rigth">
            <i class="icon-plus"></i>
       </a>
       <br><br>
       <table class="table table-bordered">
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
                            <i class="icon-check" style="color: green;"></i>
                           @else
                            <i class="icon-remove-circle" style="color: red;"></i>
                           @endif
                          </td>
            	   	  <td>
                             <a href="{{ route('departments.edit', $department->id)}}"class="btn btn-warning">
                              <i class="icon-edit"></i></a>
                              
                              <a href="{{ route('departments.destroy', $department->id) }}" onClick="return confirm('¿Seguro
                                    que deseas eliminarlo')"class="btn btn-danger">
                              <i class="icon-trash"></i></a></td>
            	   </tr>

            	@endforeach
            </tbody>
       	</table>
            <div class="text-center">
                  {!! $departments->render() !!}
            </div>
       	
@endsection