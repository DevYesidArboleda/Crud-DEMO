@extends('layouts.app')
@section('title', 'Lista de Afiliados')

@section('content')
@if(Auth::user()->admin())
<a href="{{ route('afiliados.create')}}" class="btn btn-default">
  <i class="icon-plus"></i>
</a>
@endif
<!-- BUSCADOR-->
{!! Form::open(['method' => 'GET','class' => 'navbar-form pull-right'])!!}
       <div class="input-group ">
         {!! Form::text('q',null,['class' => 'form-control','placeholder' => 'Buscar..',
         'aria-describedby' => 'search'])!!}
         <span class="form-control-feedback" id="search">
            <i class="icon-search" aria-hidden="true"></i>
         </span>
       </div>
{!! Form::close() !!}
<!-- FIN BUSCADOR -->
<br><br>
<table class="table table-bordered tabled-hover table-striped">
	<thead>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>EPS actual</th>
		<th>ARL actual</th>
		<th></th>
	</thead>
	<tbody>
		@foreach($afiliados as $afiliado)
		<tr>
			<td>{{ $afiliado->first_name }}</td>
			<td>{{ $afiliado->last_name }}</td>
			<td>{{ $afiliado->eps_actual }}</td>
			<td>{{ $afiliado->arl_actual }}</td>
			<td></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection