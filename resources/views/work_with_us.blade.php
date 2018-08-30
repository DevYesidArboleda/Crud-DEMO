@extends('front.template.main')
@section('content')
<section class="home-slider inner-page owl-carousel">
 	<div class="slider-item" style="background-image: url('img/slider-2.jpg');">
 		<div class="container">
 			<div class="row slider-text align-items-center">
 				<div class="col-md-7 col-sm-12 element-animate">
 					<h1>Trabaja con nosotros</h1>
 					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio aut laborum laboriosam, harum alias optio voluptatem, ratione eum. Corrupti sapiente, dolor quaerat officiis, non voluptas at iusto consequatur pariatur! Corporis?</p>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>

 <section class="section">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-6 mb-5 element-animate">
 				<form action="#" method="post">
 					<div class="row">
 						<div class="col-md-6 form-group">
 							<label for="first_name">Nombre</label>
 							<input type="text" class="form-control form-control-lg" id="first_name" name="first_name">
 						</div>
 						<div class="col-md-6 form-group">
 							<label for="last_name">Apellido</label>
 							<input type="text" class="form-control form-control-lg" id="last_name" name="last_name">
 						</div>
 					</div>
 					<div class="row">
 						<div class="col-md-12 form-group">
 							<label for="email">Email</label>
 							<input type="email" class="form-control form-control-lg" id="email" name="email">
 						</div>
 					</div>
 					<div class="row">
 						<div class="col-md-12 form-group">
 							<label for="message">Mensaje</label>
 							<textarea name="" id="message" cols="30" rows="8" class="form-control form-control-lg"></textarea>
 						</div>
 					</div>
 					<div class="row">
 						<div class="col-md-6 form-group">
 							<input type="submit" class="btn btn-primary btn-lg btn-block" value="Enviar">
 						</div>
 					</div>
 				</form>
 			</div>
 			<div class="col-md-1"></div>
 			<div class="col-md-5 element-animate">
 				
 			</div>
 		</div>
 	</div>
 </section>
@endsection