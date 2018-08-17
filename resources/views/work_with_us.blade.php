<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trabaja con nosotros</title>
	<!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
	<div id="app">
		@include('front.template.partials.navbar')

    <div class="container">
        <div class="row">
        	@include('flash::message')
          <div class="col-md-12 ">
          	<h3 class="text-center">Trabaja con nosotros</h3>
            <form class="form-horizontal" method="POST" action="{{ url('/work-with-us') }}">
            	{{ csrf_field() }}
            	<div class="form-body">
            		<div class="col-md-6">
            			<div class="form-group">
	            			<label class="col-md-3 control-label">
	            				Nombre
	            			</label>
	            			<div class="col-md-9">
	            				<input id="first_name" 
	          						name="first_name" 
	          						placeholder="nombre" 
	          						type="text" 
	          						class="form-control" required/>
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-md-3 control-label">
	            				Apellido
	            			</label>
	            			<div class="col-md-9">
	            				<input id="last_name" 
	          						name="last_name" 
	          						placeholder="apellido" 
	          						type="text" 
	          						class="form-control" required/>
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-md-3 control-label">
	            				Cedula
	            			</label>
	            			<div class="col-md-9">
	            				<input id="identification" 
	          						name="identification" 
	          						placeholder="cedula" 
	          						type="number" 
	          						class="form-control" style = "width: 50%" required/>
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-md-3 control-label">
	            				Edad
	            			</label>
	            			<div class="col-md-9">
	            				<input id="age" 
	          						name="age" 
	          						placeholder="edad" 
	          						type="number" 
	          						class="form-control" style = "width: 20%" required/>
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-md-3 control-label">
	            				Dpto Recidencia
	            			</label>
	            			<div class="col-md-9">
	            				<input id="departamento" 
	          						name="departamento" 
	          						placeholder="departamento" 
	          						type="text" 
	          						class="form-control" required/>
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-md-3 control-label">
	            				Ciudad
	            			</label>
	            			<div class="col-md-9">
	            				<input id="ciudad" 
	          						name="ciudad" 
	          						placeholder="ciudad" 
	          						type="text" 
	          						class="form-control" required/>
	            			</div>
	            		</div>
            		</div>
            		<div class="col-md-6">
            			<div class="form-group">
	            			<label class="col-md-3 control-label">
	            				Telefono fijo
	            			</label>
	            			<div class="col-md-9">
	            				<input id="phone" 
	          						name="phone" 
	          						placeholder="telefono" 
	          						type="text" 
	          						class="form-control" style = "width: 50%" required/>
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-md-3 control-label">
	            				Telefono celular
	            			</label>
	            			<div class="col-md-9">
	            				<input id="cellphone" 
	          						name="cellphone" 
	          						placeholder="cellular" 
	          						type="text" 
	          						class="form-control" style = "width: 50%" required/>
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-md-3 control-label">
	            				Email
	            			</label>
	            			<div class="col-md-9">
	            				<input id="email" 
	          						name="email" 
	          						placeholder="cedula" 
	          						type="email" 
	          						class="form-control" required/>
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-md-3 control-label">
	            				Profesion
	            			</label>
	            			<div class="col-md-9">
	            				<input id="profession" 
	          						name="profession" 
	          						placeholder="profesion" 
	          						type="text" 
	          						class="form-control" required/>
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-md-3 control-label">
	            				Especialidad
	            			</label>
	            			<div class="col-md-9">
	            				<input id="expeciality" 
	          						name="expeciality" 
	          						placeholder="especialidad" 
	          						type="text" 
	          						class="form-control" required/>
	            			</div>
	            		</div>
	            		<div class="form-group">
	            			<label class="col-md-3 control-label">
	            				trabajar como:
	            			</label>
	            			<div class="col-md-9">
	            				<input id="trabajar_como" 
	          						name="trabajar_como" 
	          						placeholder="desea trabajar con nosotros como" 
	          						type="text" 
	          						class="form-control" required />
	            			</div>
	            		</div>
            		</div>
            	</div>
            	<div class="form-group">
            		<div class="col-md-6">
                    <button type="submit" class="btn btn-primary">
                        Enviar
                    </button>
                </div>
            	</div>
            </form>
          </div>
        </div>
    </div>
  </div>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script>
        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>
</body>
</html>