@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3 class="text-center">Bienvenido !!</h3>
                    
                    <div class="pull-right">
                        <a class="btn btn-success"  data-toggle="modal" data-target="#myModal">
                        <i class="fa fa-upload"></i>
                        Cargar comprobante
                    </a>
                    </div>

                </div>
            </div>
            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Cargar comprobante</h4>
                  </div>
                  <div class="modal-body">
                    <form method="POST" class="form-horizontal" action="/public" enctype="multipart/form-data">
                        {{ csrf_field() }}<!--- El helper csrf_field() imprime un campo de tipo hidden que contiene un hash utilizado para proteger a la aplicación contra ataques CSRF. -->
                        <div class="form-group">
                          <label for="codigo" class="col-md-4 control-label">codigo</label>
                          <div class="col-md-6">
                            <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Codigo.." />

                              @if ($errors->has('codigo'))
                              <span style="color: red;">{{$errors->first('codigo')}}</span>

                              @endif

                          </div>
                        </div>
                        <div class="form-group">
                          <label for="" class="col-md-4 control-label">Nuevo archivo</label>
                          <div class="col-md-6">
                            <input type="file" name="file" id="file" class="form-control" />
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary pull-right">Enviar</button>
                          </div>
                          
                        </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>
        </div>
    </div>
</div>
@endsection
