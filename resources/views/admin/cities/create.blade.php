@extends('layouts.app')
@section('title','Crear Ciudad')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="col-md-8 col-md-offset-2">
        {!! Form::open(['route' => 'cities.store', 'method'=> 'POST']) !!}
          <div class="form-group">

            {!! Form::label('departament_id','Departamento') !!}
            {!! Form::select('departament_id',$departments,null,['class'=>'form-control select-category','required'])!!}
          </div>
          <div class="form-group">
             
            {!! Form::label('name', 'Nombre')!!}
            {!! Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'Nombre completo','required'])!!}

          </div>
          <div class="form-group">
            <div class="form-check form-check-flat">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="state" id="state" value="1" checked> Activado
              </label>
            </div>
          </div>

          <div class="form-group">
             
             {!! Form::submit('Guardar',['class' => 'btn btn-primary'])!!}

             <a href="javascript:history.back()" class="btn btn-secondary">Atras</a>
          </div>
        {!! Form::close()!!}
      </div> 
    </div>
  </div>
</div>
@endsection