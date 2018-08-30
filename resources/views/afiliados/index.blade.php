@extends('layouts.app')
@section('title', 'Lista de Afiliados')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="float-left">
        <h4 class="card-title"><i class="mdi mdi-account-multiple"></i> Afiliados</h4>
      </div>
      @if(Auth::user()->admin())
      <div class="float-right">
        <a href="{{ route('afiliados.create')}}" class="btn btn-icons btn-secondary">
          <i class="mdi mdi-plus"></i>
        </a>
      </div>
      @endif
      <br><br>
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
      <br>
      <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
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
        <div class="text-center">
          {!! $afiliados->render() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection