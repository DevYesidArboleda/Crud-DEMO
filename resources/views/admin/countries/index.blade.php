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
            	   	  <td>{{ $country->state}}</td>
            	   	  <td>
                             <a href="{{ route('countries.edit', $country->id)}}"class="btn btn-warning">
                              <i class="icon-edit"></i></a>
                              
                              <a href="{{ route('countries.destroy', $country->id) }}" onClick="return confirm('¿Seguro
                                    que deseas eliminarlo')"class="btn btn-danger">
                              <i class="icon-trash"></i></a></td>
            	   </tr>

            	@endforeach
            </tbody>
       	</table>
            <div class="text-center">
                  {!! $countries->render() !!}
            </div>
       	
@endsection