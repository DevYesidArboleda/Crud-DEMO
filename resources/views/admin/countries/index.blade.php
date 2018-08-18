@extends('layouts.app')
@section('title', 'Lista de Paises')

@section('content')
       
       <a href="{{ route('countries.create')}}" class="btn btn btn-default pull-rigth">
             <i class="icon-plus"></i>
       </a>
       <br><br>
       <table class="table table-bordered">
            <thead>
            	<th>Nombre</th>
            	<th>Estado</th>
            	<th>Accion</th>
            </thead>
            <tbody>
            	@foreach($countries as $country)

            	   <tr>
            	   	  <td>{{ $country->name}}</td>
            	   	  <td>
                           @if($country->state == 1)
                            <i class="icon-check" style="color: green;"></i>
                           @else
                            <i class="icon-remove-circle" style="color: red;"></i>
                           @endif
                          </td>
            	   	  <td>
                             <a href="{{ route('countries.edit', $country->id)}}"class="btn btn-xs btn-warning">
                              <i class="icon-edit"></i></a>
                              
                              {!! Form::open(['route' => ['countries.destroy', $country->id], 'method'=> 'DELETE']) !!}
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
                  {!! $countries->render() !!}
            </div>
       	
@endsection