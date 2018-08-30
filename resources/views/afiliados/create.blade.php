@extends('layouts.app')
@section('title', 'Crear Afiliado')

@section('content')
<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-body">
      <form class="form-sample" method="POST" action="{{ url('/afiliados') }}">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Nombre</label>
              <div class="col-sm-9">
                <input id="first_name" 
                  name="first_name" 
                  placeholder="nombre" 
                  type="text" 
                  class="form-control" required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Apellido</label>
              <div class="col-sm-9">
                <input id="last_name" 
                  name="last_name" 
                  placeholder="apellido" 
                  type="text" 
                  class="form-control" required/>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Cedula</label>
              <div class="col-sm-9">
                <input id="identification" 
                  name="identification" 
                  placeholder="cedula" 
                  type="number" 
                  class="form-control" min="1" required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Edad</label>
              <div class="col-sm-9">
                <input id="age" 
                  name="age" 
                  placeholder="edad" 
                  type="number" 
                  class="form-control" min="1" required/>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Dpto Residencia</label>
              <div class="col-sm-9">
                <input id="departamento" 
                  name="departamento" 
                  placeholder="departamento" 
                  type="text" 
                  class="form-control" required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Ciudad</label>
              <div class="col-sm-9">
                <input id="ciudad" 
                  name="ciudad" 
                  placeholder="ciudad" 
                  type="text" 
                  class="form-control" required/>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Caja C actual</label>
              <div class="col-sm-9">
                <input id="caja_compensacion" 
                  name="caja_compensacion" 
                  placeholder="caja de compensacion actual" 
                  type="text" 
                  class="form-control" required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Empresa donde labora</label>
              <div class="col-sm-9">
                <input id="empresa" 
                  name="empresa" 
                  placeholder="empresa donde labora" 
                  type="text" 
                  class="form-control" required/>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Telefono fijo</label>
              <div class="col-sm-9">
                <input id="phone" 
                  name="phone" 
                  placeholder="telefono" 
                  type="text" 
                  class="form-control" required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Telefono celular</label>
              <div class="col-sm-9">
                <input id="cellphone" 
                  name="cellphone" 
                  placeholder="celular" 
                  type="text" 
                  class="form-control" required/>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-9">
                <input id="email" 
                  name="email" 
                  placeholder="cedula" 
                  type="email" 
                  class="form-control" required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Profesion</label>
              <div class="col-sm-9">
                <input id="profession" 
                  name="profession" 
                  placeholder="profesion" 
                  type="text" 
                  class="form-control" required/>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Especialidad</label>
              <div class="col-sm-9">
                <input id="expeciality" 
                  name="expeciality" 
                  placeholder="especialidad" 
                  type="text" 
                  class="form-control"  required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">EPS actual</label>
              <div class="col-sm-9">
                <input id="eps_actual" 
                  name="eps_actual" 
                  placeholder="eps actual" 
                  type="text" 
                  class="form-control"  required/>
              </div>
            </div>
          </div>
        </div>
         <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">ARL actual</label>
              <div class="col-sm-9">
                <input id="arl_actual" 
                  name="arl_actual" 
                  placeholder="arl actual" 
                  type="text" 
                  class="form-control"  required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">AFP actual</label>
              <div class="col-sm-9">
                <input id="afp_actual" 
                  name="afp_actual" 
                  placeholder="afp actual" 
                  type="text" 
                  class="form-control"  required/>
              </div>
            </div>
          </div>
        </div>
         <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Tipo de afiliacion</label>
              <div class="col-sm-4">
                <div class="form-radio">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="tipo_afiliacion" id="tipo_afiliacion" value="independiente" checked> Independiente
                  </label>
                </div>
              </div>
              <div class="col-sm-5">
                <div class="form-radio">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="tipo_afiliacion" id="tipo_afiliacion" value="dependiente"> Dependiente
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            
          </div>
        </div>
        <p class="card-description">
          Beneficiarios
        </p>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Nombre</label>
              <div class="col-sm-9">
                <input id="nombre_beneficiario" 
                  name="nombre_beneficiario" 
                  placeholder="nombre" 
                  type="text" 
                  class="form-control"  required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Apellidos</label>
              <div class="col-sm-9">
                <input id="apellido_beneficiario" 
                  name="apellido_beneficiario" 
                  placeholder="apellido" 
                  type="text" 
                  class="form-control"  required/>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Cedula</label>
              <div class="col-sm-9">
                <input id="cedula_beneficiario" 
                  name="cedula_beneficiario" 
                  placeholder="cedula" 
                  type="number" 
                  class="form-control" min="1" required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Edad</label>
              <div class="col-sm-9">
                <input id="edad_beneficiario" 
                  name="edad_beneficiario" 
                  placeholder="edad" 
                  type="number" 
                  class="form-control" min="1"  required/>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Parentesco</label>
              <div class="col-sm-9">
                <input id="parentesco" 
                  name="parentesco" 
                  placeholder="parentesco" 
                  type="text" 
                  class="form-control"  required/>
              </div>
            </div>
          </div>
          <div class="col-md-6">

          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <input type="submit" value="Guardar" class="btn btn-primary">&nbsp;
              <a href="javascript:history.back()" class="btn btn-secondary">Atras</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection